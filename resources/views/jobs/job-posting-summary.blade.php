<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Posting</title>
    <link rel="stylesheet" href="{{asset('css/jobstyle.css')}}">

    <!--Bootstrap Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!--Bootstrap Links end-->
</head>
<body>
    <section class="container-fluid mt-5 mb-5">
        <div class="container d-flex flex-column p-3" id="jobContainer">
            <h2 class="text-center">Job Summary</h2>

            <form action="{{route('job_posting_summary_insertion')}}" method="post">
                @csrf
                <img src="{{asset('uploads/employers/' . $jobData['company-logo'])}}" alt="Company Logo" class="img-fluid" width="100" style="border-radius: 50%">
                <input type="hidden" name="company-logo" value="{{$jobData['company-logo']}}">
                <br><br>
                <label class="fw-bold">Company Name:</label>
                <h3>{{$jobData['company-name']}}</h3>
                <input type="hidden" value="{{$jobData['company-name']}}" name="company-name">
                <br>
                <label class="fw-bold">Company Industry:</label>
                <p>{{$jobData['company-industry']}}</p>
                <input type="hidden" value="{{$jobData['company-industry']}}" name="company-industry">
                <br>
                <label class="fw-bold">Company Address:</label>
                <p>{{$jobData['company-address']}}</p>
                <input type="hidden" value="{{$jobData['company-address']}}" name="company-address">
                <br>
                <label class="fw-bold">Job Title:</label>
                <p>{{$jobData['job-title']}}</p>
                <input type="hidden" value="{{$jobData['job-title']}}" name="job-title">
                <br>
                <label class="fw-bold">Job Description:</label>
                <p>{{$jobData['job-description']}}</p>
                <input type="hidden" value="{{$jobData['job-description']}}" name="job-description">
                <br>
                <label class="fw-bold">Salary Range:</label>
                <p>₱{{$jobData['salary-start']}} to ₱{{$jobData['salary-end']}} {{$jobData['salary-frequency']}}</p>
                <input type="hidden" value="{{$jobData['salary-start']}}" name="salary-start">
                <input type="hidden" value="{{$jobData['salary-end']}}" name="salary-end">
                <input type="hidden" value="{{$jobData['salary-frequency']}}" name="salary-frequency">
                <br>
                <label class="fw-bold">Employment Type:</label>
                <p>{{$jobData['employment-type']}}</p>
                <input type="hidden" value="{{$jobData['employment-type']}}" name="employment-type">
                <br>
                <label class="fw-bold">Education Level: </label>
                <p>{{$jobData['education-level']}}</p>
                <input type="hidden" value="{{$jobData['education-level']}}" name="education-level">
                <br>
                <label class="fw-bold">Experience Level: </label>
                <p>{{$jobData['experience-level']}}</p>
                <input type="hidden" value="{{$jobData['experience-level']}}" name="experience-level">
                <br>
                <label class="fw-bold">Skills Needed:</label>
                <p>{{$jobData['skills']}}</p>
                <input type="hidden" value="{{$jobData['skills']}}" name="skills">
                <br>
                <label class="fw-bold">Disabilities that are capable of the job:</label>
                <p>{{$jobData['disabilities']}}</p>
                <input type="hidden" value="{{$jobData['disabilities']}}" name="disabilities">
                <br>
                <input type="hidden" value="{{$jobData['jobID']}}" name="jobID">

                <button class="btn btn-primary w-100 mt-3" type="submit">Submit</button>
            </form>
        </div>
    </section>
</body>
</html>