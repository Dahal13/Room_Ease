<?php

include 'database.php';


session_start();
$errorMessage = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : '';
unset($_SESSION['error_message']); // Clear the message
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://images.app.goo.gl/5uG5P1GiFePqrmFh6" rel="stylesheet">
    <link rel="stylesheet" href="modal.css">
    <title>Glassmorphism Login</title>

    <script>
        function validateForm() {
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();

            const emailError = document.getElementById('emailError');
            const passwordError = document.getElementById('passwordError');

            const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/;

            let isValid = true;

            // Email validation
            if (email === "") {
                emailError.textContent = "Email should not be empty";
                isValid = false;
            } else if (!emailRegex.test(email)) {
                emailError.textContent = "Invalid email format";
                isValid = false;
            } else {
                emailError.textContent = "";
            }



            if (email === "") {
                emailError.textContent = "email should not be empty";
                isValid = false;
            } else {
                emailError.textContent = "";
            }

            // Password validation
            if (password === "") {
                passwordError.textContent = "Password should not be empty";
                isValid = false;
            } else if (!passwordRegex.test(password)) {
                passwordError.textContent = "Password must include 6-20 characters, uppercase, lowercase, digit, and special character";
                isValid = false;
            } else {
                passwordError.textContent = "";
            }

            // Return whether the form is valid or not
            return isValid;
        }
    </script>
    <script src="../togglepassword.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('https://img.freepik.com/premium-photo/abstract-blur-defocused-hotel-lobby-interior-background-vintage-filter_875825-64135.jpg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .glass-container {
            margin: 0px 4%;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.5);
            box-shadow: 0px 0px 30px 7px rgba(0, 0, 0, 0.5);
            border-radius: 6px;
            width: 37%;
            min-width: 380px;
            text-align: center;
        }

        .left-box {
            padding: 40px;
            width: 100%;
        }

        .glass-container img {
            width: 150px;
            margin-bottom: 20px;
            filter: brightness(0.5);
        }

        .input-container {
            position: relative;
            width: 100%;
            margin-bottom: 5px;
        }

        input {
            border: 1px solid burlywood;
            border-radius: 5px;
            padding: 10px;
            color: rgb(0, 0, 0);
            width: 100%;
            font-size: 1.2em;
        }

        input:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        input:not(input[type="submit"])::placeholder {
            color: rgb(65, 63, 63);
            font-size: 0.8em;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        input[type="submit"] {
            background: #6e8efb;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background: #a777e3;
        }

        .register-direction {
            font-size: 1.1em;
            margin: 8px 0px;
            text-align: center;
        }

        .register-direction a {
            text-decoration: none;
            margin-left: 1%;
        }

        .register a:hover {
            text-decoration: underline;
            color: rebeccapurple;
        }

        .error {
            color: red;
            font-size: 12px;
            display: block;
            height: 20px;
            text-align: start;
        }

        @media (max-width: 768px) {
            .glass-container {
                min-width: 320px;
            }

            input[type="text"],
            input[type="number"],
            input[type="password"] {
                font-size: 0.9em;
            }
        }
    </style>
</head>

<body>
    <div id="modal1" class="modal-overlay1">
        <div class="modal-content1">
            <p id="modalMessage1"></p>
            <button onclick="closeModal1()">Close</button>
        </div>
    </div>
    <div class="glass-container">
        <div class="left-box">
            <a href="../index.php"><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/25/e0/ac/1c/soaltee-westend-resort.jpg?w=1200&h=-1&s=1" alt="Logo"></a>
            <h2>user Login ! ! !</h2>
            <form id="loginForm" method="POST" action="user_login.php" onsubmit="return validateForm()">
                <input type="text" id="email" name="email" placeholder="Email">
                <span id="emailError" class="error"></span>

                <!-- <input type="text" id="userId" name="userId" placeholder="user Id Number">
                <span id="userIdError" class="error"></span> -->
                <input type="text" id="username" name="username" placeholder="username">
                <span id="usernameError" class="error"></span>

                <div class="input-container">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <i id="togglePasswordIcon" class="fas fa-eye toggle-password" onclick="togglePasswordVisibility()"></i>
                </div>
                <span id="passwordError" class="error"></span>

                <a href="../forgotpassword/forgot_password.php" style="display:block;text-align: start;margin: 8px 0px;">Forgot Password?</a>
                <input type="submit" value="Login">
                <div class="register-direction">
                    <span>Haven't Registered till now? </span><a href="user_register_form.php">Register Here</a>
                </div>
            </form>
        </div>
    </div>
    <script>
        // PHP Message passed to JavaScript
        const errorMessage = <?= json_encode($errorMessage); ?>;

        // Show modal if there is a message
        if (errorMessage) {
            const modal = document.getElementById('modal1');
            const modalMessage = document.getElementById('modalMessage1');
            modalMessage.textContent = errorMessage;
            modal.style.display = 'flex';
        }

        // Function to close the modal
        function closeModal1() {
            document.getElementById('modal1').style.display = 'none';
        }
    </script>
</body>

</html>
