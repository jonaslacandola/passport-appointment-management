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
            include "assets/css/homepage.css";
            include "assets/css/global.css";
            include "assets/css/colors.css";
        ?>
    </style>
    <title>PhilPort | Passport Appointments made Fast and Easy</title>
</head>
<body>
    <nav>
        <img src="assets/images/philport_logo.svg" alt="Philport Logo">
        <ul>
            <li><a href="/passport_appointment_management/">Home</a></li>
            <li><a href="/passport_appointment_management/appointment">Schedule Appointment</a></li>
            <li><a href="/passport_appointment_management/faq">FAQ</a></li>
            <li><a href="/passport_appointment_management/contact-us">Contact Us</a></li>
            <li><a class="button" href="/passport_appointment_management/login">Login / Sign Up</a></li>
        </ul>
    </nav>

    <main>
        <div id="hero">
            <img id="bg" src="assets/images/image3.jpg" alt="background image of a drone shot">
            <div id="shadow"></div>
            <div id="hero-text">
                <div id="text-container">
                    <h1>Schedule Your Passport Appointment</h1>
                    <p>Our easy-to-use system allows you to book your passport appointment quickly and efficiently.</p>
                    <a href="/passport_appointment_management/login" class="button">Get Started</a>
                </div>
                <div id="others"></div>
            </div>
        </div>

        <div id="features">
            <h1>Features</h1>
            <div id="features-container">
                <div class="feature-icon">
                    <img src="assets/images/schedule.svg" alt="Illustration of easy scheduling">
                    <p>Easy Scheduling</p>
                </div>
                <div class="feature-icon">
                    <img src="assets/images/secure.svg" alt="Illustration of easy scheduling">
                    <p>Secure Process</p>
                </div>
                <div class="feature-icon">
                    <img src="assets/images/help.svg" alt="Illustration of easy scheduling">
                    <p>Customer Support</p>
                </div>
            </div>
        </div>

        <footer>
            <section>
                <span>Privacy Policy | Terms of Service | Social Media Links</span>

                <span>&copy; Passport Appointment Management 2024. All rights reserved.</span>
            </section>
        </footer>
    </main>
</body>
</html>