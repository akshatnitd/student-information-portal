<?php
 
define('HOST','localhost');
define('USER','root');
define('PASS','labwebsite');
define('DB','student_information_portal');

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