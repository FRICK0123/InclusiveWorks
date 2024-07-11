<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWD Jobseekers Registration</title>

    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/pwd-register.css">

    <!--Bootstrap Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!--Bootstrap Links end-->
</head>

<body style="background-color:#E6F4F1;
;">
    <!--Overlays for full screen input-->
        <!--Firstname Overlay-->
        <div class="pwd-firstname-overlay align-items-center" id="pwd-firstname-overlay">
            <div id="pwd-firstname-close" class="text-center" tabindex="0">
                <img src="images/icons/x-circle-white.svg" alt="Close" width="50">
                <label class="text-white" style="cursor: pointer;">Close</label>
            </div>
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <label for="overlay-pwd-firstname" class="form-label text-white fw-bold align-self-start">First Name</label>
                <input type="text" class="form-control p-3" placeholder="Juan" id="overlay-pwd-firstname">
                <button class="btn btn-primary mt-3 p-2 w-75" id="pwd-firstname-submit" type="submit">Submit</button>
            </div>
        </div>
        <!--Firstname Overlay end-->
        <!--Lastname Overlay-->
        <div class="pwd-lastname-overlay align-items-center" id="pwd-lastname-overlay">
            <div id="pwd-lastname-close" class="text-center" tabindex="0">
                <img src="images/icons/x-circle-white.svg" alt="Close" width="50">
                <label class="text-white" style="cursor: pointer;">Close</label>
            </div>
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <label for="overlay-pwd-lastname" class="form-label text-white fw-bold align-self-start">Last Name</label>
                <input type="text" class="form-control p-3" placeholder="Dela Cruz" id="overlay-pwd-lastname">
                <button class="btn btn-primary mt-3 p-2 w-75" id="pwd-lastname-submit" type="submit">Submit</button>
            </div>
        </div>
        <!--Lastname Overlay end-->
        <!--Email Overlay-->
        <div class="pwd-email-overlay align-items-center" id="pwd-email-overlay">
            <div id="pwd-email-close" class="text-center" tabindex="0">
                <img src="images/icons/x-circle-white.svg" alt="Close" width="50">
                <label class="text-white" style="cursor: pointer;">Close</label>
            </div>
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <label for="overlay-pwd-email" class="form-label text-white fw-bold align-self-start">Email</label>
                <input type="text" class="form-control p-3" placeholder="juandelacruz@gmail.com" id="overlay-pwd-email">
                <button class="btn btn-primary mt-3 p-2 w-75" id="pwd-email-submit" type="submit">Submit</button>
            </div>
        </div>
        <!--Email Overlay end-->
        <!--Age Overlay-->
        <div class="pwd-age-overlay align-items-center" id="pwd-age-overlay">
            <div id="pwd-age-close" class="text-center" tabindex="0">
                <img src="images/icons/x-circle-white.svg" alt="Close" width="50">
                <label class="text-white" style="cursor: pointer;">Close</label>
            </div>
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <label for="overlay-pwd-age" class="form-label text-white fw-bold align-self-start">Age</label>
                <input type="number" class="form-control p-3" placeholder="21" id="overlay-pwd-age">
                <button class="btn btn-primary mt-3 p-2 w-75" id="pwd-age-submit" type="submit">Submit</button>
            </div>
        </div>
        <!--Age Overlay end-->
        <!--Contact Number Overlay-->
        <div class="pwd-contact-overlay align-items-center" id="pwd-contact-overlay">
            <div id="pwd-contact-close" class="text-center" tabindex="0">
                <img src="images/icons/x-circle-white.svg" alt="Close" width="50">
                <label class="text-white" style="cursor: pointer;">Close</label>
            </div>
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <label for="overlay-pwd-contact" class="form-label text-white fw-bold align-self-start">Age</label>
                <input type="text" class="form-control p-3" id="overlay-pwd-contact" placeholder="0905-667-8909" class="form-control mb-3" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">
                <button class="btn btn-primary mt-3 p-2 w-75" id="pwd-contact-submit" type="submit">Submit</button>
            </div>
        </div>
        <!--Contact Number Overlay end-->
        <!--Username Overlay-->
        <div class="pwd-username-overlay align-items-center" id="pwd-username-overlay">
            <div id="pwd-username-close" class="text-center" tabindex="0">
                <img src="images/icons/x-circle-white.svg" alt="Close" width="50">
                <label class="text-white" style="cursor: pointer;">Close</label>
            </div>
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <label for="overlay-pwd-username" class="form-label text-white fw-bold align-self-start">Username</label>
                <input type="text" class="form-control p-3" placeholder="Enter Username" id="overlay-pwd-username">
                <button class="btn btn-primary mt-3 p-2 w-75" id="pwd-username-submit" type="submit">Submit</button>
            </div>
        </div>
        <!--Username Overlay end-->
        <!--Password Overlay-->
        <div class="pwd-password-overlay align-items-center" id="pwd-password-overlay">
            <div id="pwd-password-close" class="text-center" tabindex="0">
                <img src="images/icons/x-circle-white.svg" alt="Close" width="50">
                <label class="text-white" style="cursor: pointer;">Close</label>
            </div>
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <label for="overlay-pwd-password" class="form-label text-white fw-bold align-self-start">Password</label>
                <input type="password" class="form-control p-3" placeholder="A-Z a-z 0-9 / * # @" id="overlay-pwd-password">
                <div class="form-check container mt-3 d-flex justify-content-start" id="showPclass">
                    <input class="form-check-input me-3" type="checkbox" id="showP">
                    <label class="form-check-label text-white" for="showP" style="cursor: pointer;">
                        Show Password
                    </label>
                </div>
                <button class="btn btn-primary mt-3 p-2 w-75" id="pwd-password-submit" type="submit">Submit</button>
            </div>
        </div>
        <!--Password Overlay end-->
        <!--Confirm Password Overlay-->
        <div class="pwd-confirm-password-overlay align-items-center" id="pwd-confirm-password-overlay">
            <div id="pwd-confirm-password-close" class="text-center" tabindex="0">
                <img src="images/icons/x-circle-white.svg" alt="Close" width="50">
                <label class="text-white" style="cursor: pointer;">Close</label>
            </div>
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <label for="overlay-pwd-confirm-password" class="form-label text-white fw-bold align-self-start">Confirm Password</label>
                <input type="password" class="form-control p-3" placeholder="A-Z a-z 0-9 / * # @" id="overlay-pwd-confirm-password">
                <div class="form-check container mt-3 d-flex justify-content-start" id="showConfirmclass">
                    <input class="form-check-input me-3" type="checkbox" id="showConfirm">
                    <label class="form-check-label text-white" for="showConfirm" style="cursor: pointer;">
                        Show Password
                    </label>
                </div>
                <button class="btn btn-primary mt-3 p-2 w-75" id="pwd-confirm-password-submit" type="submit">Submit</button>
            </div>
        </div>
        <!--Confirm Password Overlay end-->
        
        
    <!--Overlays for full screen input end-->

    <header>
        <nav>
            <!--Brand-->
            <a href="/" class="navbar-brand inclusive-brand ms-3" tabindex="1">InclusiveWorks</a>

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
                        src="images/icons/x-circle.svg" alt="Close" width="50"></button>
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
                        src="images/icons/x-circle.svg" alt="Close" width="50"></button>
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

    <!--PWD registration Form-->
    <section class="container-fluid mt-5">
        <div class="container d-flex flex-column justify-content-center" id="form-container">
            <h2 class="text-center">Register as Job Seeker</h2>
            <form action="{{route('jobseekers_personal_page_validation')}}" method="POST">
                @csrf
                <!--First Name-->
                <div class="row">
                    <div class="col-md-6">
                        <label for="pwd-firstname" class="form-label fw-bold">First Name:</label>
                        <input type="text" name="pwd-firstname" id="pwd-firstname" placeholder="Juan" class="form-control" >
                        @error('pwd-firstname')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                <!--Last Name-->
                    <div class="col-md-6">
                        <label for="pwd-lastname" class="form-label fw-bold">Last Name:</label>
                        <input type="text" name="pwd-lastname" id="pwd-lastname" placeholder="Dela Cruz" class="form-control">
                        @error('pwd-lastname')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <!--Email-->
                <label for="pwd-email" class="form-label fw-bold">Email:</label>
                <input type="text" name="pwd-email" id="pwd-email" placeholder="juandelacruz@gmail.com" class="form-control">
                @error('pwd-email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <!--Age-->
                <label for="pwd-age" class="form-label fw-bold mt-3">Age:</label>
                <input type="number" name="pwd-age" id="pwd-age" placeholder="20" class="form-control w-25">
                @error('pwd-age')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <!--Contact Number-->
                <label for="pwd-contact" class="form-label fw-bold mt-3">Contact Number:</label>
                <input type="text" name="pwd-contact" id="pwd-contact" placeholder="0905-667-8909" class="form-control">
                @error('pwd-contact')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <!--Username-->
                <label for="pwd-username" class="form-label fw-bold mt-3">Username:</label>
                <input type="text" name="pwd-username" id="pwd-username" placeholder="Enter Username" class="form-control">
                @error('pwd-username')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <!--Password-->
                <label for="pwd-password" class="form-label fw-bold mt-3">Password:</label>
                <input type="password" name="pwd-password" id="pwd-password" placeholder="Enter Password"
                    class="form-control">
                @error('pwd-password')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                
                <!--Confirm Password-->
                <label for="pwd-confirm-password" class="form-label fw-bold mt-3">Confirm Password:</label>
                <input type="password" name="pwd-confirm-password" id="pwd-confirm-password" placeholder="Confirm Password" class="form-control">
                @error('pwd-confirm-password')
                    <p class="text-danger">{{$message}}</p>
                @enderror
    
                <button class="btn btn-primary w-100 p-2 mb-3 fw-bold mt-3" type="submit" id="pwd-register-btn">Next</button>
            </form>
                <form action="/" method="GET">
                    @csrf
                    <button class="btn w-100 p-2 fw-bold" id="pwd-register-return-btn">Go back</button>
                </form>
        </div>
    </section>
    <!--PWD registration Form End-->


    <!--Javascript-->
    <script src="js/main-script.js"></script>

    <!--Overlay Functions-->
    <script src="js/pwd-register.js"></script>

</body>

</html>