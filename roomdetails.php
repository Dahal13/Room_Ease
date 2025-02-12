<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Room cards</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <h1>Hotel Room Booking</h1>

        <!-- Room Cards -->
        <div class="room-cards">
            <!-- Single Room -->
            <div class="room-card">
                <img src="img/single-room.jpg" alt="Single Room">
                <h3>Single Room</h3>
                <p>Perfect for one guest.</p>
                <ul>
                    <li>Free Wi-Fi</li>
                    <li>1 Single Bed</li>
                    <li>Air Conditioning</li>
                    <li>24/7 Room Service</li>
                </ul>
                <button class="book-btn" onclick="selectRoom('Single Room')">Book Now</button>
            </div>

            <!-- Double Room -->
            <div class="room-card">
                <img src="double-room.jpg" alt="Double Room">
                <h3>Double Room</h3>
                <p>Ideal for two or more then two guests.</p>
                <ul>
                    <li>Free Wi-Fi</li>
                    <li>2 Double Beds</li>
                    <li>Air Conditioning</li>
                    <li>24/7 Room Service</li>
                </ul>
                <button class="book-btn" onclick="selectRoom('Double Room')">Book Now</button>
            </div>

            <!-- Suite Room -->
            <div class="room-card">
                <img src="suite-room.jpg" alt="Suite Room">
                <h3>Suite Room</h3>
                <p>Luxury for a premium stay.</p>
                <ul>
                    <li>Free Wi-Fi</li>
                    <li>King Bed</li>
                    <li>Luxury Amenities</li>
                    <li>Mini Bar</li>
                    <li>Room Service</li>
                </ul>
                <button class="book-btn" onclick="selectRoom('Suite Room')">Book Now</button>
            </div>
        </div>
        </html>
        