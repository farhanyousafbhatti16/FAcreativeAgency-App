 <!-- footer -->
<!-- Footer -->


<style>
.fa-swal-popup {
        border-radius: 4px;
        border-left: 4px solid #aaaaaa;
    }
    
    /* Adjust SweetAlert position */
    .swal2-container.swal2-top-end {
        top: 20px;
        right: 20px;
    }
    /* Footer Styles */
        .fa-footer {
            background-color: #1a1a1a;
            color: #ffffff;
            padding: 60px 0 0;
            font-family: 'Poppins', sans-serif;
        }

        .fa-footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .fa-footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .fa-footer-brand {
            margin-bottom: 30px;
        }

        .fa-footer-logo {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #ffffff;
        }

        .fa-footer-tagline {
            color: #ffffff;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .fa-social-links {
            display: flex;
            gap: 15px;
        }

        .fa-social-links a {
            color: #ffffff;
            background-color: #333333;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .fa-social-links a:hover {
            background-color: rgb(255, 152, 0);
            transform: translateY(-3px);
        }

        .fa-footer-links h3,
        .fa-footer-contact h3,
        .fa-footer-newsletter h3 {
            font-size: 18px;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
            color: #ffffff;
        }

        .fa-footer-links h3:after,
        .fa-footer-contact h3:after,
        .fa-footer-newsletter h3:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: rgb(255, 152, 0);
        }

        .fa-footer-links ul {
            list-style: none;
            padding: 0;
        }

        .fa-footer-links li {
            margin-bottom: 12px;
        }

        .fa-footer-links a {
            color: #ffffff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .fa-footer-links a:hover {
            color: rgb(255, 152, 0);
        }

        .fa-contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .fa-contact-item i {
            color: rgb(255, 152, 0);
            margin-right: 15px;
            margin-top: 3px;
        }

        .fa-contact-item p {
            color: #ffffff;
            margin: 0;
            line-height: 1.6;
        }

        .fa-contact-item strong {
            color: #ffffff;
            display: block;
            margin-bottom: 5px;
        }

        .fa-footer-newsletter p {
            color: #ffffff;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .fa-newsletter-form {
            display: flex;
            position: relative;
        }

        .fa-newsletter-form input {
            width: 100%;
            padding: 12px 15px;
            border: none;
            border-radius: 4px;
            background-color: #333333;
            color: #ffffff;
        }

        .fa-newsletter-form input::placeholder {
            color: #ffffff;
        }

        .fa-newsletter-form button {
            position: absolute;
            right: 5px;
            top: 5px;
            background-color: rgb(255, 152, 0);
            color: #ffffff;
            border: none;
            width: 34px;
            height: 34px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .fa-newsletter-form button:hover {
            background-color: #3a5ac8;
        }

        .fa-footer-bottom {
            border-top: 1px solid #333333;
            padding: 20px 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .fa-footer-copyright {
            color: #ffffff;
            font-size: 14px;
        }

        .fa-footer-legal {
            display: flex;
            gap: 20px;
        }

        .fa-footer-legal a {
            color: #ffffff;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .fa-footer-legal a:hover {
            color: rgb(255, 152, 0);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .fa-footer-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .fa-footer-bottom {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }
            
            .fa-footer-legal {
                justify-content: center;
            }
        }
</style>

<footer class="fa-footer">
    <div class="fa-footer-container">
        <div class="fa-footer-grid">
            <!-- Brand Column -->
            <div class="fa-footer-brand">
                <div class="fa-footer-logo">F&A Creative Agency</div>
                <p class="fa-footer-tagline">Crafting digital experiences that inspire</p>
                
                <div class="fa-social-links">
                    <a href="https://www.facebook.com/facreativeagency360/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/fa_creative_agency/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a  aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a  aria-label="Behance"><i class="fab fa-behance"></i></a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="fa-footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ url('/service') }}">Services</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div class="fa-footer-contact">
                <h3>Get in Touch</h3>
                <div class="fa-contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <strong>Islamabad,PK </strong>
                        {{-- <p>Street Address, Islamabad, Pakistan</p> --}}
                    </div>
                </div>
                
                <div class="fa-contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <p>+92 332 5106196</p>
                </div>
                <div class="fa-contact-item">
                    <i class="fas fa-envelope"></i>
                    <p>facreativeagency011@gmail.com
                    </p>
                </div>
            </div>
            
            <!-- Newsletter Form -->
            <div class="fa-footer-newsletter">
                <h3>Stay Updated</h3>
                <p>Subscribe to our newsletter for the latest updates and insights.</p>
                <form class="fa-newsletter-form" id="newsletterForm">
                    <input type="email" id="newsletterEmail" placeholder="Your email address" required>
                    <button type="submit" id="newsletterSubmit">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>




        </div>
        
        <!-- Copyright -->
        <div class="fa-footer-bottom">
            <div class="fa-footer-copyright">
                &copy; 2025 F&A Creative Agency. All rights reserved.| Developed By F&A Creative Agency
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- hidden elements -->
<div class="mil-hidden-elements">
    <div class="mil-dodecahedron">
        <div class="mil-pentagon">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="mil-pentagon">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="mil-pentagon">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="mil-pentagon">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="mil-pentagon">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="mil-pentagon">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="mil-pentagon">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="mil-pentagon">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="mil-pentagon">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="mil-pentagon">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="mil-pentagon">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="mil-pentagon">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mil-arrow">
        <path d="M 14 5.3417969 C 13.744125 5.3417969 13.487969 5.4412187 13.292969 5.6367188 L 13.207031 5.7226562 C 12.816031 6.1136563 12.816031 6.7467188 13.207031 7.1367188 L 17.070312 11 L 4 11 C 3.448 11 3 11.448 3 12 C 3 12.552 3.448 13 4 13 L 17.070312 13 L 13.207031 16.863281 C 12.816031 17.254281 12.816031 17.887344 13.207031 18.277344 L 13.292969 18.363281 C 13.683969 18.754281 14.317031 18.754281 14.707031 18.363281 L 20.363281 12.707031 C 20.754281 12.316031 20.754281 11.682969 20.363281 11.292969 L 14.707031 5.6367188 C 14.511531 5.4412187 14.255875 5.3417969 14 5.3417969 z" />
    </svg>

    <svg width="250" viewBox="0 0 300 1404" fill="none" xmlns="http://www.w3.org/2000/svg" class="mil-lines">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M1 892L1 941H299V892C299 809.71 232.29 743 150 743C67.7096 743 1 809.71 1 892ZM0 942H300V892C300 809.157 232.843 742 150 742C67.1573 742 0 809.157 0 892L0 942Z" class="mil-move" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M299 146V97L1 97V146C1 228.29 67.7096 295 150 295C232.29 295 299 228.29 299 146ZM300 96L0 96V146C0 228.843 67.1573 296 150 296C232.843 296 300 228.843 300 146V96Z" class="mil-move" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M299 1H1V1403H299V1ZM0 0V1404H300V0H0Z" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M150 -4.37115e-08L150 1404L149 1404L149 0L150 -4.37115e-08Z" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M150 1324C232.29 1324 299 1257.29 299 1175C299 1092.71 232.29 1026 150 1026C67.7096 1026 1 1092.71 1 1175C1 1257.29 67.7096 1324 150 1324ZM150 1325C232.843 1325 300 1257.84 300 1175C300 1092.16 232.843 1025 150 1025C67.1573 1025 0 1092.16 0 1175C0 1257.84 67.1573 1325 150 1325Z" class="mil-move" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M300 1175H0V1174H300V1175Z" class="mil-move" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M150 678C232.29 678 299 611.29 299 529C299 446.71 232.29 380 150 380C67.7096 380 1 446.71 1 529C1 611.29 67.7096 678 150 678ZM150 679C232.843 679 300 611.843 300 529C300 446.157 232.843 379 150 379C67.1573 379 0 446.157 0 529C0 611.843 67.1573 679 150 679Z" class="mil-move" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M299 380H1V678H299V380ZM0 379V679H300V379H0Z" class="mil-move" />
    </svg>
</div>
<!-- hidden elements end -->




<!-- Add these scripts at the bottom of your page, before closing body tag -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('newsletterForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const email = document.getElementById('newsletterEmail').value;
        
        // Show SweetAlert notification
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Thank you for subscribing!',
            text: `We've sent a confirmation to ${email}`,
            showConfirmButton: false,
            timer: 3000,
            toast: true,
            background: '#1a1a1a',
            color: '#ffffff',
            customClass: {
                popup: 'fa-swal-popup'
            }
        });
        
        // Reset form
        this.reset();
    });
</script>