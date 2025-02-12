<?php
    include "inc/header.php";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Room Cards</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #e3f2fd, #ffffff);
        }

        .container {
            max-width: 1000px; /* Increased container width */
            margin: 0 auto;
            padding: 1.5px;
        }

        h1 {
            text-align: center;
            font-size: 2rem; /* Slightly larger title */
            color:black;
            margin-bottom: 20px;
            font-weight: 600;
        }

        h2{
            color: #1d72b8;
            text-align:center;
            font-size:35px;
          
        }

        /* Room Cards Styles */
        .room-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px; /* Larger gap between cards */
        }

        .room-card {
            background: #ffffff;
            border-radius: 12px;
            width: 600px; 
            height: 600px; 
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .swiper {
            width: 100%;
            height: 300px; /* Increased height of the image slider */
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures high-quality image display */
        }

        .room-card h3 {
            color: #1d72b8;
            margin: 20px 0 10px;
            font-size: 2rem; /* Slightly larger heading */
            font-weight: 600;
        }

        .room-card p {
            color: #555;
            font-size: 1.2rem; /* Slightly larger description text */
            margin: 10px 20px;
        }

        .room-card ul {
            list-style: none;
            padding: 0;
            margin: 10px 0;
            color: #555;
            font-size: 1rem; /* Increased font size */
            text-align: left;
            padding: 0 20px;
        }

        .room-card ul li {
            margin-bottom: 5px;
            display: flex;
            align-items: center;
        }

        .room-card ul li::before {
            content: "✔";
            color: #1d72b8;
            margin-right: 10px;
        }

        .book-btn {
            background: #1d72b8;
            color: white;
            border: none;
            padding: 15px;
            margin: 10px 0;
            width: 100%;
            border-radius: 6px;
            font-size: 1.2rem; /* Increased button font size */
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .book-btn:hover {
            background: #155a91;
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .room-cards {
                flex-direction: column;
                align-items: center;
            }

            .room-card {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hotel Room Booking</h2>

        <!-- Room Cards -->
        <div class="room-cards">
            <!-- Double Room -->
            <div class="room-card">
                <!-- Swiper Container -->
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="img/d1.jpg" alt="Room Image 1"></div>
                        <div class="swiper-slide"><img src="img/d2.jpg" alt="Room Image 2"></div>
                        <div class="swiper-slide"><img src="img/d3.jpg" alt="Room Image 3"></div>
                        <div class="swiper-slide"><img src="img/d4.jpg" alt="Room Image 4"></div>

                    </div>
                    <!-- Navigation buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <h2>Double Room</h2>
      <p>Perfect for two or more guests.</p>
      <ul>
        <li>Free Wi-Fi</li>
        <li>Double Bed</li>
        <li>Air Conditioning</li>
        <li>24/7 Room Service</li>
                </ul>
                <button class="book-btn" onclick="selectRoom('Double Room')">Book Now</button>
            </div>
            
            
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.swiper', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // Example: Room selection function
        function selectRoom(roomName) {
            alert(`You selected: ${roomName}`);
        }
    </script>
</body>
</html>

<?php include "inc/footer.php"; ?>


















