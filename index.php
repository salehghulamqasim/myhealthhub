<?php
// Initialize sessions
session_start();

// Check if the user has just registered successfully
$registered = isset($_SESSION['registration_success']) && $_SESSION['registration_success'] === true;
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Login and Registration </title>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id= "btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Login</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <div class="social-icons">
                    <img src="img/facebook.png">
                    <img src="img/google.png">
                    <img src="img/twitter.png">
    
                </div>
                <form id="login" class="input-group" action="login.php" method="POST">
                    <input type="text" name="username" id="username" class="input-field" placeholder="username" required>
                    <input type="password" name="password" id="password" class="input-field" placeholder="Enter password" required>
                    <!-- <input type="checkbox" class="check-box" required><span>Remember password</span> -->
                    <button type="submit" class="login-btn">Log In</button>
                </form>
                

                <form id="register" class="input-group" action="register.php" method="POST";>
                    <input type="text" name="username" id="username" class="input-field" placeholder="username" required>
                    <input type="email" name="email" id="email" class="input-field" placeholder="Email id" required>
                    <input type="password" pattern="[A-Za-z0-9]{8,16}" name="password" id="password" class="input-field" placeholder="Enter password" required>
                    <input type="checkbox" class="check-box" required> <span>I agree to terms and conditions</span>
                    <button type="submit"  id="register-btn" class="register-btn">Register</button>
                    <input type="hidden" name="registered" id="registered" value="0">

                </form>

            </div>
            
            <?php if ($registered) : ?>
            <div id="snackbar" class="show">Registration Successful! You may now proceed to log in ✔ </div>
            <?php unset($_SESSION['registration_success']); // Clear the session variable ?>
            <?php endif; ?>

        </div>


        <!-- below code is used to shift between login and registration form -->
        <script>
            var x= document.getElementById("login");
            var y= document.getElementById("register");
            var z= document.getElementById("btn");

            function register(){
                x.style.left="-400px"
                y.style.left="50px"
                z.style.left="110px"
            }
            function login(){
                x.style.left="50px"
                y.style.left="450px"
                z.style.left="0"

            }
            function closeSnackbar() {
            var snackbar = document.getElementById("snackbar");
            snackbar.classList.remove("show");
        }

        // Trigger the closeSnackbar function after 5 seconds (5000 milliseconds)
        setTimeout(closeSnackbar, 3000);

          



            document.getElementById("login-btn").addEventListener("click", function(){
                window.location.href="home.php";});

        </script>
    </body>
</html>



<!-- TODO
1- Add pages in side column buttons
2- Change login and registrations look to fit with homescreen
3- Add fictional pdf files inside "personal files" page
4-

-->

