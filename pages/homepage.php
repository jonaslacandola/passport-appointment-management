<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="icon" type="image/svg" href="assets/images/philport_icon.svg"/>
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
            <li><a href="/passport_appointment_management/view-appointment">View Appointment</a></li>
            <li><a href="/passport_appointment_management/contact-us">Contact Us</a></li>
            <?php
                if (!isset($_SESSION["uid"])) {
                 echo "<li><a class=\"button\" href=\"/passport_appointment_management/login\">Login / Sign Up</a></li>";
                } else {
                    echo "<li><a class=\"bi bi-person-fill\" href=\"/passport_appointment_management/profile\"></a></li>";
                }
            ?>
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
                    <a href="/passport_appointment_management/register" class="button">Get Started</a>
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

        <div id="aboutus">
            <h1>About Us</h1>
            <div id="aboutus-container">
                <p class="welcome-to-philport">
                    Welcome to PhilPort, your trusted partner in securing your passport appointments with ease and efficiency.
                    Our mission is to simplify the passport application process, providing you with a seamless and stress-free
                    experience.
                    <br /><br />
                    We understand that obtaining a passport is a crucial step in your journey, whether
                    it’s for travel, work, or study abroad. Our platform is designed to streamline the appointment booking
                    process, offering you a user-friendly interface, real-time availability updates, and comprehensive support
                    every step of the way.
                    <br /><br />
                    Our team is dedicated to ensuring you have all the information you need,
                    from application guidelines to appointment booking tips. We strive to make the process as straightforward as
                    possible, saving you time and reducing the hassle often associated with passport services.
                    <br /><br />
                    Thank you for choosing PhilPort. Safe travels and best wishes on your journey!
                </p>
            </div>
        </div>

        <footer>
            <section>
                <span>Privacy Policy | Terms of Service | Social Media Links</span>

                <span>&copy; PhilPort Passport Appointment Management 2024. All rights reserved.</span>
            </section>
        </footer>
    </main>
</body>
</html>