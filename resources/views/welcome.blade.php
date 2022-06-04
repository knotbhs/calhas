<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'NoSave - Mensagens Whats') }}</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/ico/apple-touch-icon-144.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/ico/apple-touch-icon-114.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/apple-touch-icon-72.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57.png') }}">
        <link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}">
    </head>
    
    <body>
        <x-navbar/>
        @yield('content')
        
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.mixitup.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.bxslider.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.cslider.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.placeholder.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.inview.js') }}"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="{{ asset('js/respond.min.js') }}"></script>
        <![endif]-->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>