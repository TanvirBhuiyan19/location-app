<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userDetails(Request $request)
    {
        // $ip = '203.76.147.210'; //For static IP address get
        $ip = request()->ip(); //Dynamic IP address get
        $data = \Location::get($ip);
        return view('details',compact('data'));
    }
}
