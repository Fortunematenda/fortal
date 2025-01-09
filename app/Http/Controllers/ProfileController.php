<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\ServicesModel;
use App\Models\UserServicesModel;
use App\Models\LeadsModel;
use App\Models\ContactedLeadsModel;
use App\Models\CreditsTrailModel;
use App\Notifications\SendOtpNotification;

class ProfileController extends Controller
{
  
     public function openDashboard(Request $request)
     {
        $user = Auth::user();
        $user = $request->user();
        $first_name = $user->first_name;
        $email = $user->email;
        $logo = $user->logo;
        $profile_picture = $user->profile_picture;
        $subscribed_services_notifications = $user->subscribed_services_notifications;
        $new_leads_notifications = $user->new_leads_notifications;
        $weekly_newsletter_notifications = $user->weekly_newsletter_notifications;
        $sms_notifications = $user->sms_notifications;
        $contact_number=$user->contact_number;
        $is_company_website=$user->is_company_website;
        $company_size=$user->company_size;
        $is_company_sales_team=$user->is_company_sales_team;
        $location=$user->location;
        $company_name = $user->company_name;
        $company_registration_number = $user->company_registration_number;
        $credits_balance = $user->credits_balance;
        $timestamp = strtotime($user->login_at);
        $greetings = $this->greetings();
        $login_at = date('l, j M g:ia', $timestamp);
        $latest_services = $this->getUserServices($user->id);
        $latest_services_limited = array_slice($latest_services, 0, 2);
        $number_of_leads = count($this->getLeadsCount($user->id));
        $contacted_lead = count($this->getLeadsCount($user->id));
        $service_badge = count($latest_services)-2;
        $unread_leads = count($this->getUnreadLeads($user->id));
        
        return view("dashboard",compact(["first_name","login_at","contacted_lead","greetings","profile_picture","contact_number","company_name","is_company_website","company_size","is_company_sales_team","logo","location","company_registration_number","latest_services_limited","service_badge","email","number_of_leads","unread_leads","credits_balance","new_leads_notifications","weekly_newsletter_notifications","subscribed_services_notifications","sms_notifications",]));
     }
     public function edit(Request $request): View
     {
         $user = $request->user();
         $services = ServicesModel::pluck('service_name')->toArray();
         $latest_services = $this->getUserServices($user->id);
         $transactions = $this->getCreditHistory($user->id);
         
     
         return view('profile.edit', [
             'user' => $user,
             'services' => $services,
             'company_name' => $user->company_name,
             'is_company_website' => $user->is_company_website,
             'company_size' => $user->company_size,
             'is_company_sales_team' => $user->is_company_sales_team,
             'contact_number' => $user->contact_number,
             'company_registration_number' => $user->company_registration_number,
             'location'=>$user->location,
             'latest_services' => $latest_services,
             'profile_picture' =>$user->profile_picture,
             'logo' =>$user->logo,
             'transactions'=>$transactions,
             'credits_balance'=>$user->credits_balance
         ]);
     }
     

     public function update(ProfileUpdateRequest $request): RedirectResponse
{
    $user = $request->user();
    $imageName = "test";
    // Handle profile picture upload
    if ($request->hasFile('profile_picture')) {
        // Store the image in the 'public/profile_pictures' directory
        $path = $request->file('profile_picture')->store('profile_pictures', 'public');
        $imageName = basename($path);
      
    }

    // Fill in other user data from validated request
    $user->fill($request->validated());
    if ($user->isDirty('email')) {
        $user->email_verified_at = null; // Reset verification if email has changed
    }

    if ($user->isDirty()) {
        $user->profile_picture = $imageName;
        $user->save(); 
        return redirect()->route('profile.edit')->with('status', 'profile-updated')->with('success', 'Profile updated successfully!');
    }

    return redirect()->route('profile.edit')->with('status', 'No changes were made.');
}



     

