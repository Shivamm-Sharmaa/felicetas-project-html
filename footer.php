<!-- footer -->

<footer class="footer">
    <div class="container">
        <div class="subscribe-section">
            <h2>Subscribe to our newsletter</h2>
            <button class="secondary-btn">Subscribe Now <i class="fa-solid fa-arrow-down"></i>
            </button>
            <p>To be informed of the latest news</p>
        </div>
        <div class="row">
            <div class="col-md-3 footer1">
                <div class="footer-inner">
                    <h3>Our company</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Corporate</a></li>
                        <li><a href="#">Culture and Value</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 footer2">
                <div class="footer-inner">
                    <h3>Our services</h3>
                    <ul>
                        <li><a href="#">Product Certification</a></li>
                        <li><a href="#">Global Product Approval</a></li>
                        <li><a href="#">Auditing & system Certification</a></li>
                        <li><a href="#">Knowledge Services</a></li>
                        <li><a href="#">Project Management Services</a></li>
                        <li><a href="#">Testing</a></li>
                        <li><a href="#">Inspection</a></li>
                        <li><a href="#">Training & Development</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 footer3">
                <div class="footer-inner">
                    <div class="contact">
                        <h3>Reach out Us</h3>
                        <p><strong>Email:</strong><a href=""> info@felicitas-analytical.com</a></p>
                        <p><strong>Phone:</strong><a href=""> +91 - 9910720666</a></p>
                        <p><strong>Address:</strong> J-207, Amrapali Princely Estate, Sector-76, Noida 201301, (UP) India.</p>
                        <div class="qr">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=140x140&data=https://felicitas-analytical.com" alt="QR Code">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 footer4">
                <div class="footer-inner">
                    <h3>Our Presence</h3>
                    <img src="images/map.png" alt="image">
                </div>
            </div>
        </div>
        <div class="footer-social-visitor">
            <!-- Social Icons -->
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>

            <!-- Visitor Counter -->
            <div class="visitor-counter">
                Visitor counter: <span>3468</span>
            </div>
        </div>
    </div>
</footer>


<!-- Bottom Section -->
<div class="footer-copyright">
    <div class="container">
        <div class="footer-bottom">
            <p>Felicitas Analytical 2025. All Right Reserved | Designed by<a href="#"> Felicitas Analytical</a></p>
            <ul>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Privacy Policy</a></li>
            </ul>

        </div>
    </div>
</div>

<button onclick="topFunction()" id="backToTop" title="Go to top">
    <img src="images/backtotop.png" alt="image">
</button>


<script type="text/javascript">
    jQuery(document).ready(function() {
        // Show button on scroll
        window.onscroll = function() {
            const btn = document.getElementById("backToTop");
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                btn.style.display = "block";
            } else {
                btn.style.display = "none";
            }
        };

        // Scroll to top on click
        document.getElementById("backToTop").addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    });
</script>




<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#business_carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1024: {
                    items: 3
                }
            }
        })
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#analytical_slider').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1024: {
                    items: 4
                }
            }
        })
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#about_slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1024: {
                    items: 1
                }
            }
        })
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#testimonial-slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1024: {
                    items: 1
                }
            }
        })
    });
</script>

</body>

</html>