<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">--}}
    <link rel="stylesheet" href="{{asset('css/auth/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth/core.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth/icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth/pages.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth/components.css')}}">


    <!-- Styles -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-83057131-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
        @yield('content')

        @include('toast::messages')
        {{--@jquery - skip if already have.--}}
        {{--@toastr_css - toastr css lib.--}}
        {{--@toastr_js - toastr js lib.--}}
        {{--@toastr_render - for render toastr notification.--}}
        <script>
            var resizefunc = [];
        </script>
        <script src="{{asset('js/auth/modernizr.min.js')}}"></script>
        <script src="{{asset('js/auth/jquery.min.js')}}"></script>
        <script src="{{asset('js/auth/detect.js')}}"></script>
        <script src="{{asset('js/auth/fastclick.js')}}"></script>
        <script src="{{asset('js/auth/jquery.blockUI.js')}}"></script>
        <script src="{{asset('js/auth/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('js/auth/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('js/auth/jquery.app.js')}}"></script>

</body>

</html>
