<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Jobs</title>
    <!--Bootstrap Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!--Bootstrap Links end-->

    <link rel="stylesheet" href="{{asset('css/jobstyle.css')}}">
</head>
<body>
    <section class="container-fluid mt-5 mb-5">
        <div class="container">
            <div class="p-3 border border-1 border-dark">
                <div class="container-fluid d-flex justify-content-between">
                    <img src="{{asset('uploads/employers/' . $company_logo)}}" alt="Company Logo" class="img-fluid" width="50" style="border-radius: 50%;">
                    <label class="mt-3">Posted {{$created_at->diffForHumans()}}</label>
                </div>
                            
                <span class="fw-bold">{{$company_name}}</span>

                <h2 class="mt-3 fw-bold">{{$job_title}}</h2>
                <label class="mt-3 fw-bold">Job Description:</label>
                <p>{{$job_description}}</p>

                <label class="mt-3 fw-bold">Salary Range:</label>
                <p>₱{{$salary_start}} to ₱{{$salary_end}} {{$salary_frequency}}</p>

                <label class="mt-3 fw-bold">Employment Type:</label>
                <p>{{$employment_type}}</p>

                <label class="mt-3 fw-bold">Education Level Required:</label>
                <p>Must be a {{$education_level}} graduate</p>

                <label class="mt-3 fw-bold">Experience Level:</label>
                <p>{{$experience_level}}</p>

                <label class="mt-3 fw-bold">Must Have Skills:</label>
                <p>{{$skills}}</p>

                <label class="mt-3 fw-bold">Capable Person with Disabilities</label>
                <p>{{$disabilities}}</p>

                <div class="container-fluid">
                    <div class="row d-flex justify-content-between">
                        <form action="#" method="post" class="col-md-6">
                            <button class="btn btn-dark mt-3 p-2 w-100 p-2 text-center" type="button" id="view-job-goback">Go Back</button>
                        </form>

                        <form action="{{route('job_application_page',$jobID)}}" method="GET" class="col-md-6">
                            <button class="btn btn-primary mt-3 p-2 w-100 p-2 text-center">Apply for this Job</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('view-job-goback').addEventListener('click',()=>{
            window.history.back();
        });
    </script>

</body>
</html>