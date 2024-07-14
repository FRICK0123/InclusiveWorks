<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Jobseekers</title>

    <link rel="stylesheet" href="{{asset('css/main-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/jobseeker-dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/jobstyle.css')}}">

    <!--Bootstrap Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!--Bootstrap Links end-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                        <img src="{{asset('images/icons/chats-circle.svg')}}" alt="Home Icon" width="40">
                        <p class="link-label">Messages</p>
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
                    <p class="link-label">Menu</p>
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
                <h4 class="offcanvas-title fw-5" id="offcanvasExampleLabel">Menu</h4>
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
                    <a href="#" class="container-fluid d-flex justify-content-between align-items-center">
                        <h4 class="">Home</h4>
                    </a>
                    <!--How it Works?-->
                    <a href="#" class="container-fluid d-flex justify-content-between align-items-center">
                        <h4 class="">Pending Jobs</h4>
                    </a>
                    <!--Tools Description-->
                    <a href="#" class="container-fluid d-flex justify-content-between align-items-center">
                        <h4 class="">Messages</h4>
                    </a>
                    <!--About Us-->
                    <a href="#" class="container-fluid d-flex justify-content-between align-items-center">
                        <h4 class="">About Us</h4>
                    </a>
                    <!--Contact Us-->
                    <a href="#" class="container-fluid d-flex justify-content-between align-items-center">
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
                    <!--Profile Image-->
                        <div class="container-fluid d-flex flex-column align-items-center">
                            <div class="profile-img-sidebar-wrapper">
                                <img src="{{asset('uploads/' . Session::get('pwd-profile'))}}" alt="Profile Image" class="profile-img-sidebar">
                            </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit-profile-image-modal">Edit Profile Image</a>
                    <!--Profile Image End-->
                    
                    <!--Username-->
                        <div class="d-flex mt-3">
                            <h4 class="text-dark ms-5">{{Session::get('pwd-username')}}</h4>
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#edit-username-modal"><img src="{{asset('images/icons/pencil-simple-line.svg')}}" alt="Edit" width="20"></button>
                        </div>
                    <!--Username End-->
                    
                    <!--Fullname-->
                        <div class="container-fluid mt-3">
                            <label>Full Name:</label>
                            <div class="container-fluid d-flex justify-content-between align-items-center" id="profile-details">
                                <h5>{{Session::get('pwd-firstname')}} {{Session::get('pwd-lastname')}}</h5>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#edit-fullname-modal"><img src="{{asset('images/icons/pencil-simple-line.svg')}}" alt="Edit"></button>
                            </div>
                        </div>
                    <!--Fullname End-->
                        <div class="container-fluid mt-3">
                            <label>Email Address:</label>
                            <div class="container-fluid d-flex justify-content-between align-items-center" id="profile-details">
                                <h5>{{Session::get('pwd-email')}}</h5>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#edit-email-modal"><img src="{{asset('images/icons/pencil-simple-line.svg')}}" alt="Edit"></button>
                            </div>
                        </div>
                    <!--Contact Number-->
                        <div class="container-fluid mt-3">
                            <label>Contact Number:</label>
                            <div class="container-fluid d-flex justify-content-between align-items-center" id="profile-details">
                                <h5>{{Session::get('pwd-contact')}}</h5>
                                <button class="btn" data-bs-target="#edit-contact-modal" data-bs-toggle="modal"><img src="{{asset('images/icons/pencil-simple-line.svg')}}" alt="Edit"></button>
                            </div>
                        </div>
                    <!--Contact Number End-->

                    <!--Address-->
                        <div class="container-fluid mt-3">
                            <label>Address:</label>
                            <div class="container-fluid d-flex justify-content-between align-items-center" id="profile-details">
                                <h6>{{Session::get('pwd-address')}}</h6>
                                <button class="btn" data-bs-target="#edit-address-modal" data-bs-toggle="modal"><img src="{{asset('images/icons/pencil-simple-line.svg')}}" alt="Edit"></button>
                            </div>
                        </div>
                    <!--Address End-->
                        <div class="container-fluid mt-3">
                            <label>Educational Attainment:</label>
                            <div class="container-fluid d-flex justify-content-between align-items-center" id="profile-details">
                                <h5>{{Session::get('pwd-education')}}</h5>
                                {{-- <form action="" method="POST">
                                    <button class="btn"><img src="{{asset('images/icons/pencil-simple-line.svg')}}" alt="Edit"></button>
                                </form> --}}
                            </div>
                        </div>

                        <div class="container-fluid mt-3">
                            <label>Resume:</label>
                            <div class="container-fluid d-flex justify-content-between align-items-center" id="profile-details">
                                <a href="{{asset('uploads/' . Session::get('pwd-resume'))}}" target="_blank">{{Session::get('pwd-resume')}}</a>
                                {{-- <form action="" method="POST">
                                    <button class="btn"><img src="{{asset('images/icons/pencil-simple-line.svg')}}" alt="Edit"></button>
                                </form> --}}
                            </div>
                        </div>

                        <div class="container mt-5">
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger p-3">Logout</button>
                            </form>
                        </div>
                    </div>
            </div>
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
        </div>

    </header>

