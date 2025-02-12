 <html>
    <head>
        <body>
 <!-- Booking Form -->
 <div class="booking-form">
            <h2>Booking Form</h2>
            <form id="bookingForm" onsubmit="return validateForm()">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="roomType">Room Type:</label>
                <select id="roomType" name="roomType" required>
                    <option value="">Select a room</option>
                    <option value="Single Room">Single Room</option>
                    <option value="Double Room">Double Room</option>
                    <option value="Suite Room">Suite Room</option>
                </select>
                
                <label for="checkIn">Check-In Date:</label>
                <input type="date" id="checkIn" name="checkIn" required>
                
                <label for="checkOut">Check-Out Date:</label>
                <input type="date" id="checkOut" name="checkOut" required>

                <input type="submit" value="Submit Booking">
            </form>
        </div>
    </div>

    <script>
        // Function to populate the selected room in the form
        function selectRoom(roomType) {
            document.getElementById('roomType').value = roomType;
        }

        // Form validation function
        function validateForm() {
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let roomType = document.getElementById('roomType').value;
            let checkIn = document.getElementById('checkIn').value;
            let checkOut = document.getElementById('checkOut').value;

            if (name === "" || email === "" || roomType === "" || checkIn === "" || checkOut === "") {
                alert("All fields must be filled out.");
                return false;
            }

            // Optional: Additional validation for dates (check-out should be after check-in)
            if (new Date(checkIn) >= new Date(checkOut)) {
                alert("Check-out date must be after Check-in date.");
                return false;
            }

            alert("Booking Successful!");
            return true;
        }
    </script>
</body>
    </head>
    </html>
    