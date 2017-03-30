<?php
 
define('HOST','localhost');
define('USER','root');
define('PASS','');
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
?>