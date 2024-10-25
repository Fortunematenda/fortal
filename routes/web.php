<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CreditController; 
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Dashboard route with middleware for authenticated users
Route::get('/dashboard', [ProfileController::class, 'openDashboard'])
    ->middleware(['auth:sanctum', 'verified'])
    ->name('dashboard');

// Group routes for authenticated users
Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Credit Routes
    Route::post('/credit/buy-credits', [CreditController::class, 'buyCredits'])->name('credit.buy');
    Route::get('/credit/{userId}/credit-history', [CreditController::class, 'getCreditHistory'])->name('credit.history');
});

// Group routes for guest users
Route::middleware('guest:sanctum')->group(function () {
    Route::get('/profession/create', [ProfileController::class, 'createProfession'])->name('createprofession');
    Route::get('/profession/create-account/{id}', [ProfileController::class, 'createAccountProfession'])->name('createaccountprofession');
    Route::post('/getservices', [LeadsController::class, 'getServices'])->name('getservices');
    Route::post('/registeruser', [RegisteredUserController::class, 'store'])->name('registeruser');
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
    Route::post('/leaddetails', [LeadsController::class, 'getLeadDetails'])->name('lead_details');
    Route::post('/getresponsedetails', [LeadsController::class, 'getResponseDetails'])->name('getresponsedetails');
    Route::post('/opencontacts', [LeadsController::class, 'openContacts'])->name('open_contacts');
    Route::get('/gotoemail', [LeadsController::class, 'goToEmail'])->name('gotoemail');
    Route::post('/addleadstrail', [LeadsController::class, 'addLeadsTrail'])->name('addleadstrail');
    Route::post('/addleadnote', [LeadsController::class, 'postNote'])->name('addleadnote');
});

// Load authentication routes
require __DIR__.'/auth.php';
