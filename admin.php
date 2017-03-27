<?php
session_start();
if(!isset($_SESSION['type']) || $_SESSION['type']!= 'admin')
{
	header("location: adminlogin.php");
}
define('HOST','localhost');
define('USER','root');
define('PASS','labwebsite');
define('DB','student_information_portal');

$con = mysqli_connect(HOST,USER,PASS,DB);

$sql = "SELECT * FROM users WHERE  status='inactive'";

$res = mysqli_query($con,$sql);
     
$result = array();
    
if(isset($res))
{
	while($row = mysqli_fetch_array($res)){
    array_push($result,array('fname'=>$row[0],
						    'lname'=>$row[1],
						    'gender'=>$row[2],
						    'dob'=>$row[3],
						    'addr'=>$row[4],
						    'phone'=>$row[5],
						    'regno'=>$row[6],
						    'roll'=>$row[7],
						    'prog'=>$row[8],
						    'dept'=>$row[9],
						    'sem'=>$row[10],
						    'email'=>$row[11]
    ));
	}

    echo json_encode(array("result"=>$result[1]['fname'])); 
}

?>

<html>
<head>
	<title>SIP - Admin Login</title>
	<link rel = "stylesheet"
	type = "text/css"
	href = "/css/main.css" />
</head>
<body>
	<header>
		<h2 class="fs-title" style="text-align: center; color: #fff; font-size: 24px; padding-top: 50px;">Admin Page</h2>
	</header>
	<!-- multistep form -->
	WELCOME TO ADMIN



	<h3><a href="logout.php">Click here to log out</a></h3>
	<script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/login.js"></script>
</body>
</html>