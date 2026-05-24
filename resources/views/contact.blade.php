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
                <h3 class="display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active text-primary">Contact</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->


        <!-- Contact Start -->
        <div class="container-fluid contact">
            <div class="container py-2">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="text-primary mb-4">Get In Touch</h4>
                    <h1 class="display-5 mb-4">Let's Build Something Together</h1>
                    <p class="mb-0">
                        Get in touch with our engineering team today. Whether you are looking for enterprise-grade Advance architectures, secure API integrations, or intelligent system design, we are here to turn your technical vision into highly scalable reality.
                    </p>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        {{-- <strong class="text-center" style="text-align: center">Connect With Our Technical Team</strong> --}}
                        {{-- <p class="mb-4">
                            Fill out the form below to initiate your inquiry. Our developers will review your requirements and follow up with a technical consultation within one business day.
                        </p> --}}

                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @elseif(session('errors'))
                            <div class="alert alert-danger">{{ session('errors')->first() }}</div>
                        @elseif(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" id="contactForm">
                            @csrf
                            <div class="row g-3">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" >
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" >
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" >
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Describe your project" id="description" name="description" style="height: 160px" ></textarea>
                                        <label for="description">Project Details & Requirements</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit <i class="fas fa-paper-plane ms-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-light d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;">
                                <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <h4>Our Office Location</h4>
                                <p class="mb-0">Sundaram Icon, Vaikunth crossing, Waghodia road, Vadodara, 390019</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-light d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;">
                                <i class="fa fa-phone-alt fa-2x text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <h4>Call Us Direct</h4>
                                <a href="tel:+917383181131" class="mb-0 h5 text-decoration-none text-dark fw-bold">+91 7383181131</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-light d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;">
                                <i class="fa fa-envelope-open fa-2x text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <h4>Email Us For Inquiries</h4>
                                <a class="mb-0 h5 text-decoration-none text-primary" href="mailto:hello@dreamclone.in">hello@dreamclone.in</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="me-4">
                                <div class="bg-light d-flex align-items-center justify-content-center" style="width: 90px; height: 90px; border-radius: 50px;">
                                    <i class="fas fa-share fa-2x text-primary"></i>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-lg-square btn-primary rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded h-100">
                            <iframe class="rounded w-100" style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.404687832956!2d73.25185259999999!3d22.3005297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc5fb5c3d5d37%3A0x6a662bdea3f2afb6!2sSundaram%20Icon!5e0!3m2!1sen!2sin!4v1777980451520!5m2!1sen!2sin"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


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
