<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobseekers</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }

        .preloader{
            position: fixed;
            background: white;
            z-index: 100;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .loader {
            width: 40px;
            height: 40px;
            --c: no-repeat linear-gradient(orange 0 0);
            background: var(--c), var(--c), var(--c), var(--c);
            background-size: 21px 21px;
            animation: l5 1.5s infinite cubic-bezier(0.3, 1, 0, 1);
        }

        @keyframes l5 {
            0% {
                background-position: 0 0, 100% 0, 100% 100%, 0 100%
            }

            33% {
                background-position: 0 0, 100% 0, 100% 100%, 0 100%;
                width: 60px;
                height: 60px
            }

            66% {
                background-position: 100% 0, 100% 100%, 0 100%, 0 0;
                width: 60px;
                height: 60px
            }

            100% {
                background-position: 100% 0, 100% 100%, 0 100%, 0 0
            }
        }
    </style>
</head>
<body>
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>
    <h1>This is the Employer Dashboard</h1>

    <form action="{{route('job_posting')}}" method="get">
        <button type="submit">Post a Job</button>
    </form>
    
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <script>
        var loader = document.getElementById('preloader');
            window.addEventListener("load",function(){
                loader.style.display = "none";
            });
    </script>
</body>
</html>