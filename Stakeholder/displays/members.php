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
                    margin-top: 0px;

            }
            /* for the text inside the bar . it moves it up and down , right and left*/
            .add-more-bar p {
                margin: 3px 0;
                padding-left: 21px;
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
            width: 874px;
            margin: -8px 0;
            padding-left: 10px;

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


        .member-word {
            text-align: right;
            margin-right: 788px;
            padding-top: 10px;
            /* margin-top: 20px; */
            color: #271E4A;

            font-size: 20px;
            font-family: "kanit";
            }

         /* .add-more-bar p {
                margin: 3px 0;
                padding-left: 21px;
                font-size: 18px;

            } */

        /* .add-more-bar {
            width: 890px;
            height: 35px;
            border: 1px solid #ccc;
            outline: none;
            border-radius: 47px;
            background: #889DA4;
            color: white;
            margin-left: 30px;

        } */

        /* for the text inside the bar . it moves it up and down , right and left*/
        .add-more-bar p {
            margin: 3px 0;
            padding-left: 16px;
            font-size: 18px;
        }
        .position-word {
            display: flex;
            flex-direction: row;
            margin: -30px 478px;
            white-space: nowrap;
            gap:5px;   uncomment to add gap between words
            
        }


  input[type="checkbox"] {
    margin-right: 63px;
    margin-top: 10px;
        float: right;
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
                <h4 class="member-word">All Members</h4>

                <div class="add-more-bar">
                     <p>Add more</p>
                <!-- TODO  add policity hyperlinks-->
                <div class="position-word" >
                    <p style="font-size: 15px;">Scope</p>
                    <p style="font-size: 15px;">Plans</p>
                    <p style="font-size: 15px;">Programs</p>
                    <p style="font-size: 15px;">Policies</p>
                    <p style="font-size: 15px;">Procedure</p>

                </div>
                
                
                </div>
                <div class="hey">
                    <p>Ahmed
                    
                    <input type="checkbox" name="scope" class="checkbox">
                    <input type="checkbox" name="plans" class="checkbox">
                    <input type="checkbox" name="programs" class="checkbox">
                    <input type="checkbox" name="policies" class="checkbox">
                    <input type="checkbox" name="procedures" class="checkbox">

                    </p>

                    <div class="grey-line"></div>

                    <p>Khalid

                    <input type="checkbox" name="scope" class="checkbox">
                    <input type="checkbox" name="plans" class="checkbox">
                    <input type="checkbox" name="programs" class="checkbox">
                    <input type="checkbox" name="policies" class="checkbox">
                    <input type="checkbox" name="procedures" class="checkbox">

                    
                   </p>
                   
                    <div class="grey-line"></div>
                    <!-- <p class="page-number2">Page 1 of 1</p> -->

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