<!--Profile Image Edit Modal-->
    <div class="modal fade" id="edit-profile-image-modal" tabindex="-1" aria-labelledby="Edit Profile Image" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Edit Profile Image</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('profile-image-update')}}" method="POST" enctype="multipart/form-data" class="container-fluid d-flex flex-column justify-content-center align-items-center mt-5">
                        @csrf
                            <label for="profile-pic" class="form-label">
                                <div class="edit-profile-img-wrapper">
                                    <img src="{{asset('uploads/' . Session::get('pwd-profile'))}}" alt="Profile Image" class="edit-profile-img" id="edit-profile-img">
                                </div>
                            </label>

                            <div class="mt-3 container">
                                <input class="form-control" type="file" id="profile-pic" accept=".jpg,.jpeg,.png" name="update-profile">
                                @error('update-profile')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mt-3 container-fluid d-flex justify-content-between row">
                                <div class="col-md-6 mt-3 text-center">
                                    <button type="button" class="btn btn-danger w-100 text-center" data-bs-dismiss="modal">Close</button>
                                </div>

                                <div class="col-md-6 mt-3 text-center">
                                    <button type="submit" class="btn btn-primary w-100 text-center">Save changes</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--Profile Image Edit Modal End-->

<!--Username Edit Modal-->
    <div class="modal fade" id="edit-username-modal" tabindex="-1" aria-labelledby="Edit Username" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Edit Username</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('username-update')}}" method="POST" class="container-fluid d-flex flex-column mt-5">
                        @csrf

                        <label for="username" class="fw-bold">Edit Username: </label>
                        <input type="text" class="form-control border border-dark" name="edit-username" id="username" placeholder="Enter New Username">
                        @error('edit-username')
                            <p class="text-danger">{{$message}}</p>
                        @enderror

                        <div class="mt-3 container-fluid d-flex justify-content-between row">
                            <div class="col-md-6 mt-3 text-center">
                                <button type="button" class="btn btn-danger w-100 text-center" data-bs-dismiss="modal">Close</button>
                            </div>

                            <div class="col-md-6 mt-3 text-center">
                                <button type="submit" class="btn btn-primary w-100 text-center">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--Username Edit Modal End-->

<!--Fullname Edit Modal-->
    <div class="modal fade" id="edit-fullname-modal" tabindex="-1" aria-labelledby="Edit Full Name" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Edit Fullname</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('fullname-update')}}" method="POST" class="container-fluid d-flex flex-column mt-5">
                        @csrf

                        <label for="firstname" class="fw-bold">Edit Firstname: </label>
                        <input type="text" class="form-control border border-dark" name="edit-firstname" id="firstname" placeholder="Enter New Firstname" required>
                        <br>
                        <label for="lastname" class="fw-bold">Edit Lastname: </label>
                        <input type="text" class="form-control border border-dark" name="edit-lastname" id="lastname" placeholder="Enter New Lastname" required>


                        <div class="mt-3 container-fluid d-flex justify-content-between row">
                            <div class="col-md-6 mt-3 text-center">
                                <button type="button" class="btn btn-danger w-100 text-center" data-bs-dismiss="modal">Close</button>
                            </div>

                            <div class="col-md-6 mt-3 text-center">
                                <button type="submit" class="btn btn-primary w-100 text-center">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--Fullname Edit Modal End-->

