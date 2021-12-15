<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title> @yield('title') </title>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Ummuhan Keles">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('assets')}}/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('assets')}}/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">

</head>
<body>

@include('home._header')

@include('home._hero')

@yield('content')

@include('home._footer')

</body>
</html>
