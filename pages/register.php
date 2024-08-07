<?php
    session_start();

    include "config.php";

    unset($_SESSION["regiser-errors"]);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $errors = [];

        $name = trim($_POST["register-name"]);
        $password = trim($_POST["register-password"]);
        $email = trim($_POST["register-email"]);
        $contact = trim($_POST["register-contact"]);

        if (!empty($name) && !empty($password) && !empty($email) && !empty($contact)) {
            if (!preg_match('/^\d{11}$/', $contact)) {
                array_push($errors, "Enter a valid phone number");
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Enter a valid email");
            }

            if (!empty($errors)) {
                $_SESSION["register-errors"] = $errors;
                header("Location: register");
                exit();
            }

            $statement = $conn->prepare("SELECT * FROM users WHERE email = ? OR name = ?");
            $statement->bind_param("ss", $email, $name);
            $statement->execute();
            $statement->store_result();

            if ($statement->num_rows() === 0){
                $uid = bin2hex(random_bytes(16));

                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                
                $statement = $conn->prepare("INSERT INTO users (uid, name, password, email, contact) VALUES (? ,?, ?, ?, ?)");
                $statement->bind_param("sssss", $uid, $name, $hashedPassword, $email, $contact);
                
                if ($statement->execute()) {
                    $_SESSION["uid"] = $uid;
                    $_SESSION["name"] = $name;
                    header("Location: appointment");
                    $statement->close();
                    unset($_SESSION["regiser-errors"]);

                    exit();
                } else {
                    array_push($errors, "Failed to register account, please try again later");
                    $_SESSION["register-errors"] = $errors;
                    header("Location: register");
                    exit();
                }   
            } else {
                array_push($errors, "This user already exists");
                $_SESSION["register-errors"] = $errors;
                header("Location: register");
                exit();
            }
        } else {
            array_push($errors, "Please answer all fields");
            $_SESSION["register-errors"] = $errors;
            header("Location: register");
            exit();
        }
    }
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="icon" type="image/svg" href="assets/images/philport_icon.svg"/>
    <style>
        <?php
            include "assets/css/colors.css";
            include "assets/css/global.css";
            include "assets/css/register.css";
        ?>
    </style>
    <title>PhilPort | Login</title>
</head>
<body>
    <main>
        <section id="right-side">
            <img id="bg-image" src="assets/images/image2.jpg" alt="Image of a drone shot of windmills">
            <div id="text-container">
            <a href="/passport_appointment_management/" class="bi bi-arrow-left"></a>
                <h1>Ready to Plan Your Next Trip?</h1>
                <p>Sign in to quickly book your passport appointments and ensure your travel plans are seamless.</p> 
                <a id="login-btn" class="button" href="/passport_appointment_management/login">Log In Account</a>
            </div>
        </section>
        <section id="left-side">
            <div id="register-form" class="container">
                <h1>Get Started with PhilPort</h1>
                <p>Fill in the details below to create your PhilPort account and start managing your passport appointments with ease.</p>
                <form method="post">
                    <input type="hidden" name="request" value="register">
                    <input class="input" type="text" name="register-name" id="register-name" placeholder="Name">
                    <input class="input" type="email" name="register-email" id="register-email" placeholder="Email">
                    <input class="input" type="text" name="register-contact" id="register-contact" placeholder="Contact Number">
                    <input class="input" type="password" name="register-password" id="register-password" placeholder="Password">
                    <input class="button" type="submit" value="Sign Up">
                </form>
                <?php
                    if (isset($_SESSION["register-errors"])) {
                        foreach ($_SESSION["register-errors"] as $error) {
                            echo "<p class=\"error-log\">$error</p>";
                        }
                    }
                ?>
            </div>
        </section>
    </main>
</body>
</html>