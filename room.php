<?php
    include "inc/header.php";
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Room Cards</title>

    


    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #e3f2fd, #f0f0f0);
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin: 20px;
            color: black;
            font-size: 30px;
            font-weight: strong;

        }


        h2{
            text-align: center;
            font-size:40px;

        }
        .room-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 40px;
        }

        .room-card {
            background: white;
            border-radius: 15px;
            width: 320px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        .room-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-bottom: 4px solid #1d72b8;
        }

        .room-card h3 {
            color: #1d72b8;
            margin: 20px 0 10px;
            font-size: 1.8em;
            font-weight: 700;
        }

        .room-card p {
            color: #444;
            font-size: 1.1em;
            margin: 10px 20px;
            line-height: 1.6;
            font-weight: 500;
        }

        .room-card .price {
            font-weight: 700;
            font-size: 1.5em;
            color: #2c3e50;
            margin: 15px 0;
        }

        .room-card button {
            background: #1d72b8;
            color: white;
            border: none;
            padding: 15px;
            width: 90%;
            margin: 15px 0;
            border-radius: 8px;
            font-size: 1.2em;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .room-card button:hover {
            background: #155a91;
            transform: scale(1.05);
        }

        .room-card a {
            display: block;
            margin: 15px 0;
            text-decoration: none;
            color: #1d72b8;
            font-size: 1.1em;
            font-weight: 600;
            transition: color 0.3s, text-decoration 0.3s;
        }

        .room-card a:hover {
            color: #155a91;
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .room-cards {
                flex-direction: column;
                align-items: center;
            }

            .room-card {
                width: 95%;
            }
        }
    </style>
</head>
<body>
    <h2>Our Rooms</h2>
    <div class="room-cards">
        <div class="room-card">
            <img src="img/single1.jpg" alt="Single Room">
            <h3>Single Room</h3>
            <p>Perfect for solo travelers.</p>
            <p class="price">₹1000/night</p>
            <button>Book Now</button>
            <a href="sroomdetails.php">More Details</a>
        </div>
        <div class="room-card">
            <img src="img/r2.jpg" alt="Double Room">
            <h3>Double Room</h3>
            <p>Ideal for two or more guests.</p>
            <p class="price">₹1500/night</p>
            <button>Book Now</button>
            <a href="droomdetails.php">More Details</a>
        </div>
        <div class="room-card">
            <img src="img/R1.jpg" alt="Suite">
            <h3>Suite</h3>
            <p>Luxury and comfort combined.</p>
            <p class="price">₹2500/night</p>
            <button>Book Now</button>
            <a href="suitedetails.php">More Details</a>
        </div>
    </div>
</body>
</html>

<?php include "inc/footer.php"; ?>
