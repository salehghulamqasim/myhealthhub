<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    // User is already logged in, show content for authenticated users
    ?>

<!DOCTYPE html>
    <html>
    <head>
    <title>MY Health </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .w3-sidebar a {font-family: "Roboto", sans-serif}
    body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
    </style>
    </head>
    <body class="w3-content" style="max-width:1200px">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
    <div class="w3-container w3-display-container w3-padding-16">
        <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
        <h3 class="w3-wide"><b>MyHealth</b></h3>
    </div>
    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
        <a href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
        Home </a>
        <a href="personalFiles.php" class="w3-bar-item w3-button">Personal Files</a>
        <a href="home2.php" class="w3-bar-item w3-button">home 2 (Test)</a>

        <a href="procedure.php" class="w3-bar-item w3-button">Procedure</a>
        <a href="education.php" class="w3-bar-item w3-button">Education</a>
      
    </div>
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
    <div class="w3-bar-item w3-padding-24 w3-wide">MyHealth</div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:250px">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>
    
    <!-- Top header -->
    <header class="w3-container w3-xlarge">
        <p class="w3-left">Welcome to MyHealth</p>
        <p class="w3-right">
        <i class="fa fa-search"></i>
        </p>
    </header>

    <img src="img/myHealth.jpg" alt="myhealth image" style="width:950px;height:600px";>


    
    

    
    <!-- Footer -->
    <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
        <div class="w3-row-padding">
        <div class="w3-col s4">
            <h4>Contact</h4>
            <p>You have a question for us? go ahead let us know </p>
            <form action="/action_page.php" target="_blank">
            <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
            <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
            <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
            <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
            <button type="submit" class="w3-button w3-block w3-black">Send</button>
            </form>
        </div>

        <div class="w3-col s4">
            <h4>About</h4>
            <p><a href="#">About us</a></p>
            <p><a href="#">Support</a></p>
            <p><a href="#">Find us</a></p>
            <p><a href="#">Help</a></p>
        </div>

        <div class="w3-col s4 w3-justify">
            <h4>Store</h4>
            <p><i class="fa fa-fw fa-map-marker"></i>MyHealth</p>
            <p><i class="fa fa-fw fa-phone"></i> 0550123456</p>
            <p><i class="fa fa-fw fa-envelope"></i> MyHealth@mail.com</p>
            <br>
            <h4>We accept</h4>
            <p><i class="fa fa-fw fa-cc-amex"></i> visa</p>
            <p><i class="fa fa-fw fa-cc-amex"></i> paypal</p>
            <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
            <br>
            <h4>Follow us</h4>
            <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
            <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
            <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
            <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
            <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
        </div>
        </div>
    </footer>

    <div class="w3-black w3-center w3-padding-24">All rights reserved <a href="https://redsandtek.com" title="W3.CSS" target="_blank" class="w3-hover-opacity">RedSand</a></div>

    <!-- End page content -->
    </div>

    
    <script>
    </script>

    </body>
    </html>

    <?php
    exit(); // Exit the script to prevent further execution
}

// If the user is not logged in, redirect to index.php
header("Location: index.php");
exit();
?>



