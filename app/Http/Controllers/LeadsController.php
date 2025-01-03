<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\ServicesModel;
use App\Models\ContactedLeadsModel;
use App\Models\UserServicesModel;
use App\Models\LeadsModel;
use App\Models\LeadsServiceModel;
use App\Models\CreditsTrailModel;
use App\Http\Controllers\ProfileController; 
use App\Http\Controllers\TemplatesController; 
use Illuminate\Support\Facades\DB;
use App\Models\ServicePossibleAnswerModel;
use App\Models\ImagesModel;
use App\Models\LeadsTrailModel;
use App\Models\TrailsModel;
use App\Models\LeadsNotesModel;
use App\Models\LeadsReadModel;
use Exception;

class LeadsController extends Controller
{
    public function getUserLeads(Request $request)
    {
        try{
            $userId = $request->user()->id;
            $profileController = new ProfileController();
    $leads = $profileController->getLeads($userId);    
    $leads_count = count($leads);
    $services_count = count($profileController->getUserServices($userId));
    $leadsArr = $this->arrLeads($leads);
    $resultArr = array("leadsArr"=>$leadsArr,"leads_count"=>$leads_count,"services_count"=>$services_count);
            
            return response()->json(["message"=>"Successful","leads"=>$resultArr],200);
        }
        catch(Exception $e)
        {
            return response()->json(["message"=>"There is an error : ".$e->getMessage()],500); 
        }
    }
    public function showLeads(Request $request)
{
    $userId = $request->user()->id;     
    $profileController = new ProfileController();
    $leads = $profileController->getLeads($userId);    
    $leads_count = count($leads);
    $services_count = count($profileController->getUserServices($userId));
    $leadsArr = $this->arrLeads($leads);
    //$resultArr = array("leadsArr"=>$leadsArr,"leads_count"=>$leads_count,"services_count"=>$services_count);   
  
    return view("leads.show-leads",compact(["leadsArr","leads_count","services_count"]));
}

public function getLeadDetails(Request $request)
{
    $user = $request->user();
    $lead_id = $request->lead_id;
    $profileController = new ProfileController();
    $templates = new TemplatesController();
    $lead = $profileController->getIndividualLead($lead_id);
    $first_letter = substr($lead->first_name, 0, 1);
    $first_name = $lead->first_name;
    $last_name = $lead->last_name;
    $contacted = (int)$this->userResponse($lead_id);
    $remender = 5-$contacted;
    $lead_user_id  = (int)$lead->lead_user_id;
    $frequent = $this->frequentUser($lead_user_id);
    $urgent = (int)$lead->urgent;
    $is_phone_verified = (int)$lead->is_phone_verified;
    $time = $this->timeAgo($lead->date_entered);
    $service_name = $lead->service_name;
    $location = $lead->location;
    $description = $lead->description; 
    $hiring_decision = (int)$lead->hiring_decision;
    $credits = $lead->credits;
    $email = $lead->email;
    $contact_number = $lead->contact_number;
    $masked_email = $this->maskEmail($email);
    $lead_details = $this->getLeadServiceDetails($lead_id);
    $masked_contact_number = $this->maskPhoneNumber($contact_number);
    LeadsReadModel::firstOrCreate(
        ['lead_id' => $lead_id, 'user_id' => $user->id],
        ['entered_by' => $user->id]
    );
    $lead_images = $this->getImages($lead_id);
   
$details = $templates->showLeadsDetails($lead_id,$lead,$first_letter,$first_name,$last_name,$contacted,$remender,$lead_user_id,$frequent,$urgent,$is_phone_verified,$time,$service_name,$location,$description,$hiring_decision,$credits,$masked_email,$masked_contact_number,$lead_details,$lead_images);

    return response($details);
}
public function getResponseDetails(Request $request)
{
    $user = $request->user();
    $lead_id = $request->lead_id;
    $profileController = new ProfileController();
    $templates = new TemplatesController();
    $lead = $profileController->getIndividualLead($lead_id);
    $first_letter = substr($lead->first_name, 0, 1);
    $first_name = $lead->first_name;
    $last_name = $lead->last_name;
    $contacted = (int)$this->userResponse($lead_id);
    $remender = 5-$contacted;
    $lead_user_id  = (int)$lead->lead_user_id;
    $frequent = $this->frequentUser($lead_user_id);
    $urgent = (int)$lead->urgent;
    $is_phone_verified = (int)$lead->is_phone_verified;
    $time = $this->timeAgo($lead->date_entered);
    $service_name = $lead->service_name;
    $location = $lead->location;
    $description = $lead->description; 
    $hiring_decision = (int)$lead->hiring_decision;
    $credits = $lead->credits;
    $email = $lead->email;
    $contact_number = $lead->contact_number;
    $lead_status = $lead->status;
    $conl = $this->contactedLead($user->id,$lead_id);
    $lead_status = $conl["status"];
    $leads_trail = $this->getLeadsTrail($lead_id,$user->id);
    $leads_notes = $this->getLeadsNotes($lead_id,$user->id);
    $lead_details = $this->getLeadServiceDetails($lead_id);
    $lead_images = $this->getImages($lead_id);
   
$details = $templates->showResponseDetails( $lead_id,$lead,$first_letter,$first_name,$last_name,$contacted,$remender,$lead_user_id,$frequent,$urgent,$is_phone_verified,$time,$service_name,$location,$description,$hiring_decision,$credits,$email,$contact_number,$lead_status,$leads_trail,$leads_notes,$lead_details,$lead_images);

    return response($details);
}
private function arrLeads($leads = array())
{
    $leadsArr = array();
    foreach($leads as $lead)
    {
        $lead_id = $lead->id;
        $first_letter = substr($lead->first_name, 0, 1);
        $first_name = $lead->first_name;
        $last_name = $lead->last_name;
        $contacted = (int)$this->userResponse($lead_id);
        $remender = 5-$contacted;
        $lead_user_id  = (int)$lead->lead_user_id;
        $frequent = $this->frequentUser($lead_user_id);
        $urgent = (int)$lead->urgent;
        $is_phone_verified = (int)$lead->is_phone_verified;
        $time = $this->timeAgo($lead->date_entered);
        $service_name = $lead->service_name;
        $location = $lead->location;
        $description = $lead->description;
        $hiring_decision = (int)$lead->hiring_decision;    
        $credits = $lead->credits;
        $additional_details = (int)strlen($description);
        $leads_trail = $this->getLeadsTrail($lead_id, $lead_user_id) ?? [];
        $leads_notes = $this->getLeadsNotes($lead_id, $lead_user_id) ?? [];
        $inarr = array("lead_id"=>$lead_id,"first_letter"=>$first_letter,"first_name"=>$first_name,"last_name"=>$last_name,"time"=>$time,"service_name"=>$service_name,"location"=>$location,"description"=>$description,"contacted"=>$contacted,"remender"=>$remender,"frequent"=>$frequent,"urgent"=>$urgent,"is_phone_verified"=>$is_phone_verified,"additional_details"=>$additional_details,"credits"=>$credits,"hiring_decision"=>$hiring_decision, "leads_trail" => $leads_trail,
        "leads_notes" => $leads_notes);
        array_push($leadsArr,$inarr);

    }  
    return $leadsArr;
}

