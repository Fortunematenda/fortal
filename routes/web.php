<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CreditController; 
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

// Home route
Route::get('/', function () {
    return view('welcome');
});


// Dashboard route with middleware for authenticated users
Route::get('/dashboard', [ProfileController::class, 'openDashboard'])->middleware(['auth:sanctum', 'verified'])->name('dashboard');

// Group routes for authenticated users
Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile', [ProfileController::class, 'notifications'])->name('profile.notifications');
  
    // Credit Routes
    Route::post('/buy-credits', [CreditController::class, 'buyCredits']);
    Route::get('/buy-credits', [CreditController::class, 'showBuyCreditsPage'])->name('credits.buy');
    Route::get('/credit/{userId}/credit-history', [CreditController::class, 'getCreditHistory'])->name('credit.history');
    Route::get('/credit/packages', [CreditController::class, 'showPackages'])->name('credit.packages');
    Route::get('/credit-packages', [CreditController::class, 'showCreditPackages'])->name('credit.packages');
    Route::get('/transaction-history', [ProfileController::class, 'transactionHistory'])->name('transaction.history');
    Route::post('/help/submit', [HelpController::class, 'submit'])->name('help.submit');
});

// Group routes for guest users
Route::middleware('guest:sanctum')->group(function () {
    Route::get('/profession/create', [ProfileController::class, 'createProfession'])->name('createprofession');
    Route::get('/profession/create-account/{id}', [ProfileController::class, 'createAccountProfession'])->name('createaccountprofession');
    Route::post('/getservices', [LeadsController::class, 'getServices'])->name('getservices');
    Route::post('/registeruser', [RegisteredUserController::class, 'store'])->name('registeruser');    
    Route::get('/customer/create', [CustomerController::class, 'createCustomer'])->name('create.customer');
    Route::get('/customer/createrequests', [CustomerController::class, 'createRequest'])->name('createrequests');
    Route::get('/customer/requests', [CustomerController::class, 'showRequests'])->name('customer.requests');
    Route::get('/customer/review/', [CustomerController::class, 'expertReview'])->name('expertreview');
    Route::get('/customer/profile/', [CustomerController::class, 'expertProfile'])->name('expertprofile');
    Route::post('/getservicesquestions', [CustomerController::class, 'getServicesQuestions'])->name('getservicesquestions');
    Route::post('/customer/createlead', [CustomerController::class, 'createLead'])->name('createlead');
});

// Group routes for authenticated sellers/leads
Route::middleware('auth:sanctum')->group(function () {
    // Seller/Lead Routes
    Route::get('/seller/dashboard', [LeadsController::class, 'showLeads'])->name('show-leads');
    Route::get('/responses', [LeadsController::class, 'showResponses'])->name('show-responses');
    Route::get('/help', [LeadsController::class, 'showHelp'])->name('help');
    
    // Profile and Lead Updates 
    Route::post('/update_services', [ProfileController::class, 'updateServices'])->name('update_services');
    Route::post('/getleads', [LeadsController::class, 'getUserLeads'])->name('get_leads');
    Route::post('/getresponses', [LeadsController::class, 'getUserResponses'])->name('get_responses');
    Route::post('/leaddetails', [LeadsController::class, 'getLeadDetails'])->name('lead_details');
    Route::post('/getresponsedetails', [LeadsController::class, 'getResponseDetails'])->name('getresponsedetails');
    Route::post('/opencontacts', [LeadsController::class, 'openContacts'])->name('open_contacts');
    Route::post('/notinterested', [LeadsController::class, 'notInterested'])->name('not_interested');
    Route::get('/gotoemail', [LeadsController::class, 'goToEmail'])->name('gotoemail');
    Route::post('/addleadstrail', [LeadsController::class, 'addLeadsTrail'])->name('addleadstrail');
    Route::post('/addleadnote', [LeadsController::class, 'postNote'])->name('addleadnote');
    Route::post('/updatestatus', [LeadsController::class, 'updateStatus'])->name('updatestatus');
    Route::post('/purchase', [PurchaseController::class,'purchase'])->name('purchase');
    Route::get('/purchase/success', [PurchaseController::class, 'successPurchase'])->name('purchase.success');
    Route::get('/purchase/cancel', [PurchaseController::class, 'failedPurchase'])->name('purchase.cancel');   
    Route::post('/notifications/update', [ProfileController::class, 'updateNotifications'])->name('notifications.update');
    Route::post('/notifications/update', [ProfileController::class, 'subscribedNotifications'])->name('notifications.subscribed');
    Route::get('/customer/dashboard', [CustomerController::class, 'customerdashboard'])->name('customer.dashboard');
});

// Load authentication routes
require __DIR__.'/auth.php';
