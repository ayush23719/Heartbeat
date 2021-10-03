<?php
   include("login.php");
?>
<html>
<head>
    <title>Members-Heartbeat</title>
    <link rel="stylesheet" href="user_profile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Carattere&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
    <ul>
  <li><a href="#" style="color: white; margin-top: 20px; margin-left: -30px;">Home</a></li>
  <li><a href="#" style="margin-top: 20px; margin-left: 70px;">Policy</a></li>
  <li><a href="#" style="margin-top: 20px; margin-left: 60px;">Media</a></li>
  <li><a href="#" style="margin-top: 20px; margin-left: 50px;">Contact</a></li>
  <li><a href="#" style="margin-top: 20px; margin-left: 70px;">About</a></li>
        <div id="social">
    <li><a href="#" class="fa fa-lg fa-facebook" style="margin-left: 255px; margin-top: 20px;"></a></li>
        <li><a href="#" class="fa fa-lg fa-twitter" style="margin-top: 20px; margin-left: 20px;"></a></li> 
         <li><a href="#" class="fa fa-lg fa-instagram" style="margin-top: 20px; margin-left: 20px;"></a></li>
        <li><a href="#" class="fa fa-lg fa-youtube-play" style="margin-top: 20px; margin-left: 20px;"></a></li>
        </div>
</ul>
    <div class="dropdown">
  <button class="dropbtn">My Profile</button>
  <div class="dropdown-content">
  <a href="uploads.htm">Uploads</a>
  <a href="#">Settings</a>
  <a href="logout.php">Log out <img src="logout.png" height="15" width="15"></a>
  </div>
</div>
    <div class="img">
    </div>
    <div id="body">
        <span class="line1">Welcome back ,</span><br>
        <span class="line2"><?php echo $username ?></span>
    </div>
    <div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="Search for music...">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
    </body>
</html>
