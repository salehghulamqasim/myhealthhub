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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    </head>

    <style>
      .inner-box {
    width: 750px;
    height: 524px;
    background-color: rgba(255, 255, 255, 0);
    box-shadow: 0px 4px 15px rgba(216, 210, 252, 0.64);
    margin-left: 170px;
    margin-top: 13px;
    border-radius: 50px;
}

    .list-group-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding:4px 0;
        

    }
    .profile-picture {
    position: absolute;
    top: 200px;
    right: 885px;
    width: 190px;
    height: 200px;
    border-radius: 15px;
}
#icons{
  display:flex;
  flex-direction: column;
  padding-top:390px;
  gap:14px;
}

    </style>
    <body class="w3-content" style="max-width:1200px">
    <div class="container-first">
        <div class= "container-second">
            <div class="vertical-box">
            <img src="/project/img/avatar.svg" alt="User Avatar" class="avatar" >
            <p   class="username" ><?php echo $_SESSION['username']; ?>  </p>

            <div id="icons">
            <a href=" "><img src="/project/img/hierarchy.png" alt="User Avatar" width="20" height="20"></a>
            <a href="/project/Hr/displays/mission-vision-values.php"><img src="/project/img/missionVision.png" alt="User Avatar" width="20" height="20"></a>
            <img src="/project/img/settings.svg" alt="User Avatar"  width="20" height="20">
            <a href="/project/logout.php"><img src="/project/img/logout.svg" alt="User Avatar" width="20" height="20"></a>
          </div>
           </div>
            <div class="container-third">
                <h3>Profiles</h3>
                <div class= "container-forth">
                    
                    <div class="inner-box">
                    <div class="container">
                    <div class="container-forth-item search-bar" style="width:97%; margin-left:12px;">
                            <input type="text" placeholder="Information" readOnly>
                        <!-- <i class="fa fa-search"></i> -->
                    </div>
                  

<ul class="list-group">
   <li class="list-group-item">Personal Information
    <a href=""  style="text-decoration: none;">
     <button type="button" class="button">display</button>
    </a>
  </li>

    <li class="list-group-item">Organization Hierarchy
    <a href="/project/HR/displays/OrganizationHierarchy.php"  style="text-decoration: none;">
    <button type="button" class="button">display</button>
    </a>
  </li>

  <li class="list-group-item">Departments
  <a href="/project/HR/displays/Departments.php"  style="text-decoration: none;">
    <button type="button" class="button">display</button></a>
  </li>

  <li class="list-group-item">Hiring
  <a href="/project/HR/displays/Hiring.php"  style="text-decoration: none;">
    <button type="button" class="button">display</button></a>

  </li>

  
</ul>

</div>
                    </div>
                    <img src="/project/img/HR-pfp.svg" alt="Profile picture" class="profile-picture" width="100" height="70">

                    <div class="container-fifth">
                   


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




