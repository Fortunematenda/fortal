<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserServicesModel;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Notification;
use Illuminate\Validation\Rules;
use App\Notifications\SendOtpNotification;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public function store(Request $request)
    { 
        try {
            // Validating the incoming request
            $request->validate([
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'contact_number' => ['required', 'string', 'max:15'],
                'location' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            // Creating the user
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'contact_number' => $request->contact_number,
                'location' => $request->location,
                'role' => $request->role,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'company_name' => $request->company_name,
                'is_company_website' => $request->is_company_website,
                'company_size' => $request->company_size,
                'is_company_sales_team' => $request->is_company_sales_team,
                'is_company_social_media' => $request->is_company_social_media,
                'entered_by' => $request->email,
            ]);

            // Assigning the service
            UserServicesModel::create([
                'user_id' => $user->id,
                'service_id' => (int)$request->service_id,
                'entered_by' => $user->id,
            ]);

            // Generating and sending OTP
            $otp = rand(100000, 999999); // Generate a 6-digit OTP
            Session::put('otp', $otp);
            Session::put('otp_user_id', $user->id);
            
            // Send OTP to the user's email
            $user->notify(new SendOtpNotification($otp));

           
            return redirect()->route("verify.otp.form")->with(["message', 'OTP sent to your email."], 200);

        } catch (\Exception $e) {
            return response()->json(["message" => "Error: " . $e->getMessage()], 500);
        }
    }

    public function showOtpForm()
{
    return view('auth.otp'); // Display the OTP form
}
public function verifyOtp(Request $request)
{
    $request->validate([
        'otp' => 'required|numeric',
    ]);

    $inputOtp = $request->input('otp');
    $sessionOtp = Session::get('otp');
    $userId = Session::get('otp_user_id');

    if ($inputOtp == $sessionOtp) {
        Session::forget('otp');
        Session::forget('otp_user_id');

        Auth::loginUsingId($userId);

        return redirect()->route('dashboard')->with('message', 'Account verified successfully!');
    }

    return redirect()->route('verify.otp.form')->with('error', 'Invalid OTP. Please try again.');
}

public function create(): View
{
    return view('auth.register');
}
}