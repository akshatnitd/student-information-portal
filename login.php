<!DOCTYPE html>
<html>
<head>
    <title>SIP - Login</title>
    <link rel = "stylesheet"
    type = "text/css"
    href = "/css/main.css" />
</head>
<body>
<?php
 
define('HOST','localhost');
define('USER','root');
define('PASS','labwebsite');
define('DB','student_information_portal');
$error1=false;
$error2=false;
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email = test_input($_POST["email"]);
    $pass = test_input($_POST["pass"]);
    $roll = test_input($_POST["roll"]);

    $con = mysqli_connect(HOST,USER,PASS,DB);

   $sql = "SELECT * FROM users WHERE  email='".$email."' and password='".$pass."' and roll='".$roll."'";


    $res = mysqli_query($con,$sql);
     
    $result = array();
    
    if(isset($res))
    {
        while($row = mysqli_fetch_array($res)){
            array_push($result,
            array('fname'=>$row[0],
            'lname'=>$row[1],
            'gender'=>$row[2],
            'dob'=>$row[3],
            'ph'=>$row[5],
            'reg'=>$row[6],
            'addr'=>$row[4],
            'roll'=>$row[7],
            'prog'=>$row[8],
            'dept'=>$row[9],
            'sem'=>$row[10],
            'status'=>$row[13]
            ));
        }

        if (empty($result)) {
            //$('div#err').html('Incorrect credentials');
            //echo "Failed\n"; 
            $error1 = true;           
        }
        else if($result[0]['status']=='inactive')
        {
            $error2=true;
        }
        else
        {

            session_start();
            $_SESSION['roll']=$_POST["roll"];
            $_SESSION['email']=$_POST["email"];
            $_SESSION['pass']=$_POST["pass"];
            $_SESSION['type']='stu';
            $_SESSION['fname']=$result[0]['fname'];
            $_SESSION['lname']=$result[0]['lname'];
            $_SESSION['gender']=$result[0]['gender'];
            $_SESSION['dob']=$result[0]['dob'];
            $_SESSION['addr']=$result[0]['addr'];
            $_SESSION['reg']=$result[0]["reg"];
            $_SESSION['ph']=$result[0]['ph'];
            $_SESSION['prog']=$result[0]['prog'];
            $_SESSION['dept']=$result[0]['dept'];
            $_SESSION['sem']=$result[0]['sem'];
            $_SESSION['loggedin_time'] = time(); 
            //echo
            //echo "success\n";
            //$_SESSION['email']=$_POST["email"];
            //$_SESSION['pass']=$_POST["pass"];
            header('Location: home.php');   
            //echo json_encode(array("result"=>$result));
            
        }

        mysqli_close($con);
    }
    else
    {
        echo "Failed conn\n";
    }
    
}
?>
    <header
        <h2 class="fs-title" style="text-align: center; color: #fff; font-size: 24px; padding-top: 50px;">Login Page</h2>
    </header>

    <form id="msform" method="POST" action='<?php echo $_SERVER['PHP_SELF']; ?>' onsubmit="return loginsubmit();">
        <fieldset>
            <h2 class="fs-title">Enter your login details</h2>
            <br />
            <div id='err'>
                <?php if ($error1)
                    echo "<div style='color: #f00; padding-bottom: 10px;' >Incorrect credentials!</div>"
                    ?>
                    <?php if ($error2)
                    echo "<div style='color: #f00; padding-bottom: 10px;' >Your account is not activated yet! Please contact admin.</div>"
                    ?>
            </div>
            <input type="text" id='roll' name="roll" placeholder="Roll Number" onfocusout="rollfunc()" required/>
            <div class='err' id='err1'></div>
            <input type="text" id='email' name="email" placeholder="Email" onfocusout="emailfunc()" required/>
            <div class='err' id='err2'></div>
            <input type="password" id='pass' name="pass" placeholder="Password" onfocusout="passfunc()" required/>
            <div class='err' id='err3'></div>

            <input id='login_btn' type="submit" name="submit" class="action-button" value="Submit" />
            <input id='login_btn' type="reset" name="reset" class="action-button" value="Reset" />
        </fieldset>
    </form>

    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/login.js"></script>
</body>
</html>
