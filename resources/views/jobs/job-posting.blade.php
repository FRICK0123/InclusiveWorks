<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Posting</title>
    <link rel="stylesheet" href="css/jobstyle.css">

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
            <h2 class="text-center">Post a Job</h2>

            <form action="{{route('post_job')}}" method="post">
                @csrf
                <label for="job-title" class="fw-bold">Job Title:</label>
                <input type="text" class="form-control" id="job-title" placeholder="e.g. Full Stack Web Developer" name="job-title" required>
                <br>
                <label for="job-description" class="fw-bold">Job Description:</label>
                <textarea name="job-description" id="job-description" class="form-control" rows="5" placeholder="Job Description Here" required></textarea>
                <br>
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <label for="salary-start" class="fw-bold">Salary Start Range:</label>
                        <div class="input-group">
                            <span class="input-group-text">₱</span>
                            <input type="number" id="salary-start" class="form-control" placeholder="000000" name="salary-start" required>
                        </div>
                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="salary-end" class="fw-bold">Salary End Range:</label>
                        <div class="input-group">
                            <span class="input-group-text">₱</span>
                            <input type="number" id="salary-end" class="form-control" placeholder="000000" name="salary-end" required>
                        </div>
                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="salary-frequency" class="fw-bold">Salary Frequency:</label>
                        <select name="salary-frequency" id="salary-frequency" class="form-select">
                            <option value="hourly">hourly</option>
                            <option value="daily">daily</option>
                            <option value="weekly">weekly</option>
                            <option value="monthly">monthly</option>
                        </select>
                    </div>
                </div>
                <br>
                <label for="employment-type" class="fw-bold">Employment Type:</label>
                <select name="employment-type" id="employment-type" class="form-select">
                    <option value="part time">Part Time</option>
                    <option value="full time">Full Time</option>
                    <option value="remote">Remote</option>
                    <option value="hybrid">Hybrid</option>
                </select>
                <br>
                <label for="education-level" class="form-label fw-bold mt-3">Education Level Requirement:</label>
                <select name="education-level" id="education-level" class="form-select">
                    <option value="">Select Educational Level</option>
                    <option value="high school">High School Graduate</option>
                    <option value="vocational">Vocational</option>
                    <option value="undergraduate">Undergraduate</option>
                    <option value="associate degree">Associate Degree</option>
                    <option value="college">College Graduate</option>
                    <option value="post graduate">Post Graduate</option>
                    <option value="none">None</option>
                </select>
                <br>
                <label for="experience-level" class="form-label fw-bold mt-3">Experience Level:</label>
                <select name="experience-level" id="experience-level" class="form-select">
                    <option value="">Select Experience Level</option>
                    <option value="entry level">Entry Level</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="expert">Expert</option>
                </select>
                <br>
                <label for="skills" class="fw-bold">Skills Needed:</label>
                <input type="text" class="form-control" name="skills" id="skills" placeholder="e.g. HTML, CSS, Javascript">
                <br>
                <label class="fw-bold">Disabilities that are capable of the job:</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="visual" id="visual" name="disabilities[]">
                    <label class="form-check-label" for="visual">
                        Visually Impaired
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="hearing" id="hearing" name="disabilities[]">
                    <label class="form-check-label" for="hearing">
                        Hearing Impaired
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="speaking" id="speaking" name="disabilities[]">
                    <label class="form-check-label" for="speaking">
                        Speaking Impaired
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="mobility" id="mobility" name="disabilities[]">
                    <label class="form-check-label" for="mobility">
                        Mobility Impaired
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="learning" id="learning" name="disabilities[]">
                    <label class="form-check-label" for="learning">
                        Learning Impaired
                    </label>
                </div>

                <button class="btn btn-primary w-100 mt-3" type="submit">Next</button>
            </form>
        </div>
    </section>
</body>
</html>