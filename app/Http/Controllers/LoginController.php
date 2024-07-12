<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //Main login page route
    public function login()
    {
        return view('dashboards.login');
    }

    //Login Authentication
    public function loginAuthentication(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        $username = $credentials['username'];
        $password = $credentials['password'];

        //jobseeker and employer query
        $jobseeker = DB::table('jobseekers')->where('pwd-username', $username)->first();
        $employer = DB::table('employers')->where('company-username', $username)->first();

        if ($jobseeker && Hash::check($password, $jobseeker->{'pwd-password'})) {
            // Authentication for jobseeker successful
            auth()->loginUsingId($jobseeker->pwdID);
            Session::put('isLoggedin', true);
            Session::put([
                'pwdID' => $jobseeker->pwdID,
                'pwd-firstname' => $jobseeker->{'pwd-firstname'},
                'pwd-lastname' => $jobseeker->{'pwd-lastname'},
                'pwd-email' => $jobseeker->{'pwd-email'},
                'pwd-age' => $jobseeker->{'pwd-age'},
                'pwd-contact' => $jobseeker->{'pwd-contact'},
                'pwd-username' => $jobseeker->{'pwd-username'},
                'pwd-address' => $jobseeker->{'pwd-address'},
                'pwd-education' => $jobseeker->{'pwd-education'},
                'pwd-resume' => $jobseeker->{'pwd-resume'},
                'pwd-profile' => $jobseeker->{'pwd-profile'},
                'pwd-disabilities' => $jobseeker->{'pwd-disabilities'},
            ]);
            return redirect()->route('jobseeker_dashboard');
        } elseif ($employer && Hash::check($password, $employer->{'company-password'})) {
            // Authentication for employer successful
            auth()->loginUsingId($employer->employerID);
            Session::put('isLoggedin', true);
            Session::put([
                'company' => $employer->company,
                'company-logo' => $employer->{'company-logo'},
                'company-industry' => $employer->{'company-industry'},
                'company-address' => $employer->{'company-address'},
                'company-email' => $employer->{'company-email'},
                'company-contact' => $employer->{'company-contact'},
                'company-description' => $employer->{'company-description'},
                'company-username' => $employer->{'company-username'},
            ]);

            return redirect()->route('employer_dashboard');
        } else {
            // Authentication failed
            return 'Not logged in';
        }


        // if(($users && Hash::check($password,$users->{'pwd-password'})) && ($users->usertype == 'jobseeker')){
        //     Session::put('isLoggedin',true);
        //     Session::put([
        //         'pwdID'=>$users->pwdID,
        //         'pwd-firstname'=>$users->{'pwd-firstname'},
        //         'pwd-lastname'=>$users->{'pwd-lastname'},
        //         'pwd-email'=>$users->{'pwd-email'},
        //         'pwd-age'=>$users->{'pwd-age'},
        //         'pwd-contact'=>$users->{'pwd-contact'},
        //         'pwd-username'=>$users->{'pwd-username'},
        //         'pwd-address'=>$users->{'pwd-address'},
        //         'pwd-education'=>$users->{'pwd-education'},
        //         'pwd-resume'=>$users->{'pwd-resume'},
        //         'pwd-profile'=>$users->{'pwd-profile'},
        //         'pwd-disabilities'=>$users->{'pwd-disabilities'},
        //     ]);
        //     return redirect()->route('jobseeker_dashboard');
        // }else if(($users2 && Hash::check($password, $users2->{'company-password'})) && ($users2->usertype == 'employer')){
        //     Session::put('isLoggedin',true);
        //     Session::put([
        //         'company'=>$users2->company,
        //         'company-logo' => $users2->{'company-logo'},
        //         'company-industry'=>$users2->{'company-industry'},
        //         'company-address'=>$users2->{'company-address'},
        //         'company-email'=>$users2->{'company-email'},
        //         'company-contact'=>$users2->{'company-contact'},
        //         'company-description'=>$users2->{'company-description'},
        //         'company-username'=>$users2->{'company-username'},
        //     ]);

        //     return redirect()->route('employer_dashboard');
        // } else {
        //     echo "You are not logged in";   
        // }        
    }

    //Logout Controller
    public function logout()
    {
        Session::flush();
        return redirect()->route('homepage');
    }
}
