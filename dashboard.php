<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="./js/index.js"></script>
  <link rel="stylesheet" href="./css/_universal.css">
  <link rel="stylesheet" href="./css/dashboard.css">
  <title>Log In</title>
</head>
<body>

 <div class='sidebar'>
   <div class="logo">
     <img src="./resources/logo.png">
     <span>CRANTEK</span>
      <div class='nav-top'>
          <p id='action-account' onClick="javascript:clickinner(this);">Account</p>
          <p id='action-catalog' onClick="javascript:clickinner(this);">VPN Settings</p>
          <p id='action-forum' onClick="javascript:clickinner(this);">Forum</p>
          <p id='action-contact' onClick="javascript:clickinner(this);">Contact</p>
          <p id='action-about' onClick="javascript:clickinner(this);">About Us</p>
          <p id='action-careers' onClick="javascript:clickinner(this);">Careers</p>
          <p id='logout' onClick="javascript:clickinner(this);">Logout</p>
      </div>
      <div class="nav-bottom">
        <a id='action-terms' href="./terms.html">Terms & Agreement</a>
        <a id='action-privacy' href="./privacy.html">Privacy Policy</a>
      </div>
  </div>
</div>
    <div class='content'>
      <div class='main'>
        <!--<iframe src=""></iframe>-->
      </div>
    </div>
</body>
<script>function clickinner(target) { location.href='./login.php'; };</script>
  
</html>