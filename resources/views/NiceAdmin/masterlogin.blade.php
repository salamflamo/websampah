<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="{{URL::asset('nice-assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{URL::asset('nice-assets/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{URL::asset('nice-assets/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('nice-assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{URL::asset('nice-assets/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('nice-assets/css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src={{URL::asset('nice-assets/js/html5shiv.js')}}></script>
    <script src="{{URL::asset('nice-assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

@yield('content')
</html>
