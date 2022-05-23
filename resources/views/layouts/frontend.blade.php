<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Best</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.front.header')

    @yield('content')
    <link href="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" rel="stylesheet">
    <link href="{{ asset('frontend/js/app.js') }}" rel="stylesheet">
</body>
</html>