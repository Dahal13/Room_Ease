<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomEase</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        /* Basic CSS reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        /* Header and Navigation Bar */
        header {
            background-color: navajowhite;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        nav h1 {
            font-size: 24px;
            color: #3261c8;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: black;
            font-size: 16px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #49742e;
        }

        .auth-buttons button {
            margin-left: 10px;
            padding: 0.5rem 1rem;
            background-color: #d4edda;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #49742e;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .auth-buttons button a {
            text-decoration: none;
            color: inherit;
        }

        .auth-buttons button:hover {
            background-color: #f0f8ec;
        }

        /* Hero Section with Slideshow */
        #hero {
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .swiper-container {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .hero-text {
            z-index: 1;
            position: relative;
            color: white;
            text-align: center;
        }

        .hero-text h2 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .cta-btn {
            padding: 10px 20px;
            background-color: #fff;
            color: #333;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
        }

        .cta-btn:hover {
            background-color: #ddd;
        }

        /* Features Section */
        #features {
            display: flex;
            justify-content: space-around;
            padding: 50px;
            background-color: #fff;
            text-align: center;
        }

        .feature {
            width: 30%;
        }

        .feature h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #333;
        }

        .feature p {
            color: #555;
            text-align: justify;
        }

        .feature ul {
            text-align: left;
            margin-top: 20px;
            list-style: disc;
            padding-left: 20px;
        }

        .feature ul li {
            margin-bottom: 10px;
            color: #555;
        }

        /* About Section */
        #about {
            padding: 50px;
            text-align: center;
            background-color: #f8f8f8;
        }

        #about h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        #about p {
            color: #666;
            font-size: 18px;
            width: 80%;
            margin: 0 auto;
            line-height: 1.8;
        }

        /* Footer */
        footer {
            text-align: center;
            background-color: #49742e;
            color: white;
            padding: 20px 10px;
            margin-top: 20px;
            border-top: 2px solid #d4edda;
            font-size: 14px;
            font-family: Arial, sans-serif;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
        }

        footer p {
            margin: 5px 0;
        }

        footer p:first-child {
            font-weight: bold;
        }

        footer p:last-child {
            font-size: 12px;
            color: #d4edda;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <h1>Room Ease</h1>
            <ul>
                <li><a href="#"><strong>Home</strong></a></li>
                <li><a href="about.php"><strong>About Us</strong></a></li>
                <li><a href="room.php"><strong>Rooms</strong></a></li>
                <li><a href="dine.php"><strong>Dine/Wine</strong></a></li>
                <li><a href="event.php"><strong>Events</strong></a></li>
                <li><a href="contact.php"><strong>Contact Us</strong></a></li>
            </ul>
            <div class="auth-buttons">
                <button><a href="login.php"><strong>Login</strong></a></button>
                <button><a href="register.php"><strong>Register</strong></a></button>
            </div>
        </nav>
    </header>

    <!-- Hero Section with Slideshow -->
    <section id="hero">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Add your slideshow images -->
                <div class="swiper-slide" style="background-image: url('room1.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('room2.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('room3.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('room4.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('room5.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('room6.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('room7.jpg');"></div>
            </div>
        </div>
        <div class="hero-text">
            <h2>Welcome to Room Ease Hotel</h2>
            <p>Your perfect getaway destination with world-class amenities</p>
            <a class="cta-btn" href="#" id="openBookingBtn">Book Now</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features">
        <div class="feature">
            <h3>Welcome to RoomEase Resort</h3>
            <p>Your luxurious stay awaits with top-notch facilities and services.</p>
        </div>
        <div class="feature">
            <h3>Why Choose Us?</h3>
            <ul>
                <li>Exclusive amenities and scenic views.</li>
                <li>Dedicated and friendly staff.</li>
                <li>Competitive rates for unmatched comfort.</li>
            </ul>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <h2>About Room Ease Hotel</h2>
        <p>Located in Banepa, Room Ease Hotel offers an unparalleled vacation experience.</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 RoomEase Resort. All rights reserved.</p>
        <p>Designed by RoomEase Team</p>
    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            }
        });
    </script>
</body>

</html>
