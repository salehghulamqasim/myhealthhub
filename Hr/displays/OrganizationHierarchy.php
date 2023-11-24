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
.heading{
            font-size: 15px;
        }
        .vl {
        border-left: 0.5px rgba(102, 102, 102, 0.20) solid;
        height: 420px;
        margin: -29px 110px;
}
.flex-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* CSS for the grey line */
.grey-line {
  width: 100%;
  height: 1px;
  background-color: rgba(128, 128, 128, 0.388);
}


.vl-1 {
    border-left: 0.5px rgba(102, 102, 102, 0.20) solid;
    height: 409px;
    margin: -146px 205px;
}
.vl-2 {
    border-left: 0.5px rgba(102, 102, 102, 0.20) solid;
    height: 409px;
    margin: -407px 465px;
}
.grey-line {
  width: 100%;
  height: 1px;
  background-color: rgba(128, 128, 128, 0.388);
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  text-align: left;
  padding: 15px 95px;
  white-space: nowrap;
}

th{
padding-left:95px;
color: #666666;
font-weight: 400;
}
td{
  border: 1px solid #dddddd;
 
  
  
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
        </a>Organization Hierarchy</h3>
        
        
                <div class= "container-forth">
                <h4 class="nurse-details">Medical professionals </h4>

                <div class="add-more-bar">
                     <p>Dermatology</p>
                </div>

                <table>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Replaced By</th>
                  </tr>
                  <tr>
                    <td>Khaled Mohammad</td>
                    <td>CMO</td>
                    <td>Abdullah Mansour</td>
                  </tr>
                  
                  <tr>
                    
                    <td>Abeer Mohammad</td>
                    <td>HOD</td>
                    <td>Rahaf Khaled</td>
                  </tr>
                  
                  <tr>
                    <td>Ahmed Khaled</td>
                    <td>dermotologist</td>
                    <td>Osama Mohammad</td>
                  </tr>
                 
                </table>
               
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



