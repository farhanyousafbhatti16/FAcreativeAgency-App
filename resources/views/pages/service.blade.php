@extends('layouts.master')

@section('content')
    <!-- wrapper -->
    <div class="mil-wrapper" id="top">

        <!-- cursor -->
        <div class="mil-ball">
            <span class="mil-icon-1">
                <svg viewBox="0 0 128 128">
                    <path d="M106.1,41.9c-1.2-1.2-3.1-1.2-4.2,0c-1.2,1.2-1.2,3.1,0,4.2L116.8,61H11.2l14.9-14.9c1.2-1.2,1.2-3.1,0-4.2	c-1.2-1.2-3.1-1.2-4.2,0l-20,20c-1.2,1.2-1.2,3.1,0,4.2l20,20c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9c1.2-1.2,1.2-3.1,0-4.2	L11.2,67h105.5l-14.9,14.9c-1.2,1.2-1.2,3.1,0,4.2c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9l20-20c1.2-1.2,1.2-3.1,0-4.2L106.1,41.9	z" />
                </svg>
            </span>
            <div class="mil-more-text">More</div>
            <div class="mil-choose-text">Choose</div>
        </div>
        <!-- cursor end -->

        <!-- preloader -->
        <div class="mil-preloader">
            <div class="mil-preloader-animation">
                <div class="mil-pos-abs mil-animation-1">
                    <p class="mil-h3 mil-muted mil-thin">Welcome</p>
                    <p class="mil-h3 mil-muted">Let’s innovate</p>
                    <p class="mil-h3 mil-muted mil-thin">together! 🚀 </p>
                </div>
                <div class="mil-pos-abs mil-animation-2">
                    <div class="mil-reveal-frame">
                        <p class="mil-reveal-box"></p>
                        <p class="mil-h3 mil-muted mil-thin">F&A Creative Agency.com</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- scrollbar progress -->
        <div class="mil-progress-track">
            <div class="mil-progress"></div>
        </div>
        <!-- scrollbar progress end -->

        <!-- menu -->
        <div class="mil-menu-frame">
            <div class="mil-frame-top">
                <a href="{{ url('/') }}" class="mil-logo">F&A.</a>
                <div class="mil-menu-btn">
                    <span></span>
                </div>
            </div>
            <div class="container">
                <div class="mil-menu-content">
                    <div class="row">
                        <div class="col-xl-5">
                            <nav class="mil-main-menu" id="swupMenu">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                                    <li class="mil-active"><a href="{{ url('/service') }}">Services</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-xl-7">
                            <div class="mil-menu-right-frame">
                                <div class="mil-animation-in">
                                    <div class="mil-animation-frame">
                                        <div class="mil-animation mil-position-1 mil-scale" data-value-1="2" data-value-2="2"></div>
                                    </div>
                                </div>
                                <div class="mil-menu-right">
                                    <div class="row">
                                        <div class="col-lg-8 mil-mb-60">
                                            <h6 class="mil-muted mil-mb-30">Projects</h6>
                                            <ul class="mil-menu-list">
                                                <li><a href="#graphic-design" class="mil-light-soft">Graphic Design Projects</a></li>
                                                <li><a href="#youtube-thumbnails" class="mil-light-soft">YouTube Thumbnails</a></li>
                                                <li><a href="#web-development" class="mil-light-soft">Web Development Projects</a></li>
                                                <li><a href="https://hsltravelandtours.com" class="mil-light-soft" target="_blank">HSL Travel and Tours</a></li>
                                                <li><a href="https://imya.uk" class="mil-light-soft" target="_blank">IMYA.UK</a></li>
                                                <li><a href="https://moan.sale" class="mil-light-soft" target="_blank">MOAN.SALE</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-lg-4 mil-mb-60">
                                            <h6 class="mil-muted mil-mb-30">Useful links</h6>
                                            <ul class="mil-menu-list">
                                                <li><a href="#." class="mil-light-soft">Privacy Policy</a></li>
                                                <li><a href="#." class="mil-light-soft">Terms and conditions</a></li>
                                                <li><a href="#." class="mil-light-soft">Cookie Policy</a></li>
                                                <li><a href="#." class="mil-light-soft">Careers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mil-divider mil-mb-60"></div>
                                    <div class="row justify-content-between">
                                        <div class="col-lg-4 mil-mb-60">
                                            <h6 class="mil-muted mil-mb-30">Canada</h6>
                                            <p class="mil-light-soft mil-up">71 South Los Carneros Road, California <span class="mil-no-wrap">+51 174 705 812</span></p>
                                        </div>
                                        <div class="col-lg-4 mil-mb-60">
                                            <h6 class="mil-muted mil-mb-30">Germany</h6>
                                            <p class="mil-light-soft">Leehove 40, 2678 MC De Lier, Netherlands <span class="mil-no-wrap">+31 174 705 811</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu end -->

        <!-- curtain -->
        <div class="mil-curtain"></div>
        <!-- curtain end -->

        <!-- frame -->
        <div class="mil-frame">
            <div class="mil-frame-top">
                <a href="{{ url('/') }}" class="mil-logo">F&A.</a>
                <div class="mil-menu-btn">
                    <span></span>
                </div>
            </div>
            <div class="mil-frame-bottom">
                <div class="mil-current-page"></div>
                <div class="mil-back-to-top">
                    <a href="#top" class="mil-link mil-dark mil-arrow-place">
                        <span>Back to top</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- frame end -->

        <!-- content -->
        <div class="mil-content">
            <div id="swupMain" class="mil-main-transition">

                <!-- banner -->
                <section class="mil-banner mil-dark-bg">
                    <div class="mi-invert-fix">
                        <div class="mil-animation-frame">
                            <div class="mil-animation mil-position-1 mil-scale" data-value-1="7" data-value-2="1.6"></div>
                            <div class="mil-animation mil-position-2 mil-scale" data-value-1="4" data-value-2="1"></div>
                            <div class="mil-animation mil-position-3 mil-scale" data-value-1="1.2" data-value-2=".1"></div>
                        </div>
                        <div class="mil-gradient"></div>
                        <div class="container">
                            <div class="mil-banner-content mil-up">
                                <h1 class="mil-muted mil-mb-60">Our <span class="mil-thin">Services</span></h1>
                                <div class="row">
                                    <div class="col-md-7 col-lg-5">
                                        <p class="mil-light-soft mil-mb-60">We offer a wide range of creative and digital services to help your business grow and succeed.</p>
                                    </div>
                                </div>
                                <a href="#services" class="mil-button mil-arrow-place mil-btn-space">
                                    <span>Explore Services</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- banner end -->

                <!-- services -->
                <section id="services" class="mil-p-120-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10">
                                <h2 class="mil-up mil-mb-60 text-center">Our <span class="mil-thin">Services</span></h2>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Web Development -->
                            <div class="col-md-6 col-lg-4 mil-mb-60">
                                <div class="mil-service-card mil-up mil-text-center mil-border-box">
                                    <i class="fas fa-code fa-3x" style="color: #007bff;"></i>
                                    <h4>Web Development</h4>
                                    <p>We build responsive, high-performance websites tailored to your business needs.</p>
                                </div>
                            </div>
                            <!-- Graphic Design -->
                            <div class="col-md-6 col-lg-4 mil-mb-60">
                                <div class="mil-service-card mil-up mil-text-center mil-border-box">
                                    <i class="fas fa-paint-brush fa-3x" style="color: #ff5722;"></i>
                                    <h4>Graphic Design</h4>
                                    <p>Eye-catching visuals and creative designs to elevate your brand identity.</p>
                                </div>
                            </div>
                            <!-- SEO Optimization -->
                            <div class="col-md-6 col-lg-4 mil-mb-60">
                                <div class="mil-service-card mil-up mil-text-center mil-border-box">
                                    <i class="fas fa-search fa-3x" style="color: #28a745;"></i>
                                    <h4>SEO Optimization</h4>
                                    <p>Boost your website’s visibility and rank higher on search engines.</p>
                                </div>
                            </div>
                            <!-- Social Media Marketing -->
                            <div class="col-md-6 col-lg-4 mil-mb-60">
                                <div class="mil-service-card mil-up mil-text-center mil-border-box">
                                    <i class="fas fa-bullhorn fa-3x" style="color: #ff9800;"></i>
                                    <h4>Social Media Marketing</h4>
                                    <p>Engage and grow your audience with strategic social media campaigns.</p>
                                </div>
                            </div>
                            <!-- Digital Marketing -->
                            <div class="col-md-6 col-lg-4 mil-mb-60">
                                <div class="mil-service-card mil-up mil-text-center mil-border-box">
                                    <i class="fas fa-chart-line fa-3x" style="color: #6c757d;"></i>
                                    <h4>Digital Marketing</h4>
                                    <p>Drive leads and sales with data-driven digital marketing strategies.</p>
                                </div>
                            </div>
                            <!-- E-commerce Solutions -->
                            <div class="col-md-6 col-lg-4 mil-mb-60">
                                <div class="mil-service-card mil-up mil-text-center mil-border-box">
                                    <i class="fas fa-shopping-cart fa-3x" style="color: #6610f2;"></i>
                                    <h4>E-commerce Solutions</h4>
                                    <p>Powerful eCommerce websites designed to increase conversions and sales.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- services end -->
            </section>

            <!-- end client section -->
          
          
            <!-- info section -->
          
            <!-- end info_section -->
          
          
          
            @endsection