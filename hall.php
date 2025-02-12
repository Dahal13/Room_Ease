<?php
    include "inc/header.php";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting and Events</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            padding: 20px 0;
            background-color: #f8f8f8;
        }

        .header h1 {
            margin: 0;
            font-size: 2rem;
            color: #333;
        }

        .images {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin: 20px 0;
        }

        .images img {
            width: 49%;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        

        .floor-plan {
            display: flex;
            justify-content: center;
        }

        
        .banquet-section {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin: 20px 0;
            gap: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
        }

        .banquet-section:last-child {
            border-bottom: none;
        }

        .floor-plan img {
            width: 500px;
            height: auto;
            border: 2px solid #ddd;
            border-radius: 8px;
        }

        .banquet-info {
            flex: 1;
            margin-left: 20px;
        }

        .banquet-info h2 {
            font-size: 1.5rem;
            color: #444;
            margin: 0 0 10px;
        }

        .banquet-info p {
            color: #666;
            font-size: 1rem;
            margin: 0 0 10px;
        }

        .enquire-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            text-align: center;
        }

        .enquire-btn:hover {
            background-color: #0056b3;
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            position: relative;
        }

        .modal-content h2 {
            margin: 0 0 20px;
            font-size: 1.5rem;
            color: #333;
        }

        .modal-content label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .modal-content input,
        .modal-content textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .modal-content button {
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .modal-content button:hover {
            background-color: #0056b3;
        }

        .modal-content .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.2rem;
            cursor: pointer;
        }
    </style>
</head>
<div>
    <div class="container">
        <div class="header">
            <h1>Meeting and Events</h1>
        </div>

        <div class="images">
            <img src="https://www.baseraboutiquehotel.com.np/images/subpackage/DRgHU-bh3.jpg" alt="Meeting Hall 1">
            <img src="https://mountaingloryresort.com/wp-content/uploads/2022/10/hall2.jpg" alt="Meeting Hall 2">
        </div>
        <div class="banquet-section">
            <div class="floor-plan">
                <img src=" https://www.aagantukresort.com/images/subpackage/display/FaFZO-roelb-aagaman.jpg"alt="Aamantrit Banquet Hall Floor Plan">
            </div>
            <div class="banquet-info">
                <h2>Aamantrit Banquet Hall</h2>
                <p>Aamantrit Banquet Hall provides the perfect space for meetings, conferences, and special events. With modern amenities and a luxurious ambiance, your events will be unforgettable.</p>
                <button class="enquire-btn" onclick="openModal()">Enquire Now</button>
            </div>
        </div>

        <div class="banquet-section">
            <div class="floor-plan">
                <img src="https://www.aagantukresort.com/images/subpackage/display/wHn9A-bcg01-aamintrit.jpg" alt="Aagaman Hall Floor Plan">
            </div>
            <div class="banquet-info">
                <h2>Aagaman Hall</h2>
                <p>Aagaman Hall is ideal for hosting elegant gatherings, from small meetings to grand celebrations. Experience top-notch service and exquisite design in this versatile space.</p>
                <button class="enquire-btn" onclick="openModal()">Enquire Now</button>
            </div>
        </div>
    </div>

        
        
        <div class="modal" id="enquireModal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Enquire Now</h2>
            <form>
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Please enter your Name">

                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Please enter your Email">

                <label for="phone">Phone</label>
                <input type="text" id="phone" placeholder="Please enter your Contact">

                <label for="event">Event Title</label>
                <input type="text" id="event" placeholder="Please enter the Event Title">

                <label for="pax">Number of Pax</label>
                <input type="number" id="pax" placeholder="Please enter no of Pax">

                <label for="date">Date</label>
                <input type="date" id="date">

                <label for="message">Your Message</label>
                <textarea id="message" rows="4" placeholder="Enter your message"></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('enquireModal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('enquireModal').style.display = 'none';
        }
    </script>
        
    
