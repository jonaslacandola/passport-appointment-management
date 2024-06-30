<?php
    $hostname = "localhost";
    $database = "passport_appointment_management";
    $username = "root";
    $password = "";

    $conn = new mysqli($hostname, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed - " . $conn->connect_error);
    }
?>