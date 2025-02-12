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
            font-size: 30px;
            color:  #3261c8;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: black;
            font-size: 20px;
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


        .hero-text h1{
            font-size:65px;
            margin-bottom:80px;
            color:brown;
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

        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f8f8f8; } 
      h1 { text-align: center; margin: 20px 0; color: black; }
       .container
        { display: flex; flex-wrap: wrap; justify-content: center; padding: 20px; 
        }
        
        .contact-info { 
            width: 100%; max-width: 400px; background-color: #fff; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
             margin-right: 20px;
              text-align: left;
               border-radius: 8px;
                } 
                .contact-info h2 { 
                    color: #555;
                     
                     }
 .contact-info p
  {
     margin: 8px 0; font-size: 16px; line-height: 1.5;
      } 
      .contact-info p strong
       {
         color: #333;
          }
           .social-links {
             display: flex; gap: 10px;
              margin-top: 20px; } 
              .social-links a { text-decoration: none; color: #555; font-size: 1.5em; transition: color 0.3s ease; }
               .social-links a:hover { color: #007bff; } 
               .map { flex: 1; 
               min-width: 300px;
                height: 400px;
                 border-radius: 8px; 
                 overflow: hidden; 
                 box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                  } 
                  iframe { width: 100%;
                   height: 100%; border: none; }
                    @media (max-width: 768px) {
                         .contact-info { margin-right: 0; margin-bottom: 20px; } }
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
            <h1>Hello User!</h1>
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

    <!-- Contact section -->
                                 <h1>Contact Us</h1> 
                                 <div class="container">
                                     <!-- Contact Info --> 
                                      <div class="contact-info">
                                         <h2>Contact Info</h2>
                                          <p><strong>Address:</strong> Dhulikhel, Kavre, Nepal</p>
                                           <p><strong>Email:</strong> info@example.com</p>
                                            <p><strong>Phone:</strong> +977-123456789</p>
                                             <div class="social-links"> <a href="https://facebook.com" target="_blank">FB</a>
                                              <a href="https://instagram.com" target="_blank">IG</a>
                                               <a href="https://youtube.com" target="_blank">YT</a> 
                                               <a href="https://twitter.com" target="_blank">TW</a> 
                                            </div> </div> <!-- Embedded Google Map --> <div class="map">
                                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.3595200490963!2d85.547143574443!3d27.62047553145354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1baeb2eb6e19%3A0x8e20497f46e3f3c5!2sDhulikhel%2C%20Kavrepalanchok!5e0!3m2!1sen!2snp!4v1700000000000!5m2!1sen!2snp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> 

                                                 </iframe>
                                                 </div> 
                                                </div>
    

                                               
<?php include "inc/footer.php"; ?>


   

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