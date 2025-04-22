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
            <div class="mil-choose-text">Сhoose</div>
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
            <!-- frame clone -->
            

            <div class="mil-frame-top">
                <a href="{{ url('/') }}" class="mil-logo">
                    <img src="{{ asset('img/logo.png') }}" alt="F&A Logo" style="height: 160px; width: auto; max-width: 100%;">
                </a>
                <div class="mil-menu-btn">
                    <span></span>
                </div>
            </div>
            
            
            <!-- frame clone end -->
            <div class="container">
                <div class="mil-menu-content">
                    <div class="row">
                        <div class="col-xl-5">

                            <nav class="mil-main-menu" id="swupMenu">
                                <ul>
                                    <li class="mil-has-children mil-active">
                                        <a href="{{ url('/') }}">Homepage</a>
                                        <ul>
                                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                                            <li><a href="{{ url('/portfolio') }}">Portfolio </a></li>
                                        </ul>
                                    </li>
                                    <li class="mil-has-children">
                                        <a href="{{ url('/portfolio') }}">Portfolio</a>
                                    </li>
                                    <li class="mil-has-children">
                                        <a href="{{ url('/service') }}">Services</a>
                                    </li>
                                    <li class="mil-has-children">
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
                                        {{-- <div class="col-lg-4 mil-mb-60">

                                            <h6 class="mil-muted mil-mb-30">Useful links</h6>

                                            <ul class="mil-menu-list">
                                                <li><a href="#" class="mil-light-soft">Privacy Policy</a></li>
                                                <li><a href="#" class="mil-light-soft">Terms and conditions</a></li>
                                                <li><a href="#" class="mil-light-soft">Cookie Policy</a></li>
                                                <li><a href="#" class="mil-light-soft">Careers</a></li>
                                            </ul>

                                        </div> --}}
                                    </div>
                                    <div class="mil-divider mil-mb-60"></div>
                                    <div class="row justify-content-between">

                                        <div class="col-lg-4 mil-mb-60">

                                            <h6 class="mil-muted mil-mb-30">Pakistan</h6>

                                            <p class="mil-light-soft mil-up">Islamabad , Pakistan <span class="mil-no-wrap">+92 3325106196</span></p>

                                        </div>
                                        <div class="col-lg-4 mil-mb-60">

                                            <h6 class="mil-muted mil-mb-30">Rawalpindi</h6>

                                            <p class="mil-light-soft">Rawalpindi , Pakistan <span class="mil-no-wrap">+92 334 8954537</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu -->

        <!-- curtain -->
        <div class="mil-curtain"></div>
        <!-- curtain end -->

        <!-- frame -->
        <div class="mil-frame">
            <div class="mil-frame-top">
                <a href="{{ url('/') }}" class="mil-logo">F&A</a>
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

                                <h1 class="mil-muted mil-mb-60">Creating <span class="mil-thin">a Brighter</span><br> Future <span class="mil-thin">Together</span></h1>
                                <div class="row">
                                    <div class="col-md-7 col-lg-5">
                                        <p class="mil-light-soft mil-mb-60">Step into a world of limitless possibilities and innovative ideas. Let's shape the future with creativity, passion, and purpose.</p>
                                    </div>
                                </div>
                                

                                <a href="{{ url('/service') }}" class="mil-button mil-arrow-place mil-btn-space">
                                    <span>What we do</span>
                                </a>

                                <a href="{{ url('/portfolio') }}" class="mil-link mil-muted mil-arrow-place">
                                    <span>View works</span>
                                </a>

                                <div class="mil-circle-text">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve" class="mil-ct-svg mil-rotate" data-value="360">
                                        <defs>
                                            <path id="circlePath" d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                        </defs>
                                        <circle cx="150" cy="100" r="75" fill="none" />
                                        <g>
                                            <use xlink:href="#circlePath" fill="none" />
                                            <text style="letter-spacing: 6.5px">
                                                <!-- circle text -->
                                                <textPath xlink:href="#circlePath">Scroll down - Scroll down - </textPath>
                                            </text>
                                        </g>
                                    </svg>
                                    <a href="#about" class="mil-button mil-arrow-place mil-icon-button mil-arrow-down"></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- banner end -->

                <!-- about -->
                <section id="about">
                    <div class="container mil-p-120-30">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6 col-xl-5">

                                <div class="mil-mb-90">
                                    <h2 class="mil-up mil-mb-60">Explore FA <span class="mil-thin">Creative Agency</span></h2>
                                        <p class="mil-up mil-mb-30">At FA Creative Agency, we are a team of visionaries driven by a passion for transforming ideas into impactful realities. With diverse expertise and innovative thinking, we craft unique solutions tailored to our clients' needs.</p>

                                        <p class="mil-up mil-mb-60">Collaboration fuels our creativity. By bringing together unique perspectives, we cultivate an environment where ideas flourish, leading to exceptional results that exceed expectations.</p>

                                        <div class="mil-about-quote">
                                            <div class="mil-avatar mil-up">
                                                <img src="img/faces/customers/2.jpg" alt="Founder">
                                            </div>
                                            <h6 class="mil-quote mil-up">Crafting with Passion: <span class="mil-thin">Shaping Tomorrow</span> Through Creativity</h6>
                                        </div>

                                </div>

                            </div>
                            <div class="col-lg-5">

                                <div class="mil-about-photo mil-mb-90">
                                    <div class="mil-lines-place"></div>
                                    <div class="mil-up mil-img-frame" style="padding-bottom: 160%;">
                                        <img src="img/photo/1.jpg" alt="img" class="mil-scale" data-value-1="1" data-value-2="1.2">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- about end -->

                <!-- services -->
                <section class="mil-dark-bg">
                    <div class="mi-invert-fix">
                        <div class="mil-animation-frame">
                            <div class="mil-animation mil-position-1 mil-scale" data-value-1="2.4" data-value-2="1.4" style="top: 300px; right: -100px"></div>
                            <div class="mil-animation mil-position-2 mil-scale" data-value-1="2" data-value-2="1" style="left: 150px"></div>
                        </div>
                        <div class="container mil-p-120-0">

                            <div class="mil-mb-120">
                                <div class="row">
                                    <div class="col-lg-10">

                                        <span class="mil-suptitle mil-light-soft mil-suptitle-right mil-up">Professionals focused on helping your brand<br> grow and move forward.</span>

                                    </div>
                                </div>

                                <div class="mil-complex-text justify-content-center mil-up mil-mb-15">

                                    <span class="mil-text-image"><img src="img/photo/2.jpg" alt="team"></span>
                                    <h2 class="mil-h1 mil-muted mil-center">Unique <span class="mil-thin">Ideas</span></h2>

                                </div>
                                <div class="mil-complex-text justify-content-center mil-up">

                                    <h2 class="mil-h1 mil-muted mil-center">For Your <span class="mil-thin">Business.</span></h2>
                                    <a href="{{ url('/service') }}" class="mil-services-button mil-button mil-arrow-place"><span>What we do</span></a>

                                </div>
                            </div>

                            <div class="row mil-services-grid m-0">
                                <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">
                                    <a href="{{ url('/service') }}" class="mil-service-card-sm mil-up">
                                        <h5 class="mil-muted mil-mb-30">Web <br>Development</h5>
                                        <p class="mil-light-soft mil-mb-30">We build responsive, high-performance websites tailored to your business needs.</p>
                                        <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">
                                    <a href="{{ url('/service') }}" class="mil-service-card-sm mil-up">
                                        <h5 class="mil-muted mil-mb-30">Graphic <br>Designing</h5>
                                        <p class="mil-light-soft mil-mb-30">Eye-catching visuals and creative designs to elevate your brand identity.</p>
                                        <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">
                                    <a href="{{ url('/service') }}" class="mil-service-card-sm mil-up">
                                        <h5 class="mil-muted mil-mb-30">SEO <br>Optimization</h5>
                                        <p class="mil-light-soft mil-mb-30">Boost your website’s visibility and rank higher on search engines.</p>
                                        <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">
                                    <a href="{{ url('/service') }}" class="mil-service-card-sm mil-up">
                                        <h5 class="mil-muted mil-mb-30">Social Media <br>Marketing</h5>
                                        <p class="mil-light-soft mil-mb-30">Engage and grow your audience with strategic social media campaigns.</p>
                                        <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">
                                    <a href="{{ url('/service') }}" class="mil-service-card-sm mil-up">
                                        <h5 class="mil-muted mil-mb-30">Digital <br>Marketing</h5>
                                        <p class="mil-light-soft mil-mb-30">Drive leads and sales with data-driven digital marketing strategies.</p>
                                        <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">
                                    <a href="{{ url('/service') }}" class="mil-service-card-sm mil-up">
                                        <h5 class="mil-muted mil-mb-30">Ecommerce <br>Web Solutions</h5>
                                        <p class="mil-light-soft mil-mb-30">Powerful eCommerce websites designed to increase conversions and sales.</p>
                                        <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                                    </a>
                                </div>
                            </div>
                            

                                
                        </div>
                    </div>
                </section>
                <!-- services end -->

                <!-- team -->
                <section>
                    <div class="container mil-p-120-30">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-5 col-xl-4">

                                <div class="mil-mb-90">
                                    <h2 class="mil-up mil-mb-60">Meet <br>Our Team</h2>
                                    <p class="mil-up mil-mb-30">We are talented individuals who are passionate about bringing ideas to life. With a diverse range of backgrounds and skill sets, we collaborate to produce effective solutions for our clients.</p>

                                    <p class="mil-up mil-mb-60">Together, our creative team is committed to delivering impactful work that exceeds expectations.</p>

                                    {{-- <div class="mil-up"><a href="team.html" class="mil-button mil-arrow-place mil-mb-60"><span>Read more</span></a></div> --}}

                                    <h4 class="mil-up"><span class="mil-thin">We</span> delivering <br><span class="mil-thin">exceptional</span> results.</h4>
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="mil-team-list">
                                    <div class="mil-lines-place"></div>
                                    <div class="row mil-mb-60">
                                        <div class="col-sm-6">
                                            <div class="mil-team-card mil-up mil-mb-30">
                                                <img src="img/faces/farhan.jpeg" alt="Farhan Yousaf">
                                                <div class="mil-description">
                                                    <div class="mil-secrc-text">
                                                        <h5 class="mil-muted mil-mb-5"><a href="#">Farhan Yousaf</a></h5>
                                                        <p class="mil-link mil-light-soft mil-mb-10">Full Stack Developer</p>
                                                        <ul class="mil-social-icons mil-center">
                                                            <li><a href="https://github.com/farhanyousafbhatti16" target="_blank" class="social-icon"> <i class="fab fa-github"></i></a></li>
                                                            <li><a href="www.linkedin.com/in/farhan-yousaf-37a256251" target="_blank" class="social-icon"> <i class="fab fa-linkedin"></i></a></li>
                                                            <li><a href="https://wa.me/923325106196" target="_blank" class="social-icon"> <i class="fab fa-whatsapp"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mil-team-card mil-up mil-mb-30">
                                                <img src="img/faces/ahad.jpg" alt="Abdul Ahad">
                                                <div class="mil-description">
                                                    <div class="mil-secrc-text">
                                                        <h5 class="mil-muted mil-mb-5"><a href="#">Abdul Ahad</a></h5>
                                                        <p class="mil-link mil-light-soft mil-mb-10">Graphic Designer</p>
                                                        <ul class="mil-social-icons mil-center">
                                                            <li><a href="https://wa.me/923348954537" target="_blank" class="social-icon"> <i class="fab fa-whatsapp"></i></a></li>
                                                            {{-- <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-dribbble"></i></a></li> --}}
                                                            <li><a href="https://www.instagram.com/abdulahad__84?igsh=MXVpZ21tcDZlaGptaw==" target="_blank" class="social-icon"> <i class="fab fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- team end -->

                <!-- reviews -->
                <section class="mil-soft-bg">
                    <div class="container mil-p-120-120">

                        <div class="row">
                            <div class="col-lg-10">

                                <span class="mil-suptitle mil-suptitle-right mil-suptitle-dark mil-up">Customer reviews are a valuable source <br>of information for both businesses and consumers.</span>

                            </div>
                        </div>

                        <h2 class="mil-center mil-up mil-mb-60">Customer <span class="mil-thin">Voices:</span> <br>Hear What <span class="mil-thin">They Say!</span></h2>

                        <div class="mil-revi-pagination mil-up mil-mb-60"></div>

                        <div class="row mil-relative justify-content-center">
                            <div class="col-lg-8">

                                <div class="mil-slider-nav mil-soft mil-reviews-nav mil-up">
                                    <div class="mil-slider-arrow mil-prev mil-revi-prev mil-arrow-place"></div>
                                    <div class="mil-slider-arrow mil-revi-next mil-arrow-place"></div>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="mil-quote-icon mil-up">
                                    <path d="M 13.5 10 A 8.5 8.5 0 0 0 13.5 27 A 8.5 8.5 0 0 0 18.291016 25.519531 C 17.422273 29.222843 15.877848 31.803343 14.357422 33.589844 C 12.068414 36.279429 9.9433594 37.107422 9.9433594 37.107422 A 1.50015 1.50015 0 1 0 11.056641 39.892578 C 11.056641 39.892578 13.931586 38.720571 16.642578 35.535156 C 19.35357 32.349741 22 27.072581 22 19 A 1.50015 1.50015 0 0 0 21.984375 18.78125 A 8.5 8.5 0 0 0 13.5 10 z M 34.5 10 A 8.5 8.5 0 0 0 34.5 27 A 8.5 8.5 0 0 0 39.291016 25.519531 C 38.422273 29.222843 36.877848 31.803343 35.357422 33.589844 C 33.068414 36.279429 30.943359 37.107422 30.943359 37.107422 A 1.50015 1.50015 0 1 0 32.056641 39.892578 C 32.056641 39.892578 34.931586 38.720571 37.642578 35.535156 C 40.35357 32.349741 43 27.072581 43 19 A 1.50015 1.50015 0 0 0 42.984375 18.78125 A 8.5 8.5 0 0 0 34.5 10 z" fill="#000000" />
                                </svg>

                                <div class="swiper-container mil-reviews-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                                <h5 class="mil-up mil-mb-10">Muhammad Ikram </h5>
                                                <p class="mil-mb-5 mil-upper mil-up mil-mb-30">CEO HSL Travel & Tours</p>
                                                <p class="mil-text-xl mil-up">HSL Travel and Tours website turned out fantastic! The team was super professional, and the site is fast, modern, and user-friendly. Highly recommended.</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                                <h5 class="mil-up mil-mb-10">Raja Tayyab Imtiaz Khan</h5>
                                                <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Outsourcer </p>
                                                <p class="mil-text-xl mil-up">I got my website, IMYA.UK, developed by them, and I couldn't be happier! The design is sleek, the functionality is smooth, and the entire process was seamless.</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                                <h5 class="mil-up mil-mb-10">Sharoon Zaman</h5>
                                                <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Speedy Cargo Service Manshter</p>
                                                <p class="mil-text-xl mil-up">Their graphic design work exceeded my expectations! From branding to marketing materials, everything was creative and professional.</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                                <h5 class="mil-up mil-mb-10">Muhammad Yaqoob Attari</h5>
                                                <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Naat Khawaan</p>
                                                <p class="mil-text-xl mil-up">I got my YouTube thumbnails designed by them, and they’re perfect! Eye-catching and professionally done, exactly what I needed.</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                                <h5 class="mil-up mil-mb-10">Faizan Qureshi</h5>
                                                <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Influncer</p>
                                                <p class="mil-text-xl mil-up">Their YouTube thumbnails have made a big difference in my video engagement. The designs are creative, high-quality, and really grab attention.</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                                <h5 class="mil-up mil-mb-10">Arslan Azram</h5>
                                                <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Traffic warden (naatkhwn)</p>
                                                <p class="mil-text-xl mil-up">I got my YouTube thumbnails designed by them, and they’re perfect! Eye-catching and professionally done, exactly what I needed.</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                                <h5 class="mil-up mil-mb-10">Haris Iltaf</h5>
                                                <p class="mil-mb-5 mil-upper mil-up mil-mb-30">NH Sons</p>
                                                <p class="mil-text-xl mil-up">"Exceptional service and creativity! Whether it's web development or design, they always deliver top-notch work. Highly recommended!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </section>
                <!-- reviews end -->

                <!-- partners -->
                
                <!-- partners end -->

                <!-- blog -->
                <!-- blog end -->

               

            </div>
        </div>
        <!-- content -->
    </div>
    <!-- wrapper end -->

</section>

<!-- end client section -->


<!-- info section -->

<!-- end info_section -->



@endsection

