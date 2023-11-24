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
    <link rel="stylesheet" type="text/css" href="home_style.css">
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    </head>
    <style>
        #icons {
   
          padding-top: 335px;
     
      }
    </style>
    <body class="w3-content" style="max-width:1200px">
    <div class="container-first">
        <div class= "container-second">
            <div class="vertical-box">
            <img src="img/avatar.svg" alt="User Avatar" class="avatar" >
            <p   class="username" ><?php echo $_SESSION['username']; ?>  </p>
            <div id="icons">

            <img src="/project/img/manCircleIcon.png" alt="User Avatar" width="35" height="35" style="margin:-4px -5px;">
            <a href=" "><img src="/project/img/hierarchy.png" alt="User Avatar" width="20" height="20"></a>
            <a href="/project/displays/mission-vision-values.php "><img src="/project/img/missionVision.png" alt="User Avatar" width="20" height="20"></a>
            <img src="/project/img/settings.svg" alt="User Avatar"  width="20" height="20">
            <a href="/project/logout.php"><img src="/project/img/logout.svg" alt="User Avatar" width="20" height="20"></a>
          </div>

           </div>
            <div class="container-third">
                <h3>Profiles</h3>
                <div class= "container-forth">
                    <div class="container-forth-item search-bar">
                            <input type="text" placeholder="Search for other physician">
                        <i class="fa fa-search"></i>
                    </div>
                   
                    <div class="inner-box"> 
                    <div class="container">
                    <ul class="list-group">
   <li class="list-group-item">Personal files
    <a href="displays/profile_files.php"  style="text-decoration: none;">
     <button type="button" class="button">display</button>
    </a>
  </li>

    <li class="list-group-item">Education
    <a href="<?php echo ($_SESSION['occupation'] === 'Staff') ? '/project/staff/displaysN/education-N.php' : 'displays/education.php'; ?>" style="text-decoration: none;">
    <button type="button" class="button">display</button>
    </a>

  </li>

  <li class="list-group-item">Certifications
  <a href="/project/displays/certificates.php"  style="text-decoration: none;">
    <button type="button" class="button">display</button></a>
  </li>

  <li class="list-group-item">Competency
  <a href="displays/competency.php"  style="text-decoration: none;">
    <button type="button" class="button">display</button></a>

  </li>

  <li class="list-group-item">Privilege
  <a href="displays/privilage.php"  style="text-decoration: none;">
    <button type="button" class="button">display</button></a>

  </li>

  <li class="list-group-item"> OVR - Report
    <a href="displays/ovr.php"  style="text-decoration: none;">
    <button type="button" class="button">display</button></a>
  </li>

  <li class="list-group-item">Guidelines
    <a href="#"  style="text-decoration: none;">
    <button type="button" class="button">display</button></a>
  </li>

  <li class="list-group-item">Term of reference
    <a href="#"  style="text-decoration: none;">
    <button type="button" class="button">display</button></a>
  </li>

  <li class="list-group-item">Other's Privilege
    <a href="displays/otherprivilages.php"  style="text-decoration: none;">
    <button type="button" class="button">display</button></a>
  </li>

  <li class="list-group-item">Medical committee
    <a href="displays/medicalCommitee.php"  style="text-decoration: none;">
    <button type="button" class="button">display</button></a>
  </li>

  <li class="list-group-item">Admin committee
    <a href="#"  style="text-decoration: none;">
    <button type="button" class="button">display</button>
</a>
  </li>
</ul>

</div>
                    </div>
                    <img src="img/eman.svg" alt="Profile picture" class="profile-picture" width="100" height="70">

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



