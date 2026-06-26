<!DOCTYPE html>
<html lang="en">
    <head>
        @props([
            'title' => 'Email Campaign Center | Dreamclone',
            'description' => 'Test and preview Dreamclone\'s premium corporate campaign email templates directly in your inbox.',
            'url' => url()->current(),
            'image' => asset('assets/img/logo.png'),
            'type' => 'website'
        ])
        <meta charset="utf-8">
        <meta name="keywords" content="dream, dreamclone, campaign email, SaaS, CRM, email templates, custom software">
        <meta name="author" content="Dreamclone">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email Campaign Center | Dreamclone</title>
        <meta name="description" content="{{ $description }}">
        <meta name="publisher" content="https://www.dreamclone.com">
        <meta name="robots" content="index, follow">

        <!-- Open Graph / LinkedIn / Facebook -->
        <meta property="og:type" content="{{ $type }}">
        <meta property="og:url" content="{{ $url }}">
        <meta property="og:title" content="Email Campaign Center | Dreamclone">
        <meta property="og:description" content="{{ $description }}">
        <meta property="og:image" content="{{ $image }}">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ $url }}">
        <meta name="twitter:title" content="Email Campaign Center | Dreamclone">
        <meta name="twitter:description" content="{{ $description }}">
        <meta name="twitter:image" content="{{ $image }}">
        <meta name="theme-color" content="#ffffff">
        <meta name="apple-mobile-web-app-title" content="Dreamclone">

        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/logo-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/logo-32x32.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/logo-180x180.png') }}">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

        <style>
            /* Premium Glassmorphic Styling for Campaign Form Card */
            .campaign-card {
                background: rgba(255, 255, 255, 0.85);
                backdrop-filter: blur(15px);
                -webkit-backdrop-filter: blur(15px);
                border: 1px solid rgba(255, 255, 255, 0.4);
                border-radius: 24px;
                box-shadow: 0 20px 40px rgba(15, 23, 42, 0.08);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                overflow: hidden;
            }
            .campaign-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 30px 60px rgba(15, 23, 42, 0.12);
            }
            .gradient-banner {
                background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
                padding: 40px;
                text-align: center;
                border-bottom: 3px solid #38bdf8;
            }
            .input-group-custom {
                position: relative;
                margin-bottom: 25px;
            }
            .input-group-custom input {
                height: 60px;
                border-radius: 12px;
                border: 2px solid #e2e8f0;
                padding-left: 50px;
                font-weight: 500;
                font-size: 16px;
                transition: border-color 0.3s, box-shadow 0.3s;
            }
            .input-group-custom input:focus {
                border-color: #38bdf8;
                box-shadow: 0 0 0 4px rgba(56, 189, 248, 0.15);
                outline: none;
            }
            .input-group-custom i {
                position: absolute;
                left: 20px;
                top: 50%;
                transform: translateY(-50%);
                color: #94a3b8;
                font-size: 18px;
                transition: color 0.3s;
                z-index: 10;
            }
            .input-group-custom input:focus + i {
                color: #38bdf8;
            }
            .btn-send {
                background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
                border: none;
                color: white;
                height: 60px;
                font-weight: 700;
                border-radius: 12px;
                box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
                transition: all 0.3s;
            }
            .btn-send:hover {
                transform: translateY(-2px);
                box-shadow: 0 15px 30px rgba(37, 99, 235, 0.35);
                background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%);
            }
            .btn-send:active {
                transform: translateY(0);
            }
            .feature-icon-box {
                width: 48px;
                height: 48px;
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: rgba(56, 189, 248, 0.1);
                color: #2563eb;
                font-size: 20px;
                margin-right: 15px;
            }
        </style>
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
                        <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
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
                <h3 class="display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Campaign Hub</h3>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active text-primary">Campaign</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->


        <!-- Campaign Content Start -->
        <div class="container-fluid py-5 overflow-hidden">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    
                    <!-- Text Info Column -->
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="section-title-custom">
                            <span class="text-primary text-uppercase font-weight-bold" style="letter-spacing: 1.5px;">Dreamclone Marketing</span>
                            <h2 class="display-5 text-dark mt-2 mb-4">Experience Our Premium Email Designs</h2>
                        </div>
                        <p class="fs-5 mb-4 text-muted">
                            Discover the level of quality, engineering precision, and rich visual layouts that we bring to email campaigning. Send a live, high-fidelity marketing campaign email straight to your mailbox right now.
                        </p>
                        
                        <!-- Mini Value list -->
                        <div class="d-flex align-items-start mb-4">
                            <div class="feature-icon-box">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h5 class="text-dark mb-1">Fully Responsive Email Template</h5>
                                <p class="text-muted mb-0">Crafted specifically to display beautifully across all modern mobile and desktop clients.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="feature-icon-box">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <h5 class="text-dark mb-1">Secure & SPAM-Optimized</h5>
                                <p class="text-muted mb-0">Engineered with modern CSS rules and valid HTML to secure high deliverability rates.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <div class="feature-icon-box">
                                <i class="fas fa-magic"></i>
                            </div>
                            <div>
                                <h5 class="text-dark mb-1">Stunning Brand Aesthetics</h5>
                                <p class="text-muted mb-0">Immersive, dark-slate visual blocks designed to leave an extraordinary corporate impression.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="campaign-card">
                            <!-- Card Header -->
                            <div class="gradient-banner">
                                <h3 class="text-white mb-2 font-weight-bold">Preview Our Campaign</h3>
                                <p style="color: #38bdf8; font-size: 14px; font-weight: 500; margin: 0; text-transform: uppercase; letter-spacing: 1px;">Receive professional brand templates</p>
                            </div>
                            
                            <!-- Card Body -->
                            <div class="p-5">
                                @if (session('success'))
                                    <div class="alert alert-success border-0 shadow-sm d-flex align-items-center mb-4 p-4" role="alert" style="border-radius: 12px; background-color: #ecfdf5; border-left: 4px solid #10b981 !important;">
                                        <i class="fas fa-check-circle fa-2x text-success me-3"></i>
                                        <div style="color: #065f46; font-size: 15px; font-weight: 500;">
                                            {{ session('success') }}
                                        </div>
                                    </div>
                                @endif

                                @if (session('error'))
                                    <div class="alert alert-danger border-0 shadow-sm d-flex align-items-center mb-4 p-4" role="alert" style="border-radius: 12px; background-color: #fef2f2; border-left: 4px solid #ef4444 !important;">
                                        <i class="fas fa-exclamation-circle fa-2x text-danger me-3"></i>
                                        <div style="color: #991b1b; font-size: 15px; font-weight: 500;">
                                            {{ session('error') }}
                                        </div>
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger border-0 shadow-sm mb-4 p-4" role="alert" style="border-radius: 12px; background-color: #fef2f2; border-left: 4px solid #ef4444 !important;">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fas fa-exclamation-circle fa-2x text-danger me-3"></i>
                                            <div style="color: #991b1b; font-size: 15px; font-weight: 700;">Validation Errors</div>
                                        </div>
                                        <ul class="mb-0 ps-4" style="color: #991b1b; font-size: 14px; font-weight: 500;">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('campaign.send') }}" method="POST" class="needs-validation" novalidate>
                                    @csrf
                                    
                                    <div class="input-group-custom">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com" value="{{ old('email') }}" required>
                                        <i class="fas fa-envelope"></i>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-send w-100 d-flex align-items-center justify-content-center">
                                                <span>Send Campaign Email</span>
                                                <i class="fas fa-paper-plane ms-2"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('campaign.preview') }}" target="_blank" class="btn w-100 d-flex align-items-center justify-content-center" style="height: 60px; font-weight: 700; border-radius: 12px; border: 2px solid #0470b6; color: #0470b6; background: transparent; transition: all 0.3s;" onmouseover="this.style.background='#0470b6'; this.style.color='#ffffff';" onmouseout="this.style.background='transparent'; this.style.color='#0470b6';">
                                                <span>Live Design Preview</span>
                                                <i class="fas fa-eye ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                                
                                <p class="text-center text-muted mt-4 mb-0" style="font-size: 13px;">
                                    We value your privacy. Your email address will only be used to send the campaign preview.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Campaign Content End -->


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
                                <a href="/"><i class="fa fa-map-marker-alt me-2"></i> Sundaram Icon, Vaikunth crossing, Waghodia road, Vadodara, 390019</a>
                                <a href="mailto:dreamclone2501@gmail.com"><i class="fas fa-envelope me-2"></i> dreamclone2501@gmail.com</a>
                                <a href="tel:8160945573"><i class="fas fa-phone me-2"></i> (+91) 8160945573</a>
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
                            Copyright © {{ date("Y") }} <a href="#"> Dreamclone </a>, All right reserved.
                        </span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        Designed with <span class="text-danger"> <i class="fas fa-heart"></i> </span> By <a href="https://dreamclone.in">Dreamclone</a>
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
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
