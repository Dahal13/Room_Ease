<?php
    include "inc/header.php";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

       

        .about-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .about-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #555;
        }

        .about-container p {
            line-height: 1.6;
            font-size: 1rem;
            margin-bottom: 15px;
        }

        .team-section {
            margin-top: 40px;
        }

        .team-section h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        .team-members {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .team-member {
            text-align: center;
            max-width: 200px;
        }

        .team-member img {
            width: 100%;
            height: auto;
            border-radius: 50%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .team-member h4 {
            margin: 10px 0 5px;
            font-size: 1.1rem;
        }

        .team-member p {
            font-size: 0.9rem;
            color: #777;
        }

        
   
       
    </style>
</head>
<body>


    <div class="about-container">
        <h2>Welcome to RoomEase Hotel</h2>
        <p>
            At RoomEase Hotel, we are dedicated to providing our guests with the best possible experience. From luxurious rooms to world-class facilities, our mission is to create a relaxing and memorable stay for each of our guests. 
        </p>
        <p>
            Located in the heart of a serene destination, our hotel offers breathtaking views, exceptional dining options, and amenities that cater to your every need. Whether you are here for leisure or business, we strive to make your stay truly special.
        </p>

        <div class="team-section">
            <h3>Meet Our Team</h3>
            <div class="team-members">
                <div class="team-member">
 <img src=img/karuney.jpg alt="Team Member 1">
                    <h4>Karuna Dahal</h4>
                    <p>General Manager</p>
                </div>

                <div class="team-member">
                    <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/470053641_599676705936427_5937465209723091055_n.jpg?stp=dst-jpg_s526x395_tt6&_nc_cat=107&ccb=1-7&_nc_sid=0024fc&_nc_ohc=oCmHJyYFk-QQ7kNvgEiPwAD&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.xx&oh=03_Q7cD1gFF1K7CYHkGLlaRt1yGW1Xy5HKFj2EaQKSbjLsYKuhZ8A&oe=679CB672" alt="Team Member 2">
                    <h4>Isha Bade</h4>
                    <p>Head Chef</p>
                </div>

                
            </div>
        </div>
    </div>
 

   
</body>
</html>

<?php include "inc/footer.php"; ?>
