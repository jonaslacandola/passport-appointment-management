<?php
    session_start();

    if (isset($_SESSION["uid"]) && $_SESSION["uid"]) {
        session_unset();
        session_destroy();

        header("Location: /passport_appointment_management/");
        exit();
    }
?>