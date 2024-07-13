<?php

namespace App\Http\Controllers;

use App\Models\Jobposting;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Jobseeker Dashboard
    public function jobseekerDashboard()
    {
        $jobListings = Session::get('jobListings');
        return view('dashboards.jobseeker-dashboard',[
            'jobListing' => $jobListings
        ]);

        $isLoggedin = Session::get('isLoggedin');

        if ($isLoggedin == true) {
            return view('dashboards.jobseeker-dashboard');
        } else {
            return redirect()->route('login_main_page')->with("notLoggedin", "Please Login First");
        }
    }
    //Jobseeker Dashboard Search
    public function jobseekerDashboardSearch(Request $request)
    {
        $jobListings = Session::get('jobListings');
        $disability=Session::get('pwd-disabilities');
        $jobSearch = $request->input('jobSearch');

        $jobListing = Jobposting::whereRaw('FIND_IN_SET(?,disablities)', [$disability])->where('job-title','like','%'.$jobSearch.'%')->orderBy('created_at','DESC')->get();

        return view('dashboards.jobseeker-dashboard', [
            'jobListing' => $jobListing
        ]);
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
