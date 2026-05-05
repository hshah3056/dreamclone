<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Mailler - SaaS Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

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
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="display-6 text-primary m-0"><i class="fas fa-envelope me-3"></i>Mailler</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('web-about') }}" class="nav-item nav-link">About</a>
                            <a href="{{ route('web-service') }}" class="nav-item nav-link">Services</a>
                        </div>
                        <a href="{{ route('web-contact') }}" class="btn btn-light border border-primary rounded-pill text-primary py-2 px-4 me-4">Get in touch</a>
                        {{-- <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4">Sign Up</a> --}}
                    </div>
                    {{-- <a href="#" class="btn btn-light border border-primary rounded-pill text-primary py-2 px-4 me-4">Log In</a>
                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4">Sign Up</a> --}}
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
                            <img src="assets/img/about-1.png" class="img-fluid w-100" alt="">
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
        <div class="container-fluid FAQ bg-light overflow-hidden mb-5">
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
                                            Our business runs on spreadsheets. Can you digitize our entire workflow?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body my-2">
                                            <h5 class="text-primary">Yes, this is our core expertise.</h5>
                                            <p class="mb-2">We specialize in transforming manual, error-prone processes into seamless digital ecosystems. Whether it is inventory tracking, order management, or distributor relations, we build custom admin panels that automate your specific business logic.</p>
                                            <p class="mb-0">By moving you away from fragmented spreadsheets, we eliminate human error, secure your data, and save your team hundreds of hours in operational time.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ Item 2 -->
                                <div class="accordion-item border-0 mb-4 shadow-sm rounded">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed rounded-top fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            If my user base scales rapidly, will the custom software handle the load?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body my-2">
                                            <h5 class="text-primary">Built to scale from day one.</h5>
                                            <p class="mb-2">Absolutely. Because we build exclusively with the Laravel full-stack framework and robust database structures (like MySQL and Redis), your software is engineered for high performance.</p>
                                            <p class="mb-0">Whether you are a SaaS startup onboarding your first 100 users or an enterprise managing 10,000 franchisees, our architectural blueprints ensure your platform remains stable, secure, and blazingly fast as you grow.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ Item 3 -->
                                <div class="accordion-item border-0 shadow-sm rounded">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed rounded-top fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How transparent is your pricing, and do we own the source code?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body my-2">
                                            <h5 class="text-primary">Zero hidden fees and full intellectual property rights.</h5>
                                            <p class="mb-2">We believe in 100% transparency. Before writing a single line of code, we provide a detailed roadmap with clear, milestone-based pricing. There are no surprise charges mid-project.</p>
                                            <p class="mb-0">Furthermore, once the project is completed and final payments are settled, you retain full ownership of the intellectual property and the complete source code. It is your business; it should be your software.</p>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="feature-img FAQ-img RotateMoveRight rounded">
                            <img src="assets/img/faq.png" class="img-fluid w-100 rounded" alt="Dreamclone Software Development">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- FAQ End -->



        <!-- Footer Start -->
        <div class="container-fluid footer py-3 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-3">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-dark mb-4">Company</h4>
                            <a href=""> Why Dreamclone?</a>
                            <p>
                                Scale your business with Dreamclone. We build custom Advanced solutions, high-performance web systems, and seamless AI-driven workflow automation.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Quick Links</h4>
                            <a href="{{ route('web-about') }}"> About Us</a>
                            <a href="{{ route('web-service') }}"> Service</a>
                            <a href="{{ route('web-contact') }}"> Contact Us</a>
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
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> Sundaram Icon, Vaikunth crossing, Waghodia road, Vadodara, 390019</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@dreamclone.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +91 7383181131</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-secondary me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
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
                        <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Dreamclone</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed with <i class="fas fa-heart"></i> By <a class="border-bottom" href="https://dreamclone.in">Dreamclone</a>
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
