<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/js/app.js')
</head>

<body id="homepage">
    <h1 id="title-1">Student Management System</h1>

    <h2 id="title-2">Welcome to the Page !</h2>
    <p class="content">The Student Management System is designed to update students details and store attendance details of the respective students. It is built using laravel mainly and other languages such as HTML, CSS and Javascript.</p>

    <div class="btn">

        <a href="{{route('student.index')}}" class="button-30" role="button">Class 5A</a>
        <a href="{{route('student.index')}}" class="button-30" role="button">Class 5B</a>
        <a href="{{route('student.index')}}" class="button-30" role="button">Class 5C</a>
        <a href="{{route('student.index')}}" class="button-30" role="button">Class 5D</a>

    </div>


</body>

</html>