<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserServicesModel;
use App\Http\Controllers\CustomerController; 
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules;
use App\Notifications\SendOtpNotification;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public function store(Request $request)
    { 
        try {
            $role = "Customer";
            $distance = '0';
            if(!isset($request->formData))
            {
                $role = "Expert";
                $distance = $request->distance;
            }
            
            // Validating the incoming request
           if(isset($request->formData))
           {
            $request->validate([
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'contact_number' => ['required', 'string', 'max:15'],
                'location' => ['required', 'string', 'max:255'],
                'latitude' => ['required', 'string', 'max:20'],
                'longitude' => ['required', 'string', 'max:20'],
                'email' => ['required', 'string', 'email', 'max:255'],
            ]);
           }
           else{
            $request->validate([
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'contact_number' => ['required', 'string', 'max:15'],
                'location' => ['required', 'string', 'max:255'],
                'latitude' => ['required', 'string', 'max:20'],
                'longitude' => ['required', 'string', 'max:20'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['nullable', 'confirmed', Password::defaults()],
            ]);
           }
          

            // Creating the user
            $user = User::firstOrCreate(
                ['email' => $request->email],
                [ 
                    'first_name' => ucfirst($request->first_name),
                    'last_name' => ucfirst($request->last_name),
                    'contact_number' => $request->contact_number,
                    'location' => $request->location,
                    'latitude' => $request->latitude,
                    'longitude' => $request->longitude,
                    'distance' => $distance,
                    'role' => $role,
                    'password' => Hash::make($request->password),
                    'company_name' => $request->company_name,
                    'is_company_website' => $request->is_company_website,
                    'company_size' => $request->company_size,
                    'is_company_sales_team' => $request->is_company_sales_team,
                    'is_company_social_media' => $request->is_company_social_media,
                    'entered_by' => $request->email,

                ]
            );
 
            // Assigning the service
            if(isset($request->formData))
            {
                
                $data = $request->formData;
                $service_id = (int)$request->service_id;
                $description = $request->brief_description;
                $estimate_quote = (double)$request->estimate_quote;
                $urgent = (int)$request->urgent;
                
                $hiring_decision = (int)$request->hiring_decision;
                $longitude = $request->longitude;
                $latitude = $request->latitude;
                $location = $request->location;
                
                $customer = new CustomerController();
                $lead = $customer->createLead($user->id, $service_id, $user->id, $description, $estimate_quote, $urgent, $hiring_decision,$longitude,$latitude,$location);
              
                $customer->addLeadService($data,$lead->id,$user->id);
         
                $uploadedFiles = [];
                if ($request->hasFile('files')) {
                    foreach ($request->file('files') as $file) {
                        $path = $file->store('uploads', 'public'); 
                        $uploadedFiles[] = $path;
                        $image_name = basename($path);
                        $customer->insertImages($image_name, "Lead", $user->id, $user->id, $lead->id);
                    }
                }
       
                // Save form data to the database (example)
                $data = $request->except('files');
            }
            else{
                UserServicesModel::create([
                    'user_id' => $user->id,
                    'service_id' => (int)$request->service_id,
                    'entered_by' => $user->id,
                ]);
            }
           
/*
            // Generating and sending OTP
            $otp = rand(100000, 999999); // Generate a 6-digit OTP
            Session::put('otp', $otp);
            Session::put('otp_user_id', $user->id);
            
            // Send OTP to the user's email
            $user->notify(new SendOtpNotification($otp));
            return redirect()->route("verify.otp.form")->with(["message', 'OTP sent to your email."], 200);
            
*/

        event(new Registered($user));
        Auth::login($user);
          return response()->json([
            "message" => "Success",
            "user"=>$user,
            "latitude"=>$request->latitude,
            "longitude"=>$request->longitude,
            "redirect_url" => route('customer.dashboard')
        ], 200);       
       
        
        } catch (\Exception $e) {
            return response()->json(["message" => "Error: " . $e->getMessage()], 500);
        }
    }

    public function registerLogged(Request $request)
    { 
        try {
           
            // Validating the incoming request
            $user = $request->user();               

 
            // Assigning the service
            if(isset($request->formData))
            {
                
                $data = $request->formData;
                $service_id = (int)$request->service_id;
                $description = $request->brief_description;
                $estimate_quote = (double)$request->estimate_quote;
                $urgent = (int)$request->urgent;
                
                $hiring_decision = (int)$request->hiring_decision;
                $longitude = $request->longitude;
                $latitude = $request->latitude;
                $location = $request->location;
                
                $customer = new CustomerController();
                $lead = $customer->createLead($user->id, $service_id, $user->id, $description, $estimate_quote, $urgent, $hiring_decision,$longitude,$latitude,$location);
              
                $customer->addLeadService($data,$lead->id,$user->id);
         
                $uploadedFiles = [];
                if ($request->hasFile('files')) {
                    foreach ($request->file('files') as $file) {
                        $path = $file->store('uploads', 'public'); 
                        $uploadedFiles[] = $path;
                        $image_name = basename($path);
                        $customer->insertImages($image_name, "Lead", $user->id, $user->id, $lead->id);
                    }
                }
       
                // Save form data to the database (example)
                $data = $request->except('files');
            }
            else{
                UserServicesModel::create([
                    'user_id' => $user->id,
                    'service_id' => (int)$request->service_id,
                    'entered_by' => $user->id,
                ]);
            }

          return response()->json([
            "message" => "Success",
            "redirect_url" => route('customer.dashboard')
        ], 200);       
       
        
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