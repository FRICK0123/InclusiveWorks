<?php

namespace App\Http\Controllers;

use App\Models\Jobposting;
use App\Models\Jobseeker;
use App\Models\Pendingjob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class JobseekersController extends Controller
{
    //Job Seekers Personal Page Route
    public function jobseekersPersonal()
    {
        return view('platform-users.pwd-jobseekers.jobseekers-personal');
    }

    //Job Seekers Personal Page Validation
    public function jobseekersPersonalValidation(Request $request)
    {
        $personal = $request->validate(
            [
                'pwd-firstname' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
                'pwd-lastname' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
                'pwd-email' => ['required', 'unique:jobseekers,pwd-email', 'email'],
                'pwd-age' => ['required'],
                'pwd-contact' => ['required', 'regex:/^\\d{4}-\\d{3}-\\d{4}$/'],
                'pwd-username' => ['required', 'min:5', 'unique:jobseekers,pwd-username'],
                'pwd-password' => ['required', 'min:8'],
                'pwd-confirm-password' => ['required', 'same:pwd-password'],
            ],
            [ //error messages
                'pwd-firstname.regex' => 'The first name field must contain only letters and spaces.',
                'pwd-firstname.required' => 'The first name field should not be empty',
                'pwd-lastname.regex' => 'The last name field must contain only letters and spaces.',
                'pwd-lastname.required' => 'The last name field should not be empty',
                'pwd-email.required' => 'The email field should not be empty',
                'pwd-email.unique' => 'The email is already in use',
                'pwd-email.email' => 'The field must be a valid email address',
                'pwd-age.required' => 'The age field should not be empty',
                'pwd-contact.required' => 'The contact number field should not be empty',
                'pwd-contact.regex' => 'The contact number should follow the specified format',
                'pwd-username.required' => 'The username field should not be empty',
                'pwd-username.min' => 'The username should be 5 characters or more',
                'pwd-username.unique' => 'The username is already in use',
                'pwd-password.required' => 'The password field is required.',
                'pwd-password.min' => 'The password must be at least 8 characters.',
                'pwd-confirm-password.required' => 'The confirm password field is required.',
                'pwd-confirm-password.same' => 'The password does not match.'
            ]
        );
        Session::put([
            'pwd-firstname' => $personal['pwd-firstname'],
            'pwd-lastname' => $personal['pwd-lastname'],
            'pwd-email' => $personal['pwd-email'],
            'pwd-age' => $personal['pwd-age'],
            'pwd-contact' => $personal['pwd-contact'],
            'pwd-username' => $personal['pwd-username'],
            'pwd-password' => $personal['pwd-password'],
        ]);

        return redirect()->route('jobseekers_professional_page');
    }

    //Job Seekers Professional Route
    public function jobseekersProfessional()
    {
        return view('platform-users.pwd-jobseekers.jobseekers-professional');
    }

    //Job Seekers Professional Page Validation
    public function jobseekersProfessionalValidation(Request $request)
    {
        $professional = $request->validate(
            [
                'pwd-address' => ['required'],
                'pwd-education' => ['required'],
                'pwd-resume' => ['required', 'file', 'mimes:pdf']
            ],
            [ //error messages
                'pwd-address.required' => 'The address field should not be empty',
                'pwd-education.required' => 'Please Select Educational Attainment',
                'pwd-resume.required' => 'Resume Required',
                'pwd-resume.file' => 'Please upload a valid file',
                'pwd-resume.mimes' => 'Only PDF files are allowed',
            ]
        );

        //Resume File upload
        if ($request->hasFile('pwd-resume')) {
            $file = $request->file('pwd-resume');
            $fileName = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
        }
        Session::put([
            'pwd-address' => $professional['pwd-address'],
            'pwd-education' => $professional['pwd-education'],
            'pwd-resume' => $fileName,
        ]);
        return redirect()->route('jobseekers_disabilities_page');
    }

    //Job seekers disabilities page Route
    public function jobseekersDisabilities()
    {
        return view('platform-users.pwd-jobseekers.jobseekers-disabilities');
    }
    //Job seekers disabilitites validation
    public function jobseekersDisabilitiesValidation()
    {
        Session::put('pwd-disability', request('pwd-disability'));
        return redirect()->route('jobseekers_profile_page');
    }

    //Job seekers profile page Route
    public function jobseekersProfile()
    {
        return view('platform-users.pwd-jobseekers.jobseekers-profile');
    }
    //Job seekers profile validation
    public function jobseekersProfileValidation(Request $request)
    {
        $profile = $request->validate(
            [
                'pwd-profile' => ['required', 'file', 'mimes:png,jpeg,jpg']
            ],
            [ //error messages
                'pwd-profile.required' => 'Profile Picture Required',
                'pwd-profile.file' => 'Please upload a valid file',
                'pwd-profile.mimes' => 'Only PNG, JPG, JPEG files are allowed',
            ]
        );

        //Resume File upload
        if ($request->hasFile('pwd-profile')) {
            $file = $request->file('pwd-profile');
            $fileName = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
        }
        Session::put('pwd-profile', $fileName);
        return redirect()->route('jobseekers_summary_page');
    }

    //Jobseeekers Summary
    public function jobseekersSummary()
    {
        return view('platform-users.pwd-jobseekers.jobseekers-summary');
    }

    //Jobseeekers Summary Validation
    public function jobseekersSummaryValidation(Request $request)
    {
        $pwd_password = Hash::make($request->post('pwd-password'));
        $jobseeker = Jobseeker::create([
            'pwd-firstname' => $request->post('pwd-firstname'),
            'pwd-lastname' => $request->post('pwd-lastname'),
            'pwd-email' => $request->post('pwd-email'),
            'pwd-age' => $request->post('pwd-age'),
            'pwd-contact' => $request->post('pwd-contact'),
            'pwd-username' => $request->post('pwd-username'),
            'pwd-password' => $pwd_password,
            'pwd-address' => $request->post('pwd-address'),
            'pwd-education' => $request->post('pwd-education'),
            'pwd-resume' => $request->post('pwd-resume'),
            'pwd-disabilities' => $request->post('pwd-disability'),
            'pwd-profile' => $request->post('pwd-profile'),
            'usertype' => $request->post('usertype'),
        ]);

        Session::flush();
        return redirect()->route('homepage')->with('Registered', "You are Registered Successfully");
    }

    //Profile Image Update
    public function updateProfileImage(Request $request){
        // Validate the uploaded file
        $profile = $request->validate(
            [
                'update-profile' => ['required', 'file', 'mimes:png,jpeg,jpg']
            ],
            [
                'update-profile.required' => 'Profile Picture Required',
                'update-profile.file' => 'Please upload a valid file',
                'update-profile.mimes' => 'Only PNG, JPG, JPEG files are allowed',
            ]
        );

        // Check if there is an existing profile picture and delete it
        if (Session::has('pwd-profile')) {
            $existingFile = Session::get('pwd-profile');
            $existingFilePath = public_path('uploads') . '/' . $existingFile;

            if (file_exists($existingFilePath)) {
                unlink($existingFilePath); // Delete the existing file
            }
        }

        // Upload the new profile picture
        if ($request->hasFile('update-profile')) {
            $file = $request->file('update-profile');
            $fileName = time() . '.' . $file->getClientOriginalExtension(); // Ensure unique file name
            $file->move(public_path('uploads'), $fileName);
            DB::table('jobseekers')->where('pwdID',Session::get('pwdID'))->update(['pwd-profile'=>$fileName]);
            // Store the new file name in the session
            Session::put('pwd-profile', $fileName);
        }

        return redirect()->route('jobseeker_dashboard');
    }

    //Jobseeker update username
    public function updateUsername(Request $request){
        $validate_username = $request->validate([
            'edit-username' => ['required']
        ],
        [
            'edit-username.required' => "Username Field is Empty"
        ]
    );
        $new_username = $validate_username['edit-username'];
        DB::table('jobseekers')->where('pwdID',Session::get('pwdID'))->update(['pwd-username'=>$new_username]);
        Session::put('pwd-username',$new_username);
        
        return redirect()->route('jobseeker_dashboard');
    }

    //Jobseeker update fullname
    public function updateFullname(Request $request)
    {
        $new_firstname = $request->input('edit-firstname');
        $new_lastname = $request->input('edit-lastname');

        DB::table('jobseekers')->where('pwdID', Session::get('pwdID'))->update(['pwd-firstname' => $new_firstname, 'pwd-lastname' => $new_lastname]);
        Session::put([
            'pwd-firstname' => $new_firstname,
            'pwd-lastname' => $new_lastname
        ]);

        return redirect()->route('jobseeker_dashboard');
    }

    //Jobseeker update email
    public function updateEmail(Request $request)
    {
        $new_email = $request->input('edit-email');

        DB::table('jobseekers')->where('pwdID', Session::get('pwdID'))->update(['pwd-email'=>$new_email]);
        Session::put('pwd-email',$new_email);

        return redirect()->route('jobseeker_dashboard');
    }

    //Jobseeker update contact number
    public function updateContact(Request $request)
    {
        $new_contact = $request->input('edit-contact');

        DB::table('jobseekers')->where('pwdID', Session::get('pwdID'))->update(['pwd-contact' => $new_contact]);
        Session::put('pwd-contact', $new_contact);

        return redirect()->route('jobseeker_dashboard');
    }

    //Jobseeker update Address
    public function updateAddress(Request $request)
    {
        $new_address = $request->input('edit-address');

        DB::table('jobseekers')->where('pwdID', Session::get('pwdID'))->update(['pwd-address' => $new_address]);
        Session::put('pwd-address', $new_address);

        return redirect()->route('jobseeker_dashboard');
    }

    //Pending Jobs Page
    public function pendingJobs($pwdID){
        $pending_jobs = DB::table('pendingjobs')
        ->join('jobpostings', 'pendingjobs.jobID', '=', 'jobpostings.jobID')
        ->where('pendingjobs.pwdID', $pwdID)
        ->select('pendingjobs.*', 'jobpostings.*')
        ->get();

        return view('jobs.pending-jobs',[
            'pendingJobs' => $pending_jobs,
        ]);
    }

    //View Pending Job Application
    public function viewPendingJob($jobID){
        $job = Jobposting::where('jobID',$jobID)->first();

        return view('jobs.view-pending-job',[
            'jobInfo' => $job,
        ]);
    }
}