    public function updateServices(Request $request): RedirectResponse
    {
    
        $user = $request->user();
        UserServicesModel::where('user_id', $user->id)->delete();
        $services = $request->services;
        for($i=0; $i<count($services);$i++)
        {
            $service = $services[$i];
            $id = $this->getServiceID($service);
            $service = UserServicesModel::create(['user_id'=>$user->id, 'service_id'=>$id, 'entered_by'=>$user->id]);

        }
        $latest_services = $this->getUserServices($user->id);

        return Redirect::route('profile.edit')->with('latest_services', $latest_services);
    }
    
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function createProfession(Request $request)
    {
        return view("profile.create-profession");
    }
    public function createAccountProfession(Request $request)
    {
        return view("profile.create-account-profession");
    }
    private function getServiceID($service_name):int
    {
        $id = ServicesModel::where('service_name', $service_name)->pluck('id')->first();
        return (int)$id;
    }
    private function greetings()
{
    $current_hour = (int)date('H') + 2;

    if ($current_hour >= 5 && $current_hour < 12) {
        return 'Good morning';
    } elseif ($current_hour >= 12 && $current_hour < 17) {
        return 'Good afternoon';
    } elseif ($current_hour >= 17 && $current_hour < 21) {
        return 'Good evening';
    } else {
        return 'Good night';
    }



    }
    public function getUserServices($user_id){
        $latest_services = UserServicesModel::where('user_id', $user_id)->join('master_services', 'user_services.service_id', '=', 'master_services.id')
        ->pluck('master_services.service_name')
        ->toArray();
        return $latest_services;
    }
    public function getLeadsCount($user_id)
    {
        $results = LeadsModel::join('user_services as u', 'leads.service_id', '=', 'u.service_id')
        ->join('master_services as m', 'u.service_id', '=', 'm.id')
        ->join('users as s', 'leads.user_id', '=', 's.id')
        ->select('leads.id')
        ->where('u.user_id', $user_id)
        ->where('leads.status','=','Open')
        ->whereNotIn('leads.id', function ($query) use ($user_id) {
            $query->select('lead_id')
                  ->from('contacted_lead')
                  ->where('user_id', $user_id);
        })
        ->get();
        return $results;
    }
    public function getLeads($user_id)
    {
        $results = LeadsModel::join('user_services as u', 'leads.service_id', '=', 'u.service_id')
    ->join('master_services as m', 'u.service_id', '=', 'm.id')
    ->join('users as s', 'leads.user_id', '=', 's.id')
    ->select(
        'm.service_name', 
        'leads.user_id as lead_user_id', 
        'u.user_id as user_service_user_id', 
        'leads.service_id', 
        's.first_name', 
        's.last_name', 
        'leads.date_entered', 
        'leads.id', 
        'leads.description', 
        'leads.location',
        's.is_phone_verified',
        'leads.urgent',
        'leads.credits',
        'leads.hiring_decision',
        // Calculate the distance and include it in the result
        DB::raw('(
            6371 * acos(
                cos(radians(s.latitude)) 
                * cos(radians(leads.latitude)) 
                * cos(radians(leads.longitude) - radians(s.longitude)) 
                + sin(radians(s.latitude)) 
                * sin(radians(leads.latitude))
            )
        ) AS distance')
    )
    ->where('u.user_id', $user_id)
    ->where('leads.status', '=', 'Open')
    ->whereNotIn('leads.id', function ($query) use ($user_id) {
        $query->select('lead_id')
              ->from('contacted_lead')
              ->where('user_id', $user_id);
    })
    ->havingRaw('distance <= 20')  // Only include leads within 20km
    ->orderBy('leads.id', 'desc')
    ->get();
    return $results;
    
    }
    public function getResponseLeads($user_id)
    {
        $results = ContactedLeadsModel::join('leads as u', 'contacted_lead.lead_id', '=', 'u.id')
        ->join('master_services as m', 'u.service_id', '=', 'm.id')
        ->join('users as s', 'u.user_id', '=', 's.id')
        ->select(
            'm.service_name', 
            'u.user_id as lead_user_id', 
            'u.user_id as user_service_user_id', 
            'u.service_id', 
            's.first_name', 
            's.last_name', 
            'u.date_entered', 
            'u.id', 
            'u.description', 
            's.location',
            's.is_phone_verified',
            'u.urgent',
            'u.credits',
            'u.hiring_decision'
        )
        ->where('contacted_lead.user_id', $user_id)  
        ->where('contacted_lead.status', '<>',"Not Interested")     
        ->orderBy('contacted_lead.id', 'desc') 
        ->get();
    
    return $results;
    
    }
    public function getIndividualLead($lead_id)
    {
        $results = LeadsModel::join('user_services as u', 'leads.service_id', '=', 'u.service_id')
        ->join('master_services as m', 'u.service_id', '=', 'm.id')
        ->join('users as s', 'leads.user_id', '=', 's.id')
        ->select(
            'm.service_name', 
            'leads.user_id as lead_user_id', 
            'u.user_id as user_service_user_id', 
            'leads.service_id', 
            's.first_name', 
            's.last_name', 
            'leads.date_entered', 
            'leads.id', 
            'leads.description', 
            's.location',
            's.is_phone_verified',
            'leads.urgent',
            'leads.credits',
            's.email',
            's.contact_number',
            'leads.status',
            'leads.hiring_decision'
        )
        ->where('leads.id', $lead_id)
        ->first();
    
    return $results;
    
    }

