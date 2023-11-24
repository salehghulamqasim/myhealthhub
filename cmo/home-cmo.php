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
      select#reporttype {
          font-size: 20px;
          border-radius: 40px;
          padding: 5px 5px;
          font-family: "Poppins";
          margin: 9px 4px;
          height: 35px;
          color: #313144;
          letter-spacing: 0.60px;
          word-wrap: break-word;
          font-weight: 500;
          border: 1px solid #ccc;
          background: #e0e0e3;
}


    ul.list-group li {
        padding: 3px;
    }
      

.inner-box {
    width: 750px;
    height: 455px;
    background-color: rgba(255, 255, 255, 0);
    box-shadow: 0px 4px 15px rgba(216, 210, 252, 0.64);
    margin-left: 170px;
    margin-top: 7px;
    border-bottom-right-radius: 47px;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    overflow: auto; /* Add this line to make it scrollable */
}


    </style>
    <body class="w3-content" style="max-width:1200px">
    <div class="container-first">
        <div class= "container-second">
            <div class="vertical-box">
            
            <img  src="/project/img/avatar.svg" alt="User Avatar" class="avatar" >
            <p   class="username" ><?php echo $_SESSION['username']; ?>  </p>
            <img src="/project/img/settings.svg" alt="User Avatar" class="logout" width="20" height="20">
            <!-- <img src="img/logout.svg" alt="User Avatar" class="logout" width="20" height="20"> -->
            <a  href="/project/logout.php"><img src="/project/img/logout.svg" alt="User Avatar" class="logout1" width="20" height="20"></a>
       
           </div>
            <div class="container-third">
                <h3>Profiles</h3>
                <div class= "container-forth">
                    <div class="container-forth-item search-bar">
                            <input type="text" placeholder="Search for other physician" readonly>
                            <select name="reporttype" id="reporttype">
                                <option value="" selected>Display</option>
                                <option value="#">Dr Ahmed</option>
                                <option value="#">Dr Khalid</option>
                                <option value="#">Dr Amal</option>
                            </select>

                    </div>
                    <div class="inner-box">
                    <div class="container">
                    <ul class="list-group">
                            <li class="list-group-item">Personal files
                              <a href="/project/displays/profile_files.php"  style="text-decoration: none;">
                              <button type="button" class="button">display</button>
                              </a>
                            </li>

                              <li class="list-group-item">Education
                              <a href="displaysN/education-N.php"  style="text-decoration: none;">
                              <button type="button" class="button">display</button>
                              </a>
                            </li>

                            <li class="list-group-item">Certifications
                            <a href="/project/displays/certificates.php"  style="text-decoration: none;">
                              <button type="button" class="button">display</button></a>
                            </li>

                            <li class="list-group-item">Competency
                            <a href="/project/displays/competency.php"  style="text-decoration: none;">
                              <button type="button" class="button">display</button></a>

                            </li>

                            <li class="list-group-item">Privilege
                            <a href="/project/displays/privilage.php"  style="text-decoration: none;">
                              <button type="button" class="button">display</button></a>

                            </li>

                            <li class="list-group-item"> OVR - Report
                              <a href="/project/displays/ovr.php"  style="text-decoration: none;">
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

                            <li class="list-group-item">Mission, Vision, Values
                              <a href="/project/cmo/mission-vision-values.php"  style="text-decoration: none;">
                              <button type="button" class="button">display</button></a>
                            </li>

                            <li class="list-group-item">Other's Privilege
                              <a href="/project/displays/otherprivilages.php"  style="text-decoration: none;">
                              <button type="button" class="button">display</button></a>
                            </li>

                            <li class="list-group-item">Medical committee
                            <a href="/project/cmo/medicalCommitee-cmo.php"  style="text-decoration: none;">
                              <button type="button" class="button">display</button></a>
                            </li>

                            <li class="list-group-item">Admin committee
                              <a href="/project/cmo/adminCommitee-cmo.php"  style="text-decoration: none;">
                              <button type="button" class="button">display</button>
                          </a>
                            </li>
                      </ul>

</div>
                    </div>
                    <img src="/project/img/eman.svg" alt="Profile picture" class="profile-picture" width="100" height="70">

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



