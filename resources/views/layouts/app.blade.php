<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="author" content="Web It">
    @php
        $setting=App\Models\Setting::find(1)
    @endphp
    @if ($setting)
    <link rel="shortcut icon" href="{{ asset('uploads/settings/'.$setting->favicon) }}" type="image/x-icon">        
    @endif
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
<!--owl-carosel--->
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.inc.frontend-navbar')
        <main class="register-class">
            @yield('content')
        </main>
        @include('layouts.inc.frontend-footer')
    </div>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}" ></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--owlcarosel js--->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script>
            $('.category-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                dots:false,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })
    </script>
     @yield('scripts')
</body>
</html>
