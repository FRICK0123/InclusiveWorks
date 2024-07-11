 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employer Verification Registration</title>
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


</head>
<body>
    <header>
        <nav>
            <!--Brand-->
            <a href="/" class="navbar-brand inclusive-brand ms-3" tabindex="1">InclusiveWorks</a>
        </nav>
    </header>

    <section class="container-fluid mt-5">
        <div class="container d-flex flex-column align-items-center p-3 mb-5" id="verification-box">
            <h1>Verification Info</h1>
            <h5>Companies and Businessess should have 1 out of 4 documents below:</h5>

            <form action="{{route('employer_verification_page_validation')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="fw-bold">Business Registration Certificate:</label>
                <input type="file" name="business-registration-certificate" class="form-control">
                @error('business-registration-certificate')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <br>

                <label class="fw-bold">Tax Identification Number:</label>
                <input type="file" name="tax-identification-number" class="form-control">
                @error('tax-identification-number')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <br>

                <label class="fw-bold">Proof of Physical Address:</label>
                <input type="file" name="proof-of-physical-address" class="form-control">
                @error('proof-of-physical-address')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <br>

                <label class="fw-bold">Official Company Letterhead:</label>
                <input type="file" name="official-company-letterhead" class="form-control">
                @error('official-company-letterhead')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <br>

                <button type="submit" class="btn btn-primary w-100">Next</button>
                <button type="button" class="btn btn-dark mt-3 w-100">Go back</button>
            </form>
        </div>
    </section>

</body>
</html>