<?php
session_start();
$errorMessage = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : '';
unset($_SESSION['error_message']); // Clear the message
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Registration</title>
    <style>
        * {
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
            }

    </style>
</head>

<body>
    <div class="container">
        <h2>Register</h2>
        <form id="registerForm" method="POST" action="user_register.php" onsubmit="return validateForm()">
            <input type="text" id="name" name="name" placeholder="Full Name">
            <span id="nameError" class="error"></span>

            <input type="email" id="email" name="email" placeholder="Email">
            <span id="emailError" class="error"></span>

            <input type="text" id="phone" name="phone" placeholder="Phone Number">
            <span id="phoneError" class="error"></span>

            <input type="password" id="password" name="password" placeholder="Password">
            <span id="passwordError" class="error"></span>

            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
            <span id="confirmPasswordError" class="error"></span>

            <input type="submit" value="Register">
        </form>
        <p>Already have an account? <a href="user_login.php">Login here</a></p>
    </div>

    <script>
        function validateForm() {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const password = document.getElementById('password').value.trim();
            const confirmPassword = document.getElementById('confirmPassword').value.trim();

            let isValid = true;

            // Clear previous errors
            document.getElementById('nameError').textContent = '';
            document.getElementById('emailError').textContent = '';
            document.getElementById('phoneError').textContent = '';
            document.getElementById('passwordError').textContent = '';
            document.getElementById('confirmPasswordError').textContent = '';

            // Simple validation
            if (name === '') {
                document.getElementById('nameError').textContent = 'Name is required';
                isValid = false;
            }

            if (email === '') {
                document.getElementById('emailError').textContent = 'Email is required';
                isValid = false;
            }

            if (phone === '') {
                document.getElementById('phoneError').textContent = 'Phone number is required';
                isValid = false;
            }

            if (password === '') {
                document.getElementById('passwordError').textContent = 'Password is required';
                isValid = false;
            }

            if (confirmPassword === '') {
                document.getElementById('confirmPasswordError').textContent = 'Please confirm your password';
                isValid = false;
            } else if (password !== confirmPassword) {
                document.getElementById('confirmPasswordError').textContent = 'Passwords do not match';
                isValid = false;
            }

            return isValid;
        }
    </script>
</body>

</html>
