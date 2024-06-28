<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
            <li><a href="/passport_appointment_management/faq">FAQ</a></li>
            <li><a href="/passport_appointment_management/contact-us">Contact Us</a></li>
            <li><a class="button" href="/passport_appointment_management/login">Login / Sign Up</a></li>
        </ul>
    </nav>
    
    <main>
        <section id="appointment">
            <form id="appointment-form" method="post">
                <div>
                    <p class="title">Appointment Info</p>
                    <input class="input" type="text" name="dateAndTime" id="dateAndTime" placeholder="Date & Time">
                    <input class="input" type="text" name="place" id="place" placeholder="Place">
                    <input class="input" type="text" name="passportType" id="passportType" placeholder="Reason for Appointment">
                </div>
                <div>
                    <p class="title">Personal Info</p>
                    <input class="input" type="text" name="name" id="name" placeholder="Name">
                    <input class="input" type="text" name="dateOfBirth" id="dateOfBirth" placeholder="Date of Birth">
                    <input class="input" type="text" name="gender" id="gender" placeholder="Gender">
                </div>
                <div>
                    <p class="title">Contact Info</p>
                    <input class="input" type="text" name="name" id="name" placeholder="Name">
                    <input class="input" type="text" name="dateOfBirth" id="dateOfBirth" placeholder="Date of Birth">
                </div>
            </form>
            <div id="calendar"></div>
            
        </section>
        <section id="summary">
            <p class="title">Summary</p>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js"></script>

    <script src="assets/js/calendar.js"></script>
</body>
</html>