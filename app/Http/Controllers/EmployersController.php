<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Jobposting;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployersController extends Controller
{
    //Employer's Company Account Registration Page Route
    public function employerCompany()
    {
        return view('platform-users.employers.employer-company');
    }

    //Employer's Company Account Registration Page Validation
    public function employerCompanyValidation(Request $request)
    {
        $employer = $request->validate([
            'company' => ['required'],
            'company-logo' => ['required'],
            'company-industry' => ['required'],
            'company-address' => ['required'],
            'company-email' => ['required', 'unique:employers,company-email', 'email'],
            'company-contact' => ['required', 'regex:/^\\d{4}-\\d{3}-\\d{4}$/'],
            'company-description' => ['required'],
            'company-username' => ['required', 'min:5', 'unique:employers,company-email'],
            'company-password' => ['required', 'min:8'],
            'company-confirm-password' => ['required', 'same:company-password'],
        ], [ //error messages
            'company.required' => 'The company name field should not be empty',
            'company-logo.required' => 'The company logo field should not be empty',
            'company-address.required' => 'The company address field should not be empty',
            'company-email.required' => 'The email field should not be empty',
            'company-email.unique' => 'The email is already in use',
            'company-email.email' => 'The field must be a valid email address',
            'company-contact.required' => 'The contact number field should not be empty',
            'company-contact.regex' => 'The contact number should follow the specified format',
            'company-description.required' => 'The company description field should not be empty',
            'company-username.required' => 'The username field should not be empty',
            'company-username.min' => 'The username should be 5 characters or more',
            'company-username.unique' => 'The username is already in use',
            'company-password.required' => 'The password field is required.',
            'company-password.min' => 'The password must be at least 8 characters.',
            'company-confirm-password.required' => 'The confirm password field is required.',
            'company-confirm-password.same' => 'The password does not match.'
        ]);
        //File upload
        if ($request->hasFile('company-logo')) {
            $file = $request->file('company-logo');
            $fileName = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('uploads/employers'), $fileName);
        }

        Session::put([
            'company' => $employer['company'],
            'company-logo' => $fileName,
            'company-industry' => $employer['company-industry'],
            'company-address' => $employer['company-address'],
            'company-email' => $employer['company-email'],
            'company-contact' => $employer['company-contact'],
            'company-description' => $employer['company-description'],
            'company-username' => $employer['company-username'],
            'company-password' => $employer['company-password'],
        ]);

        return redirect()->route('employer_verification_page');
    }

    //Employer's Company Account Registration Page Route
    public function employerVerification()
    {
        return view('platform-users.employers.employer-verification');
    }

    //Employer's Company Account Registration Page Validation
    public function employerVerificationValidation(Request $request)
    {
        $verification = $request->validate([
            'business-registration-certificate' => ['required'],
            'tax-identification-number' => ['required'],
            'proof-of-physical-address' => ['required'],
            'official-company-letterhead' => ['required'],

        ], [ //error messages
            'business-registration-certificate.required' => 'This field should not be empty',
            'tax-identification-number.required' => 'This field should not be empty',
            'proof-of-physical-address.required' => 'This field should not be empty',
            'official-company-letterhead.required' => 'This field should not be empty',
        ]);

        $brcfileName = null;
        $tinfileName = null;
        $ppafileName = null;
        $ocffileName = null;

        if ($request->hasFile('business-registration-certificate')) {
            $file = $request->file('business-registration-certificate');
            $brcfileName = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('uploads/employers'), $brcfileName);
        }
        if ($request->hasFile('tax-identification-number')) {
            $file = $request->file('tax-identification-number');
            $tinfileName = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('uploads/employers'), $tinfileName);
        }
        if ($request->hasFile('proof-of-physical-address')) {
            $file = $request->file('proof-of-physical-address');
            $ppafileName = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('uploads/employers'), $ppafileName);
        }
        if ($request->hasFile('official-company-letterhead')) {
            $file = $request->file('official-company-letterhead');
            $ocffileName = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('uploads/employers'), $ocffileName);
        }

        Session::put([
            'business-registration-certificate' => $brcfileName,
            'tax-identification-number' => $tinfileName,
            'proof-of-physical-address' => $ppafileName,
            'official-company-letterhead' => $ocffileName,
        ]);

        return redirect()->route('employer_summary_page');
    }

    //Employers Details Summary Page
    public function employerSummary()
    {
        return view('platform-users.employers.employer-summary');
    }

    //Employers Summary Validation
    public function employerSummaryValidation(Request $request)
    {
        $company_password = Hash::make($request->post('company-password'));
        $employer = Employer::create([
            'company' => $request->post('company'),
            'company-logo' => $request->post('company-logo'),
            'company-industry' => $request->post('company-industry'),
            'company-address' => $request->post('company-address'),
            'company-email' => $request->post('company-email'),
            'company-contact' => $request->post('company-contact'),
            'company-description' => $request->post('company-description'),
            'company-username' => $request->post('company-username'),
            'company-password' => $company_password,
            'business-registration-certificate' => $request->post('business-registration-certificate'),
            'tax-identification-number' => $request->post('tax-identification-number'),
            'proof-of-physical-address' => $request->post('proof-of-physical-address'),
            'official-company-letterhead' => $request->post('official-company-letterhead'),
            'usertype' => $request->post('usertype'),
            'verify' => $request->post('verify')
        ]);

        Session::flush();
        return redirect()->route('employer_pending_page');
    }

    //Pending Page Route
    public function employerPending()
    {
        return view('platform-users.employers.employer-pending');
    }

    //Job postings page
    public function job_postings(){
        return view('dashboards.employer-page-links.job-postings',[
            'job_postings' => Jobposting::where('company-name',Session::get('company'))->get(),
        ]);
    }

    //View Jobs in Job postings page
    public function view_job($jobID){
        $job = Jobposting::where('jobID',$jobID)->first();
        return view('dashboards.employer-page-links.view-job', [
            'jobID' => $job['jobID'],
            'company_logo' => $job['company-logo'],
            'company_name' => $job['company-name'],
            'job_title' => $job['job-title'],
            'job_description' => $job['job-description'],
            'salary_start' => $job['salary-range-start'],
            'salary_end' => $job['salary-range-end'],
            'salary_frequency' => $job['salary-frequency'],
            'employment_type' => $job['employment-type'],
            'education_level' => $job['education-level'],
            'experience_level' => $job['experience-level'],
            'skills' => $job['skills'],
            'disabilities' => $job['disablities'],
            'created_at' => $job['created_at'],
        ]);
    }

    //Delete Job Postings
    public function deleteJob($jobID){
        $job = Jobposting::where('jobID', $jobID)->first();
        $job->delete();
        return redirect()->route('employer.job_postings');
    }
}
