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
$error=false;
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

    $con = mysqli_connect(HOST,USER,PASS,DB);

    $sql = "SELECT * FROM users WHERE  email='".$email."' and password='".$pass."' ";

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
            'addr'=>$row[4],
            'roll'=>$row[5],
            'prog'=>$row[6],
            'dept'=>$row[7],
            'sem'=>$row[8]
            ));
        }

        if (empty($result)) {
            //$('div#err').html('Incorrect credentials');
            //echo "Failed\n"; 
            $error = true;           
        }
        else
        {

            session_start();
            $_SESSION['email']=$_POST["email"];
            $_SESSION['pass']=$_POST["pass"];
            $_SESSION['type']='stu';
            echo "success\n";
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
                <?php if ($error)
                    echo "<div style='color: #f00; padding-bottom: 10px;' >Incorrect credentials!</div>"
                    ?>
            </div>
            <input type="text" id='email' name="email" placeholder="Email" onfocusout="emailfunc()" required/>
            <div class='err' id='err1'></div>
            <input type="password" id='pass' name="pass" placeholder="Password" onfocusout="passfunc()" required/>
            <div class='err' id='err2'></div>

            <input id='login_btn' type="submit" name="submit" class="action-button" value="Submit" />
        </fieldset>
    </form>

    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/login.js"></script>
</body>
</html>
