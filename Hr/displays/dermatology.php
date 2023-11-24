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
    <link rel="stylesheet" type="text/css" href="/project/displays/styles3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    </head>
    <style>
        .short_button {
    color: white;
    width: 120px;
    height: 33px;
    border-radius: 16px;
    background-color: #6C756B;
    border-color: rgba(0, 0, 0, 0);
    font-size: 16px;
    margin-left: 602px;
    text-align: center;
}
.hey {

  display: flex;
  gap: 50px;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100vh;
 
  margin: -200px -20px;
  

}

.hey p {
  padding-left: 0;
}
a {
  text-decoration: none;
}

.GreyBox {
      width: 150px;
      height: 150px;
      background: #F8F9FA;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.05);
      border-radius: 5px;
      background-color: #cccccc68;
      white-space: nowrap;

    }

    .GreyBox p {
        text-align:center;
        font-size:15px;
        white-space: nowrap;
    }

    </style>
    <body class="w3-content" style="max-width:1200px">
    <div class="container-first">
        <div class= "container-second">

            <div class="vertical-box">
            <img src="/project/img/avatar.svg" alt="User Avatar" class="avatar" >
            <p   class="username" ><?php echo $_SESSION['username']; ?>!  </p>
            <img src="/project/img/settings.svg" alt="User Avatar" class="logout" width="20" height="20">
            <a href="/project/logout.php"><img src="/project/img/logout.svg" alt="User Avatar" class="logout1" width="20" height="20"></a>
           </div>

            <div class="container-third">
            <h3 class="personal-files">
            <a href="javascript:history.go(-1)" style="text-decoration: none;">
             <img src="/project/img/vector.svg" alt="Arrow" class="arrow" width="30px" >
            </a>Departments</h3>
        
        
                <div class= "container-forth">
                <h4 class="nurse-details"></h4>

                <div class="add-more-bar">
                     <p style="color: black;">Departments</p>
                </div>
                <div class="hey">
            
                <div class="GreyBox">
                    <p>Current Employee</p>
                
                    <p style="font-size:50px"><a href="/project/Hr/displays/CurrentEmployee.php">22</a></p>

                </div>
                <div class="GreyBox">
                <p>Open positions</p>
                <p style="font-size:50px"><a href="/project/Hr/displays/openedPositions.php">0</a></p>

                </div>

                </div>

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



