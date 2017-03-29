<?php
        session_start();
        if(!isset($_SESSION['email']))
        {
                header("location: login.php");
        }
        $email=$_SESSION['email'];
        $pass=$_SESSION['pass'];

?>

<html>
<head>
    <link rel = "stylesheet"
    type = "text/css"
    href = "/css/home.css"/>
     <link rel = "stylesheet"
    type = "text/css"
    href = "/css/main.css"/>
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
                echo "<li style='float: right;'><a href='logout.php'><i class='fa fa-sign-in'></i> Sign Out</a></li><li style='float: right;'><a class='active' href='profile.php'><i class='fa fa-user'></i> My Profile</a></li>";
            }  
            ?>
        </ul>
    </header>
<div>
  
      <form id="msform" action="upload.php" method="post" enctype="multipart/form-data">
        <!-- fieldsets -->
        <fieldset>
       <h1>Hello <?php echo $email;?></h1>
        <br />
    Select image to upload:
    <br><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
     <img src='/uploads/abc.jpg' style="border-radius: 50%;"  width="100px"/>
        </fieldset>



    </form>


</div> 

    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>