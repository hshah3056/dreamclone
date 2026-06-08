<!DOCTYPE html>
<html lang="en">
    <head>
        @props([
            'title' => 'Custom CRM & SaaS Development Agency | Dreamclone',
            'description' => 'Dreamclone delivers high-velocity, scalable digital architecture including custom CRM systems, dynamic SaaS products, and automated enterprise applications.',
            'url' => url()->current(),
            'image' => asset('assets/img/logo.png'),
            'type' => 'website'
        ])
        <meta charset="utf-8">
        <meta name="keywords" content="dreamclone, Dreamclone, software, softwarebrand, Laravel, Custom CRM, Saas, Ecommerce Software development">
        <meta name="author" content="Dreamclone">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', $title)</title>
        <meta name="description" content="{{ $description }}">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

        <!-- Open Graph / LinkedIn / Facebook -->
        <meta property="og:type" content="{{ $type }}">
        <meta property="og:url" content="{{ $url }}">
        <meta property="og:title" content="{{ $title }}">
        <meta property="og:description" content="{{ $description }}">
        <meta property="og:image" content="{{ $image }}">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ $url }}">
        <meta name="twitter:title" content="{{ $title }}">
        <meta name="twitter:description" content="{{ $description }}">
        <meta name="twitter:image" content="{{ $image }}">
        <meta name="theme-color" content="#ffffff">

        <link rel="icon" type="image/x-icon" href="public/favicon.ico">
        <link rel="icon" type="image/x-icon" href="assets/img/logo-16x16.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo-16x16.png">

        <link rel="icon" type="image/x-icon" href="assets/img/logo-32x32.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo-32x32.png">

        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo-180x180.png">
        <meta name="apple-mobile-web-app-title" content="Dreamclone">

        <link rel="canonical" href="{{ $url }}">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet (Use asset() for Laravel paths) -->
        <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

        @yield('styles')
    </head>

<body>
    <!-- Spinner -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    @include('template.header')

    <!-- Main Content Area -->
    <div class="content">
        @yield('content')
    </div>

    @include('template.footer')

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('scripts')
</body>
</html>
