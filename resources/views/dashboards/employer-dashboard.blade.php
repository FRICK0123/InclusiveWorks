<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobseekers</title>

    <link rel="stylesheet" href="{{asset('css/employer-dashboard.css')}}">
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
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>
    <div class="container bg-dark col-2 gx-0 p-2" id="dashboard-sidebar">
        <!--Profile Section-->
            <div class="d-flex align-items-center justify-content-center border border-top-0 border-start-0 border-end-0 border-light">
                <form action="#" id="view_profile_link" method="POST">
                    @csrf
                    <button class="btn">
                        <img src="{{'uploads/employers/'.Session::get('company-logo')}}" alt="Company Image Logo" class="img-fluid mt-4 pb-1" width="50" height="50" id="view_profile">
                    </button>
                </form>

                <h5 class="text-light d-none d-md-block mt-4" id="company_name">{{Session::get('company')}}</h5>
            </div>
        <!--Profile Section End-->

        <!--NavList-->
            <form action="#" method="POST" class="dashboard_link mt-5">
                <img src="{{asset('images/icons/gauge.svg')}}">
                <h6 class="text-light d-none d-lg-block ms-2">Dashboard</h6>
            </form>

            <form action="#" method="POST" class="dashboard_link mt-4">
                <img src="{{asset('images/icons/gauge.svg')}}">
                <h6 class="text-light d-none d-lg-block ms-2">Job Postings</h6>
            </form>

            <form action="#" method="POST" class="dashboard_link mt-4">
                <img src="{{asset('images/icons/gauge.svg')}}">
                <h6 class="text-light d-none d-lg-block ms-2">Applicants</h6>
            </form>

            <form action="#" method="POST" class="dashboard_link mt-4">
                <img src="{{asset('images/icons/gauge.svg')}}">
                <h6 class="text-light d-none d-lg-block ms-2">Messages</h6>
            </form>

            <form action="#" method="POST" class="dashboard_link mt-4">
                <img src="{{asset('images/icons/gauge.svg')}}">
                <h6 class="text-light d-none d-lg-block ms-2">About Us</h6>
            </form>

            <form action="#" method="POST" class="dashboard_link mt-4">
                <img src="{{asset('images/icons/gauge.svg')}}">
                <h6 class="text-light d-none d-lg-block ms-2">Contact Us</h6>
            </form>
        <!--Navlist end-->

        <!--Logout Section-->
            {{-- <div> --}}
                <form action="{{route('logout')}}" method="post" class="dashboard_link mt-4" id="logout" onclick="logout()">
                    @csrf
                    <img src="{{asset('images/icons/gauge.svg')}}">
                    <h6 class="text-light d-none d-lg-block ms-2">Logout</h6>
                </form>
            {{-- </div> --}}
        <!--Logout Section End-->

    </div>
    <section class="container-fluid row">
        
        <div class="container col-2"></div>

        <div class="container col-10">
            <h1>Hello</h1>
        </div>
    </section>

    {{-- <form action="{{route('job_posting')}}" method="get">
        <button type="submit">Post a Job</button>
    </form> --}}
    <script>
        var loader = document.getElementById('preloader');
            window.addEventListener("load",function(){
                loader.style.display = "none";
            });
    //Employer Dashboard Script
        function logout(){
            document.getElementById('logout').submit();
        }
    </script>
</body>
</html>