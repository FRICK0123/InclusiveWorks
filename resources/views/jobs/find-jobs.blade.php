<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find Jobs</title>
    <!--Bootstrap Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!--Bootstrap Links end-->

    <link rel="stylesheet" href="css/jobstyle.css">
</head>
<body>
    <section class="container-fluid mt-5 mb-5">
        <div class="container">
            <div class="row g-4">
                @foreach ($jobListing as $index => $item)
                    <div class="col-md-6">
                        <div class="p-3 border border-1 border-dark">
                            <div class="container-fluid d-flex justify-content-between">
                                <img src="{{asset('uploads/employers/' . $item['company-logo'])}}" alt="Company Logo" class="img-fluid" width="50">
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
                                <button class="btn btn-primary mt-3 p-2 w-50">View Job</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</body>
</html>