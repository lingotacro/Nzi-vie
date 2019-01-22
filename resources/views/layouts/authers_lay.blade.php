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
    <title>{{ config('app.name', 'NSIA') }} {{isset($title) ? ' | '. $title  : ''}}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('css/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">
    <script src="{{asset('js/modernizr.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/autoplay.js')}}"></script>
</head>
<body >


@yield('authers_lay')

<a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a>
{{--<script src="{{asset('js/jquery.pagepiling.min.js')}}"></script>--}}
{{--<script src="{{asset('js/plugins.min.js')}}"></script>--}}
{{--<script src="{{asset('js/main.js')}}"></script>--}}
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
{{--<script src="//code.jquery.com/jquery.js"></script>--}}
@include('flashy::message')
</body>
</html>
