<?php
 
define('HOST','localhost');
define('USER','root');
define('PASS','labwebsite');
define('DB','student_information_portal');
function isLoginSessionExpired() {
    $login_session_duration = 300; 
    $current_time = time(); 
    if(isset($_SESSION['loggedin_time']) and isset($_SESSION['email'])){  
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
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if (isset($_POST['sub1'])) {
        # Publish-button was clicked
        $email = $_POST["email"]; 

    $con = mysqli_connect(HOST,USER,PASS,DB); 
    
    if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['email'])) {
      
      $sql = "UPDATE users SET status='active' WHERE email='$email'";

      if (mysqli_query($con, $sql)) {

          echo "Record updated successfully";
      } else {
          echo "Error updating record: " . mysqli_error($conn);
      }
      header('Location: admin.php');   
    }   

    }
    elseif (isset($_POST['sub2'])) {
        $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gen = $_POST["gen"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $prog = $_POST["prog"];
    $dept = $_POST["dept"];
    $roll = $_POST["roll"];
    $sem = $_POST["sem"];
    $email = $_POST["email"];
    $status = $_POST["status"];
    $con = mysqli_connect(HOST,USER,PASS,DB); 
    
    if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['email'])) {
      
      $sql = "UPDATE users SET firstname='$fname',lastname='$lname',gender='$gen',dob='$dob',phone='$phone',program='$prog',dept='$dept',sem='$sem',email='$email',status='$status' WHERE roll='$roll'";
      
      if (mysqli_query($con, $sql)) {

          echo "Record updated successfully";
      } else {
          echo "Error updating record: " . mysqli_error($conn);
      }
      header('Location: admin.php');   
    }   
        # Save-button was clicked
    }
    elseif (isset($_POST['sub3'])){
        $email = $_POST["email"]; 

    $con = mysqli_connect(HOST,USER,PASS,DB); 
    
    if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['email'])) {
      
      $sql = "DELETE FROM users WHERE email='$email'";

      if (mysqli_query($con, $sql)) {

          echo "Record deleted successfully";
      } else {
          echo "Error updating record: " . mysqli_error($conn);
      }
      header('Location: admin.php');   
    }   

    }
    
}
?>