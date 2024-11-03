<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
