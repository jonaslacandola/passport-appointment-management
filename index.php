<?php
    $route = isset($_GET["route"]) ? $_GET["route"] : "";

    switch($route) {
        case "":
            include "pages/homepage.php";
            break;
        case "appointment":
            include "pages/appointment.php";
            break;
        case "faq":
            break;
        case "contact-us":
            include "pages/contact-us.php";
            break;
        case "login":
            include "pages/login.php";
            break;
        case "sign-up":
            include "pages/signup.php";
            break;
        case "dashboard":
            include "pages/dashboard.php";
            break;
        case "profile":
            include "pages/profile.php";
            break;
    }
?>