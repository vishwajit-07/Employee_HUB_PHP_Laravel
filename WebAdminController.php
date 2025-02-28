<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebAdminController extends Controller
{
    public function start(){
        return view('landing');
    }
    public function details(){
        return view('front.admin.viewdetails');
    }
    public function candidate(){
        return view('front.admin.viewcandidates');
    }
    public function forgot(){
        return view('front.admin.forgot');
    }
    public function adminHome(){
        return view('front.admin.home');
    }
    public function adminlogin(){
        return view('front.account.wadminlogin');
    }
}
