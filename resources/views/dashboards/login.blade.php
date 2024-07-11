<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/loginform.css">

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
        <!--Login Username Overlay-->
            <div class="login-username-overlay align-items-center" id="login-username-overlay">
                <div id="login-username-close" class="text-center" tabindex="0">
                    <img src="images/icons/x-circle-white.svg" alt="Close" width="50">
                    <label class="text-white" style="cursor: pointer;">Close</label>
                </div>
                <div class="container d-flex flex-column justify-content-center align-items-center">
                    <label for="overlay-login-username" class="form-label text-white fw-bold align-self-start">Username</label>
                    <input type="text" class="form-control p-3" placeholder="Enter Username" id="overlay-login-username">
                    <button class="btn btn-primary mt-3 p-2 w-75" id="login-username-submit" type="submit">Submit</button>
                </div>
            </div>
        <!--Login Username Overlay end-->
        
        <!--Login Password Overlay-->
        <div class="login-password-overlay align-items-center" id="login-password-overlay">
            <div id="login-password-close" class="text-center" tabindex="0">
                <img src="images/icons/x-circle-white.svg" alt="Close" width="50">
                <label class="text-white" style="cursor: pointer;">Close</label>
            </div>
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <label for="overlay-login-password" class="form-label text-white fw-bold align-self-start">Password</label>
                <input type="password" class="form-control p-3" placeholder="Enter Password" id="overlay-login-password">
                <div class="form-check container mt-3 d-flex justify-content-start" id="showPclass">
                    <input class="form-check-input me-3" type="checkbox" id="showP">
                    <label class="form-check-label text-white" for="showP" style="cursor: pointer;">
                        Show Password
                    </label>
                </div>
                <button class="btn btn-primary mt-3 p-2 w-75" id="login-password-submit" type="submit">Submit</button>
            </div>
        </div>
        <!--Login Password Overlay end-->
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

    <!--Login Form-->
        <section class="container-fluid mt-5">
            <div class="container d-flex flex-column justify-content-center" id="form-container">
                <h2 class="text-center">Log in</h2>
                <form action="{{route('login_authentication')}}" method="post">
                    @csrf
                    <label for="login-username" class="form-label fw-bold">Username:</label>
                    <input type="text" name="username" id="login-username" placeholder="Enter Username" class="form-control mb-3" required>

                    <label for="login-password" class="form-label fw-bold">Password:</label>
                    <input type="password" name="password" id="login-password" placeholder="Enter Password" class="form-control mb-3" required>
                    
                    <button class="btn btn-primary w-100 p-2 mb-3 fw-bold" type="submit" id="login-btn">Log in</button>
                    <a href="/" class="btn w-100 p-2 fw-bold" type="button" id="login-return-btn">Go back</a>
                </form>
            </div>
        </section>
    <!--Login Form End-->

    <!--Javascript-->
    <script src="js/main-script.js"></script>

    <!--Javascript for Overlays-->
    <script src="js/loginform.js"></script>
    
    <!--Script for Tool Switches appliying localStorage-->
    <script>
        const highContrastCond = localStorage.getItem("highContrastCond");
        let highContrast = document.getElementById('high-contrast');
        if(highContrastCond == "true"){
            highContrast.checked = true;
            document.getElementById('high-contrast-off-on').innerHTML = "On";
        } else {
            highContrast = false;
            document.getElementById('high-contrast-off-on').innerHTML = "Off";
        }
    </script>
</body>

</html>