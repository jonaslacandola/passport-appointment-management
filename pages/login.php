<?php
    session_start();

    include "config.php";

    if (isset($_SESSION["uid"])) {
        header("Location: appointment");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $errors = [];

        $email = filter_var(trim($_POST["login-email"]), FILTER_VALIDATE_EMAIL);
        $password = trim($_POST["login-password"]);

        if (!empty($email) && !empty($password)) {
            $statement = $conn->prepare("SELECT * FROM users WHERE email = ?");
            $statement->bind_param("s", $email);
            $statement->execute();
            $statement->store_result();

            if ($statement->num_rows() === 1) {
                $statement->bind_result($uid, $db_name, $db_email, $db_password, $db_contact);
                $statement->fetch();

                if(password_verify($password, $db_password)) {
                    $_SESSION["uid"] = $uid;
                    $_SESSION["name"] = $db_name;
                    header("Location: appointment");
                    $statement->close();
                    unset($_SESSION["login-errors"]);

                    exit();
                } else {
                    array_push($errors, "Password is incorrect");
                    $_SESSION["login-errors"] = $errors;
                    header("Location: login");
                    exit();
                }
            } else {
                array_push($errors, "Account does not exist");
                $_SESSION["login-errors"] = $errors;
                header("Location: login");
                exit();
            }
        } else {
            array_push($errors, "Please answer all fields");
            $_SESSION["login-errors"] = $errors;
            header("Location: login");
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
            include "assets/css/login.css";
        ?>
    </style>
    <title>PhilPort | Login</title>
</head>
<body>
    <main>
        <section id="left-side">
            <div id="login-form" class="container">
                <h1>Welcome Back to PhilPort!</h1>
                <p>Log in to manage your passport appointments and keep track of your application status.</p>
                <form method="post">
                    <input type="hidden" name="request" value="login">
                    <input class="input" type="email" name="login-email" id="login-email" placeholder="Email">
                    <input class="input" type="password" name="login-password" id="login-password" placeholder="Password">
                    <input class="button" type="submit" value="Log In">
                </form>
                <?php
                    if (isset($_SESSION["login-errors"])) {
                        foreach ($_SESSION["login-errors"] as $error) {
                            echo "<p class=\"error-log\">{$error}</p>";
                        }
                    }
                ?>
            </div>
        </section>
        <section id="right-side">
            <img id="bg-image" src="assets/images/image2.jpg" alt="Image of a drone shot of windmills">
            <div id="text-container">              
                <a href="/passport_appointment_management/" class="bi bi-arrow-left"></a>
                <h1>Sign Up for an Effortless Experience</h1>
                <p>Register now to gain access to our hassle-free appointment scheduling system and keep your travel plans on track.</p>
                <a id="register-btn" class="button" href="/passport_appointment_management/register">Register Now</a>
            </div>
        </section>
    </main>
</body>
</html>