<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<footer>
    <!-- Footer up -->
    <section>
        <div id="bg">
            <div id="container_up" class="container">
                <div>
                    DC COMICS
                    <ul>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Comics</a></li>      
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
                    </ul> <br>

                    SHOP
                    <ul>
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Shop DC Collectibles</a></li>
                    </ul>
                </div>

                <div>
                    DC
                    <ul>
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy policy (New)</a></li>
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talent Workshops</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contacts Us</a></li>
                    </ul>
                </div>

                <div>
                    SITES
                    <ul>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>
                

                <div>
                    <img src="{{ Vite::asset('resources/assets/dc-logo-bg.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer down -->
    <section>
        <div id="bg_grey">
            <div id="container_down" class="container">
                <div>
                    <a id="sign" href="#">SIGN-UP NOW!</a>
                </div>

                <div>
                    <span>FOLLOW US</span>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-pinterest-p"></i>
                    <i class="fa-solid fa-location-dot"></i>
                </div>
            </div>
        </div>
    </section>
</footer>
