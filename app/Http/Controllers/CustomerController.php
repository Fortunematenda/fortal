<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceQuestionModel;
use App\Models\ServicePossibleAnswerModel;

class CustomerController extends Controller
{
    public function dashboard()
    {
        $slot = "";
        return view('customer.dashboard',compact(["slot"]));
    }

    public function createCustomer()
    {
        $slot = "";
        return view('customer.customercreate',compact(["slot"]));
    }

    public function showRequests()
    {
        $slot = "";
        return view('customer.requests',compact(["slot"]));
    }
    
    public function createRequest()
    {
        $slot = "";
        return view('customer.createrequests',compact(["slot"]));
    }

    public function expertReview()
    {
        $slot = "";
        $profession = null; // Replace with actual fetching logic

        return view('customer.expertreview', compact('profession'));
    }
     public function expertProfile()
    {
        $slot = "";
        $profile = null; // Replace with actual fetching logic

        return view('customer.expertprofile', compact('profile'));
    }
    public function getServicesQuestions(Request $request)
    {
        try{
     $service_id = (int)$request->service_id;
     $questions = ServiceQuestionModel::select('service_questions.service_id', 'service_questions.question', 'service_possible_answers.service_answer','service_possible_answers.id')
     ->join('service_possible_answers', 'service_possible_answers.service_questions_id', '=', 'service_questions.id')
     ->where('service_questions.service_id', $service_id)
     ->get()
     ->groupBy('question')
     ->map(function ($items, $question) {
         return [
             'question' => $question,
             'answers' => $items->pluck('service_answer')->all()
         ];
     })
     ->values();
     return response()->json(["message"=>"Okay","questions"=>$questions],200);
        }
        catch(Exception $e)
        {
            return response()->json(["message"=>"There is an error"],500);
        }

    }
    
}
