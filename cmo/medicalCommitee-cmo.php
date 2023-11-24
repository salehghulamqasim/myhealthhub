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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    </head>

    <style>

.position-word {
  display: flex;
  flex-direction: row;
  margin: -33px 460px;
  font-size: 18px;
  white-space: nowrap;

}

.edit-icon {
   margin: 5px 726px;
   cursor: pointer; /* Change cursor to pointer to indicate it's clickable */


}
.edit-icon:active {
  transform: scale(0.95) translateY(1px);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.search-icon:active {
  transform: scale(0.95) translateY(1px);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);

}

.delete-icon:active {
  transform: scale(0.95) translateY(1px);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
}



.search-icon{
    margin-left:  825px;
    margin-top: -55px;
    cursor: pointer;

}
.delete-icon{
    margin: 5px 810px;
    position: absolute;
    margin-top:-5px;
    cursor: pointer; 

}
.short_button {
  color: white;
  width: 110px;
  height: 33px;
  border-radius: 16px;
  background-color: #6C756B;
  border-color: rgba(0, 0, 0, 0);
  font-size: 16px;
  margin-left: 670px;
  margin-top:-10px;
  text-align: center;
  position: absolute;

}

.short_button:active {
  transform: scale(0.95) translateY(1px);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.bt-delIcon{
    display:flex;
    flex-direction: row;
    position: absolute;
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
            <a href="/project/logout.php"><img src="/project/img/logout.svg" alt="User Avatar" class="logout1" width="20" height="20"></a>
           </div>

            <div class="container-third">
            <h3 class="personal-files">
            <a href="javascript:history.go(-1)" style="text-decoration: none;">
            <img src="/project/img/vector.svg" alt="Arrow" class="arrow" width="30px" >
            </a> Medical committee </h3>
        
        
                <div class= "container-forth">
                    
                <h4 class="medicalprofessionals">Medical professionals </h4>
                <div class="add-more-bar">
                     <p>name</p>
                
                <div class="position-word">
                    <p>position </p>
     
                </div>
                <div class="bar-icons">
                <img src="/project/img/plus-add.svg" width="20px"  class=edit-icon>
                <img src="/project/img/search-icon.svg" width="20px"  class=search-icon>


                </div>
                
                </div>
                <div class="hey">
                    <div class="flex-container">
                        <p>Doctor's name</p>
                        <div style="margin-right: 311px; margin-top:10px ">
                          <p>CMO</p>
                        </div>

                        <div class="bt-delIcon">
                        <button type="button"  class="short_button" "> display </button>
                        <img src="/project/img/delete.svg" width="25px"  class=delete-icon >
                        </div>



                    </div>
                    
                    <div class="grey-line"></div>
                    <div class="flex-container">
                        <p>Nurse's name</p>
                         <p style="margin-right: 245px;">General practitioner</p>
                         <div class="bt-delIcon">
                        <button type="button"  class="short_button" "> display </button>
                        <img src="/project/img/delete.svg" width="25px"  class=delete-icon >
                        </div>                    </div>
                    <div class="grey-line"></div>
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



