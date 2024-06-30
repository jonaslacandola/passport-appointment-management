<?php
    session_start();

    include "config.php";

    $statement = $conn->prepare("SELECT * FROM users WHERE uid = ? OR name = ?");
    $statement->bind_param("ss", $_SESSION["uid"], $_SESSION["name"]);
    $statement->execute();
    $statement->store_result();
    $statement->bind_result($uid, $name, $email, $password, $contact);
    $statement->fetch();
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
            <?php
                if (!count($_SESSION)) {
                 echo "<li><a class=\"button\" href=\"/passport_appointment_management/login\">Login / Sign Up</a></li>";
                } else {
                    echo "<li><a class=\"bi bi-person-fill\" href=\"/passport_appointment_management/profile\"></a></li>";
                }
            ?>
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
                        <option value="Angeles, Pampanga">Angeles, Pampanga</option>
                        <option value="San Fernando, Pampanga">San Fernando, Pampanga</option>
                        <option value="SM City Clark, Angeles, Pampanga">SM City Clark, Angeles, Pampanga</option>
                    </select>
                    <select class="input" name="reason" id="reason" default="">
                        <option value="" disabled selected hidden>Reason for Appointment</option>
                        <option value="New Passport">New Passport</option>
                        <option value="Passport Renewal">Passport Renewal</option>
                        <option value="Lost or Stolen Passport">Lost or Stolen Passport</option>
                        <option value="Children's Passport">Children's Passport</option>
                    </select>
                </div>
                <div>
                    <p class="title">Personal Info</p>
                    <input class="input" type="text" name="name" id="name" placeholder="Name" value="<?php echo $name ? $name : "" ?>">
                    <input class="input" type="text" name="dateOfBirth" id="dateOfBirth" placeholder="Date of Birth">
                    <select class="input" name="gender" id="gender">
                        <option value="" selected disabled hidden>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div>
                    <p class="title">Contact Info</p>
                    <input class="input" type="email" name="email" id="email" placeholder="Email" value="<?php echo $email ? $email : "" ?>">
                    <input class="input" type="text" name="contact" id="contact" placeholder="Contact Number" value="<?php echo $contact ? $contact : "" ?>">
                </div>
            </form>
            <div>
                <div id="calendar"></div>
                <p>Select your appointment date above.</p>
            </div>
            
        </section>
        <section id="summary">
            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <div id="sum-main"> 
                <p class="title">Summary</p>
                <p id="sum-name"><?php echo $name ? $name : "" ?></p>
                <p id="sum-birthdate"></p> 
                <p id="sum-gender"></p>
                <br>
                <p>Appointment:</p>
                <p id="sum-reason"></p>
                <p>
                    <span id="sum-time"></span>
                    <span id="sum-place"></span>
                </p>
            </div>
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