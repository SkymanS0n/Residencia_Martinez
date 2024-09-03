<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Residencia Martinez</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="./styles/style.css">
    </head>
    <body>
        <div class="container">
            <header>
                <div class="nav-section">
                    <a id = "logo" href="index.html">
                        <img src="images/logo.png" alt="Residencia Martinez logo">
                    </a>
                    <input type="checkbox" id = "menu-toggle">
                    <label for="menu-toggle" class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>       
                    <nav class = "slide-menu">
                        <div class="my-address">
                            <div class="my-avatar">
                                <img src="images/profile_image_placeholder.png" alt="empty image placeholder">
                            </div>
                            <div class="greetings">
                                <p>Hello there!</p>
                                <p>Visitor</p>
                            </div>
                        </div>
                        <ul class = "nav-bar-links">
                            <li><a href="apply.php" class="menu-link">Apply Now</a></li>
                            <li><a href="message.php" class="menu-link">Message Us</a></li>
                            <li><a href="faq.html" class="menu-link">FAQs</a></li>
                            
                            <button class="menu-send-message" onclick="location. href='#'" aria-label="Tap to login.">Login
                            </button>
                        </ul>
                    </nav>
                </div>
            </header>
            <main>
                <section class="hero-section"> <!-- Start of Hero-Section -->
                    <div class="hero-container">
                        <div class="hero-details">
                            <h1>The place is right here <span></span></h1>
                            <h2>Welcome to Residencia Eijansantos, we offer the ultimate boarding experience for college women.</h2>
                            <div class="buttons">
                                <button class="view-work" onclick="location.href= 'message.html'">
                                    Inquire Now
                                </button>
                            </div>
                        </div>
                    </div>
                </section> <!-- End of Hero-Section -->
                <section class="amenities-section"> <!-- Start of Amenities-Section -->
                    <div class="amenities-container">
                        <h3>Cozy Rooms, and Secure Spaces</h3>
                        <div class="image-container" id="carousel">
                            <img src="images/amenities_a.png" alt="picture of the room showing the bed and table and chair.">
                        </div>
                        <p>Each room in our boarding house comfortably accommodates four students with bunk beds, wardrobes, a spacious desk, and chairs. Enjoy the luxury of private toilets and bathrooms in every room, ensuring convenience and privacy.</p>
                    </div>
                </section> <!-- End of Amenities-Section -->
                <section class="features"> <!-- Start of Features-Section -->
                    <div class="features-container">
                        <div class="group-a">
                            <div class="feature-a">
                                <img src="images/feature-a.png" alt="wifi logo icon">
                                <p>Experience uninterrupted connectivity with our Wi-Fi, perfect for online classes, research, and streaming your favorites!</p>
                            </div>
                            <div class="feature-b">
                                <img src="images/feature-b.png" alt="cctv camera icon logo">
                                <p>Our boarding house features top-notch CCTV surveillance, ensuring a secure environment for your peace of mind.</p>
                            </div>
                            <div class="feature-c">
                                <img src="images/feature-c.png" alt="">
                                <p>Affordable and hassle-free printing services! Skip external solutions, get quality prints at your fingertips</p>
                            </div>
                            <div class="feature-d">
                                <img src="images/feature-d.png" alt="">
                                <p>Constant water flow! We  prioritizes your needs with a dedicated reservoir.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-footer">
                        <div class="social-links">
                            <img href="#" src="images/residencia-martinez-logo.svg" alt="" id="martinez-logo">
                            <div class="icon-links">
                                <a href="#"><img src="images/facebook-logo.svg" alt=""></a>
                                <a href="#"><img src="images/messenger-logo.svg" alt=""></a>
                                <a href="#"><img src="images/X-logo.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="legal-regulations">
                            <a href="#">Terms & Conditions</a>
                            <p aria-label="copyright 2024, Residencia Martinez, all rights reserved.">© 2024 Residencia Martinez | <span>All rights reserved</span></p>
                        </div>
                    </div>
                </section> <!-- End of Features-Section -->
                <section class="roommate-matching-section"> <!-- Start of Roommate-Matching-Section -->
                    <div class="roomate-matching-container">
                        <h4>Roommate Match</h4>
                        <p>Finding the Perfect Bed and Room for You</p>
                        <div class="roommate-matching-form">
                            <form action="https://formspree.io/f/xjvnygvp" method="POST">
                                <div class="input-course">
                                    <label for="course">Course:</label>
                                    <input type="text" id="course" placeholder="BS Nursing" required>
                                </div>
                                <div class="input-age">
                                    <label for="age">Age:</label>
                                    <input type="number" id="age" placeholder="18" required>
                                </div>
                                <div class="input-color">
                                    <label for="color">Color:</label>
                                    <input type="text" id="color" placeholder="pink" required>
                                </div>
                            </form>
                            <button type="submit">Find</button>
                            <img src="images/roommate-matching-image3.png" alt="">
                        </div>
                    </div>
                </section> <!-- End of Roommate-Matching-Section -->
            </main>
        </div>
    </body>
</html>