</body>
</html>






















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomEase</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <style>
        /* Basic CSS reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color:navajowhite;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }

        h1 {
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
        }

        .auth-buttons button {
            margin-left: 10px;
            padding: 0.5rem 1rem;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
        }

        .auth-buttons button:hover {
            background-color: #f0f0f0;
        }

        /* Hero Section with Slideshow */
        #hero {
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
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

        /* Booking Form Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 10;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            text-align: center;
        }

        .modal-content input,
        .modal-content select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .modal-content button {
            padding: 10px 20px;
            background-color: #3261c8;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .modal-content button:hover {
            background-color: #274b9c;
        }

        .close-btn {
            background-color: #f44336;
            padding: 5px 10px;
            border-radius: 50%;
            color: white;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .close-btn:hover {
            background-color: #c0392b;
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
            padding: 20px;
            background-color: #333;
            color: #fff;
            text-align: center;
        }

        footer p {
            margin: 10px 0;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
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
 <li><a href="contact.php"><strong>Contact us</strong></a></li>
 </ul>
     <div class="auth-buttons">
         <button><a href="login.php"><strong>login</strong></a></button>
          <button><a href="Register.php"><strong>Register</strong></a></button>
      </div>
            
 </nav>
    </header>

        <div id="bookingModal" class="modal">
            <div class="modal-content">
                <span class="close-btn" id="closeBookingModal">&times;</span>
                <h2>Book Your Stay</h2>
                <form>
                    <input type="text" id="name" placeholder="Your Name" required>
                    <input type="date" id="checkInDate" placeholder="Check-in Date" required>
                    <input type="date" id="checkOutDate" placeholder="Check-out Date" required>
                    <select id="roomType" required>
                        <option value="">Select Room Type</option>
                        <option value="single">Single Room</option>
                        <option value="double">Double Room</option>
                        <option value="suite">Suite</option>
                    </select>
                    <button type="submit">Book Now</button>
                </form>
            </div>
        </div>
    
   

    <!-- Hero Section with Slideshow -->
    <section id="hero">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('https://dynamic-media-cdn.tripadvisor.com/media/photo-o/25/e0/ac/1c/soaltee-westend-resort.jpg?w=1200&h=-1&s=1')"></div>
                <div class="swiper-slide" style="background-image: url('https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/b6/51/e5/hotel-shambala.jpg?w=700&h=-1&s=1')"></div>
                <div class="swiper-slide" style="background-image: url('https://www.premierinn.com/_next/image?url=https%3A%2F%2Fwww.premierinn.com%2Fcontent%2Fdam%2Fpi%2Fwebsites%2Fhotelimages%2Fgb%2Fen%2FG%2FGATTHY%2F_R6A9892_7.jpg&w=3840&q=75')"></div>
                <div class="swiper-slide" style="background-image: url('https://www.baseraboutiquehotel.com.np/images/subpackage/DRgHU-bh3.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg');"></div>
                <div class="swiper-slide" style="background-image: url('https://www.hotelgajur.com/images/Book-A-Room-Dharan-Itahari/roomdetails/Exclusive-Deluxe-Room-Dharan-Hotel-Book2.jpg');"></div>
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
            <p>RoomEase Resort is an ideal place to settle down a good and luxurious stay.
               Our finest chefs brings you the most delicious mouthwatering foods. With
               exclusive parking spaces, high-speed Wi-Fi, hot water supply, terrace apartments,
               and a rooftop view of the valley, spa, gym, swimming pool, varied food expertise.
               There’s nothing you would be wanting more from us but a promise to accommodate you
               on your next visit.
            </p>
            <p>With our experienced and humble employees catering to your needs, your stay with 
               us will be worth every penny you have spent. Our house keeping are trained and an 
               expert when embrace tranquil serene surroundings at banepa away from hustle- bustle 
               of noisy city environment comes to tend to your comfort</p>
        </div>
        
        <div class="feature">
            <h3>Why choose us ?</h3>
            <ul>
            <li>Experience the perfect fusion of luxury and nature just 3 km from Banepa at RoomEase Resort.</li>
            <li>Our expansive 72-rope property features exquisite dining, a rejuvenating spa, a gym, and a refreshing swimming pool for your ultimate comfort.</li>
            <li>Enjoy personalized service from our dedicated staff, ensuring every moment of your stay is memorable.</li>
            <li>We offer competitive room rates and exclusive parking, alongside high-speed Wi-Fi and terrace apartments with breathtaking valley views.</li>
            <li>Our logistics and ticketing facilities make local and regional travel effortless.</li>
            <li>Our Resort is a tranquil escape that feels like home, where every detail is designed for your relaxation.</li>
            </ul>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <h2>About Room Ease Hotel</h2>
        <p>Located in Banepa, Room Ease Hotel offers an unparalleled vacation experience. Our hotel features state-of-the-art facilities, exquisite dining options, and a friendly, attentive staff dedicated to making your stay unforgettable.</p>
    </section>

    
    

    <!-- Footer -->
    
    <p>&copy; 2024 Room Ease Hotel. All Rights Reserved.</p>
    <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
   

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

        // Modal functionality
        var bookingModal = document.getElementById("bookingModal");
        var openBookingBtn = document.getElementById("openBookingBtn");
        var closeBookingModal = document.getElementById("closeBookingModal");

        openBookingBtn.onclick = function() {
            bookingModal.style.display = "flex";
        }

        closeBookingModal.onclick = function() {
            bookingModal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == bookingModal) {
                bookingModal.style.display = "none";
            }
        }
    </script>
</body>
</html>

