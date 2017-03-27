<?php
session_start();
  if(!isset($_SESSION['email']))
    {
        header("location: login.php");
    }

?>
<html>
<head>
    <link rel = "stylesheet"
    type = "text/css"
    href = "/css/home.css"/>
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <header>
        <ul>
            <?php

                 if(isset($_SESSION['email']))
                {
                    echo "<li><a class='active' href='home.php'><i class='fa fa-home'></i> Home</a></li>";        
                
                }
            ?>
            <li>
                <a href='about.php'><i class="fa fa-info"></i> About Us</a>
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
    </header>
<div>
    <img src='/images/home.jpg' width='100%' height='100%' />
    
    <h2 class="fs-title" style="text-align: center; color: #fff; font-size: 24px; padding-top: 50px;">
    Welcome to NIT, Duragpur
    <br />STUDENT INFORMATION PORTAL</h2> 
    <!--  
</div> 
-->
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>