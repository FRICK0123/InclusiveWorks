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
            <h2 class="text-center">Job Seeker Professional Information</h2>
            <form action="{{route('jobseekers_professional_page_validation')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!--Address-->
                <label for="pwd-address" class="form-label fw-bold">Address:</label>
                <input type="text" name="pwd-address" id="pwd-address" placeholder="Address" class="form-control">
                @error('pwd-address')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <!--Educational Attainment-->
                <label for="pwd-education" class="form-label fw-bold mt-3">Highest Educational Attainment:</label>
                <select name="pwd-education" id="pwd-education" class="form-control form-select">
                    <option value="">Select Educational Attainment</option>
                    <option value="high school">High School Graduate</option>
                    <option value="vocational">Vocational</option>
                    <option value="undergraduate">Undergraduate</option>
                    <option value="associate degree">Associate Degree</option>
                    <option value="college">College Graduate</option>
                    <option value="post graduate">Post Graduate</option>
                    <option value="none">None</option>
                </select>
                @error('pwd-education')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <!--Upload Resume-->
                <label for="pwd-resume" class="form-label fw-bold mt-3">Upload Resume(Accepts .doc .docx .pdf):</label>
                <input class="form-control" type="file" id="pwd-resume" name="pwd-resume" accept=".pdf">
                @error('pwd-resume')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <button class="btn btn-primary w-100 p-2 mb-3 mt-3 fw-bold" type="submit"
                    id="pwd-address-btn">Next</button>


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

    <!--Overlay Functions-->
    <script src="js/pwd-professional.js"></script>

    <!--Philippine Address Selectors-->
    <script src="js/ph-address-selector.js"></script>

</body>

</html>