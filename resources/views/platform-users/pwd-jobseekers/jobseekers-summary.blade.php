<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWD Jobseekers Professional Registration</title>

    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/pwd-register.css">

    <!--Bootstrap Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!--Bootstrap Links end-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body style="background-color:#E6F4F1;
;">
    <!--Overlays for full screen input-->
    <!--Address Overlay-->
    <div class="pwd-address-overlay align-items-center" id="pwd-address-overlay">
        <div id="pwd-address-close" class="text-center" tabindex="0">
            <img src="images/icons/x-circle-white.svg" alt="Close" width="50">
            <label class="text-white" style="cursor: pointer;">Close</label>
        </div>
        <div class="container d-flex flex-column justify-content-center align-items-center">
            {{-- <label for="overlay-pwd-address" class="form-label text-white fw-bold align-self-start">First Name</label>
            <input type="text" class="form-control p-3" placeholder="Juan" id="overlay-pwd-address"> --}}

            <!--Region-->
            <label class="form-label text-white fw-bold align-self-start mt-3">Region *</label>
            <select name="region" class="form-control form-control-md" id="region"></select>
            <input type="hidden" class="form-control form-control-md" name="region_text" id="region-text" required>
            <!--Province-->
            <label class="form-label text-white fw-bold align-self-start mt-3">Province *</label>
            <select name="province" class="form-control form-control-md" id="province"></select>
            <input type="hidden" class="form-control form-control-md" name="province_text" id="province-text" required>
            <!--City/Municipality-->
            <label class="form-label text-white fw-bold align-self-start mt-3">City / Municipality *</label>
            <select name="city" class="form-control form-control-md" id="city"></select>
            <input type="hidden" class="form-control form-control-md" name="city_text" id="city-text" required>
            <!--Barangay-->
            <label class="form-label text-white fw-bold align-self-start mt-3">Barangay *</label>
            <select name="barangay" class="form-control form-control-md" id="barangay"></select>
            <input type="hidden" class="form-control form-control-md" name="barangay_text" id="barangay-text" required>
            <!--Street-->
            <label for="street-text" class="form-label text-white fw-bold align-self-start mt-3">Street (Optional)</label>
            <input type="text" class="form-control form-control-md" name="street_text" id="street-text">

            <button class="btn btn-primary mt-3 p-2 w-75" id="pwd-address-submit" type="submit">Submit</button>
        </div>
    </div>
    <!--Address Overlay end-->

    <!--Overlays for full screen input end-->

    <header>
        <nav>
            <!--Brand-->
            <a href="#" class="navbar-brand inclusive-brand ms-3" tabindex="1">InclusiveWorks</a>

            <!--Accessibility Tools Sidebar-->
            <div class="accessibility-tools text-center d-none d-lg-block sidebar" data-bs-toggle="offcanvas"
                data-bs-target="#accessibility-tools" aria-controls="accessibility-tools">
                <a href="#" class="nav-link">
                    <img src="images/icons/faders.svg" alt="Accessibility Tools Icon">
                    <p class="link-label">Accessibility Tools</p>
                </a>
            </div>

            <!--Menu Sidebar Homepage-->
            <div class="sidebar d-lg-none me-3 text-center" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <a href="#" class="nav-link">
                    <img src="images/icons/faders.svg" alt="Accessibility Tools Icon">
                    <p class="link-label">Menu</p>
                </a>
            </div>
        </nav>
    </header>

    <!--Accessibility Tools Sidebar Contents-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="accessibility-tools" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header d-flex justify-content-between">
            <h4 class="offcanvas-title fw-5" id="offcanvasExampleLabel">Accessibility Tools</h4>
            <div class="sidebar-close text-center">
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><img
                        src="../images/icons/x-circle.svg" alt="Close" width="50"></button>
                <p>Close</p>
            </div>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="tools-lists">
                <!--Pointer-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="Pointer"
                    id="pointer-list">
                    <h4 class="">Pointer</h4>
                    <label class="pointer-switch text-center">
                        <input type="checkbox" id="pointer">
                        <span class="slider round"></span>
                        <p id="pointer-off-on" class="mt-2">Off</p>
                    </label>
                </li>

                <!--Screen Reader-->
                <li class="container-fluid d-flex justify-content-between align-items-center" aria-label="Screen Reader"
                    id="screen-reader-list">
                    <h4 class="">Screen Reader</h4>
                    <label class="screen-reader-switch text-center">
                        <input type="checkbox" id="screen-reader">
                        <span class="slider round"></span>
                        <p id="screen-reader-off-on" class="mt-2">Off</p>
                    </label>
                </li>

                <!--Font Customization-->
                <li class="container-fluid d-flex justify-content-between align-items-center"
                    aria-label="Font Customization" id="font-custom-list">
                    <h4 class="">Font Customization</h4>
                    <label class="font-custom-switch text-center">
                        <input type="checkbox" id="font-custom">
                        <span class="slider round"></span>
                        <p id="font-custom-off-on" class="mt-2">Off</p>
                    </label>
                </li>

                <!--High Contrast-->
                <li class="container-fluid d-flex justify-content-between align-items-center"
                    aria-label="High Contrast Mode" id="high-contrast-list">
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
                        src="../images/icons/x-circle.svg" alt="Close" width="50"></button>
                <p>Close</p>
            </div>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="tools-lists">
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
                <li class="container-fluid d-flex justify-content-between align-items-center"
                    aria-label="High Contrast Mode" id="menu-high-contrast-list">
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

    <!--PWD Professional registration Form-->
    <section class="container-fluid mt-5">
        <div class="container d-flex flex-column justify-content-center" id="form-container">
            <h2 class="text-center">Job Seeker Summary</h2>
            <form action="{{route('jobseekers_summary_page_validation')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!--Firstname-->
                <label for="pwd-firstname" class="form-label fw-bold">First Name:</label>
                <input type="text" id="pwd-firstname" class="form-control mb-3" disabled value="{{Session::get('pwd-firstname')}}" >
                <input type="hidden" name="pwd-firstname" value="{{Session::get('pwd-firstname')}}" >

                <!--Lastname-->
                <label for="pwd-lastname" class="form-label fw-bold">Last Name:</label>
                <input type="text" id="pwd-lastname" class="form-control mb-3" disabled value="{{Session::get('pwd-lastname')}}" >
                <input type="hidden" name="pwd-lastname" value="{{Session::get('pwd-lastname')}}">

                <!--Email-->
                <label for="pwd-email" class="form-label fw-bold">Email:</label>
                <input type="text" id="pwd-email" class="form-control mb-3" disabled value="{{Session::get('pwd-email')}}">
                <input type="hidden" name="pwd-email" value="{{Session::get('pwd-email')}}">

                <!--Age-->
                <label for="pwd-age" class="form-label fw-bold">Age:</label>
                <input type="text" id="pwd-age" class="form-control mb-3 w-25" disabled value="{{Session::get('pwd-age')}}">
                <input type="hidden" name="pwd-age" value="{{Session::get('pwd-age')}}" >

                <!--Contact Number-->
                <label for="pwd-contact" class="form-label fw-bold">Contact Number:</label>
                <input type="text" id="pwd-contact" class="form-control mb-3" disabled value="{{Session::get('pwd-contact')}}">
                <input type="hidden" name="pwd-contact" value="{{Session::get('pwd-contact')}}">

                <!--Username-->
                <label for="pwd-username" class="form-label fw-bold">Username:</label>
                <input type="text" id="pwd-username" class="form-control mb-3" disabled value="{{Session::get('pwd-username')}}">
                <input type="hidden" name="pwd-username" value="{{Session::get('pwd-username')}}" >

                <!--Password-->
                <label for="pwd-password" class="form-label fw-bold">Password:</label>
                <input type="password" id="pwd-password" class="form-control" disabled value="{{Session::get('pwd-password')}}">
                <input type="hidden" name="pwd-password" value="{{Session::get('pwd-password')}}" >

                <div class="showPass d-flex mb-3" id="showPass">
                    <label for="showPassword" class="fw-bold me-2">Show Password:</label>
                    <input type="checkbox" id="showPassword" style="width: 20px">
                </div>

                <!--Address-->
                <label for="pwd-address" class="form-label fw-bold">Address:</label>
                <input type="text" id="pwd-address" class="form-control mb-3" disabled value="{{Session::get('pwd-address')}}">
                <input type="hidden" name="pwd-address" value="{{Session::get('pwd-address')}}">

                <!--Educational Attainment-->
                <label for="pwd-education" class="form-label fw-bold">Highest Educational Attainment:</label>
                <input type="text" id="pwd-education" class="form-control mb-4" disabled value="{{Session::get('pwd-education')}}">
                <input type="hidden" name="pwd-education" value="{{Session::get('pwd-education')}}" >

                <!--Resume-->
                @if(Session::has('pwd-resume'))
                    @php
                        $filePath = asset('uploads/' . Session::get('pwd-resume'));
                        $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
                    @endphp

                    <h3>Resume Preview</h3>
                    
                    @if($fileExtension === 'pdf')
                        <!-- Display PDF using PDF.js -->
                        <iframe src="{{ asset('pdfjs/web/viewer.html') }}?file={{ urlencode($filePath) }}" style="width:100%; height:500px;" frameborder="0"></iframe>
                    @endif

                    <input type="hidden" name="pwd-resume" id="pwd-resume" value="{{ Session::get('pwd-resume') }}">
                @else
                    <p>No resume uploaded.</p>
                @endif

                <!--Disabilities-->
                <label for="pwd-disability" class="form-label fw-bold mt-2">Disability:</label>
                <input type="text" id="pwd-disability" class="form-control mb-3" disabled value="{{Session::get('pwd-disability')}}">
                <input type="hidden" name="pwd-disability" value="{{Session::get('pwd-disability')}}" >

                <!--Profile Image-->
                <label for="pwd-profile" class="form-label fw-bold">Profile Image:</label>
                <a href="{{ asset('uploads/' . Session::get('pwd-profile')) }}" target="_blank">1719821155.WIN_20240701_15_02_58_Pro.jpg</a>
                <input type="hidden" name="pwd-profile" id="pwd-profile" value="{{Session::get('pwd-profile')}}"><br>

                <!--Usertype-->
                <input type="hidden" value="jobseeker" name="usertype">

                <button class="btn btn-primary w-100 p-2 mb-3 mt-3 fw-bold" type="submit"
                    id="pwd-summary-btn">Register</button>

            </form>
                {{-- <form action="#" method="post"> --}}
                    {{-- @csrf --}}
                    <button class="btn w-100 p-2 fw-bold" type="button" id="pwd-register-return-btn">Go back</button>
                {{-- </form> --}}
        </div>
    </section>
    <!--PWD Professional registration Form End-->


    <!--Javascript-->
    <script src="js/main-script.js"></script>
    <script>
        document.getElementById('pwd-register-return-btn').addEventListener('click',()=>{
            window.history.back();
        });

        document.getElementById('showPass').addEventListener('click',()=>{
            let showPassword = document.getElementById('showPassword');
            let pwd_password = document.getElementById('pwd-password');
            if(showPassword.checked == true){
                pwd_password.type = 'text';
            } else {
                pwd_password.type = 'password';
            }
        });
    </script>

</body>

</html>