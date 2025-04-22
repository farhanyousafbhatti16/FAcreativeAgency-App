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
                                            <h6 class="mil-muted mil-mb-30">Pakistan</h6>
                                            <p class="mil-light-soft mil-up">Islamabad, Pakistan <span class="mil-no-wrap">+92 3325106196</span></p>
                                        </div>
                                        <div class="col-lg-4 mil-mb-60">
                                            <h6 class="mil-muted mil-mb-30">Pakistan</h6>
                                            <p class="mil-light-soft">Rawalpindi , Pakistan <span class="mil-no-wrap">+92 3348954537</span></p>
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
                                <h1 class="mil-muted mil-mb-60">Contact  <span class="mil-thin"> US</span></h1>
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

                <!-- services -->
                <section id="services" class="mil-p-120-90">
                    <div class="container">
                        <div class="contact-form">
                            <h2>Contact Us</h2>
                            <form id="whatsappForm">
                                <input type="text" id="name" placeholder="Your Name" required>
                                <input type="email" id="email" placeholder="Your Email" required>
                                <input type="tel" id="contact" placeholder="Your Contact Number" required>
                                <textarea id="message" placeholder="Your Message" required></textarea>
                                <button type="submit" style="
                                background: #25D366;
                                color: white;
                                padding: 12px;
                                border: none;
                                width: 100%;
                                font-size: 16px;
                                cursor: pointer;
                                border-radius: 5px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                gap: 10px;">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="20">
                                    Send via WhatsApp
                                </button>
                            </form>
                        </div>
                    </div>
                </section>
               
                
                <script>
                    document.getElementById("whatsappForm").addEventListener("submit", function (e) {
                        e.preventDefault();
                    
                        const name = document.getElementById("name").value.trim();
                        const email = document.getElementById("email").value.trim();
                        const contact = document.getElementById("contact").value.trim();
                        const message = document.getElementById("message").value.trim();
                    
                        if (!name || !email || !contact || !message) {
                            alert("Please fill in all fields.");
                            return;
                        }
                    
                        const fullMessage = `Hello, my name is *${name}*.\n\n📧 Email: ${email}\n📞 Contact: ${contact}\n\n📝 Message:\n${message}`;
                        const whatsappURL = `https://wa.me/923325106196?text=${encodeURIComponent(fullMessage)}`;
                    
                        window.open(whatsappURL, "_blank");
                    });
                    </script>
                    
            


</section>

<!-- end client section -->


<!-- info section -->

<!-- end info_section -->



@endsection