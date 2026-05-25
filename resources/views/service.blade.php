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

        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/logo-16x16.png">
        <link rel="icon" type="image/x-icon" href="assets/img/favicon/logo-32x32.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/logo-32x32.png">

        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/logo-180x180.png">
        <meta name="apple-mobile-web-app-title" content="Dreamclone">

        <link rel="canonical" href="{{ $url }}">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
        <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg fixed-top navbar-light px-4 px-lg-5 py-3 py-lg-0">

                <!-- Updated Logo Section -->
                <a href="{{ route('home') }}" class="navbar-brand p-0">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" style="max-height: 115px; width: auto;">
                </a>
                <!-- End Logo Section -->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('web-about') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('web-service') }}" class="nav-item nav-link">Services</a>
                    </div>
                    <a href="{{ route('web-contact') }}" class="btn btn-light border border-primary rounded-pill text-primary py-2 px-4 me-4">Get In Touch</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->


         <!-- Header Start -->
         <div class="container-fluid bg-breadcrumb">
            <ul class="breadcrumb-animation">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Service</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active text-primary">Service</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- Services Detail Page Start -->
        <div class="container-fluid py-5 overflow-hidden">
            <div class="container">

                <!-- Page Header -->
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="text-primary fw-bold text-uppercase">Our Services</h4>
                    <h1 class="display-4 mb-4">Comprehensive Digital Solutions</h1>
                    <p class="mb-0 text-muted fs-5">
                        We deliver robust, scalable, and innovative technology solutions designed to accelerate your business growth. Explore our core areas of expertise below.
                    </p>
                </div>

                <!-- 1. Static Web Application Development (Text Left, Image Right) -->
                <div class="row g-5 align-items-center mb-5 pb-5 border-bottom border-light">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <h2 class="mb-4">1. Static Web Application Development</h2>
                        <p class="mb-4 text-muted fs-5 lh-lg">
                            Establish a lightning-fast, highly secure digital presence. Our static web applications are built with modern frameworks to ensure rapid load times and top-tier performance. We guarantee that your static site will be fully responsive across all devices and meticulously optimized for search engines (SEO friendly) to maximize your online visibility.
                        </p>
                        <ul class="list-unstyled text-dark mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Ultra-Fast Load Speeds</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Enhanced Security Architecture</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> 100% Responsive & SEO Optimized</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="rounded shadow-lg overflow-hidden">
                            <img src="assets/img/static-website.png" class="img-fluid w-100" alt="Static Web Application Development">
                        </div>
                    </div>
                </div>

                <!-- 2. Dynamic Web Application Development (Image Left, Text Right) -->
                <div class="row g-5 align-items-center mb-5 pb-5 border-bottom border-light">
                    <div class="col-lg-6 order-2 order-lg-1 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <img src="assets/img/dynamic-web.png" class="img-fluid w-100" alt="Dynamic Web Application Development">
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 wow fadeInRight" data-wow-delay="0.3s">
                        <h2 class="mb-4">2. Dynamic Web Application Development</h2>
                        <p class="mb-4 text-muted fs-5 lh-lg">
                            Empower your business with highly interactive and feature-rich dynamic web applications. We build complex portals, custom dashboards, and data-driven platforms that respond in real-time to user input. Just like our static solutions, every dynamic application is guaranteed to be fully responsive for mobile users and structured to be inherently SEO friendly.
                        </p>
                        <ul class="list-unstyled text-dark mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Real-time Data Processing</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Custom Backend Architecture</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> 100% Responsive & SEO Optimized</li>
                        </ul>
                    </div>
                </div>

                <!-- 3. Digital Marketing (Text Left, Image Right) -->
                <div class="row g-5 align-items-center mb-5 pb-5 border-bottom border-light">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <h2 class="mb-4">3. Digital Marketing</h2>
                        <p class="mb-4 text-muted fs-5 lh-lg">
                            Amplify your brand's voice and reach your target audience with precision. Our comprehensive digital marketing strategies encompass SEO, pay-per-click advertising, social media management, and content marketing. We focus on data-driven campaigns that generate high-quality leads and deliver a measurable return on investment.
                        </p>
                        <ul class="list-unstyled text-dark mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Search Engine Optimization (SEO)</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Data-Driven Advertising Campaigns</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Conversion Rate Optimization</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <img src="assets/img/digital-marketing.png" class="img-fluid w-100" alt="Digital Marketing Services">
                        </div>
                    </div>
                </div>

                <!-- 4. Ecommerce Website (Image Left, Text Right) -->
                <div class="row g-5 align-items-center mb-5 pb-5 border-bottom border-light">
                    <div class="col-lg-6 order-2 order-lg-1 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <img src="assets/img/ecommerce.png" class="img-fluid w-100" alt="Ecommerce Website Development">
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 wow fadeInRight" data-wow-delay="0.3s">
                        <h2 class="mb-4">4. E-commerce Website Development</h2>
                        <p class="mb-4 text-muted fs-5 lh-lg">
                            Transform your retail operations with a powerful online store. We build secure, scalable e-commerce platforms featuring intuitive product catalogs, seamless shopping cart experiences, and multi-gateway payment routing. Our solutions are designed to maximize conversions and provide a frictionless shopping journey for your customers.
                        </p>
                        <ul class="list-unstyled text-dark mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Secure Payment Gateway Integrations</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Advanced Inventory Management</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Frictionless Checkout Experience</li>
                        </ul>
                    </div>
                </div>

                <!-- 5. UI/UX Design (Text Left, Image Right) -->
                <div class="row g-5 align-items-center mb-5 pb-5 border-bottom border-light">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <h2 class="mb-4">5. UI/UX Design</h2>
                        <p class="mb-4 text-muted fs-5 lh-lg">
                            First impressions matter. Our design team crafts intuitive, engaging, and aesthetically pleasing user interfaces that captivate your audience. By focusing on deep user research and seamless user journeys (UX), we ensure that your software is not only beautiful but also incredibly easy and enjoyable to use.
                        </p>
                        <ul class="list-unstyled text-dark mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> User-Centric Interface Design</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Wireframing & Prototyping</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Seamless User Journey Mapping</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="rounded shadow-lg overflow-hidden">
                            <img src="assets/img/ui-ux-design.jpeg" class="img-fluid w-100" alt="UI/UX Design Services">
                        </div>
                    </div>
                </div>

                <!-- 6. Server Deployment (Image Left, Text Right) -->
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <img src="assets/img/server-deployment.png" class="img-fluid w-100" alt="Server Deployment Services">
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 wow fadeInRight" data-wow-delay="0.3s">
                        <h2 class="mb-4">6. Server Deployment</h2>
                        <p class="mb-4 text-muted fs-5 lh-lg">
                            Ensure your applications run flawlessly with our professional server deployment and management services. We handle the complex infrastructure setup, ensuring high availability, robust security protocols, and scalable server architectures that keep your digital assets online and performing optimally 24/7.
                        </p>
                        <ul class="list-unstyled text-dark mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Secure Infrastructure Setup</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> High Availability Configuration</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Continuous Monitoring & Support</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- Services Detail Page End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-3">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item d-flex flex-column">
                            {{-- <h4 class="text-dark mb-4"></h4> --}}
                            <img src="assets/img/logo-footer.png" alt="">
                            {{-- <a href=""> Why Dreamclone?</a> --}}
                            <p style="line-height: 20px; font-size: 14px;">
                                Scale your business with Dreamclone. We build custom Advanced solutions, high-performance web systems, and seamless AI-driven workflow automation.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Company</h4>
                            <a href="{{ route('web-about') }}"> About Us</a>
                            <a href="{{ route('web-service') }}"> Service</a>
                            <a href="{{ route('web-contact') }}"> Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Quick Links</h4>
                            <a href="javascript:void(0);"> Career</a>
                            <a href="javascript:void(0);"> Terms & Condition</a>
                            <a href="javascript:void(0);"> Contact Us</a>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Support</h4>
                            <a href=""> Promotional Emails</a>
                            <a href=""> Product Updates</a>
                            <a href=""> Email Marketing</a>
                            <a href=""> Acquistion Emails</a>
                            <a href=""> Retention Emails</a>
                        </div>
                    </div> --}}
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> Sundaram Icon, Vaikunth crossing, Waghodia road, Vadodara, 390019</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@dreamclone.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +91 7383181131</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-secondary me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="javascript:void(0);"><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white">
                            Copyright © {{ date("Y") }} <a href="#"> Dreamclone </a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed with <span class="text-danger"> <i class="fas fa-heart"></i> </span> By <a class="" href="https://dreamclone.in">Dreamclone</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/lightbox/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
    </body>

</html>
