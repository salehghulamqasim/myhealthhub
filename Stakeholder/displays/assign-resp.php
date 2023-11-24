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
    <link rel="stylesheet" type="text/css" href="/project/home_style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    </head>
    <style>

            .add-edit-delete {
            margin: -16px 820px;
            position: absolute;
            display: flex;

            }

            .add-edit-delete:active {
            transform: scale(0.90) translateY(1px);

            }

            .add-more-bar {
                    width: 890px;
                    height: 35px;
                    border: 1px solid #ccc;
                    outline: none;
                    border-radius: 47px;
                    background: #889DA4;
                    color: white;
                    margin-left: -1px;
                    margin-top: 19px;

            }
            /* for the text inside the bar . it moves it up and down , right and left*/
            .add-more-bar p {
                margin: 3px 0;
                padding-left: 21px;
                color: black;
                font-size: 18px;
            }
        
            .short_button {
            color: white;
            width: 120px;
            height: 33px;
            border-radius: 16px;
            background-color: #6C756B;
            border-color: rgba(0, 0, 0, 0);
            font-size: 16px;
            margin: -22px 693px;
            text-align: center;
            position: absolute;
            display: flex;
            flex-direction: row;
            padding-left: 30px;
        }
          .hey {
            width: 876px;
            margin: -4px 2px;
            padding-left: 13px;
            
        }

          /* Style for the container of the custom checkbox */
        .custom-checkbox {
            display: inline-block;
            position: relative;
            padding-left: 50px; /* Adjust this value based on your icon size */
            cursor: pointer;
            
        }

        /* Hide the default checkbox input */
        .custom-checkbox input {
            display: none;
        }

        .checkmark {
            position: absolute;
            top: 22px;
            left: -21px;
            height: 19px;
            width: 17px;
            border: 1px solid #D1D1D6; 
            border-radius: 20px;
            display: inline-flex;

    }

        /* Style for the custom checkbox icon when checked */
        .custom-checkbox input:checked + .checkmark {
            background-color: rgb(35, 177, 141); /* Change to the custom color when checked */
        }


            .assigned-doctor {
      /* position: absolute; */
            margin: -30px 468px;
            font-size: 18px;
            color: black;
            white-space: nowrap;

            }

            .assigned-doctor p {
            margin-right: 15px;
            }
            
            .flex-container {
                display: flex;
                justify-content: space-between;
                align-items: center;
                }

            .grey-line {
                width: 100%;
                height: 1px;
                background-color: rgba(128, 128, 128, 0.388);
            }




    </style>
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
        <a href="/project/Stakeholder/home-stakeholder.php" style="text-decoration: none;">
            <img src="/project/img/vector.svg" alt="Arrow" class="arrow" width="30px" >
        </a>Plans </h3>
        
        
                <div class= "container-forth">

                <div class="add-more-bar">
                     <p>Responsibility</p> 
                
                <div class="assigned-doctor">
                <p style="padding-left: 11px;">Assigned Doctor</p>
    
                    
                </div>

                </div>

                <div class="hey">
             <div class="flex-container">
                <p>Permanent CMO</p>
                <div style="margin-right: 311px; margin-top:10px ">
                          <p>Dr Eman</p>
                        </div>
                        <button type="button"  class="short_button" "> display </button>

             </div>
                    
             <div class="grey-line"></div>
                    <div class="flex-container">
                        <p>Temporarily CMO</p>
                         <p style="margin-right: 311px;">Dr Lama</p>
                         <button type="button"  class="short_button" "> display </button>

                   </div>
                   
                   <div class="grey-line"></div>
                   <div class="flex-container">
                        <p>HOD</p>
                         <p style="margin-right: 311px;"> </p>
                         <button type="button"  class="short_button" "> display </button>

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



