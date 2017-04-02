<?php
session_start();
if(!isset($_SESSION['type']) || $_SESSION['type']!= 'admin')
{
  header("location: adminlogin.php");
}
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
define('HOST','localhost');
define('USER','root');
define('PASS','labwebsite');
define('DB','student_information_portal');
$email=$_SESSION['email'];
$con = mysqli_connect(HOST,USER,PASS,DB);

$sql = "SELECT * FROM users ";

$res = $con->query($sql);

?>

<html>
<head>
  <title>SIP - Admin Login</title>
  <link rel = "stylesheet"
  type = "text/css"
  href = "/css/home.css" />
  <link rel = "stylesheet"
  type = "text/css"
  href = "/css/admin.css" />

</head>
<body>
  <!-- multistep form -->
   <div class="box">
        <div class='in-box'>
            <b>Hello <?php echo $email;?></b>
        </div>
        <div class='text'>
        <a href="logout.php">
        <input type="button" value="SignOut" class='action-button'/>
        </a>
        </div>
    </div>
  <div class="box">
        <div class='in-box'>
            <b>Details of students registered</b>
        </div>
        <div style="text-align: justify; padding: 20px;">
            <?php if ($res->num_rows > 0) {
              while($row = $res->fetch_assoc()) {
            echo "<form method='POST' action='activate.php'>
                  <table>
                  <tbody>
                  <tr>
                  <td>First Name</td>
                  <td><input type='text' name= 'fname' value ='$row[firstname]'/> </td>
                  </tr>

                  <tr>
                  <td>Last Name</td>
                  <td><input type='text' name= 'lname' value ='$row[lastname]'/> </td>
                  </tr>

                  <tr>
                  <td>Gender</td>
                  <td><input type='text' name= 'gen' value ='$row[gender]'/> </td>
                  </tr>

                  <tr>
                  <td>DOB</td>
                  <td><input type='text' name= 'dob' value ='$row[dob]'/> </td>
                  </tr>

                  <tr>
                  <td>Phone</td>
                  <td><input type='text' name= 'phone' value ='$row[phone]'/> </td>
                  </tr>

                  <tr>
                  <td>Reg no</td>
                  <td><input type='text' name= 'regno' value ='$row[regno]'/> </td>
                  </tr>

                  <tr>
                  <td>Roll no</td>
                  <td><input type='text' name= 'roll' value ='$row[roll]'/> </td>
                  </tr>

                  <tr>
                  <td>Program</td>
                  <td><input type='text' name= 'prog' value ='$row[program]'/> </td>
                  </tr>

                  <tr>
                  <td>Dept</td>
                  <td><input type='text' name= 'dept' value ='$row[dept]'/> </td>
                  </tr>

                  <tr>
                  <td>Semester</td>
                  <td><input type='text' name= 'sem' value ='$row[sem]'/> </td>
                  </tr>

                  <tr>
                  <td>Email</td>
                  <td><input type='text' name= 'email' value ='$row[email]'/> </td>
                  </tr>

                  <tr>
                  <td>Status</td>
                  <td><input type='text' name= 'status' value ='$row[status]'/> </td>
                  </tr>
                  <tr><td><input type='submit' name='sub1' value='Activate' class='action-button'/> <input type='submit' name='sub2' value='Update' class='action-button'/> <input type='submit' name='sub3' value='Delete' class='action-button'/></td></tr>
                  
                  </tbody>
                  </table>
                  </form>";
                }
              echo "</div>";
            }
            else {
              echo "<div id='status'>
                  No inactive user
                  </div>"; 
            $con->close();
        }?>

    </div>

  <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/login.js"></script>
</body>
</html>
