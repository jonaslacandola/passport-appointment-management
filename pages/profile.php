<?php
    session_start();

    include "config.php";
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
            include "assets/css/colors.css";
            include "assets/css/global.css";
            include "assets/css/profile.css";
        ?>
    </style>
    <title>PhilPort | User Profile</title>
</head>
<body>
    <nav>
        <img src="assets/images/philport_logo.svg" alt="">
        <ul>
            <li><a href="/passport_appointment_management/">Home</a></li>
            <li><a href="/passport_appointment_management/appointment">Schedule Appointment</a></li>
            <li><a href="/passport_appointment_management/faq">FAQ's</a></li>
            <li><a href="/passport_appointment_management/contact-us">Contact Us</a></li>
            <?php
                if (!count($_SESSION)) {
                 echo "<li><a class=\"button\" href=\"/passport_appointment_management/login\">Login / Sign Up</a></li>";
                } else {
                    echo "<li><a class=\"bi bi-person-fill\" href=\"/passport_appointment_management/profile\"></a></li>";
                }
            ?>
        </ul>
    </nav>

    <main></main>
</body>
</html>