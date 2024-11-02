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
        return view('customer.customerrequests',compact(["slot"]));
    }

    public function viewProfession($id)
    {
        $slot = "";
        $profession = null; // Replace with actual fetching logic

        return view('customer.customerviewprofession', compact('profession'));
    }
}
