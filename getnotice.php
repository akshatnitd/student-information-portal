<?php
define('HOST','localhost');
define('USER','root');
define('PASS','labwebsite');
define('DB','student_information_portal');
// Create connection
 $conn = mysqli_connect(HOST,USER,PASS,DB);// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT content FROM notice";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  "Content: ". $row["content"]. "Done";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

