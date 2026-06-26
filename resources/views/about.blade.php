<!DOCTYPE html>
<html lang="en">
    <head>
        @props([
            'title' => 'About Dreamclone | Software Development Experts in India',
            'description' => 'Learn about Dreamclone\'s mission to build scalable digital architecture, custom software, and innovative IT solutions for visionary businesses worldwide.',
            'url' => url()->current(),
            'image' => asset('assets/img/logo.png'),
            'type' => 'website'
        ])
        <meta charset="utf-8">
        <meta name="keywords" content="dream, dreamclone, software develop in india, software, softwarebrand, Laravel, Custom CRM, Saas, Ecommerce Software development">
        <meta name="author" content="Dreamclone">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', $title)</title>
        <meta name="description" content="{{ $description }}">
        <meta name="publisher" content="https://www.dreamclone.com">
        <meta name="robots" content="index, follow">


        <!-- Open Graph / LinkedIn / Facebook -->
        <meta property="og:type" content="{{ $type }}">
        <meta property="og:url" content="{{ $url }}">
        <meta property="og:title" content="{{ $title }}">
        <meta property="og:description" content="{{ $description }}">
        <meta property="og:image" content="{{ $image }}">
        <meta property="og:article:publisher" content="https://www.facebook.com/dreamclone">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ $url }}">
        <meta name="twitter:title" content="{{ $title }}">
        <meta name="twitter:description" content="{{ $description }}">
        <meta name="twitter:image" content="{{ $image }}">
        <meta name="theme-color" content="#ffffff">
        <meta name="apple-mobile-web-app-title" content="Dreamclone">

        <link rel="icon" type="image/x-icon" href="public/favicon.ico">
        <link rel="icon" type="image/x-icon" href="assets/img/favicon/logo-16x16.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/logo-16x16.png">

        <link rel="icon" type="image/x-icon" href="assets/img/favicon/logo-32x32.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/logo-32x32.png">

        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/logo-180x180.png">

        <!-- Android / Google Chrome Home Screen Web App Icons -->
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/favicon/logo-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/favicon/logo-192x192.png') }}">
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

        <div itemscope itemtype="https://schema.org/Organization" style="display:none;">
            <link itemprop="url" href="https://www.dreamclone.in">
            <link itemprop="logo" href="{{ asset('assets/img/favicon/logo-180x180.png') }}">

            <p>Maintained by <span itemprop="name">Dreamclone</span></p>

            <a itemprop="sameAs" href="https://www.facebook.com/dreamclone" target="_blank">Facebook</a> |
            <a itemprop="sameAs" href="https://www.linkedin.com/company/dreamclone" target="_blank">LinkedIn</a>
        </div>

        @yield('styles')
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
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" title="Logo" style="max-height: 115px; width: auto;">
                </a>
                <!-- End Logo Section -->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ route('web-about') }}" class="nav-item nav-link active">About</a>
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
                <h3 class="display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active text-primary">About</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-fluid overflow-hidden py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="RotateMoveLeft">
                            <img src="assets/img/about-1.png" class="img-fluid w-100" alt="about" title="about">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="mb-1 text-primary">About Us</h4>
                        <h1 class="display-5 mb-4">Engineering Excellence in Software Development.</h1>
                        <p class="mb-4">
                            At Dreamclone, we bridge the gap between complex business challenges and elegant technical solutions. Specializing in full-stack development, we are dedicated to building robust, secure, and scalable web applications that empower businesses to automate their workflows.With a deep focus on modern engineering standards and performance optimization, we don't just write code; we build the digital foundation your company needs to thrive in a competitive market. Whether it’s a startup launching its first SaaS or an enterprise digitizing manual inventory, we bring precision and passion to every line of code.
                        </p>
                        <a href="#" class="btn btn-primary rounded-pill py-3 px-5">About More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- FAQ Start -->
        <div class="container-fluid FAQ bg-light overflow-hidden">
            <div class="container py-5">
                <div class="row g-5 align-items-center">

                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        {{-- <div class="text-start mb-5">
                            <h4 class="text-primary">F.A.Q</h4>
                            <h1 class="display-5 mb-0">Frequently Asked Questions</h1>
                        </div> --}}
                        <div class="accordion" id="accordionExample">

                                <!-- FAQ Item 1 -->
                                <div class="accordion-item border-0 mb-4 shadow-sm rounded">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button rounded-top fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What specific services do you provide?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body my-2">
                                            {{-- <h5 class="text-primary">Yes, this is our core expertise.</h5> --}}
                                            <p class="mb-0">
                                                We specialize in custom software development, scalable backend architectures, and native AI integrations to build intelligent, high-performance applications.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ Item 2 -->
                                <div class="accordion-item border-0 mb-4 shadow-sm rounded">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed rounded-top fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How do you ensure the software is secure?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body my-2">
                                            {{-- <h5 class="text-primary">Built to scale from day one.</h5> --}}
                                            {{-- <p class="mb-2">Absolutely. Because we build exclusively with the Laravel full-stack framework and robust database structures (like MySQL and Redis), your software is engineered for high performance.</p> --}}
                                            <p class="mb-0">We prioritize security at the server level by utilizing strict middleware logic, proper SSL configuration, encrypted internal identity setups, and secure document handling like invisible watermarking.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ Item 3 -->
                                <div class="accordion-item border-0 mb-4 shadow-sm rounded">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed rounded-top fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Do you offer post-launch support?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body my-2">
                                            {{-- <h5 class="text-primary">Zero hidden fees and full intellectual property rights.</h5> --}}
                                            {{-- <p class="mb-2">We believe in 100% transparency. Before writing a single line of code, we provide a detailed roadmap with clear, milestone-based pricing. There are no surprise charges mid-project.</p> --}}
                                            <p class="mb-0">Yes. We provide comprehensive maintenance packages that include server monitoring, framework upgrades, security patches, and ongoing feature development.</p>
                                        </div>
                                    </div>
                                </div>

                                 <!-- FAQ Item 4 -->
                                <div class="accordion-item border-0 shadow-sm rounded">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed rounded-top fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Who owns the source code once the project is finished?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body my-2">
                                            {{-- <h5 class="text-primary">Zero hidden fees and full intellectual property rights.</h5> --}}
                                            {{-- <p class="mb-2">We believe in 100% transparency. Before writing a single line of code, we provide a detailed roadmap with clear, milestone-based pricing. There are no surprise charges mid-project.</p> --}}
                                            <p class="mb-0">
                                                Upon final payment, the client retains 100% intellectual property rights and full ownership of the source code and deployment environments.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="feature-img FAQ-img RotateMoveRight rounded">
                            <img src="assets/img/faq.png" class="img-fluid w-100 rounded" alt="Dreamclone Software Development" title="FAQ">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- FAQ End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-3">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item d-flex flex-column">
                            {{-- <h4 class="text-dark mb-4"></h4> --}}
                            <img src="assets/img/logo-footer.png" alt="dreamclone" title="dreamclone">
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
                            <a href="{{ route('campaign.show') }}"> Campaign</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Quick Links</h4>
                            <a href="javascript:void(0);"> Career</a>
                            <a href="javascript:void(0);"> Terms & Condition</a>
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
                            <a href="mailto:dreamclone2501@gmail.com"><i class="fas fa-envelope me-2"></i> dreamclone2501@gmail.com</a>
                            <a href="tel:8160945573"><i class="fas fa-phone me-2"></i> +91 8160945573</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-secondary me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="/"><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://www.instagram.com/dreamclone_softech?igsh=MXZkMjU0Nnp5a25kYQ==&utm_source=ig_contact_invite"><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="/"><i class="fab fa-linkedin-in"></i></a>
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
