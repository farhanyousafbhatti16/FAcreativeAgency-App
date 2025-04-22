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
                <a href="{{ url('/') }}" class="mil-logo">F&A</a>
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
                                    <li class="mil-up mil-active">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="mil-up">
                                        <a href="{{ url('/portfolio') }}">Portfolio</a>
                                    </li>
                                    <li class="mil-up">
                                        <a href="{{ url('/service') }}">Services</a>
                                    </li>
                                    <li class="mil-up">
                                        <a href="{{ url('/contact') }}">Contact</a>
                                    </li>
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
                                        
                                    </div>
                                    <div class="mil-divider mil-mb-60"></div>
                                    <div class="row justify-content-between">
                                        <div class="col-lg-4 mil-mb-60">
                                            <h6 class="mil-muted mil-mb-30">Pakistan</h6>
                                            <p class="mil-light-soft mil-up">Islamabad , Pakistan <span class="mil-no-wrap">+92 3325106196</span></p>
                                        </div>
                                        <div class="col-lg-4 mil-mb-60">
                                            <h6 class="mil-muted mil-mb-30">Pakistan</h6>
                                            <p class="mil-light-soft">Rawalpindi, Pakistan <span class="mil-no-wrap">+92 3348954537</span></p>
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
                                <h1 class="mil-muted mil-mb-60">Portfolio  <span class="mil-thin"> !</span></h1>
                                <div class="row">
                                    <div class="col-md-7 col-lg-5">
                                        <p class="mil-light-soft mil-mb-60">We offer a wide range of creative and digital services to help your business grow and succeed.</p>
                                    </div>
                                </div>
                                <a href="{{ url('/service') }}" class="mil-button mil-arrow-place mil-btn-space">
                                    <span>Explore Services</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- banner end -->

                <!-- Graphic Design Section -->
    <section class="project-section"  id="graphic-design">
        <div class="container">
            <h2>Graphic Design Projects</h2>
            <p>Explore our creative graphic design projects that bring ideas to life.</p>
            <div class="row">
                <!-- Project 1 -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/1.jpg" alt="Graphic Design Project 1">
                        <h3>Branding for Alexa CO^2 Laser</h3>
                        {{-- <p>We created a modern and vibrant brand identity for XYZ Company, including logos, business cards, and marketing materials.</p> --}}
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/2.jpg" alt="Graphic Design Project 2">
                        <h3>Poster Design for Food Brand</h3>
                        {{-- <p>A visually stunning poster designed for a major corporate event, capturing the essence of the theme.</p> --}}
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/3.jpg" alt="Graphic Design Project 3">
                        <h3>Shoes Design</h3>
                        {{-- <p>Innovative packaging design for a new product line, combining functionality with aesthetics.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Project 4 -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/4.jpg" alt="Graphic Design Project 1">
                        <h3>Branding for Speedy Cargo Services</h3>
                        {{-- <p>We created a modern and vibrant brand identity for XYZ Company, including logos, business cards, and marketing materials.</p> --}}
                    </div>
                </div>
                <!-- Project 5 -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/5.jpeg" alt="Graphic Design Project 2">
                        <h3>Poster Design for Real Estate</h3>
                        {{-- <p>A visually stunning poster designed for a major corporate event, capturing the essence of the theme.</p> --}}
                    </div>
                </div>
                <!-- Project 6 -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/6.jpg" alt="Graphic Design Project 3">
                        <h3>Design For Real Estate</h3>
                        {{-- <p>Innovative packaging design for a new product line, combining functionality with aesthetics.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- YouTube Thumbnails Section -->
    <section class="project-section bg-light"    id="youtube-thumbnails">
        <div class="container">
            <h2>YouTube Thumbnails</h2>
            <p>Check out our eye-catching YouTube thumbnails designed to boost engagement.</p>
            <div class="row">
                <!-- Thumbnail 1 -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/t1.jpg" alt="YouTube Thumbnail 1">
                        <h3>Home Renovation Thumbnail</h3>
                        {{-- <p>A bold and engaging thumbnail for a tech review video, designed to attract clicks.</p> --}}
                    </div>
                </div>
                <!-- Thumbnail 2 -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/t2.jpg" alt="YouTube Thumbnail 2">
                        <h3>Food Reciepe Thumbnail</h3>
                        {{-- <p>A vibrant thumbnail for a travel vlog, capturing the essence of adventure.</p> --}}
                    </div>
                </div>
                <!-- Thumbnail 3 -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/t3.jpg" alt="YouTube Thumbnail 3">
                        <h3>Vlog Thumbnail</h3>
                        {{-- <p>A motivational thumbnail for a fitness tutorial video, designed to inspire viewers.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Thumbnail 4 -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/t4.jpg" alt="YouTube Thumbnail 1">
                        <h3>Rajab Butt Thumbnail redesign</h3>
                        {{-- <p>A bold and engaging thumbnail for a tech review video, designed to attract clicks.</p> --}}
                    </div>
                </div>
                <!-- Thumbnail 5 -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/t5.jpg" alt="YouTube Thumbnail 2">
                        <h3>Naat Thumbnail</h3>
                        {{-- <p>A vibrant thumbnail for a travel vlog, capturing the essence of adventure.</p> --}}
                    </div>
                </div>
                <!-- Thumbnail 6 -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/t6.jpg" alt="YouTube Thumbnail 3">
                        <h3>Shopif  Thumbnail</h3>
                        {{-- <p>A motivational thumbnail for a fitness tutorial video, designed to inspire viewers.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="project-section website-section"   id="web-development">
        <div class="container">
            <h2>Web Development Projects</h2>
            <p>Discover our web development projects that combine functionality with stunning design.</p>
            <div class="row">
                <!-- HSL Travel and Tours -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/w1.png" alt="HSL Travel and Tours">
                        <div class="project-card-content">
                            <h3>HSL Travel and Tours</h3>
                            <p>A dynamic travel agency website offering seamless booking and tour management services.</p>
                            <a href="https://hsltravelandtours.com" target="_blank" class="visit-btn">Visit Website</a>
                        </div>
                    </div>
                </div>
                <!-- IMYA.UK -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/w2.png" alt="IMYA.UK">
                        <div class="project-card-content">
                            <h3>IMYA.UK</h3>
                            <p>A modern and elegant website tailored for a UK-based brand with an intuitive user experience.</p>
                            <a href="https://imya.uk" target="_blank" class="visit-btn">Visit Website</a>
                        </div>
                    </div>
                </div>
                <!-- MOAN.SALE -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/w3.png" alt="MOAN.SALE">
                        <div class="project-card-content">
                            <h3>MOAN.SALE</h3>
                            <p>An advanced e-commerce platform featuring high-speed performance and secure transactions.</p>
                            <a href="https://moan.sale" target="_blank" class="visit-btn">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     --}}
    
    
     <section class="project-section website-section" id="web-development">
        <div class="container">
            <h2>Web Development Projects</h2>
            <p>Discover our web development projects that combine functionality with stunning design.</p>
            <div class="row">
                <!-- HSL Travel and Tours -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/w1.png" alt="HSL Travel and Tours">
                        <div class="project-card-content">
                            <h3>HSL Travel and Tours</h3>
                            <p>A dynamic travel agency website offering seamless booking and tour management services.</p>
                            <a href="https://hsltravelandtours.com" target="_blank" class="visit-btn">Visit Website</a>
                        </div>
                    </div>
                </div>
                <!-- IMYA.UK -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/w2.png" alt="IMYA.UK">
                        <div class="project-card-content">
                            <h3>IMYA.UK</h3>
                            <p>A modern and elegant website tailored for a UK-based brand with an intuitive user experience.</p>
                            <a href="https://imya.uk" target="_blank" class="visit-btn">Visit Website</a>
                        </div>
                    </div>
                </div>
                <!-- MOAN.SALE -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/w3.png" alt="MOAN.SALE">
                        <div class="project-card-content">
                            <h3>MOAN.SALE</h3>
                            <p>An advanced e-commerce platform featuring high-speed performance and secure transactions.</p>
                            <a href="https://moan.sale" target="_blank" class="visit-btn">Visit Website</a>
                        </div>
                    </div>
                </div>
                <!-- ABCN Services -->
                {{-- <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/w4.png" alt="ABCN Services">
                        <div class="project-card-content">
                            <h3>ABCN Services</h3>
                            <p>A UK-based service provider offering a professional digital presence and client portal.</p>
                            <a href="https://abcnservices.co.uk/" target="_blank" class="visit-btn">Visit Website</a>
                        </div>
                    </div>
                </div> --}}
                <!-- QDSA -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/qdsa.png" alt="QDSA">
                        <div class="project-card-content">
                            <h3>QDSA</h3>
                            <p>An educational and consulting platform offering smooth navigation and mobile optimization.</p>
                            <a href="https://qdsa.uk/" target="_blank" class="visit-btn">Visit Website</a>
                        </div>
                    </div>
                </div>
                <!-- BBA Services -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/bba.png" alt="BBA Services">
                        <div class="project-card-content">
                            <h3>BBA Services</h3>
                            <p>A business support website delivering effective UI/UX and service integration tools.</p>
                            <a href="http://bbaservices.co.uk/" target="_blank" class="visit-btn">Visit Website</a>
                        </div>
                    </div>
                </div>
                <!-- TMK Health -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/tmk.png" alt="TMK Health">
                        <div class="project-card-content">
                            <h3>TMK Health</h3>
                            <p>A health service provider website emphasizing user accessibility and streamlined appointments.</p>
                            <a href="https://tmkhealth.uk/" target="_blank" class="visit-btn">Visit Website</a>
                        </div>
                    </div>
                </div>
                <!-- MDKH -->
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="img/mdkh.png" alt="MDKH">
                        <div class="project-card-content">
                            <h3>MDKH</h3>
                            <p>A sleek and simple business site focusing on professionalism and responsive design.</p>
                            <a href="http://mdkh.uk/" target="_blank" class="visit-btn">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    



              
                            </section>

                           
                          
                          
                          
                            @endsection