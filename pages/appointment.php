<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg" href="assets/images/philport_icon.svg"/>
    <style>
        <?php
            include "assets/css/colors.css";
            include "assets/css/global.css";
            include "assets/css/appointment.css";
            include "assets/css/calendar.css";
        ?>
    </style>
    <title>PhilPort | Schedule an appoinment</title>
</head>
<body>
    <nav>
        <img src="assets/images/philport_logo.svg" alt="">
        <ul>
            <li><a href="/passport_appointment_management/">Home</a></li>
            <li><a href="/passport_appointment_management/appointment">Schedule Appointment</a></li>
            <li><a href="/passport_appointment_management/faq">FAQ's</a></li>
            <li><a href="/passport_appointment_management/contact-us">Contact Us</a></li>
            <li><a class="button" href="/passport_appointment_management/login">Login / Sign Up</a></li>
        </ul>
    </nav>
    
    <main>
        <section id="appointment">
            <form id="appointment-form" method="post">
                <div>
                    <p class="title">Appointment Info</p>
                    <input class="input" type="text" name="dateAndTime" id="dateAndTime" placeholder="Date & Time" disabled>
                    <select class="input" name="location" id="location" default="">
                        <option value="" disabled selected hidden>Location</option>
                    </select>
                    <select class="input" name="reason" id="reason" default="">
                        <option value="" disabled selected hidden>Reason for Appointment</option>
                    </select>
                </div>
                <div>
                    <p class="title">Personal Info</p>
                    <input class="input" type="text" name="name" id="name" placeholder="Name">
                    <input class="input" type="text" name="dateOfBirth" id="dateOfBirth" placeholder="Date of Birth">
                    <select class="input" name="gender" id="gender">
                        <option value="" selected disabled hidden>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div>
                    <p class="title">Contact Info</p>
                    <input class="input" type="email" name="email" id="email" placeholder="Email">
                    <input class="input" type="text" name="contact" id="contact" placeholder="Contact Number">
                </div>
            </form>
            <div>
                <div id="calendar"></div>
                <p>Select your appointment date above.</p>
            </div>
            
        </section>
        <section id="summary">
            <main> 
                <p class="title">Summary</p>
                <p id="sum-name"></p>
                <p id="sum-birthdate"></p> 
                <p id="sum-gender"></p>
                <br>
                <p>Appointment:</p>
                <p id="sum-reason"></p>
                <p id="sum-timeAndplace"></p>
            </main>
            <button id="submit" class="button">Schedule</button>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js"></script>
    <script>
        <?php
            include "assets/js/calendar.js";
            include "assets/js/appointment.js";
        ?>
    </script>
    <script>
        function changeColorOnChange(id) {
            const element = document.querySelector(`#${id}`);

            element.addEventListener("change", () => {
            element.style.color = "var(--secondary-dark-gray) !important";
            })
        }

        changeColorOnChange("location");
        changeColorOnChange("reason");
        changeColorOnChange("gender");
    </script>
</body>
</html>