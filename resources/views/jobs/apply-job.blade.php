<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply for this Job</title>
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
                <h1>Apply as {{$job_title}} in {{$company_name}}</h1><br>
                <p>{{$job_description}}</p><br>
                <form action="{{route('job_application_submit')}}" method="POST">
                    @csrf
                    <label for="cover_letter" class="form-label">Cover Letter</label>
                    <textarea class="form-control border border-dark" id="cover_letter" rows="5" name="cover_letter" required></textarea>
                    <br>
                    <label class="fw-bold">View your resume: </label>
                    <a href="{{asset('uploads/'.Session::get('pwd-resume'))}}" target="_blank">{{Session::get('pwd-resume')}}</a>
                    <input type="hidden" name="pwd_resume" value="{{Session::get('pwd-resume')}}">
                    <input type="hidden" name="jobID" value="{{$jobID}}">
                    <br><br>
                    <div class="container-fluid">
                        <div class="row d-flex justify-content-between">
                            <div class="col-md-6">
                                <button class="btn btn-dark mt-3 p-2 w-100 p-2 text-center" type="button" id="apply-job-goback">Go Back</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary mt-3 p-2 w-100 p-2 text-center">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('apply-job-goback').addEventListener('click',()=>{
            window.history.back();
        });
    </script>

</body>
</html>