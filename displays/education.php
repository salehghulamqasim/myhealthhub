<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    // User is already logged in, show content for authenticated users
    
    ?>

<!DOCTYPE html>
    <html>
    <head>
    <title> Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    </head>
    <body class="w3-content" style="max-width:1200px">
    <div class="container-first">
        <div class= "container-second">

            <div class="vertical-box">
            <img src="/project/img/avatar.svg" alt="User Avatar" class="avatar" >
            <p   class="username" ><?php echo $_SESSION['username']; ?>  </p>
            <img src="/project/img/settings.svg" alt="User Avatar" class="logout" width="20" height="20">
            <!-- <img src="img/logout.svg" alt="User Avatar" class="logout" width="20" height="20"> -->
            <a href="/project/logout.php"><img src="/project/img/logout.svg" alt="User Avatar" class="logout1" width="20" height="20"></a>
           </div>

            <div class="container-third">
            <h3 class="per2sonal-files">
        <a href="javascript:history.go(-1)" style="text-decoration: none;">
            <img src="/project/img/vector.svg" alt="Arrow" class="arrow" width="30px" >
        </a>Education </h3>
                <div class= "container-forth">
                <h4 class="files">Files</h4>
                <div class="add-more-bar">
                     <p>Add more</p> 
                </div>
              

                <div class="hey">
                    <p>File's name 
                    <a href="#"  style="text-decoration: none;">
                        <button type="button" class="short_button"> display</button>
                        <img src="/project/img/add.svg" width="25px"  class=add-edit-delete >
                        <img src="/project/img/edit.svg" width="30px"  class=add-edit-delete>
                        <img src="/project/img/delete.svg" width="25px"  class=add-edit-delete>
                    </p>

                    <div class="grey-line"></div>

                    <p>File's name
                    <a href="#"  style="text-decoration: none;">
                        <button type="button" class="short_button"> display</button>
                        <img src="/project/img/add.svg" width="25px"  class=add-edit-delete >
                        <img src="/project/img/edit.svg" width="30px"  class=add-edit-delete>
                        <img src="/project/img/delete.svg" width="25px"  class=add-edit-delete>            

                   </p>
                    <div class="grey-line"></div>
               

                    
               </div>
              <div class="space"></div>

               <div class="add-more-bar">
                     <p>Education</p> 
                
                <div class="verified-unverified">
                <p style="padding-left: 11px;">verified</p>
    
                    <p style="padding-left: 11px;">not verified</p>
                    
                </div>

                </div>
                
                <div class="hey">
                    <p>Training program
                    <input type="checkbox" name="verified" class="checkbox">
                    <input type="checkbox" name="unverified" class="checkbox">
                    </p>

                    <div class="grey-line"></div>

                    <p>BLS
                    <input type="checkbox" name="verified" class="checkbox">
                    <input type="checkbox" name="unverified" class="checkbox">
                   </p>
                    <div class="grey-line"></div>
                    <!-- <p class="page-number2">Page 1 of 1</p> -->

                </div>
            </div>
        </div>
    </div>

    </body>
    </html>

    <?php
    exit(); // Exit the script to prevent further execution
}

// If the user is not logged in, redirect to index.php
header("Location: index.php");
exit();
?>
