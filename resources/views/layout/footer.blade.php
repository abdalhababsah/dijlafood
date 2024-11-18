<footer id="footer" style="background-color:#eb3d36;" class="footer">
    <div class="container d-flex align-items-center justify-content-between py-4">
        <!-- Logo -->
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/tiptopred.png') }}" alt="DijlaFood Logo" style="height: 80px;">
        </a>

        <!-- Social Media Links and Complaints -->
        <div class="footer-content text-center">
            <!-- Social Media Links -->
            <div class="social-links d-flex justify-content-center mb-3">
                <a href="https://www.facebook.com/TipTopJo?mibextid=LQQJ4d" class="mx-2">
                    <i class="bi bi-facebook" style="font-size: 20px; color: #fff;"></i>
                </a>
                <a href="https://www.instagram.com/tip_topjo?igsh=MW52N3hxOXN6aHY3ZA%3D%3D&utm_source=qr" class="mx-2">
                    <i class="bi bi-instagram" style="font-size: 20px; color: #fff;"></i>
                </a>
                <a href="https://www.linkedin.com/company/dijla-co-for-food-industries-ltd/" class="mx-2">
                    <i class="bi bi-linkedin" style="font-size: 20px; color: #fff;"></i>
                </a>
            </div>

            <!-- Complaints Section -->
            <div class="complaints-section d-flex align-items-center justify-content-center mt-2" style="color: #fff;">
                <span style="font-size: 14px;"><strong>@lang('factory.complaints')</strong>: 
                    <a href="mailto:dijlafood@onmail.com" style="color: #fff; text-decoration: underline;">dijlafood@onmail.com</a>
                </span>
            </div>
        </div>
    </div>

    <!-- Centered Copyright Section -->
    <div class="text-center py-2" style="background-color: #d32f2f;">
        <p class="mb-0" style="color: #fff; font-size: 14px;">
            © <strong class="sitename">@lang('home.dijla_food')</strong> @lang('home.rights')
        </p></br>
        <p class="mb-0" style="color: #fff; font-size: 14px;">
            Developed By <strong class="sitename">
                <a style="color: white" href="https://www.thirtysix36.com/">36 Agency</a></strong>
        </p>
    </div>
</footer>

<style>
    #footer .social-links a:hover {
        color: #f8d7da; /* Lighter hover effect for icons */
        transform: scale(1.2); /* Slight zoom-in effect */
        transition: all 0.3s ease-in-out;
    }

    #footer img {
        max-height: 80px; /* Adjust logo size */
    }
</style>