    private function getUnreadLeads($user_id)
    {
        $results = LeadsModel::join('user_services as u', 'leads.service_id', '=', 'u.service_id')
        ->join('master_services as m', 'u.service_id', '=', 'm.id')
        ->join('users as s', 'leads.user_id', '=', 's.id')
        ->select('m.service_name', 'leads.user_id as lead_user_id', 'u.user_id as user_service_user_id', 'leads.service_id', 'leads.id')
        ->where('u.user_id', $user_id)
        ->whereNotIn('leads.id', function ($query) use ($user_id) {
            $query->select('lead_id')
                  ->from('leads_read')
                  ->where('user_id', $user_id);
        })
        ->get();

    return $results;
    }

    private function getCreditHistory($userId)
    {
        // Retrieve user credit transactions
        return CreditsTrailModel::where('user_id', $userId) // Use the correct model name here
            ->orderBy('date_entered', 'desc')
            ->get();
    }

    public function transactionHistory()
{
    $userId = auth()->user()->id; // Get the authenticated user's ID
    $transactions = $this->getCreditHistory($userId); // Call the private function to get transactions

    return view('transaction-history', compact('transactions')); // Ensure this view exists
}

public function updateNotifications(Request $request)
{
    $user = Auth::user();

    // Validate the incoming request
    $request->validate([
        'subscribed_services_notifications' => 'nullable|boolean',
        'new_leads_notifications' => 'nullable|boolean',
        'weekly_newsletter_notifications' => 'nullable|boolean',
        'sms_notifications' => 'nullable|boolean',
    ]);

    // Update notification settings based on checkbox inputs
    $user->update([
        'subscribed_services_notifications' => $request->has('subscribed_services_notifications'),
        'new_leads_notifications' => $request->has('new_leads_notifications'),
        'weekly_newsletter_notifications' => $request->has('weekly_newsletter_notifications'),
        'sms_notifications' => $request->has('sms_notifications'),
    ]);

    return response()->json(['status' => 'success', 'message' => 'Notification settings updated successfully.']);
}
public function subscribedNotifications(Request $request)
{
    $user = Auth::user();

    // Validation rules for incoming data
    $validatedData = $request->validate([
        'subscribed_services_notifications' => 'required|boolean',
        'new_leads_notifications' => 'required|boolean',
        'weekly_newsletter_notifications' => 'required|boolean',
        'sms_notifications' => 'required|boolean',
    ]);

    // Update the subscription settings
    $user->update($validatedData);

    return response()->json(['status' => 'success', 'message' => 'Notification settings updated.']);
}

public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Register the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Generate OTP
        $otp = rand(100000, 999999);

        // Store OTP in session or database
        Session::put('otp', $otp);
        Session::put('otp_user_id', $user->id);

        // Send OTP to user via email
        $user->notify(new SendOtpNotification($otp));

        // Redirect to OTP verification view
        return redirect()->route('profile.verifyOtp');
    }

    // Show OTP verification form
    public function showOtpForm()
    {
        // Render the OTP view
        return view('auth.otp');
    }
    public function sendOtp(Request $request)
    {
        $otp = rand(100000, 999999); // Generate OTP

        // Store OTP in the database with expiration time (e.g., 5 minutes)
        Otp::create([
            'user_id' => Auth::id(),
            'otp' => $otp,
            'expires_at' => Carbon::now()->addMinutes(5), // Set expiration time
        ]);

        // Send OTP to the user via Email, SMS, etc.
        $user = Auth::user();
        $user->notify(new SendOtpNotification($otp));

        return response()->json(['message' => 'OTP sent successfully']);
    }


    public function verifyOtp(Request $request)
    {
        // Verify OTP logic here
        $otp = $request->input('otp');

        // You can store the OTP in the session or database for verification
        // Compare with the generated OTP here
        if ($otp == '123456') {
            return response()->json(['message' => 'OTP verified successfully']);
        }

        return response()->json(['message' => 'Invalid OTP'], 400);
    }
}