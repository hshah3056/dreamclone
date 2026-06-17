
        <!-- Navbar & Hero Start -->
        <div class="container-fluid header position-relative overflow-hidden p-0">
            <nav class="navbar navbar-expand-lg fixed-top navbar-light px-4 px-lg-5 py-3 py-lg-0">

                <!-- Updated Logo Section -->
                <a href="{{ route('home') }}" class="navbar-brand p-0">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" title="Dreamclone" style="max-height: 115px; width: auto;">
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


            <!-- Hero Header Start -->
            <div class="hero-header overflow-hidden px-5">
                <div class="rotate-img">
                    <img src="assets/img/sty-1.png" class="img-fluid w-100" alt="dreamclone" title="Dreamclone">
                    <div class="rotate-sty-2"></div>
                </div>
                <div class="row gy-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <h1 class="display-4 text-dark mb-4 wow fadeInUp" data-wow-delay="0.3s">Scalable Digital Architecture for Visionary Businesses.</h1>
                        <p class="fs-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">We build high-performance, custom software solutions using the power of the Laravel framework to streamline your operations and scale your growth.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.7s">Get Started</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <img src="assets/img/hero-img-1.png" class="img-fluid w-100 h-100" alt="dreamclone" title="Dreamclone">
                    </div>
                </div>
            </div>
            <!-- Hero Header End -->
        </div>
        <!-- Navbar & Hero End -->
