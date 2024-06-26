<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        <?php
            include "assets/css/colors.css";
            include "assets/css/global.css";
            include "assets/css/login.css";
        ?>
    </style>
    <title>PassFort | Login</title>
</head>
<body>
    <main>
        <section id="left-side">
            <div id="container">
                <h1>Welcome Back to PassFort!</h1>
                <p>Log in to manage your passport appointments and keep track of your application status.</p>
                <form method="post">
                    <input class="input" type="email" name="login-email" id="login-email" placeholder="Email">
                    <input class="input" type="password" name="login-password" id="login-password" placeholder="Password">
                    <input class="button" type="submit" value="Log In">
                </form>
            </div>
            <!-- <div id="container">
                <h1>Get Started with PassFort</h1>
                <p>Fill in the details below to create your PassFort account and start managing your passport appointments with ease.</p>
                <form method="post">
                    <input class="input" type="text" name="username" id="username" placeholder="Username">
                    <input class="input" type="email" name="login-email" id="login-email" placeholder="Email">
                    <input class="input" type="text" name="contact" id="contact" placeholder="Contact Number">
                    <input class="input" type="password" name="login-password" id="login-password" placeholder="Password">
                    <input class="button" type="submit" value="Sign Up">
                </form>
            </div> -->
        </section>
        <section id="right-side">
            <img id="bg-image" src="assets/images/image2.jpg" alt="Image of a drone shot of windmills">
            <div id="text-container">
                <div id="login-text">
                    <h1>Ready to Plan Your Next Trip?</h1>
                    <p>Sign in to quickly book your passport appointments and ensure your travel plans are seamless.</p> 
                    <button class="button">Log In Account</button>
                </div>
                
                <div id="register-text">
                    <h1>Sign Up for an Effortless Experience</h1>
                    <p>Register now to gain access to our hassle-free appointment scheduling system and keep your travel plans on track.</p>
                    <button class="button">Register Now</button>
                </div>
            </div>
        </section>
    </main>
</body>
</html>