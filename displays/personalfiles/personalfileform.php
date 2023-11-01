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
    <link rel="stylesheet" type="text/css" href="/project/displays/styles2.css">
    <style>
        p{
            font-size: 13px

        }
        .heading{
            font-size: 15px;
        }


        .arrowback {
        outline: none;
        width: 20px;
        transform: scale(0.90) translateY(0px) scaleX(-1); /* Flip horizontally */
        display:flex;
        float: right;
        margin-right: 32px;
        
        }

        .arrowback:active {
        transform: scale(0.95) translateY(0.50px) scaleX(-1); /* Flip horizontally */

        }
        
    </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    </head>
    <body class="w3-content" style="max-width:1200px">
    <div class="container-first">
        <div class= "container-second">

            <div class="vertical-box">
            <img src="/project/img/avatar.svg" alt="User Avatar" class="avatar" >
            <p   class="username" ><?php echo $_SESSION['username']; ?>!  </p>
            <img src="/project/img/settings.svg" alt="User Avatar" class="logout" width="20" height="20">
            <!-- <img src="img/logout.svg" alt="User Avatar" class="logout" width="20" height="20"> -->
            <a href="logout.php"><img src="/project/img/logout.svg" alt="User Avatar" class="logout1" width="20" height="20"></a>
           </div>

            <div class="container-third">
            <h3 class="personal-files">
            <a href="javascript:history.go(-1)" style="text-decoration: none;">
                <img src="/project/img/vector.svg" alt="Arrow" class="arrow" width="30px" >
            </a>Form </h3>
        
                <div class= "container-forth">
                <div class="form-word">form </div>

                    <!-- <p class="form"> Form </p> -->
                    <br>
                    <br>
                  
                    <div class="grid-container">

                    <button class="btn selected" type="button">file 1</button>
                    <button class="btn"  type="button">file 2</button>
                    <button class="btn"  type="button">file 3</button>
                    <button class="btn"  type="button">file 4</button>
                    <button class="btn"  type="button">file 5</button>
                    </div>
                    <div class="flex-container">
                    <p class="heading" style="margin-left:  25px;">Standard</p>
                    <p class="heading" style="margin-right:  700px;">Measurment</p>
                  
                    <div id="checkbox">
                        <p>NA</p>
                        <p>N</p>
                        <p>Y</p>
                    </div>
                    </div>
                    
                    <div class="grey-line"></div>
                    <div class="standards">

                      <div class="flex-container">
                      <p>LD.12.4</p>
                      <p class="measurment-list" style="margin-right: 123px;">The job description is discussed with and signed by the employee upon his\her hiring</p>
                      <div class="box">
                      <input   type="checkbox"  id="checkbox">
                      <input type="checkbox"  id="checkbox">
                      <input  type="checkbox"  id="checkbox">
                      </div>
                      </div>

                      <div class="grey-line"></div>

                      <div class="flex-container">
                      <p>LD.13.3</p>
                      <p class="measurment-list" style="margin-right: 360px;">Credentials are verified from their original source</p>
                      <div class="box">
                      <input   type="checkbox"  id="checkbox">
                      <input type="checkbox"  id="checkbox">
                      <input  type="checkbox"  id="checkbox">
                      </div>
                      </div>

                      <div class="grey-line"></div>

                      <div class="flex-container">
                      <p>LD.13.4</p>
                      <p class="measurment-list" style="margin-right: 125px;">Registration of healthcare professional with Saudi Commission for Health Specialities</p>
                      <div class="box">
                      <input   type="checkbox"  id="checkbox">
                      <input type="checkbox"  id="checkbox">
                      <input  type="checkbox"  id="checkbox">
                      </div>
                    </div>

                      <div class="grey-line"></div>

                      <div class="flex-container">
                      <p>LD.13.4</p>
                      <p class="measurment-list" style="margin-right: 125px;">The centre ensures the licensing of healthcare professionals by the Ministry of health</p>
                      <div class="box">
                      <input   type="checkbox"  id="checkbox">
                      <input type="checkbox"  id="checkbox">
                      <input  type="checkbox"  id="checkbox">
                      </div>
                    </div>

                      <div class="grey-line"></div>

                      <div class="flex-container">
                      <p>LD.13.5</p>
                      <p class="measurment-list" style="margin-right: 356px;">Evidence of credentialing process in employee file</p>
                      <div class="box">
                      <input   type="checkbox"  id="checkbox">
                      <input type="checkbox"  id="checkbox">
                      <input  type="checkbox"  id="checkbox">
                      </div>
                    </div>

                      <div class="grey-line"></div>
                      
                      <div class="flex-container">
                      <p>LD.13.5</p>
                      <p class="measurment-list" style="margin-right: 499px;">Evidence of re-credentialing</p>
                      <div class="box">
                      <input   type="checkbox"  id="checkbox">
                      <input type="checkbox"  id="checkbox">
                      <input  type="checkbox"  id="checkbox">
                      </div>
                    </div>

                    </div>
                    <img src="/project/img/vector.svg" alt="arrowback" class="arrowback" width="30px" >

                    <div class="vl"></div>
                    

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





<!-- TODO 
            1- add more in personalfile and link with the arrowback
            2- then start with nurse pages
            3- make search bar unusable for doc and nurse
            4- add more in occupation for ceo and bla bla bla based on new figma designs
            

-->