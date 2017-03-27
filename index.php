<?php
session_start();
?>

<html>
<head>
  <title>SIP - NIT,Durgapur</title>
  <link rel = "stylesheet"
  type = "text/css"
  href = "/css/main.css" />
  <link rel = "stylesheet"
  type = "text/css"
  href = "/css/home.css" />
  <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
</head>
<body>
  <header>
   <ul>
            <?php

                 if(isset($_SESSION['email']))
                {
                    echo "<li><a href='home.php'><i class='fa fa-home'></i> Home</a></li>";        
                
                }
            ?>
            <li>
                <a  href='about.php'><i class="fa fa-info"></i> About Us</a>
            </li>
            <li>
                <a href='gallery.php'><i class="fa fa-picture-o"></i> Gallery</a>
            </li>
            <li>
                <a href='notice.php'><i class="fa fa-sticky-note"></i> Notice Board</a>
            </li>
            <li>
                <a href='contact.php'><i class="fa fa-phone"></i> Contact Us</a>
            </li>

            <?php

             if(!isset($_SESSION['email']))
            {
                echo "<li style='float: right;'><a href='index.php'><i class='fa fa-sign-in'></i> Sign In / Sign Up</a></li>";                
            
            }
            else
            {
                echo "<li style='float: right;'><a href='logout.php'><i class='fa fa-sign-in'></i> Sign Out</a></li><li style='float: right;'><a href='profile.php'><i class='fa fa-user'></i> My Profile</a></li>";
            }  
            ?>
        </ul>
    
    <h1 class="fs-title" style="text-align: center; color: #fff; font-size: 24px; padding-top: 50px;">
      WELCOME TO STUDENT INFORMATION PORTAL
    </h1>
  </header>
  <!-- multistep form -->
  <div id="msform">
    <!-- fieldsets -->
    <fieldset>
      <img src='/images/logo.png' />
      <br />
      <a href='/adminlogin.php'>
        <input type="button" name="signup" class="action-button" value="Admin Login" />
      </a>
      <a href='/signup.php'>
        <input type="button" name="signup" class="action-button" value="SignUp" />
      </a>
      <a href='/login.php'>
        <input type="button" name="login" class="action-button" value="Login" />
      </a>
    </fieldset>
  </div>
  <script src="/js/jquery-3.1.1.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/main.js"></script>
</body>
</html>