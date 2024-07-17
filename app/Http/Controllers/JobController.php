<?php

namespace App\Http\Controllers;

use App\Models\Jobposting;
use App\Models\Pendingjob;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //Job Posting Page Route
    public function jobPosting()
    {
        return view('jobs.job-posting');
    }
    //Job Posting Backend Functionality
    public function jobPostingData(Request $request)
    {
        $company_name = Session::get('company');
        $selectedDisabilities = $request->post('disabilities', []);
        $jobID = time() . $company_name;
        $disabilities = implode(',', $selectedDisabilities);

        $jobData = [
            'company-name' => Session::get('company'),
            'company-logo' => Session::get('company-logo'),
            'company-industry' => Session::get('company-industry'),
            'company-address' => Session::get('company-address'),
            'job-title' => $request->post('job-title'),
            'job-description' => $request->post('job-description'),
            'salary-start' => $request->post('salary-start'),
            'salary-end' => $request->post('salary-end'),
            'salary-frequency' => $request->post('salary-frequency'),
            'employment-type' => $request->post('employment-type'),
            'education-level' => $request->post('education-level'),
            'experience-level' => $request->post('experience-level'),
            'skills' => $request->post('skills'),
            'jobID' => time() . $company_name,
            'disabilities' => implode(',', $selectedDisabilities),
        ];

        return view('jobs.job-posting-summary', ['jobData' => $jobData]);
    }

    public function jobPostingSummaryPosted(Request $request)
    {
        $jobPost = Jobposting::create([
            'jobID' => $request->input('jobID'),
            'company-logo' => $request->input('company-logo'),
            'company-name' => $request->input('company-name'),
            'company-industry' => $request->input('company-industry'),
            'company-address' => $request->input('company-address'),
            'job-title' => $request->input('job-title'),
            'job-description' => $request->input('job-description'),
            'salary-range-start' => $request->input('salary-start'),
            'salary-range-end' => $request->input('salary-end'),
            'salary-frequency' => $request->input('salary-frequency'),
            'employment-type' => $request->input('employment-type'),
            'education-level' => $request->input('education-level'),
            'experience-level' => $request->input('experience-level'),
            'skills' => $request->input('skills'),
            'disablities' => $request->input('disabilities'),
        ]);

        return redirect()->route('employer.job_postings')->with('jobposted', "Job Request Posted Successfully");
    }

    //Jobseekers find jobs
    public function findJob()
    {
        $disability = Session::get('pwd-disabilities');
        return view('jobs.find-jobs', [
            'jobListing' => Jobposting::whereRaw('FIND_IN_SET(?,disablities)', [$disability])->get()
        ]);
    }

    //Jobseekers full job viewing
    public function jobView($jobID)
    {
        $job = Jobposting::where('jobID', $jobID)->first();
        return view('jobs.view-job', [
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

    //Jobseekers Job application view
    public function jobApplication($jobID){
        $job = Jobposting::where('jobID', $jobID)->first();
        return view('jobs.apply-job', [
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

    //Jobseekers Pending Job Submittion
    public function jobApplicationSubmit(Request $request){
        $cover_letter = $request->input('cover_letter');
        $resume = $request->input('pwd_resume');
        $jobID = $request->input('jobID');

        Pendingjob::create([
            'jobID' => $jobID,
            'cover_letter' => $cover_letter,
            'pwd_resume' => $resume,
        ]);

        return to_route('jobseeker_dashboard')->with('posted',"Applied Successfully, please wait for the employer's response");
    }
}
