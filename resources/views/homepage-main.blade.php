<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link rel="stylesheet" href="{{asset('css/main-style.css')}}">
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <!--Bootstrap Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!--Bootstrap Links end-->
</head>
<body style="background-color:#E6F4F1;">
    <div class="preloader"  id="preloader">
        <div class="loader"></div>
    </div>
    <header>
        <nav>
            <!--Brand-->
            <a href="#" class="navbar-brand inclusive-brand ms-3" tabindex="1">InclusiveWorks</a>

            <!--Links-->
            <ul class="links d-none d-lg-flex">
                <li class="nav-item text-center">
                    <a href="#" class="nav-link">
                        <img src="{{asset('images/icons/house.svg')}}" alt="Home Icon" width="40">
                        <p class="link-label">Home</p>
                    </a>
                </li>

                <li class="nav-item text-center">
                    <a href="#how-it-works" class="nav-link">
                        <img src="{{asset('images/icons/user-gear.svg')}}" alt="Home Icon" width="40">
                        <p class="link-label">How it Works?</p>
                    </a>
                </li>
                
                <li class="nav-item text-center">
                    <a href="/tools-info" class="nav-link">
                        <img src="{{asset('images/icons/wrench.svg')}}" alt="Home Icon" width="40">
                        <p class="link-label">Tools Description</p>
                    </a>
                </li>

                <li class="nav-item text-center">
                    <a href="/about" class="nav-link">
                        <img src="{{asset('images/icons/question.svg')}}" alt="Home Icon" width="40">
                        <p class="link-label">About Us</p>
                    </a>
                </li>

                <li class="nav-item text-center">
                    <a href="/contact" class="nav-link">
                        <img src="{{asset('images/icons/phone.svg')}}" alt="Home Icon" width="40">
                        <p class="link-label">Contact Us</p>
                    </a>
                </li>
            </ul>

            <!--Accessibility Tools Sidebar-->
            <div class="accessibility-tools text-center d-none d-lg-block sidebar" data-bs-toggle="offcanvas" data-bs-target="#accessibility-tools" aria-controls="accessibility-tools">
                <a href="#" class="nav-link">
                    <img src="{{asset('images/icons/faders.svg')}}" alt="Accessibility Tools Icon">
                    <p class="link-label">Accessibility Tools</p>
                </a>
            </div>

            <!--Menu Sidebar Homepage-->
            <div class="sidebar d-lg-none me-3 text-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <a href="#" class="nav-link">
                    <img src="{{asset('images/icons/faders.svg')}}" alt="Accessibility Tools Icon">
                    <p class="link-label">Menu</p>
                </a>
            </div>
        </nav>
    </header>
    @if (session()->has('Registered'))
    <div class="alert alert-success container d-flex justify-content-center p-5" role="alert" id="pwdAlert">
        <h3>{{session('Registered')}}</h3>
    </div>
    @endif
    <!--Accessibility Tools Sidebar Contents-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="accessibility-tools" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header d-flex justify-content-between">
            <h4 class="offcanvas-title fw-5" id="offcanvasExampleLabel">Accessibility Tools</h4>
            <div class="sidebar-close text-center">
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><img src="{{asset('images/icons/x-circle.svg')}}"
                    alt="Close" width="50"></button>
                <p>Close</p>
            </div>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="tools-lists">
                <!--Pointer-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="Pointer" id="pointer-list"> 
                    <h4 class="">Pointer</h4>
                    <label class="pointer-switch text-center">
                        <input type="checkbox" id="pointer">
                        <span class="slider round"></span>
                        <p id="pointer-off-on" class="mt-2">Off</p>
                    </label>
                </li>

                <!--Screen Reader-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="Screen Reader" id="screen-reader-list">
                    <h4 class="">Screen Reader</h4>
                    <label class="screen-reader-switch text-center">
                        <input type="checkbox" id="screen-reader">
                        <span class="slider round"></span>
                        <p id="screen-reader-off-on" class="mt-2">Off</p>
                    </label>
                </li>

                <!--Font Customization-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="Font Customization"
                    id="font-custom-list">
                    <h4 class="">Font Customization</h4>
                    <label class="font-custom-switch text-center">
                        <input type="checkbox" id="font-custom">
                        <span class="slider round"></span>
                        <p id="font-custom-off-on" class="mt-2">Off</p>
                    </label>
                </li>

                <!--High Contrast-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="High Contrast Mode"
                    id="high-contrast-list">
                    <h4 class="">High Contrast Mode</h4>
                    <label class="high-contrast-switch text-center">
                        <input type="checkbox" id="high-contrast">
                        <span class="slider round"></span>
                        <p id="high-contrast-off-on" class="mt-2">Off</p>
                    </label>
                </li>
            </ul>
            
        </div>
    </div>
    <!--Accessibility Tools Sidebar Contents End-->
    
    <!--Menu Sidebar Contents-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header d-flex justify-content-between">
            <h4 class="offcanvas-title fw-5" id="offcanvasExampleLabel">Accessibility Tools</h4>
            <div class="sidebar-close text-center">
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><img
                        src="{{asset('images/icons/x-circle.svg')}}" alt="Close" width="50"></button>
                <p>Close</p>
            </div>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="tools-lists">
            <!--Links-->
                <!--Home-->
                <a href="/" class="container-fluid d-flex justify-content-between align-items-center">
                    <h4 class="">Home</h4>
                </a>
                <!--How it Works?-->
                <a href="#how-it-works" class="container-fluid d-flex justify-content-between align-items-center">
                    <h4 class="">How it Works?</h4>
                </a>
                <!--Tools Description-->
                <a href="/tools-info" class="container-fluid d-flex justify-content-between align-items-center">
                    <h4 class="">Tools Description</h4>
                </a>
                <!--About Us-->
                <a href="/about" class="container-fluid d-flex justify-content-between align-items-center">
                    <h4 class="">About Us</h4>
                </a>
                <!--Contact Us-->
                <a href="/contact" class="container-fluid d-flex justify-content-between align-items-center">
                    <h4 class="">Contact Us</h4>
                </a>
            <!--Tools-->
                <!--Menu Pointer-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="Pointer"
                    id="menu-pointer-list">
                    <h4 class="">Pointer</h4>
                    <label class="menu-pointer-switch text-center">
                        <input type="checkbox" id="menu-pointer">
                        <span class="slider round"></span>
                        <p id="menu-pointer-off-on" class="mt-2">Off</p>
                    </label>
                </li>
        
                <!--Menu Screen Reader-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="Screen Reader"
                    id="menu-screen-reader-list">
                    <h4 class="">Screen Reader</h4>
                    <label class="menu-screen-reader-switch text-center">
                        <input type="checkbox" id="menu-screen-reader">
                        <span class="slider round"></span>
                        <p id="menu-screen-reader-off-on" class="mt-2">Off</p>
                    </label>
                </li>

                <!--Menu Font Customization-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="Screen Reader"
                    id="menu-font-custom-list">
                    <h4 class="">Font Customization</h4>
                    <label class="menu-font-custom-switch text-center">
                        <input type="checkbox" id="menu-font-custom">
                        <span class="slider round"></span>
                        <p id="menu-font-custom-off-on" class="mt-2">Off</p>
                    </label>
                </li>

                <!--High Contrast-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="High Contrast Mode"
                    id="menu-high-contrast-list">
                    <h4 class="">High Contrast Mode</h4>
                    <label class="menu-high-contrast-switch text-center">
                        <input type="checkbox" id="menu-high-contrast">
                        <span class="slider round"></span>
                        <p id="menu-high-contrast-off-on" class="mt-2">Off</p>
                    </label>
                </li>
            </ul>
        
        </div>
    </div>
    <!--Menu Sidebar Contents end-->

    <!--First Section-->
    <section class="bg-light p-5 mt-5 welcome-section rounded-5">
        <div class="row">
            <div class="col-md-5">
                <img src="{{asset('images/cover.png')}}" alt="Inclusiveworks Cover" width="666" class="img-fluid cover-vector">
            </div>

            <div class="col-md-7 d-flex align-items-center justify-content-center flex-column">
                <div class="welcome-message mb-5 mt-3">
                    <h2 class="welcome-message-text text-center">
                        When Talent Meets Opportunity <br>
                        Redefining Inclusion in the Workplace
                    </h2>
                    <p class="text-center">Explore Available Jobs Filtered to your Specific Needs</p>
                </div>
                <div class="container welcome-btn">
                    <a href="{{route('login_main_page')}}" class="login-btn">Login</a>
                    <a href="#register-section" class="register-btn">Register</a>
                </div>
            </div>
        </div>
    </section>

    <br><br><br><br><br><br><br>
    <!--Second Section-->
    <section class="container bg-light rounded-5 p-5" id="how-it-works">
        <div class="main-heading d-flex justify-content-center">
            <h2 class="how-it-works-heading">How it Works?</h2>
        </div>
        <br><br>

        <!--PWD Job Seekers Process-->
        <div class="pwd-process-heading text-center d-flex justify-content-start">
            <h3>PWD Job Seekers</h3>
        </div>
        <!--First Row-->
        <div class="pwd-process row">
            <div class="col-md-4 d-flex justify-content-center align-items-center mt-3">
                <div class="text-center pwdcards">
                    <img src="images/icons/create-profile.svg" alt="Person With Disabilities Create Profile Icon" width="80" class="img-fluid mt-3">
                    <h2 class="text-dark mt-3">1</h2>
                    <h4 class="text-dark mt-3">Create Profile</h4>
                </div>
            </div>

            <div class="col-md-4 d-flex justify-content-center align-items-center mt-3">
                <div class="text-center pwdcards">
                    <img src="images/icons/magnifying-glass.svg" alt="Person With Disabilities Magnifying glass Icon" width="80"
                        class="img-fluid mt-3">
                    <h2 class="text-dark mt-3">2</h2>
                    <h4 class="text-dark mt-3">Search Jobs</h4>
                </div>
            </div>

            <div class="col-md-4 d-flex justify-content-center align-items-center mt-3">
                <div class="text-center pwdcards">
                    <img src="images/icons/funnel-black.svg" alt="Person With Disabilities Funnel Icon" width="80"
                        class="img-fluid mt-3">
                    <h2 class="text-dark mt-3">3</h2>
                    <h4 class="text-dark mt-3">Jobs Filtered to Capabilities</h4>
                </div>
            </div>
        </div>
        <!--Second Row-->
        <div class="pwd-process row">
            <div class="col-md-4 d-flex justify-content-center align-items-center mt-3">
                <div class="text-center pwdcards">
                    <img src="images/icons/eye.svg" alt="Person With Disabilities Eye Icon" width="80"
                        class="img-fluid mt-3">
                    <h2 class="text-dark mt-3">4</h2>
                    <h4 class="text-dark mt-3">View Job Description</h4>
                </div>
            </div>
        
            <div class="col-md-4 d-flex justify-content-center align-items-center mt-3">
                <div class="text-center pwdcards">
                    <img src="images/icons/briefcase.svg" alt="Person With Disabilities Bried Case Icon" width="80"
                        class="img-fluid mt-3">
                    <h2 class="text-dark mt-3">5</h2>
                    <h4 class="text-dark mt-3">Apply for a Job</h4>
                </div>
            </div>
        
            <div class="col-md-4 d-flex justify-content-center align-items-center mt-3">
                <div class="text-center pwdcards">
                    <img src="images/icons/calendar-check.svg" alt="Person With Disabilities Calendar Icon" width="80"
                        class="img-fluid mt-3">
                    <h2 class="text-dark mt-3">6</h2>
                    <h4 class="text-dark mt-3">Schedule an Interview</h4>
                </div>
            </div>
        </div>

        <br><br><br><br>
        <!--Employers Process-->
        <div class="employer-process-heading text-center d-flex justify-content-start">
            <h3>Employers</h3>
        </div>
        <!--First Row-->
        <div class="pwd-process row">
            <div class="col-md-4 d-flex justify-content-center align-items-center mt-3">
                <div class="text-center employercards">
                    <img src="images/icons/create-profile-black.svg" alt="Person With Disabilities Create Profile Icon" width="80"
                        class="img-fluid mt-3">
                    <h2 class="mt-3">1</h2>
                    <h4 class="mt-3">Create Company Profile</h4>
                </div>
            </div>
        
            <div class="col-md-4 d-flex justify-content-center align-items-center mt-3">
                <div class="text-center employercards">
                    <img src="images/icons/note-pencil.svg" alt="Person With Disabilities Magnifying glass Icon" width="80"
                        class="img-fluid mt-3">
                    <h2 class="mt-3">2</h2>
                    <h4 class="mt-3">Job Posting</h4>
                </div>
            </div>
        
            <div class="col-md-4 d-flex justify-content-center align-items-center mt-3">
                <div class="text-center employercards">
                    <img src="images/icons/funnel-black.svg" alt="Person With Disabilities Funnel Icon" width="80"
                        class="img-fluid mt-3">
                    <h2 class="mt-3">3</h2>
                    <h4 class="mt-3">Filter Jobs based on Seekers Capabilities</h4>
                </div>
            </div>
        </div>
        <!--Second Row-->
        <div class="pwd-process row">
            <div class="col-md-6 d-flex justify-content-center  mt-3">
                <div class="text-center employercards">
                    <img src="images/icons/read-cv-logo.svg" alt="Person With Disabilities Eye Icon" width="80" class="img-fluid mt-3">
                    <h2 class="mt-3">4</h2>
                    <h4 class="mt-3">Manage Applicant Resumes</h4>
                </div>
            </div>
        
            <div class="col-md-6 d-flex justify-content-center  mt-3">
                <div class="text-center employercards">
                    <img src="images/icons/paper-plane-tilt.svg" alt="Person With Disabilities Bried Case Icon" width="80"
                        class="img-fluid mt-3">
                    <h2 class="mt-3">5</h2>
                    <h4 class="mt-3">Send Message for an Interview</h4>
                </div>
            </div>
        </div>
    </section>

    <!--Third Section-->
    <section class="container mt-5" id="register-section">
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="pwd-register-card text-center">
                    <img src="images/job-seekers-registration.png" alt="Job Seekers Illustration" class="img-fluid">
                    <p>Inclusiveworks platform is dedicated to helping PWD job seekers find meaningful employment opportunities tailored to their strengths and
                    aspirations. Explore a diverse range of job listings, connect with inclusive employers, and access resources to enhance
                    your career journey. Empowering your potential, one job at a time.</p>
                    <form action="{{route('jobseekers_personal_page')}}" method="GET">
                        @csrf
                        <button class="pwd-register-btn">Register as Job Seeker</button>
                    </form>
                </div>
            </div>

            <div class="col-md-6 mt-3">
                <div class="employer-register-card text-center">
                    <img src="images/employer-register-cover.png" alt="Employer Illustration" class="img-fluid">
                    <p>InclusiveWorks helps employers find talented PWD job seekers, promoting diversity and inclusion. Post job listings,
                    connect with skilled candidates, and access resources to support inclusive hiring. Enhance your workforce with unique
                    perspectives and abilities, fostering innovation and growth. Empower your organization with diversity and innovation.</p>
                    <form action="{{route('employer_company_page')}}" method="GET">
                        @csrf
                        <button class="employer-register-btn">Register as Employer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--Javascript-->
    <script src="{{asset('js/main-script.js')}}"></script>

    <!-- <script>
        let highContrast = document.getElementById('high-contrast');
        document.getElementById('high-contrast-list').addEventListener('click',()=>{
            if(highContrast.checked == true){
                localStorage.setItem("highContrastCond","true");
                console.log('On');
            } else {
                console.log('off');
                localStorage.setItem("highContrastCond", "false");
            }
        });
    </script> -->
    <script>
            document.addEventListener('DOMContentLoaded', (event) => {
            setTimeout(function() {
                var alertElement = document.getElementById('pwdAlert');
                if (alertElement) {
                    var alertInstance = new bootstrap.Alert(alertElement);
                    alertInstance.close();
                }
            }, 5000); // 5000 milliseconds = 5 seconds
        });
    </script>
</body>
</html>