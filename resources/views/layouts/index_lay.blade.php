<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Multipurpose and creative template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:300,300i,400,400i,600,600i,700,800" rel="stylesheet">
    <!-- CDN font anwsone-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <script src="{{asset('js/modernizr.js')}}"></script>
</head>
<body class="transparent-sticky-header">


@yield('index_lay')


</body>
{{--<script src="{{asset('js/jquery.pagepiling.min.js')}}"></script>--}}
<script src="{{asset('js/plugins.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>



</html>
