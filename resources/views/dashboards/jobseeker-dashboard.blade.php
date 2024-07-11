<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobseekers</title>
</head>
<body>
    <h1>This is the Jobseekers Dashboard</h1>

    <form action="{{route('job_listings')}}" method="post">
        @csrf
        <button type="submit">Find Jobs</button>
    </form>
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>