    public function showResponses(Request $request)
    {
        $userId = $request->user()->id;     
    $profileController = new ProfileController();
    $leads = $profileController->getResponseLeads($userId);    
    $leads_count = count($leads);
    $services_count = count($profileController->getUserServices($userId));
    $leadsArr = $this->arrLeads($leads);
      
        return view('leads.responses', compact("leadsArr","leads_count","services_count"));
    }
    public function getUserResponses(Request $request)
    {
        try{
            $userId = $request->user()->id; 
            $profileController = new ProfileController();
            $leads = $profileController->getResponseLeads($userId);    
            $leads_count = count($leads);
            $services_count = count($profileController->getUserServices($userId));
            $leadsArr = $this->arrLeads($leads);
    $resultArr = array("leadsArr"=>$leadsArr,"leads_count"=>$leads_count,"services_count"=>$services_count);
            
            return response()->json(["message"=>"Successful","leads"=>$resultArr],200);
        }
        catch(Exception $e)
        {
            return response()->json(["message"=>"There is an error : ".$e->getMessage()],500); 
        }
    }
    public function showHelp()
    {       

        return view("leads.help");
    }
    public function getServices(Request $request)
    {  
        $serviceTxt = $request->serviceTxt;
        try{
            $services = ServicesModel::where("service_name", "LIKE", "%{$serviceTxt}%")->select("service_name","id")->get();
            return response()->json(["message"=>"success","services"=>$services],200);
        }   
        catch(Exception $e) 
        {
            return response()->json(["message"=>"There is an error : ".$e->getMessage()],500);
        }

    }
    private function userResponse($lead_id)
    {
        return ContactedLeadsModel::where('lead_id',$lead_id)->count();
    }
    private function getImages($lead_id)
    {
        return ImagesModel::where('lead_id',$lead_id)->get();
    }
    private function frequentUser($user_id)
    {
        $leads = LeadsModel::select(DB::raw("DATE_FORMAT(date_entered, '%Y-%m-%d') as dat"))
    ->where('user_id', $user_id)
    ->groupBy(DB::raw("DATE_FORMAT(date_entered, '%Y-%m-%d')"))
    ->get($user_id);

    return (int)count($leads);
    }

