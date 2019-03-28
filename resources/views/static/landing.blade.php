<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FoX Houndz (FHXZ) is Coming Soon</title>

    <style>
        body {
            background-image: linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,1)), url('{{asset('img/bg-white.jpg')}}');
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            height: 99vh;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            -ms-align-items: center;
            align-items: center;
            justify-content: center;
        }
        .content {
            text-align: center;
        }
        .content img {
            max-width: 80%;
        }
    </style>
</head>
<body>
    <section class="content">
        <img src="{{asset('img/FoxhoundLogoFinal.png')}}" alt="">
    </section>
</body>
</html>