<!--Email Edit Modal-->
    <div class="modal fade" id="edit-email-modal" tabindex="-1" aria-labelledby="Edit Email" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Edit Email</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('email-update')}}" method="POST" class="container-fluid d-flex flex-column mt-5">
                        @csrf

                        <label for="email" class="fw-bold">Edit Email: </label>
                        <input type="email" class="form-control border border-dark" name="edit-email" id="email" placeholder="Enter New Email" required>

                        <div class="mt-3 container-fluid d-flex justify-content-between row">
                            <div class="col-md-6 mt-3 text-center">
                                <button type="button" class="btn btn-danger w-100 text-center" data-bs-dismiss="modal">Close</button>
                            </div>

                            <div class="col-md-6 mt-3 text-center">
                                <button type="submit" class="btn btn-primary w-100 text-center">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--Email Edit Modal End-->

<!--Contact Edit Modal-->
    <div class="modal fade" id="edit-contact-modal" tabindex="-1" aria-labelledby="Edit Contact Number" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Edit Contact Number</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('contact-update')}}" method="POST" class="container-fluid d-flex flex-column mt-5">
                        @csrf

                        <label for="contact" class="fw-bold">Edit Contact Number: </label>
                        <input type="text" class="form-control border border-dark" name="edit-contact" id="contact" placeholder="{{Session::get('pwd-contact')}}" pattern="\d{4}-\d{3}-\d{4}" required>

                        <div class="mt-3 container-fluid d-flex justify-content-between row">
                            <div class="col-md-6 mt-3 text-center">
                                <button type="button" class="btn btn-danger w-100 text-center" data-bs-dismiss="modal">Close</button>
                            </div>

                            <div class="col-md-6 mt-3 text-center">
                                <button type="submit" class="btn btn-primary w-100 text-center">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--Contact Edit Modal End-->

<!--Address Edit Modal-->
    <div class="modal fade" id="edit-address-modal" tabindex="-1" aria-labelledby="Edit Address" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Edit Address</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('address-update')}}" method="POST" class="container-fluid d-flex flex-column mt-5">
                        @csrf

                        <!--Address-->
                        <label for="pwd-address" class="form-label fw-bold">Address:</label>
                        <input type="text" name="edit-address" id="pwd-address" placeholder="Address" class="form-control">

                        <div class="mt-3 container-fluid d-flex justify-content-between row">
                            <div class="col-md-6 mt-3 text-center">
                                <button type="button" class="btn btn-danger w-100 text-center" data-bs-dismiss="modal">Close</button>
                            </div>

                            <div class="col-md-6 mt-3 text-center">
                                <button type="submit" class="btn btn-primary w-100 text-center">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--Address Edit Modal End-->

    <!--Job Listings-->
    <section class="container-fluid mt-5 mb-5">
        <div class="container">
            <form action="{{route('jobseeker_dashboard_search')}}" method="POST" class="input-group mb-3 shadow" id="job_search">
                @csrf
                <input type="text" class="form-control p-3 rounded-3 bg-light" placeholder="Search Jobs" name="jobSearch">
                <button class="input-group-text btn btn-primary" type="submit">Search</button>
            </form>
        </div>
        <div class="container" id="searchResults">
            <div class="row g-4">
                @foreach ($jobListing as $index => $item)
                    <div class="col-md-6">
                        <div class="p-3 border border-1 border-dark rounded-3 bg-light shadow">
                            <div class="container-fluid d-flex justify-content-between">
                                <img src="{{asset('uploads/employers/' . $item['company-logo'])}}" alt="Company Logo" class="img-fluid" width="50" style="border-radius: 50%">
                                <label class="mt-3">Posted {{$item->created_at->diffForHumans()}}</label>
                            </div>
                            
                            <span class="fw-bold">{{$item['company-name']}}</span>

                            <h2 class="mt-3 fw-bold">{{$item['job-title']}}</h2>
                            <label class="mt-3 fw-bold">Job Description:</label>
                            <p class="truncate">{{$item['job-description']}}</p>

                            <label class="mt-3 fw-bold">Salary Range:</label>
                            <p>₱{{$item['salary-range-start']}} to ₱{{$item['salary-range-end']}} {{$item['salary-frequency']}}</p>

                            <form action="{{route('view_job',$item['jobID'])}}" method="post" class="d-flex justify-content-end align-items-baseline">
                                @csrf
                                <button class="btn btn-primary mt-3 p-2 w-50" id="view-job-btn">View Job</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script src="{{asset('js/main-script.js')}}"></script>
    <script src="{{asset('js/dashboards.js')}}"></script>
    <!--Philippine Address Selectors-->
    <script src="{{asset('js/ph-address-selector.js')}}"></script>
</body>
</html>