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
                    <input class="input" type="email" name="login-email" id="login-email" placeholder="Email">
                    <input class="input" type="password" name="login-password" id="login-password" placeholder="Password">
                    <input class="button" type="submit" value="Log In">
                </form>
            </div>
            <div id="register-form" class="container-hidden">
                <h1>Get Started with PhilPort</h1>
                <p>Fill in the details below to create your PhilPort account and start managing your passport appointments with ease.</p>
                <form method="post">
                    <input class="input" type="text" name="register-name" id="register-name" placeholder="Name">
                    <input class="input" type="email" name="register-email" id="register-email" placeholder="Email">
                    <input class="input" type="text" name="register-contact" id="register-contact" placeholder="Contact Number">
                    <input class="input" type="password" name="register-password" id="register-password" placeholder="Password">
                    <input class="button" type="submit" value="Sign Up">
                </form>
            </div>
        </section>
        <section id="right-side">
            <img id="bg-image" src="assets/images/image2.jpg" alt="Image of a drone shot of windmills">
            <div id="text-container">
                <div id="login-text" class="hide">
                    <a href="/passport_appointment_management/" class="bi bi-arrow-left"></a>
                    <h1>Ready to Plan Your Next Trip?</h1>
                    <p>Sign in to quickly book your passport appointments and ensure your travel plans are seamless.</p> 
                    <button id="login-btn" class="button">Log In Account</button>
                </div>
                
                <div id="register-text" class="show">
                    <a href="/passport_appointment_management/" class="bi bi-arrow-left"></a>
                    <h1>Sign Up for an Effortless Experience</h1>
                    <p>Register now to gain access to our hassle-free appointment scheduling system and keep your travel plans on track.</p>
                    <button id="register-btn" class="button">Register Now</button>
                </div>
            </div>
        </section>
    </main>

    <script src="assets/js/login.js"></script>
</body>
</html>