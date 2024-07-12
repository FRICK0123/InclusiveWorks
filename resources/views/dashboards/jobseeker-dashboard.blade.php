<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobseekers</title>

    <link rel="stylesheet" href="{{asset('css/main-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/jobseeker-dashboard.css')}}">

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
            <!--Accessibility Tools Sidebar-->
            <div class="accessibility-tools text-center sidebar mt-2" data-bs-toggle="offcanvas" data-bs-target="#profile-sidebar" aria-controls="accessibility-tools">
                <a href="#" class="nav-link d-flex flex-column">
                    <div class="profile-img-wrapper">
                        <img src="{{asset('uploads/' . Session::get('pwd-profile'))}}" alt="Profile Image" class="profile-img">
                    </div>
                    <h6 class="text-white">{{Session::get('pwd-username')}}</h6>
                </a>
            </div>
            <!--Links-->
            <ul class="links d-none d-lg-flex">
                <li class="nav-item text-center">
                    <a href="#" class="nav-link">
                        <img src="{{asset('images/icons/house.svg')}}" alt="Home Icon" width="40">
                        <p class="link-label">Dashboard</p>
                    </a>
                </li>

                <li class="nav-item text-center">
                    <a href="#" class="nav-link">
                        <img src="{{asset('images/icons/user-gear.svg')}}" alt="Home Icon" width="40">
                        <p class="link-label">Pending Jobs</p>
                    </a>
                </li>
                
                <li class="nav-item text-center">
                    <a href="#" class="nav-link">
                        <img src="{{asset('images/icons/wrench.svg')}}" alt="Home Icon" width="40">
                        <p class="link-label">Tools Description</p>
                    </a>
                </li>

                <li class="nav-item text-center">
                    <a href="#" class="nav-link">
                        <img src="{{asset('images/icons/question.svg')}}" alt="Home Icon" width="40">
                        <p class="link-label">About Us</p>
                    </a>
                </li>

                <li class="nav-item text-center">
                    <a href="#" class="nav-link">
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
            <div class="sidebar d-lg-none me-3 text-center" data-bs-toggle="offcanvas" data-bs-target="#menucanvas" aria-controls="menucanvas">
                <a href="#" class="nav-link">
                    <img src="{{asset('images/icons/faders.svg')}}" alt="Accessibility Tools Icon">
                    <p class="link-label">Menu</p>
                </a>
            </div>
        </nav>

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
    <div class="offcanvas offcanvas-end" tabindex="-1" id="menucanvas" aria-labelledby="offcanvasExampleLabel">
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

    <!--Profile Details-->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="profile-sidebar" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header d-flex justify-content-between">
            <h4 class="offcanvas-title fw-5" id="offcanvasExampleLabel">Profile</h4>
            <div class="sidebar-close text-center">
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><img src="{{asset('images/icons/x-circle.svg')}}"
                    alt="Close" width="50"></button>
                <p>Close</p>
            </div>
        </div>
        <div class="offcanvas-body">
                <!--Profile Details-->
                <div class="container-fluid d-flex flex-column align-items-center">
                    <div class="profile-img-sidebar-wrapper">
                        <img src="{{asset('uploads/' . Session::get('pwd-profile'))}}" alt="Profile Image" class="profile-img-sidebar">
                    </div>
                    <div class="d-flex">
                        <h4 class="text-dark ms-5">{{Session::get('pwd-username')}}</h4>
                        <form action="" method="POST">
                            <button class="btn"><img src="images/icons/pencil-simple-line.svg" alt="Edit" width="20"></button>
                        </form>
                    </div>


                    <div class="container-fluid mt-3">
                        <label>Full Name:</label>
                        <div class="container-fluid d-flex justify-content-between align-items-center" id="profile-details">
                            <h5>{{Session::get('pwd-firstname')}} {{Session::get('pwd-lastname')}}</h5>
                            <form action="" method="POST">
                                <button class="btn"><img src="images/icons/pencil-simple-line.svg" alt="Edit"></button>
                            </form>
                        </div>
                    </div>

                    <div class="container-fluid mt-3">
                        <label>Email Address:</label>
                        <div class="container-fluid d-flex justify-content-between align-items-center" id="profile-details">
                            <h5>{{Session::get('pwd-email')}}</h5>
                            <form action="" method="POST">
                                <button class="btn"><img src="images/icons/pencil-simple-line.svg" alt="Edit"></button>
                            </form>
                        </div>
                    </div>

                    <div class="container-fluid mt-3">
                        <label>Contact Number:</label>
                        <div class="container-fluid d-flex justify-content-between align-items-center" id="profile-details">
                            <h5>{{Session::get('pwd-contact')}}</h5>
                            <form action="" method="POST">
                                <button class="btn"><img src="images/icons/pencil-simple-line.svg" alt="Edit"></button>
                            </form>
                        </div>
                    </div>

                    <div class="container-fluid mt-3">
                        <label>Address:</label>
                        <div class="container-fluid d-flex justify-content-between align-items-center" id="profile-details">
                            <h6>{{Session::get('pwd-address')}}</h6>
                            <form action="" method="POST">
                                <button class="btn"><img src="images/icons/pencil-simple-line.svg" alt="Edit"></button>
                            </form>
                        </div>
                    </div>

                    <div class="container-fluid mt-3">
                        <label>Educational Attainment:</label>
                        <div class="container-fluid d-flex justify-content-between align-items-center" id="profile-details">
                            <h5>{{Session::get('pwd-education')}}</h5>
                            <form action="" method="POST">
                                <button class="btn"><img src="images/icons/pencil-simple-line.svg" alt="Edit"></button>
                            </form>
                        </div>
                    </div>

                    <div class="container-fluid mt-3">
                        <label>Resume:</label>
                        <div class="container-fluid d-flex justify-content-between align-items-center" id="profile-details">
                            <a href="{{asset('uploads/' . Session::get('pwd-resume'))}}" target="_blank">{{Session::get('pwd-resume')}}</a>
                            <form action="" method="POST">
                                <button class="btn"><img src="images/icons/pencil-simple-line.svg" alt="Edit"></button>
                            </form>
                        </div>
                    </div>
                </div>
            {{-- <ul class="profile-sidebar">
                <!--Pointer-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="Pointer" id="pointer-list"> 
                    <h4 class="">Pointer</h4>
                    <label class="pointer-switch text-center">
                        <input type="checkbox" id="pointer">
                        <span class="slider round"></span>
                        <p id="pointer-off-on" class="mt-2">Off</p>
                    </label>
                </li>
            </ul> --}}
        </div>
    </div>
    <!--Accessibility Tools Sidebar Contents End-->
    </header>


    {{-- <h1>This is the Jobseekers Dashboard</h1>

    <form action="{{route('job_listings')}}" method="post">
        @csrf
        <button type="submit">Find Jobs</button>
    </form> --}}
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <script src="{{asset('js/main-script.js')}}"></script>
    <script>
        var loader = document.getElementById('preloader');
        window.addEventListener("load",function(){
            loader.style.display = "none";
        });
    </script>
</body>
</html>