<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployersController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobseekersController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

//Routes for Homepage, about, contact and tools description page
    //Homepage Main
    Route::get('/', function () {
        return view('homepage-main');
    })->name('homepage');
    //Tools Info
    Route::get('/tools-info', function () {
        return view('tools-description');
    });
    //About Page
    Route::get('/about', function () {
        return view('about');
    });
    //Contact Page
    Route::get('/contact', function () {
        return view('contact');
    });


//Routes for Homepage, about, contact and tools description page End

//Route for Job Seeker Registration Page
    //Route from homepage job seekers registration button to job seekers personal registration form
    Route::get('/jobseekers_personal', [JobseekersController::class, 'jobseekersPersonal'])->name('jobseekers_personal_page');
    //Job seekers personal registration form validation
    Route::post('/jobseekers_personal/validation', [JobseekersController::class, 'jobseekersPersonalValidation'])->name('jobseekers_personal_page_validation');

    //Route from job seekers personal registration form to job seekers professional form
    Route::get('/jobseekers_professional', [JobseekersController::class, 'jobseekersProfessional'])->name('jobseekers_professional_page');
    //Job seekers professional registration form validation
    Route::post('/jobseekers_professional/validation', [JobseekersController::class, 'jobseekersProfessionalValidation'])->name('jobseekers_professional_page_validation');

    //Route from job seekers professional registration form to job seekers disabilities page
    Route::get('/jobseekers_disability', [JobseekersController::class, 'jobseekersDisabilities'])->name('jobseekers_disabilities_page');
    //Job seekers disabilities validation
    Route::post('/jobseekers_disabilities/validation', [JobseekersController::class, 'jobseekersDisabilitiesValidation'])->name('jobseekers_disabilities_page_validation');

    //Route from job seekers job seekers disabilities page to Job seekers profile img
    Route::get('/jobseekers_profile', [JobseekersController::class, 'jobseekersProfile'])->name('jobseekers_profile_page');
    //Job seekers disabilities validation
    Route::post('/jobseekers_profile/validation', [JobseekersController::class, 'jobseekersProfileValidation'])->name('jobseekers_profile_page_validation');

    //Route from job seekers job seekers disabilities page to Job seekers profile img
    Route::get('/jobseekers_summary', [JobseekersController::class, 'jobseekersSummary'])->name('jobseekers_summary_page');
    //Job seekers disabilities validation
    Route::post('/jobseekers_summary/validation', [JobseekersController::class, 'jobseekersSummaryValidation'])->name('jobseekers_summary_page_validation');

//Route for Job Seeker Registration Page End

//Route for Employer Registration Page
    //Homepage to employer registration page
    Route::get('/employer_company', [EmployersController::class, 'employerCompany'])->name('employer_company_page');
    //Employer registration page validation
    Route::post('/employer_company/validation', [EmployersController::class, 'employerCompanyValidation'])->name('employer_company_page_validation');

    //Employer Company Registration Page to Verification Info
    Route::get('/employer_verification', [EmployersController::class, 'employerVerification'])->name('employer_verification_page');
    //Employer Company Verification Validation Page
    Route::post('/employer_verification/validation', [EmployersController::class, 'employerVerificationValidation'])->name('employer_verification_page_validation');


    //Employer Summary Details Page Route
    Route::get('/employer_summary', [EmployersController::class, 'employerSummary'])->name('employer_summary_page');

    //Employer Summary Validation Page Route
    Route::post('/employer_summary/validation', [EmployersController::class, 'employerSummaryValidation'])->name('employer_summary_page_validation');

    //Pending Page
    Route::get('/employer_pending', [EmployersController::class, 'employerPending'])->name('employer_pending_page');

//Route for Employer Registration PageEnd

//Route for Login
//Login Main page route
Route::get('/login', [LoginController::class, 'Login'])->name('login_main_page');

//Login Authorization
Route::post('/login/Authentication', [LoginController::class, 'loginAuthentication'])->name('login_authentication');
//Route for Login end

//Route for Dashboards
    //Jobseekers Dashboard
    Route::get('/jobseeker_dashboard', [DashboardController::class, 'jobseekerDashboard'])->name('jobseeker_dashboard');
    //Jobseekers Dashboard Search
    Route::post('/jobseeker_dashboard/search',[DashboardController::class, 'jobseekerDashboardSearch'])->name('jobseeker_dashboard_search');

    //Employers Dashboard Routes
        //Employer Main Page
        Route::get('/employer_dashboard', [DashboardController::class, 'employerDashboard'])->name('employer_dashboard');
        //Employers Job Posting Page
        Route::get('/employer_job_postings',[EmployersController::class,'job_postings'])->name('employer.job_postings');
        //Employers Applicants Page
        Route::get('/employer_applicants',function(){return view('dashboards.employer-page-links.applicants-page');})->name('employer.applicants');
        //Employers Applicants Page
        Route::get('/employer_messages',function(){return view('dashboards.employer-page-links.messages-page');})->name('employer.messages');
        //Employers About Page
        Route::get('/employer_about',function(){return view('dashboards.employer-page-links.about-page');})->name('employer.about');
        //Employers Contact Page
        Route::get('/employer_contact',function(){return view('dashboards.employer-page-links.contact-page');})->name('employer.contact');

        //View Jobpostings
        Route::post('/job_description/{jobID}',[EmployersController::class,'view_job'])->name('employer.view_job');

        //Delete Job Posting
        Route::delete('/job_delete/{jobID}',[EmployersController::class,'deleteJob'])->name('employer.job_delete');
    //Employers Dashboard Routes End
//Route for Dashboards end

//Jobs Features and Functionalities Routes (for employers)
    //Route from employer dashboard to job posting page
    Route::get('/job_posting', [JobController::class, 'jobPosting'])->name('job_posting');
    //Job Posting Validation
    Route::post('/job_posting/data', [JobController::class, 'jobPostingData'])->name('post_job');
    //Job posting summary data insertion
    Route::post('/job_posting/summary/job_posted', [JobController::class, 'jobPostingSummaryPosted'])->name('job_posting_summary_insertion');
//Jobs Features and Functionalities Routes (for employers) end


//Find Job Route
Route::post('/job_listings', [JobController::class, 'findJob'])->name('job_listings');

//View Job Route
Route::post('/view_job/{jobID}', [JobController::class, 'jobView'])->name('view_job');

//Jobseekers job application view
Route::get('/job_application/{jobID}',[JobController::class,'jobApplication'])->name('job_application_page');

//Jobseekers job application submittion
Route::POST('/job_application/submit',[JobController::class, 'jobApplicationSubmit'])->name('job_application_submit');

//Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Jobseekers Dashboard Profile Details and Updates
    //profile image
    Route::post('/update_image',[JobseekersController::class,'updateProfileImage'])->name('profile-image-update');
    //Username
    Route::post('/update_username',[JobseekersController::class,'updateUsername'])->name('username-update');
    //Fullname
    Route::post('/update_fullname', [JobseekersController::class, 'updateFullname'])->name('fullname-update');
    //Email
    Route::post('/update_email', [JobseekersController::class, 'updateEmail'])->name('email-update');
    //Contact Number
    Route::post('/update_contact', [JobseekersController::class, 'updateContact'])->name('contact-update');
    //Address
    Route::post('/update_address', [JobseekersController::class, 'updateAddress'])->name('address-update');
//Jobseekers Dashboard Profile Details and Updates end

