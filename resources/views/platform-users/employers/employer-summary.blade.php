<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employer Details Summary</title>
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/employers.css">

    <!--Bootstrap Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!--Bootstrap Links end-->
</head>
<body>
<body>
    <header>
        <nav>
            <!--Brand-->
            <a href="/" class="navbar-brand inclusive-brand ms-3" tabindex="1">InclusiveWorks</a>
        </nav>
    </header>
    <section class="container-fluid mt-5 mb-5">
        <div class="container d-flex flex-column p-3" id="employer-summary">
            <h1 class="mt-3 mb-3 text-center">Employer Detail Summary</h1>
            <form action="{{route('employer_summary_page_validation')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="fw-bold">Company:</label>
                <input type="text" value="{{Session::get('company')}}" disabled class="form-control">
                <input type="hidden" name="company" value="{{Session::get('company')}}">
                <br>
                <label class="fw-bold">Company Logo:</label>
                <input type="text" value="{{Session::get('company-logo')}}" disabled class="form-control">
                <input type="hidden" name="company-logo" value="{{Session::get('company-logo')}}">
                <br>
                <label class="fw-bold">Company Industry:</label>
                <input type="text" value="{{Session::get('company-industry')}}" disabled class="form-control">
                <input type="hidden" name="company-industry" value="{{Session::get('company-industry')}}">
                <br>
                <label class="fw-bold">Company Physical Address:</label>
                <input type="text" value="{{Session::get('company-address')}}" disabled class="form-control">
                <input type="hidden" name="company-address" value="{{Session::get('company-address')}}">
                <br>
                <label class="fw-bold">Company Email:</label>
                <input type="text" value="{{Session::get('company-email')}}" disabled class="form-control">
                <input type="hidden" name="company-email" value="{{Session::get('company-email')}}">
                <br>
                <label class="fw-bold">Company Contact:</label>
                <input type="text" value="{{Session::get('company-contact')}}" disabled class="form-control">
                <input type="hidden" name="company-contact" value="{{Session::get('company-contact')}}">
                <br>
                <label class="fw-bold">Company Description:</label>
                <textarea placeholder="{{Session::get('company-description')}}" cols="30" rows="10" disabled class="form-control"></textarea>
                <input type="hidden" name="company-description" value="{{Session::get('company-description')}}">
                <br>
                <label class="fw-bold">Username:</label>
                <input type="text" value="{{Session::get('company-username')}}" disabled class="form-control">
                <input type="hidden" name="company-username" value="{{Session::get('company-username')}}">
                <br>
                <label class="fw-bold">Password:</label>
                <input type="password" value="{{Session::get('company-password')}}" disabled class="form-control">
                <input type="hidden" name="company-password" value="{{Session::get('company-password')}}">
                <br>
                <label class="fw-bold">Business Registration Certificate:</label>
                <input type="text" value="{{Session::get('business-registration-certificate')}}" disabled class="form-control">
                <input type="hidden" name="business-registration-certificate" value="{{Session::get('business-registration-certificate')}}">
                <br>
                <label class="fw-bold">Tax Identification Number:</label>
                <input type="text" value="{{Session::get('tax-identification-number')}}" disabled class="form-control">
                <input type="hidden" name="tax-identification-number" value="{{Session::get('tax-identification-number')}}">
                <br>
                <label class="fw-bold">Proof of Physical Address:</label>
                <input type="text" value="{{Session::get('proof-of-physical-address')}}" disabled class="form-control">
                <input type="hidden" name="proof-of-physical-address" value="{{Session::get('proof-of-physical-address')}}">
                <br>
                <label class="fw-bold">Official Company Letterhead:</label>
                <input type="text" value="{{Session::get('official-company-letterhead')}}" disabled class="form-control">
                <input type="hidden" name="official-company-letterhead" value="{{Session::get('official-company-letterhead')}}">
                <br><br>

                <input type="hidden" name="usertype" value="employer">
                <input type="hidden" name="verify" value="unverified">

                <button type="submit" class="btn btn-primary w-100">Submit</button>
                <button type="button" class="btn btn-dark mt-3 w-100">Go Back</button>
            </form>
        </div>
    </section>
</body>
</html>