<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    // User is already logged in, show content for authenticated users
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>MYhealth</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="style.css">

<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

</style>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar  w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>My<br>Health </b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <!-- <a href="#service" onclick="w3_close()"  class="w3-bar-item w3-button w3-hover-white">services</a>   add function -->
    <a href="#Procedure" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Procedure</a> 
    <a href="#PersonalFiles" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Personal Files</a> 
    <a href="#Education" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Education</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large  w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo" ><b>Health Hub</h1>
    <hr style="width:900px;border:1px solid lightskyblue" class="w3-round">
  </div>
  


  <!-- Procedure -->
  <div class="w3-container" id="Procedure" style="margin-top:75px">
    <h1 class="w3-xxxlarge"><b>Procedure.</b></h1>
    <hr style="width:50px;border:5px solid lightskyblue" class="w3-round">
    <p>Here ADD procedures steps </p>     
  </div>
  
  <!-- PersonalFiles -->
<div class="w3-container" id="PersonalFiles" style="margin-top:75px">
  <h1 class="w3-xxxlarge "><b>Personal Files.</b></h1>
  <hr style="width:50px;border:5px solid lightskyblue" class="w3-round">
  <p>Your personal files</p>

  <!-- PDF files -->
  <div class="pdf-container">
    <div class="pdf-box">
        <a href="#" target="_blank" class="pdf-link">
        <img src="img/pdf.png" width="70" height="70" alt="PDF Icon" class="pdf-icon">
        <p>File Name 1</p>
        </a>
    </div>

    <div class="pdf-box">
        <a href="#" target="_blank" class="pdf-link">
        <img src="img/pdf.png" width="70" height="70" alt="PDF Icon" class="pdf-icon">
        <p>File Name 2</p>
        </a>
    </div>
    </div>
</div>
  <!-- Education -->
  <div class="w3-container" id="Education" style="margin-top:75px">
    <h1 class="w3-xxxlarge"><b>Education.</b></h1>
    <hr style="width:50px;border:5px solid lightskyblue" class="w3-round">
    <p>here Add Education details...</p>
  </div>

 
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge"><b>Contact us.</b></h1>
    <hr style="width:50px;border:5px solid lightskyblue" class="w3-round">
    <p>Do you have a question for us? let us know </p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Your Question</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-margin-bottom">Send Message</button>
    </form>
  </div>


<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="#" title="RedSandTek" target="_blank" class="w3-hover-opacity">RedSandTek</a></p>
<button onclick="window.location.href='home3.php'">Go to Home</button>
</div>


<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}


</script>

</body>
</html>



<?php
    exit(); // Exit the script to prevent further execution
}

// If the user is not logged in, redirect to index.php
header("Location: index.php");
exit();
?>