<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceQuestionModel;
use App\Models\ServicePossibleAnswerModel;
use App\Models\LeadsModel;
use App\Models\ServicesModel;
use App\Models\LeadsServiceModel;
use App\Models\ImagesModel;
use Exception;
use DateTime;
class CustomerController extends Controller
{
    public function customerdashboard(Request $request)
    {
        $slot = "";
        $user = $request->user();
        $user_id = $user->id;
        $leads = LeadsModel::join('master_services as m', 'leads.service_id', '=', 'm.id')
    ->where('leads.user_id', $user_id)
    ->get(['leads.*', 'm.*','leads.date_entered']);

        $user_leads = array();
        foreach($leads as $lead)
        {
            $lead_id = $lead["lead_id"];
            $service_name = $lead["service_name"];
            $date_entered = $lead["date_entered"];
            
            $date = new DateTime($date_entered);
            $formatted_date = $date->format('l H:i');

            $isExpertApplied = 1;
            $inarr = array("lead_id" => $lead_id, "service_name" => $service_name, "date_entered"=>$formatted_date, "isExpertApplied"=>$isExpertApplied);
            array_push($user_leads, $inarr);
        }       
       return view('customer.dashboard',compact(["slot", "user_leads"]));
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

    public function expertView()
    {
        $slot = "";
        $profession = null; // Replace with actual fetching logic

        return view('customer.expertview', compact('profession'));
    }

    public function customerSettings()
    {
        $slot = "";
        $profession = null; // Replace with actual fetching logic

        return view('customer.customersettings', compact('profession'));
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
     $questions = ServiceQuestionModel::select('service_questions.service_id', 'service_questions.question', 'service_questions.id as question_id', 'service_possible_answers.service_answer','service_possible_answers.id')
     ->join('service_possible_answers', 'service_possible_answers.service_questions_id', '=', 'service_questions.id')
     ->where('service_questions.service_id', $service_id)
     ->get()
     ->groupBy('question')
     ->map(function ($items, $question) {
         return [
            'question_id'=>$items->first()->question_id,
             'question' => $question, 
             'answers' => $items->pluck('service_answer')->all()
         ];
     })
     ->values(); 
     return response()->json(["message"=>"Okay","questions"=>$questions,"service_id"=>$request->service_id],200);
        }
        catch(Exception $e)
        {
            return response()->json(["message"=>"There is an error"],500);
        }

    }
    private function getCreditRange($service_id)
    {
        $credits = ServicesModel::where('id', $service_id)
        ->select('min_credits', 'max_credits')
        ->first();
        return $credits;
    }
    private function getActualQuestion($question_id)
    {
        $question = ServiceQuestionModel:: where('id','=',$question_id)->first();
        return $question->question;
    }
    public function addLeadService($arr,$lead_id,$entered_by)
    {
        $arr = json_decode($arr, true);
     
        $filteredData = array_filter($arr, function($item) {
            return str_starts_with($item['name'], 'x_');
        });
        
        $arry = [];
        
        foreach($filteredData as $row)
        {
            $question_id = (int)substr($row["name"], 2);
            $question = $this->getActualQuestion($question_id);
            $answer = $row["value"];
            $inarr = array("question_id"=>$question_id,"answer"=>$answer,"question"=>$question);
            array_push($arry,$inarr);
        }
        $questions = json_encode($arry,true);
        LeadsServiceModel::create(["lead_id"=>$lead_id, "service_details"=>$questions, "entered_by"=>$entered_by]);
        
    }
    public function createLead($user_id, $service_id, $entered_by, $description, $estimate_quote, $urgent, $hiring_decision,$longitude,$latitude,$location)
    {
        try{
            $creditsArr = $this->getCreditRange($service_id);
            $min_credits = (int)$creditsArr["min_credits"];
            $max_credits = (int)$creditsArr["max_credits"];
            $credits = rand($min_credits,$max_credits);
            $lead = LeadsModel::create(attributes: [
                "user_id"=>$user_id, 
                "service_id"=>$service_id, 
                "credits"=>$credits, 
                "entered_by"=>$entered_by, 
                "description"=>$description, 
                "estimate_quote"=>$estimate_quote, 
                "urgent"=>$urgent, 
                "hiring_decision"=>$hiring_decision,
                "longitude"=>$longitude,
                "latitude"=>$latitude,
                "location"=>$location,
                "temp_code"=>0
               ]);
               return $lead;
        }
        catch(Exception $e)
        {
            return [];
        }

        
    }

public function insertImages($image_name, $category, $entered_by, $user_id, $lead_id)
{
    $image = ImagesModel::create([
        "image_name"=>$image_name, "category"=>$category, "entered_by"=>$entered_by, "user_id"=>$user_id, "lead_id"=>$lead_id
    ]);
    return  $image;
}

public function expertReplies(Request $request)
{
   return view("customer.expertreplies");
}
}
