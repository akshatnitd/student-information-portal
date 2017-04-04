<html>
<head>
  <title>SIP - Admin Login</title>
  <link rel = "stylesheet"
  type = "text/css"
  href = "/css/main.css" />
</head>
<?php

$err = false;
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


  if ($email == 'admin' && $pass == 'admin')
  {
    session_start();
    $_SESSION['email']=$_POST["email"];
    $_SESSION['pass']=$_POST["pass"];
    $_SESSION['type']="admin";
    $_SESSION['loggedin_time'] = time(); 
    header('Location: admin.php'); 
  }

  else
  {
    $err = true;
  }

}
?>
<body>
  <header>
    <h2 class="fs-title" style="text-align: center; color: #fff; font-size: 24px; padding-top: 50px;">Admin Login Page</h2>
  </header>
  <!-- multistep form -->
  <form id="msform" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <!-- fieldsets -->
    <fieldset>
      <h2 class="fs-title">Enter your login details</h2>
      <br />
      <div class= 'err' id='err'>
        <?php
        if ($err == true)
          echo 'Invalid credentials';
        ?>
      </div>
      <input type="text" name="email" placeholder="Email" />
      <input type="password" name="pass" placeholder="Password" />
      <input type="submit" name="submit" class="action-button" value="Submit" />
      <input id='login_btn' type="reset" name="reset" class="action-button" value="Reset" />
    </fieldset>


  </form>
  <script src="/js/jquery-3.1.1.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/main.js"></script>
  <script src="/js/login.js"></script>
</body>
</html>