<?php
    session_start();

    include "config.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        if (empty($_POST["search"])) {
            $_SESSION["view-warning"] = "Please enter a valid id";
            header("Location: view-appointment");
            exit();
        }

        $ap_id = $_POST["search"];

        $statement = $conn->prepare("SELECT date, name, birthdate, gender, email, contact, reason, location, status FROM appointments WHERE id = ?");
        $statement->bind_param("s", $ap_id);
        $statement->execute();
        $statement->store_result();
        
        if (!$statement->num_rows()) {
            $_SESSION["view-warning"] = "The id do not match to any appointments";
            header("Location: view-appointment");
            exit();
        }

        $statement->bind_result( $date, $name, $birthdate, $gender, $email, $contact, $reason, $location, $status);
        $statement->fetch();

        $convertDate = new DateTime($date);
        $day = $convertDate->format("d");
        $month = $convertDate->format("F");
        $weekday = $convertDate->format("l");

        $statement->close();   
    }
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
            include "assets/css/view.css";
        ?>
    </style>
    <title>PhilPort | View appointment</title>
</head>
<body>
    <nav>
        <img src="assets/images/philport_logo.svg" alt="">
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
    <div>
        <?= isset($_SESSION["view-warning"]) ? "<p class=\"warning\">" . htmlspecialchars($_SESSION["view-warning"])  . "</p>" : "" ?>
    </div>
    <main>
        <form method="post">
            <div class="searchbar">
                <i class="bi bi-search"></i>
                <input type="text" class="input" id="search" name="search" placeholder="Enter appointment id">
                <button class="button">View</button>
            </div>
        </form>
        <section class="appointment-container">
            <div class="date">
                <p id="month"><?= !empty($month) ? $month : "June" ?></p>
                <p id="day"><?= !empty($day) ? $day : 15 ?></p>
                <p id="weekday"><?= !empty($weekday) ? $weekday : "Saturday" ?></p>
            </div>
            <div class="infos">
                <div id="ap-info">
                    <div class="data">
                        <p>Appointment ID</p>
                        <p><?= !empty($ap_id) ? htmlspecialchars($ap_id) : "-----" ?></p>
                    </div>
                    <div class="data">
                        <p>Appointment Status</p>
                        <p class="<?= !empty($status) ? htmlspecialchars(strtolower($status)) : "" ?>"><?= !empty($status) ? htmlspecialchars($status) : "-----" ?></p>
                    </div>
                    <div class="data">
                        <p>Reason for Appointment</p>
                        <p><?= !empty($reason) ? htmlspecialchars($reason) : "-----" ?></p>
                    </div>
                    <div class="data">
                        <p>Location</p>
                        <p><?= !empty($location) ? htmlspecialchars($location) : "-----" ?></p>
                    </div>
                </div>
                <div id="user-info">
                    <div class="data">
                        <p>Name</p>
                        <p><?= !empty($name) ? htmlspecialchars($name) : "-----" ?></p>
                    </div>
                    <div class="data">
                        <p>Gender</p>
                        <p><?= !empty($gender) ? htmlspecialchars($gender) : "-----" ?></p>
                    </div>
                    <div class="data">
                        <p>Date of Birth</p>
                        <p><?= !empty($birthdate) ? htmlspecialchars($birthdate) : "-----" ?></p>
                    </div>
                    <div class="data">
                        <p>Contact Details</p>
                        <p><span><?= !empty($email) ? htmlspecialchars($email) : "-----" ?></span> / <span><?= !empty($contact) ? htmlspecialchars($contact) : "-----" ?></span></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>