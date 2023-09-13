<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- SITE META -->
        <title>{{ config('app.name') }}</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">

        <!-- FAVICONS -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

        <!-- BOOTSTRAP STYLES -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- TEMPLATE STYLES -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <!-- RESPONSIVE STYLES -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
        <!-- COLORS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors.css') }}">
        <!-- CUSTOM STYLES -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">

        @stack('css')

        @stack('page-css')

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <!-- ******************************************
        START SITE HERE
        ********************************************** -->

        <div id="wrapper">
            @include('header')

            @yield('title-part')

            <div class="section wb">
                @yield('page-data')
            </div>

            
            @include('footer')
        </div><!-- end wrapper -->

        <!-- ******************************************
        /END SITE
        ********************************************** -->

        <!-- ******************************************
        DEFAULT JAVASCRIPT FILES
        ********************************************** -->
        <script src="{{ asset('assets/js/all.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>

        @stack('js')

        @stack('page-js')
    </body>
</html>