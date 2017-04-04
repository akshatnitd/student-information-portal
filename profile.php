<?php
        session_start();
        if(!isset($_SESSION['email']))
        {
                header("location: login.php");
        }
        $roll_=$_SESSION['roll'];
        $email=$_SESSION['email'];
        $pass=$_SESSION['pass'];
        //echo $email;
        //echo $roll_;
        $fname=$_SESSION['fname'];
        $lname=$_SESSION['lname'];
        $gender=$_SESSION['gender'];
        $dob=$_SESSION['dob'];
        $addr=$_SESSION['addr'];
        $prog=$_SESSION['prog'];
        $dept=$_SESSION['dept'];
        $sem=$_SESSION['sem'];
        $ph=$_SESSION['ph'];
        //echo $ph;
        //echo $email;
        //echo $roll_;
        //echo $pass;
        //echo $fname;
        //echo $lname;
        //echo $gender;
        //echo $dob;
        //echo $addr;
        //echo $prog;
        //echo $dept;
        //echo $sem;
        //echo $roll_;
        function isLoginSessionExpired() {
    $login_session_duration = 60; 
    $current_time = time(); 
    if(isset($_SESSION['loggedin_time']) and isset($_SESSION['roll'])){  
        if(((time() - $_SESSION['loggedin_time']) > $login_session_duration)){ 
            return true; 
        } 
    }
    return false;
}
if(isLoginSessionExpired()) {
        $_SESSION['counter']=true;
        header("Location:logout.php?session_expired=1");
    }
    else
    {
        $_SESSION['loggedin_time'] = time();
    }
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
  
      <form id="msform" style="width: 1000px; text-align: left;"action="upload.php" method="post" enctype="multipart/form-data">
        <!-- fieldsets -->
        <fieldset>
       <h1 style="text-align: center;">Hello! <?php echo $fname;?></h1>
<h3><a href="logout.php">Click here to log out</a></h3>
<br/>
<h3>Here are your profile details:</h3>
<br/>
      <img src='/uploads/<?php echo $_SESSION[reg];?>.jpg' style="border-radius: 50%; height: 100px; width: 100px;" /><br /><br />
    <strong>First Name : </strong> <?php echo $fname;?><br/>
    <strong>Last Name : </strong> <?php echo $lname;?><br/>
    <strong>Gender : </strong> <?php echo $gender;?><br/>
    <strong>Date of birth : </strong> <?php echo $dob;?><br/>
    <strong>Address : </strong> <?php echo $addr;?><br/>
    <strong>Contact number : </strong> <?php echo $ph;?><br/>
    <strong>Program : </strong> <?php echo $prog;?><br/>
    <strong>Department : </strong> <?php echo $dept;?><br/>
    <strong>Semester : </strong> <?php echo $sem;?><br/>
    <br/>
    <strong>Select image to upload:</strong>
    <br><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <?php
    if(isLoginSessionExpired()) {
        $_SESSION['counter']=true;
        header("Location:logout.php?session_expired=1");
    }
    else
    {
        $_SESSION['loggedin_time'] = time();
    }
    ?>
    <input type="submit" value="Upload Image" name="submit">
  
        </fieldset>



    </form>


</div> 

    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>