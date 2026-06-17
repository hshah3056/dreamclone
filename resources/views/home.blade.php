@extends('template.layout')

{{-- @section('title', 'Home') --}}

@section('content')

@section('styles')
<style>
    .service-item .service-content p {
        height: 14rem;
    }

    .quote-card-container {
        max-width: 650px;
        margin: 20px auto;
        padding: 10px;
    }

    .quote-image-link {
        display: block;
        text-decoration: none;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .quote-image-link:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .image-wrapper {
        position: relative;
        width: 100%;
        display: flex;
    }

    .quote-img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: contain;
    }

    /* Hover overlay styling */
    .overlay-button {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .overlay-button span {
        background: #25D366; /* Official WhatsApp Green */
        color: #fff;
        padding: 12px 24px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 30px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .quote-image-link:hover .overlay-button {
        opacity: 1;
    }

    /* Optional hover effect matching the stack design */
    .quote-whatsapp-btn:hover {
        background: rgba(255, 255, 255, 0.12) !important;
    }
</style>
@endsection

        <!-- Vission Start -->
        <div class="container-fluid overflow-hidden py-2">
            <div class="container py-5">
                <div class="row g-5 align-items-center">

                    <!-- Left Side: Image -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="RotateMoveLeft rounded">
                            <!-- Ensure you use a high-quality team or code-related image here -->
                            <img src="assets/img/vission.png" class="img-fluid w-100 rounded" alt="Dreamclone Team" title="Vision">
                        </div>
                    </div>

                    <!-- Right Side: Content -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">

                        <!-- Pill Badge -->
                        <div class="mb-3">
                            <span class="border border-primary text-primary rounded-pill px-4 py-2 fw-bold d-inline-block" style="font-size: 0.85rem; letter-spacing: 1px;">
                                WELCOME TO
                            </span>
                        </div>

                        <!-- Main Heading -->
                        <h6 class="display-5 mb-4 fw-bold">Dream<span class="text-primary">clone</span></h6>

                        <!-- Main Paragraph (Your Content) -->
                        <p class="mb-5 text-muted">
                            At Dreamclone, we bridge the gap between complex business challenges and elegant technical solutions. Specializing in full-stack development, we are dedicated to building robust, secure, and scalable web applications that empower businesses to automate their workflows. With a deep focus on modern engineering standards and performance optimization, we don't just write code; we build the digital foundation your company needs to thrive in a competitive market.
                        </p>

                        <!-- Our Mission Block -->
                        <div class="d-flex align-items-start mb-4">
                            <div class="rounded-circle bg-light d-flex align-items-center justify-content-center flex-shrink-0" style="width: 65px; height: 65px;">
                                <i class="fas fa-bullseye fa-2x text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <h4 class="mb-2">OUR MISSION</h4>
                                <p class="mb-0 text-muted">
                                    To be the catalyst for our clients' success by transforming manual, fragmented business processes into high-performance, automated Laravel ecosystems.
                                </p>
                            </div>
                        </div>

                        <!-- Our Vision Block -->
                        <div class="d-flex align-items-start">
                            <div class="rounded-circle bg-light d-flex align-items-center justify-content-center flex-shrink-0" style="width: 65px; height: 65px;">
                                <i class="fas fa-rocket fa-2x text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <h4 class="mb-2">OUR VISION</h4>
                                <p class="mb-0 text-muted">
                                    To redefine digital architecture by engineering scalable, secure, and cutting-edge software solutions that empower enterprises to dominate their market.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Vission End -->


        <!-- Service Start -->
        <div class="container-fluid service py-2">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h5 class="mb-1 text-primary">Our Expertise</h5>
                    <h2 class="display-5 mb-4">Reliable Solutions for Your Business</h2>
                    <p class="mb-0">
                        At Dreamclone, we don't just build websites; we build the engines that run your business. Using the Advance Full-Stack Framework, we specialize in creating custom tools that eliminate manual errors and scale with your growth.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4">
                                <i class="fas fa-users-cog fa-5x text-secondary"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="mb-4">Custom CRM Solutions</h4>
                                <p class="mb-4">
                                    Stop losing leads in messy emails. We build bespoke Customer Relationship Management (CRM) systems tailored to your unique sales workflow. From lead tracking and automated follow-ups to detailed client histories, we provide a 360-degree view of your business relationships.
                                    {{-- Key Features: Lead Management, Activity Logs, and Real-time Analytics. --}}
                                </p>
                                {{-- <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4">
                                <i class="fas fa-cloud-upload-alt fa-5x text-secondary"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="mb-4">Scalable SaaS Development</h4>
                                <p class="mb-4">
                                    Ready to bring your software idea to the world? We develop high-performance Software as a Service (SaaS) platforms. Using Advance robust architecture, we handle complex multi-tenancy, secure subscription billing, and user role management so you can focus on your customers.
                                </p>
                                {{-- <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4">
                                <i class="fas fa-network-wired fa-5x text-secondary"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="mb-4">Distributor & Franchisee Panels</h4>
                                <p class="mb-4">Managing a network of distributors or franchisees shouldn't be a headache. We build specialized portals that allow you to track stock levels, monitor sales performance, and communicate with your entire network from a single, secure admin panel.
                                </p>
                                {{-- <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4">
                                <i class="fas fa-clipboard-list fa-5x text-secondary"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="mb-4">Inventory & Order Management</h4>
                                <p class="mb-4">
                                    If you are still handling orders and stock manually, you’re losing time. We build Custom Admin Panels that integrate your inventory and order systems. Track every item from the moment it enters your warehouse until it reaches the customer’s door.
                                </p>
                                {{-- <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i class="fas fa-mail-bulk fa-5x text-secondary"></i></div>
                            <div class="service-content">
                                <h4 class="mb-4">Email Newsletters</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                                </p>
                                <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Feature Start -->
        <div class="container-fluid feature overflow-hidden py-2">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h5 class="text-primary">Why Choose DreamClone? </h5>
                    <h6 class="display-5 mb-4">Dream Big. Build Better.</h6>
                    <p class="mb-0">
                        Dreamclone empowers your business by transforming manual, fragmented processes into high-performance, automated Laravel ecosystems that are built to scale.
                    </p>
                </div>
                <div class="row g-4 justify-content-center text-center mb-5">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="text-center p-4">
                            <div class="d-inline-block rounded bg-light p-3 mb-4">
                                <i class="fas fa-bolt fa-5x text-secondary"></i>
                            </div>
                            <div class="feature-content">
                                <a href="#" class="h4">High-Velocity Performance<i class="fa fa-long-arrow-alt-right"></i></a>
                                <p class="mt-4 mb-0">
                                    We leverage Laravel’s advanced caching and optimization to ensure your enterprise panels load instantly, no matter how much data you process.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="text-center p-4">
                            <div class="d-inline-block rounded bg-light p-3 mb-4">
                                <i class="fas fa-user-shield fa-5x text-secondary"></i>
                            </div>
                            <div class="feature-content">
                                <a href="#" class="h4">Enterprise-Grade Security <i class="fa fa-long-arrow-alt-right"></i></a>
                                <p class="mt-4 mb-0">Your business data is protected by industry-standard encryption and secure authentication protocols built directly into our full-stack architecture.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center rounded p-4">
                            <div class="d-inline-block rounded bg-light p-3 mb-4">
                                <i class="fas fa-robot fa-5x text-secondary"></i>
                            </div>
                            <div class="feature-content">
                                <a href="#" class="h4">Bespoke Automation <i class="fa fa-long-arrow-alt-right"></i></a>
                                <p class="mt-4 mb-0">We specialize in converting slow, manual inventory and order systems into seamless, "one-click" digital workflows tailored to your specific logic.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="text-center rounded p-4">
                            <div class="d-inline-block rounded bg-light p-3 mb-4">
                                <i class="fas fa-chart-line fa-5x text-secondary"></i>
                            </div>
                            <div class="feature-content">
                                <a href="#" class="h4">Scalable Engineering <i class="fa fa-long-arrow-alt-right"></i></a>
                                <p class="mt-4 mb-0">
                                    Our code is built to grow; whether you are managing 10 franchisees or 10,000, Dreamclone systems stay stable and responsive.
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="my-3">
                            <a href="#" class="btn btn-primary d-inline rounded-pill px-5 py-3">More Features</a>
                        </div>
                    </div> --}}
                </div>
                <div class="row g-5 pt-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="feature-img RotateMoveLeft h-100" style="object-fit: cover;">

                            <img src="assets/img/service.png" class="img-fluid w-100 h-100" alt="Service" title="Service">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                        <h4 class="text-primary">Our Service</h4>
                        {{-- <h1 class="display-5 mb-4"> Your Visitors Into Happy Customers</h1> --}}
                        <p class="mb-4">
                            Dreamclone's array of services provides your business with the robust edge of full-stack Laravel architecture. With us, you will enjoy the ultimate freedom of scalable, custom-built software that easily adapts to your changing requirements and rapid growth needs.
                        </p>
                        <div class="row g-4">
                            {{-- <div class="col-6">
                                <div class="d-flex">
                                    <i class="fas fa-newspaper fa-4x text-secondary"></i>
                                    <div class="d-flex flex-column ms-3">
                                        <h2 class="mb-0 fw-bold">285</h2>
                                        <small class="text-dark">Created Projects</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex">
                                    <i class="fas fa-users fa-4x text-secondary"></i>
                                    <div class="d-flex flex-column ms-3">
                                        <h2 class="mb-0 fw-bold">6560</h2>
                                        <small class="text-dark">Happy Clients</small>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Arrow List -->
                            <ul class="list-unstyled text-dark fw-bold">
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="fas fa-long-arrow-alt-right fa-lg me-3 text-dark"></i>
                                    Static Website Development
                                </li>
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="fas fa-long-arrow-alt-right fa-lg me-3 text-dark"></i>
                                    Dynamic Website Development
                                </li>
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="fas fa-long-arrow-alt-right fa-lg me-3 text-dark"></i>
                                    Custom CRM & SaaS Platforms
                                </li>
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="fas fa-long-arrow-alt-right fa-lg me-3 text-dark"></i>
                                    Franchisee & Distributor Portals
                                </li>
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="fas fa-long-arrow-alt-right fa-lg me-3 text-dark"></i>
                                    Inventory & Workflow Automation
                                </li>
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="fas fa-long-arrow-alt-right fa-lg me-3 text-dark"></i>
                                    UI/UX Designing
                                </li>
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="fas fa-long-arrow-alt-right fa-lg me-3 text-dark"></i>
                                    Digital Marketing
                                </li>
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="fas fa-long-arrow-alt-right fa-lg me-3 text-dark"></i>
                                    Server Deployment
                                </li>
                            </ul>
                        </div>
                        <div class="my-4">
                            <a href="{{ route('web-service') }}" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <div class="container-fluid bg-primary wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5 align-items-center">

                   <div class="col-lg-6 text-white text-start">
                        <h1 class="display-4 text-white mb-4 fw-bold">Ready to Transform Your Business?</h1>
                        <p class="mb-5 fs-5" style="opacity: 0.9; max-width: 500px;">
                            Let's build scalable, secure, and custom Laravel solutions tailored to your enterprise. Fill out the form, and our technical team will provide a comprehensive project estimate.
                        </p>

                        <div class="d-flex flex-column gap-3 mb-4">

                            <div class="d-flex align-items-center border border-light border-opacity-25 rounded-pill px-4 py-3" style="background: rgba(255,255,255,0.05); max-width: 400px;">
                                <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm flex-shrink-0" style="width: 50px; height: 50px;">
                                    <i class="fas fa-phone-alt fa-lg"></i>
                                </div>
                                <div class="text-start">
                                    <span class="d-block text-white" style="font-size: 0.85rem; opacity: 0.8;">Call Us Anytime</span>
                                    <a href="tel:+918160945573" class="h5 mb-0 text-white text-decoration-none">+91 8160945573</a>
                                </div>
                            </div>

                            <a href="https://api.whatsapp.com/send?phone=918160945573&text=Hi!%20I%20would%20like%20to%20get%20a%20professional%20quotation%20for%20my%20project.%20Could%20we%20discuss%20the%20details%20and%20pricing?"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="d-flex align-items-center border border-light border-opacity-25 rounded-pill px-4 py-3 text-decoration-none quote-whatsapp-btn"
                            style="background: rgba(255,255,255,0.05); max-width: 400px; transition: background 0.3s ease;">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm flex-shrink-0" style="width: 50px; height: 50px; background-color: #25D366; color: #fff;">
                                    <i class="fab fa-whatsapp fa-2x"></i>
                                </div>
                                <div class="text-start">
                                    <span class="d-block text-white" style="font-size: 0.85rem; opacity: 0.8;">Get Quote Fast</span>
                                    <span class="h5 mb-0 text-white fw-bold">Chat on WhatsApp</span>
                                </div>
                            </a>

                            <div class="d-flex align-items-center border border-light border-opacity-25 rounded-pill px-3 px-md-4 py-2 py-md-3 w-100" style="background: rgba(255,255,255,0.05); max-width: 400px;">

                                <!-- Icon Container: Scaled down slightly on mobile -->
                                <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center me-2 me-md-3 shadow-sm flex-shrink-0" style="width: 45px; height: 45px;">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>

                                <!-- Text Container: Added overflow hidden for truncation -->
                                <div class="text-start overflow-hidden w-100">
                                    <span class="d-block text-white mb-1" style="font-size: 0.75rem; opacity: 0.8;">Email Us For Details</span>

                                    <!-- Email Link: Added text-truncate to prevent layout breaks on small screens -->
                                    <a href="mailto:dreamclone2501@gmail.com" class="d-block fs-6 fw-bold text-white text-decoration-none text-truncate" title="dreamclone2501@gmail.com">
                                        dreamclone2501@gmail.com
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-white rounded-4 shadow-lg p-4 p-sm-5">
                            <h3 class="text-dark mb-4 fw-bold">Request a Free Quote</h3>

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @elseif(session('errors'))
                                <div class="alert alert-danger">{{ session('errors')->first() }}</div>
                            @elseif(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <form action="{{ route('quote.submit') }}" method="POST" id="quoteForm">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="quoteName" name="name" placeholder="Your Name" >
                                            <label for="quoteName" class="text-muted">Your Name</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control bg-light border-0" id="quoteEmail" name="email" placeholder="Your Email" >
                                            <label for="quoteEmail" class="text-muted">Your Email</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select class="form-select bg-light border-0" id="quoteService" name="service" aria-label="Service Required">
                                                <option selected disabled>Select a Service</option>
                                                <option value="Static website Development">Static Website Development</option>
                                                <option value="Dynamic Website Development">Dynamic Website Development</option>
                                                <option value="CRM">Custom CRM Systems</option>
                                                <option value="SaaS">Enterprise SaaS Development</option>
                                                <option value="Franchise">Franchisee Portals</option>
                                                <option value="Inventory">Inventory Automation</option>
                                                <option value="UI/UX Designing">UI/UX Designing</option>
                                                <option value="Digital Marketing">Digital Marketing</option>
                                                <option value="Server Deployment">Server Deployment</option>
                                            </select>
                                            <label for="quoteService" class="text-muted">Service Required</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="quotephone" name="phone" placeholder="Enter your contact">
                                            <label for="quotephone" class="text-muted">Contact number</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="company" name="company_name" placeholder="Your Company name">
                                            <label for="company" class="text-muted">Your company name</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select class="form-select bg-light border-0" name="budget" id="quoteBudget" aria-label="Service Required">
                                                <option selected disabled>Select a Budget</option>
                                                <option value="Below 20,000">Below 20,000</option>
                                                <option value="20,000 - 50,000">20,000 - 50,000</option>
                                                <option value="50000 - 100000">50000 - 100000</option>
                                                <option value="100000-150000">100000-150000</option>
                                            </select>
                                            <label for="quoteBudget" class="text-muted">Budget selection required</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control bg-light border-0" placeholder="Describe your project" id="quoteMessage" name="description" style="height: 130px"></textarea>
                                            <label for="quoteMessage" class="text-muted">Project Description & Goals</label>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button class="btn btn-primary w-100 py-3 rounded-pill fw-bold shadow-sm" type="submit">
                                            Send Inquiry <i class="fas fa-paper-plane ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection
