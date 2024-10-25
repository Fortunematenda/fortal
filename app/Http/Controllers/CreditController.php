<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CreditTransactionModel; // Correct model import

class UserController extends Controller
{
    public function buyCredits(Request $request)
    {
        $userId = $request->input('userId');
        $creditsToBuy = $request->input('creditsToBuy');

        // Fetch the user by ID
        $user = User::find($userId);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Update the user's credits
        $user->credits_balance += $creditsToBuy;
        $user->save();

        // Record the credit transaction in the credits table
        CreditTransactionModel::create([ // Use the correct model name here
            'user_id' => $user->id, // Foreign key to the user
            'credits_changed' => $creditsToBuy,
            'transaction_type' => 'purchase',
            'description' => 'User purchased ' . $creditsToBuy . ' credits',
            // No need to set created_at if timestamps are managed automatically
        ]);

        // Return the updated credits
        return response()->json(['credits' => $user->credits_balance,]);
    }

    public function getCreditHistory($userId)
    {
        // Fetch the user's credit transactions
        $creditHistory = CreditTransactionModel::where('user_id', $userId) // Use the correct model name here
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json(['creditHistory' => $creditHistory]);
    }

    public function showCreditHistory($userId)
    {
        // Retrieve user credit transactions
        $transactions = CreditTransactionModel::where('user_id', $userId) // Use the correct model name here
            ->orderBy('created_at', 'desc')
            ->get();
        
            dd($transactions);
        // Pass transactions to the view
        return view('profile.partials.buy-credits-form', compact('transactions'));
    }
}
