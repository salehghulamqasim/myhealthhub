<?php
session_start();
include("/project/form/userData.php");

    ?>

<!DOCTYPE html>
    <html>
    <head>
    <title> Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styles2.css">
    </head>
    <body class="w3-content" style="max-width:1200px">
    <div class="container-first">
        <div class= "container-second">
            <div class="vertical-box">
            <img src="/project/img/avatar.svg" alt="User Avatar" class="avatar" >
            <p   class="username" ><?php echo $_SESSION['username']; ?>  </p>
            <img src=" /project/img/settings.svg" alt="setting logo" class="logout" width="20" height="20">
            <a href="logout.php"><img src="/project/img/logout.svg" alt="logout logo" class="logout1" width="20" height="20"></a>
            </div>
            <div class="container-third">

        <h3 class="personal-files">
            
          <!-- CHANGE This href later on so it can work with the domain name of yours not localhost -->
          <!-- CHANGE This href later on so it can work with the domain name of yours not localhost -->
          <!-- CHANGE This href later on so it can work with the domain name of yours not localhost -->
        <a href="http://localhost/project/home.php" style="text-decoration: none;">
            <img src="/project/img/vector.svg" alt="Arrow" class="arrow" width="30px" >
        </a>Personal files </h3>

                <div class= "container-forth">
                <h4 class="nurse-details">Doctor's details </h4>
                <div class="add-more-bar">
                     <p>Add more</p> 
                </div>
           
                <div class="hey">
                <?php
                    // Check if the 'name' session variable is set and not empty
                    if (!empty($_SESSION['name'])) {
                        // Use the 'name' session variable to display the user's name
                        echo '<p>Name: ' . htmlspecialchars($_SESSION['name']) . '</p>';
                    } else {
                        // Fallback to the 'username' if 'name' is not available
                        echo '<p>Name: ' . htmlspecialchars($_SESSION['username']) . '</p>';
                    }
                    echo '<div class="grey-line"></div>';
                    ?>
                  <div class="grey-line"></div>
                  <p>Email: <?php echo htmlspecialchars($_SESSION['Email']); ?></p>
                    <div class="grey-line"></div>
                    <a href="personalfiles/file1.php" style="text-decoration: none;">
                        <p>Personal file form</p>
                    </a>
                    <!-- <p>Personal file form  </p> -->
                    <div class="grey-line"></div>
                    <?php
                        if($_SESSION['occupation']=='Doctor'){
                            echo ' <p>Infection control
                            <a href="#"  style="text-decoration: none;">
                            <button type="button" class="short_button"> display</button>
                             </p> ';}
                     ?>
                  </div>
              

               <div class="add-more-bar">
                     <p>Department</p>
               
                </div>
                <div class="hey">
                        <p>Radiology </p>
                        <?php
                        if ($_SESSION['occupation'] === 'Staff') {
                            // If the user's occupation is "Staff," add more <p> elements
                            echo '<div class="grey-line"></div>';
                            echo '<p>Cardiology </p>';
                            echo '<div class="grey-line"></div>';
                            echo '<p>Paediatrics </p>';
                            echo '<div class="grey-line"></div>';
                            echo '<p>Surgery and transplantation </p>';
                        }
                        ?>
                    </div>

                 
                   
                <!-- <p class="page-number">Page 1 of 1</p> -->
                </div><!-- forth container -->

                




            </div><!-- third container -->

        </div><!-- second container -->

    </div>

    </body>
    </html>

