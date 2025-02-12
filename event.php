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

<?php include "inc/footer.php"; ?>
