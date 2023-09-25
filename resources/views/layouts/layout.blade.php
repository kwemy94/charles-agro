<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="techbriva.com">
    <link rel="shortcut icon" href="{{ asset('template/images/charles/logo/favicon-32x32.png') }}" type="image/svg" />
    <link rel="apple-touch-icon" href="{{ asset('template/images/charles/logo/logo.png') }}">

    <meta name="description"
        content="Diagnostic, conception, réalisation des projets agricoles puis suivi et évaluation." />
    <meta name="keywords" content="agriculture, projet, suivi évaluation, agricole, " />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Open+Sans&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('template/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('template/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('template/css/aos.css') }}">
    <link href="{{ asset('template/css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet"
        type="text/css">

    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Charles K Agro @yield('title')</title>


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        @include('layouts.partials._header')

        @yield('charles-content')

        @include('layouts.partials._footer')
    </div>



    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#116530" />
        </svg></div>

    <script src="{{ asset('template/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('template/js/aos.js') }}"></script>
    <script src="{{ asset('template/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('template/js/jquery.mb.YTPlayer.min.js') }}"></script>

    @yield('charles-js')

    <script src="{{ asset('template/js/main.js') }}"></script>
</body>

</html>