    function timeAgo($datetime, $full = false) {
        $now = new \DateTime;
        $ago = new \DateTime($datetime);
        $diff = $now->diff($ago);
        $dd = date('Y-m-d H:i:s');
    
        $diff->w = floor($diff->d / 7);  // Calculate weeks
        $diff->d -= $diff->w * 7;        // Subtract the weeks
    
        $string = ['y' => 'year','m' => 'month','w' => 'week','d' => 'day', 'h' => 'hour','i' => 'minute', 's' => 'second',];
    
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
    
        if (!$full) $string = array_slice($string, 0, 1);
    
        return $string ? implode(', ', $string) . ' ago ': 'just now';
    }


    public function getContactNumber($userId)
    {
        $user = UserServicesModel::find( $userId);

        if ($user) {
            return $user->contact_number;
        }

        return null;
    }

    public function getAnswers(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'question_id' => 'required|integer|exists:service_questions,id',
        ]);

        // Fetch possible answers based on the provided question_id
        $answers = ServicePossibleAnswerModel::where('service_question_id', $request->question_id)->get();

        // Return the possible answers as a JSON response
        return response()->json($answers);
    }
    private function contactedLead($user_id,$lead_id)
    {
        $lead = ContactedLeadsModel::where('lead_id','=',$lead_id)->where('user_id','=',$user_id)->first();
    return $lead;
    }
    public function openContacts(Request $request)
    {
        try{
            $user = $request->user();
            $lead_id = (int)$request->lead_id;
            $profileController = new ProfileController();
            $lead = $profileController->getIndividualLead($lead_id);
            $credits = $lead->credits;
            $credits_balance = $user->credits_balance;
            $arr = [];
            
            if($credits_balance>=$credits)
            {
                $balance = $credits_balance - $credits;
                $user->credits_balance = $balance;
                $user->save();
                $trail = CreditsTrailModel::create(["user_id"=>$user->id,"lead_id"=>$lead_id,"credits"=>$credits,"entered_by"=>$user->id]);
                $arr = array("email"=>$lead->email,"contact_number"=>$lead->contact_number);
                $conl = $this->contactedLead($user->id,$lead_id);
                if($conl == false)
                {
                  $contacted = new ContactedLeadsModel();
                  $contacted->user_id=$user->id;
                  $contacted->lead_id=$lead_id;
                  $contacted->entered_by=$user->id;
                  $contacted->save(); 
                  //ContactedLeadsModel::create(["user_id"=>$user->id,"lead_id"=>$lead_id,"entered_by"=>$user->id]);
                    
                }                
                return response()->json(["message"=>"Okay","details"=>$arr,"button"=>$user->id."-".$lead_id],200);
            }
            else{
                $first_name = $lead->first_name;
                $templates = new TemplatesController();
                $modal_content = $templates->showSubscription($first_name,$credits,$credits_balance);
                return response()->json(["message"=>"No credits","content"=>$modal_content],200);
            }           


        }
        catch(Exception $e)
        {
            return response()->json(["message"=>"There is an error".$e->getMessage()],500);
        }
    }
    public function notInterested(Request $request)
    {
        try{
            $user = $request->user();
            $lead_id = (int)$request->lead_id;            
                $conl = $this->contactedLead($user->id,$lead_id);
                if($conl == false)
                {
                  $contacted = new ContactedLeadsModel();
                  $contacted->user_id=$user->id;
                  $contacted->lead_id=$lead_id;
                  $contacted->status="Not Interested";
                  $contacted->entered_by=$user->id;
                  $contacted->save();
                }
                return response()->json(["message"=>"Okay","details"=>$contacted,"button"=>$user->id."-".$lead_id],200);
            }        
        catch(Exception $e)
        {
            return response()->json(["message"=>"There is an error".$e->getMessage()],500);
        }
    }
    private function maskEmail($email) {
        list($localPart, $domainPart) = explode('@', $email);
        $maskedLocal = $localPart[0] . str_repeat('*', strlen($localPart) - 2) . $localPart[strlen($localPart) - 1];
        $domainParts = explode('.', $domainPart);
        $maskedDomain = $domainParts[0][0] . str_repeat('*', strlen($domainParts[0]) - 2) . $domainParts[0][strlen($domainParts[0]) - 1];
        $maskedEmail = $maskedLocal . '@' . $maskedDomain . '.' . $domainParts[1];    
        return $maskedEmail;
    }

    private function maskPhoneNumber($phoneNumber) {
        if (strlen($phoneNumber) < 10) {
            return $phoneNumber; // If not, return the phone number as is
        }        
        $maskedPhone = substr($phoneNumber, 0, 3) . str_repeat('*', strlen($phoneNumber) - 3);
        
        return $maskedPhone;
    }

    public function goToEmail(Request $request){
        $user = $request->user();
        $full_name = $user->first_name." ".$user->last_name;
        $message = "Hi ".$user->first_name.",<br/><br/>I found your job on Fortai and wanted to reach out and say hello..<br/><br/>It looks like a perfect match for what I do - 
        I'd love to help you make it happen. Do you have time for a quick call today?<br/><br/>All the best<br/><br/>".$full_name;
        return view('leads.compose-email',compact(["message"]));
    }
    public function addLeadsTrail(Request $request)
    {
        try{
        $user = $request->user();
        $lead_id = (int)$request->lead_id;
        $trail_id =(int)$request->trail_id; 
        $fixed_trail = TrailsModel::where('id',$trail_id)->first();
        $description = $fixed_trail["trail"];
        $trail = LeadsTrailModel::create([
'lead_id'=>$lead_id, 
'user_id'=>$user->id, 
'description'=>$description, 
'entered_by'=>$user->id
        ]);
        return response()->json(['message'=>'Successfull added','trail'=>$trail,'trail_id'=>$trail_id,'status'=>true],200);
    }
    catch(Exception $e){
        return response()->json(['message'=>'There is an error : '.$e->getMessage(),'status'=>false],500);
    }
    }

    public function getLeadsTrail($lead_id,$user_id)
    {
        try{
        
        $trails = LeadsTrailModel::join('users as u','leads_trail.user_id','=','u.id')
        ->select('u.first_name','leads_trail.description','leads_trail.date_entered')        
        ->where('lead_id',$lead_id)->where('user_id',$user_id)->get();
        return $trails;
    }
    catch(Exception $e){
        return [];
    }
    }

    public function getLeadsNotes($lead_id,$contact_user_id)
{
    try{
        $lead = LeadsModel::where('id',$lead_id)->first();
        $comm_link = $lead->user_id."_".$contact_user_id;
    
    $notes = LeadsNotesModel::join('users as u','lead_notes.user_id','=','u.id')
    ->join('leads as l','lead_notes.lead_id','=','l.id')
    ->select('u.first_name','lead_notes.description','lead_notes.date_entered','lead_notes.user_id', 'l.user_id as leads_user_id')        
    ->where('lead_notes.comm_link',$comm_link)
    ->where('lead_notes.lead_id',$lead_id)->get();
    return $notes;
}
catch(Exception $e){
    
    return [];
}
}

   

    public function getLeadServiceDetails($lead_id)
    {
        try{
        
        $details = LeadsServiceModel::where('lead_id',$lead_id)->first();
        return $details;
    }
    catch(Exception $e){
        
        return [];
    }
    }

    public function postNote(Request $request)
    {
        try{ 
            $lead_id = (int)$request->lead_id;
            $lead = LeadsModel::where('id',$lead_id)->first();
            $description = $request->description;
            $user = $request->user();            
            $user_id = $user->id;
            $first_id = 0;
            $second_id = 0;
            if(isset($request->contacted_user_id)){
                $first_id =  $user_id;    
                $second_id = (int)$request->contacted_user_id;           
            }
            else
            {
                $first_id =  $lead->user_id;
                $second_id = $user_id; 
            }
           
            $comm_link = $first_id."_".$second_id;

           // return ["lead_id"=>$lead_id,"description"=>$description,"entered_by"=>$user_id,"user_id"=>$user_id,"comm_link"=>$comm_link];
        
        $note = LeadsNotesModel::create(["lead_id"=>$lead_id,"description"=>$description,"entered_by"=>$user_id,"user_id"=>$user_id,"comm_link"=>$comm_link]);        
        return response()->json(["message"=>"Note Successfully added","note"=>$note, "date_entered" => date("Y-m-d H:i:s")],200);
    }
    catch(Exception $e){
        return response()->json(["message"=>"There is an error : ".$e->getMessage()],500);
    }
    }

    public function updateStatus(Request $request)
    {
        try{ 
            $user = $request->user();           
            $lead_id = (int)$request->lead_id;
            $status = $request->status;
            $lead = ContactedLeadsModel::where('lead_id','=',$lead_id)->where('user_id','=',$user->id)->first();
            $lead->status = $status;
            $lead->save();
        
         return response()->json(["message"=>"Lead updated successfully","lead"=>$lead],200);
    }
    catch(Exception $e){
        return response()->json(["message"=>"There is an error : ".$e->getMessage()],500);
    }
    }

    public function getLeadNotes(Request $request)
    {
        try{ 
            $user = $request->user();           
            $lead_id = (int)$request->lead_id;
            $contacted_user_id = (int)$request->contacted_user_id;
            $expertnotes = $this->getLeadsNotes($lead_id,$contacted_user_id);
        
         return response()->json(["message"=>"Notes Received","expertnotes"=>$expertnotes],200);
    }
    catch(Exception $e){
        return response()->json(["message"=>"There is an error : ".$e->getMessage()],500);
    }
    }

    public function updateEstimate(Request $request)
    {
        try{ 
            $user = $request->user();   
            $contacted_user_id = $user->id;        
            $lead_id = (int)$request->lead_id; 
            $estimate_amount = (double)$request->estimate_amount;
            $estimate_type = $request->estimate_type;
            $estimate_message = $request->respond_textarea_field;         
            $contacted_lead = ContactedLeadsModel::where("user_id", $contacted_user_id)
            ->where("lead_id", $lead_id)
            ->update([
                "estimate_amount" => $estimate_amount,
                "estimate_type" => $estimate_type,
                "estimate_message" => $estimate_message,
            ]);
        
        
         return response()->json(["message"=>"Lead Updated","contacted_lead"=>$contacted_lead],200);
    }
    catch(Exception $e){
        return response()->json(["message"=>"There is an error : ".$e->getMessage()],500);
    }
    }
    
}