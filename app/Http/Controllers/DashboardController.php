<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Jobseeker Dashboard
    public function jobseekerDashboard()
    {
        $isLoggedin = Session::get('isLoggedin');

        if ($isLoggedin == true) {
            return view('dashboards.jobseeker-dashboard');
        } else {
            return redirect()->route('login_main_page')->with("notLoggedin", "Please Login First");
        }
    }

    //Employer Dashboard
    public function employerDashboard()
    {
        $isLoggedin = Session::get('isLoggedin');

        if ($isLoggedin == true) {
            return view('dashboards.employer-dashboard');
        } else {
            return redirect()->route('login_main_page')->with("notLoggedin", "Please Login First");
        }
    }
}
