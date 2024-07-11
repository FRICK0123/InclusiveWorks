<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employer Registration</title>
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/pwd-register.css">
    <link rel="stylesheet" href="css/employers.css">

    <!--Bootstrap Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!--Bootstrap Links end-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
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

    <header>
        <nav>
            <!--Brand-->
            <a href="/" class="navbar-brand inclusive-brand ms-3" tabindex="1">InclusiveWorks</a>
        </nav>
    </header>

    <section class="container-fluid mt-5 mb-5">
        <div class="d-flex flex-column container p-3" id="employer-company-container">
            <h1 class="text-center mb-5 mt-5">Employer's Company and Registration Details</h1>

            <form action="{{route('employer_company_page_validation')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="company-name" class="fw-bold">Company Name:</label>
                <input type="text" placeholder="Company Name" name="company" class="form-control" id="company-name">
                @error('company')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <br>
                <label for="company-logo" class="fw-bold">Company Logo:</label>
                <input type="file" placeholder="Company Logo" name="company-logo" id="company-logo" class="form-control">
                @error('company-logo')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <br>
                <label for="company-industry" class="fw-bold">Company Industry:</label>
                <select name="company-industry" class="form-select" id="company-industry">
                    <option value="">Select Company Industry</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Customer Service">Customer Service</option>
                    <option value="Administration and Office Support">Administration and Office Support</option>
                    <option value="Education">Education</option>
                    <option value="Healthcare">Healthcare</option>
                    <option value="Creative Arts and Design">Creative Arts and Design</option>
                    <option value="Financial Services">Financial Services</option>
                    <option value="Hospitality and Tourism">Hospitality and Tourism</option>
                    <option value="Social Services">Social Services</option>
                    <option value="Manufacturing and Production">Manufacturing and Production</option>
                    <option value="Retail">Retail</option>
                    <option value="Transportation and Logistics">Transportation and Logistics</option>
                    <option value="Environmental Services">Environmental Services</option>
                    <option value="Construction and Engineering">Construction and Engineering</option>
                    <option value="Marketing and Advertising">Marketing and Advertising</option>
                    <option value="Sales and Business Development">Sales and Business Development</option>
                    <option value="Legal Services">Legal Services</option>
                    <option value="Agriculture and Farming">Agriculture and Farming</option>
                    <option value="Media and Communication">Media and Communication</option>
                    <option value="Non-Profit and Advocacy Organizations">Non-Profit and Advocacy Organizations</option>
                </select>
                @error('company-industry')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <br>
                <label for="company-address" class="fw-bold">Company Address</label>
                <input type="text" name="company-address" id="pwd-address" placeholder="Address" class="form-control" id="company-address">
                @error('company-address')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <br>
                <label for="company-email" class="fw-bold">Company Email Address</label>
                <input type="text" placeholder="Official Email Address" name="company-email" class="form-control" id="company-email">
                @error('company-email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <br>
                <label for="company-contact" class="fw-bold">Company Contact Number</label>
                <input type="text" placeholder="Company Contact Number" name="company-contact" class="form-control" id="company-contact">
                @error('company-contact')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <br>
                <label for="company-description" class="fw-bold">Company Description</label>
                <textarea name="company-description" placeholder="Provide Company Description" id="company-description" class="form-control"></textarea>
                @error('company-description')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <br>
                <label for="company-username" class="fw-bold">Username</label>
                <input type="text" placeholder="Username" name="company-username" id="company-username" class="form-control">
                @error('company-username')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <br>
                <label for="company-password" class="fw-bold">Password:</label>
                <input type="password" placeholder="password" name="company-password" id="company-password" class="form-control">
                @error('company-password')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="form-check" id="company_pass">
                    <input class="form-check-input" type="checkbox" id="show_company_password">
                    <label class="form-check-label" for="show_company_password">
                        Show Password
                    </label>
                </div>
                <br>
                <label for="confirm-password" class="fw-bold">Confirm Password:</label>
                <input type="password" placeholder="Confirm Password" name="company-confirm-password" id="confirm-password" class="form-control">
                @error('company-confirm-password')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="form-check" id="confirm_pass">
                    <input class="form-check-input" type="checkbox" id="show_confirm_password">
                    <label class="form-check-label" for="show_confirm_password">
                        Show Password
                    </label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary w-100">Next</button>
                <button type="button" class="btn btn-dark w-100 mt-3" id="employer_goback">Go back</button>
            </form>
        </div>
    </section>

    <!--Overlay Functions-->
    <script src="js/pwd-professional.js"></script>

    <!--Philippine Address Selectors-->
    <script src="js/ph-address-selector.js"></script>
    <script>
        document.getElementById('employer_goback').addEventListener('click',()=>{
            window.history.back();
        });
        let show_company_password = document.getElementById('show_company_password');
        let show_confirm_password = document.getElementById('show_confirm_password');
        let company_password = document.getElementById('company-password');
        let confirm_password = document.getElementById('confirm-password');

        document.getElementById('company_pass').addEventListener('click',()=>{
            if(show_company_password.checked == true){
                company_password.type = 'text'
            } else {
                company_password.type = 'password'
            }
        });

        document.getElementById('confirm_pass').addEventListener('click',()=>{
            if(show_confirm_password.checked == true){
                confirm_password.type = 'text'
            } else {
                confirm_password.type = 'password'
            }
        });

    </script>
</body>
</html>