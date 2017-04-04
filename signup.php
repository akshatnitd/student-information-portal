<html>
<head>
  <title>SIP - SignUp</title>
  <link rel = "stylesheet"
  type = "text/css"
  href = "/css/main.css" />
  <script src="/js/jquery-3.1.1.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/main.js"></script>
</head>
<body>
  <?php

  define('HOST','localhost');
  define('USER','root');
  define('PASS','labwebsite');
  define('DB','student_information_portal');

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $gen = test_input($_POST["gender"]);
    $dob = test_input($_POST["dob"]);
    $phone = test_input($_POST["phone"]);
    $addr = test_input($_POST["address"]);
    $regno = test_input($_POST["regno"]);
    $roll = test_input($_POST["roll"]);
    $prog = test_input($_POST["program"]);
    $dept = test_input($_POST["dept"]);
    $sem = test_input($_POST["sem"]);
    $email = test_input($_POST["email"]);
    $pass = test_input($_POST["pass"]);
    $status = 'inactive';


    $con = mysqli_connect(HOST,USER,PASS,DB);

    $check="SELECT * FROM users WHERE roll = '$roll'";
    $rs = mysqli_query($con,$check);

    $data = mysqli_fetch_array($rs, MYSQLI_NUM);

    if($data > 0) {
      echo "User Already in Exists<br/>";
      header('Location: dup.html');         
      mysqli_close($con);
    }

    else
    {
      $sql = "INSERT INTO users (firstname, lastname, gender, dob, phone, addr, regno, roll, program, dept, sem, email, password) VALUES ('$fname', '$lname', '$gen', '$dob', '$phone', '$addr', '$regno', '$roll', '$prog', '$dept', '$sem', '$email', '$pass') ";

      $res = mysqli_query($con,$sql);

      if(isset($res))
      {

        echo "success\n";
        header('Location: success.html');         
        mysqli_close($con);
      }
      else
      {
        echo "Failed conn\n";
      }


    }   
  }
  ?>
  <header>
    <h2 class="fs-title" style="text-align: center; color: #fff; font-size: 24px; padding-top: 50px;">Student registration form</h2>
  </header>
  <!-- multistep form -->
  <form id="msform" method="POST" action='<?php echo $_SERVER['PHP_SELF']; ?>' onsubmit="return signupsubmit(this);">
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Personal Details</li>
      <li>Academic Details</li>
      <li>Login Details</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
      <h2 class="fs-title">Create your account</h2>
      <h3 class="fs-subtitle">Enter your personal details</h3>

      <input type="text" name="fname" id='fname' placeholder="First Name" onfocusout="fnamefunc()" required/>
      <div class='err' id='err1'></div>
      <input type="text" name="lname" id='lname' placeholder="Last Name" onfocusout="lnamefunc()" required/>
      <div class='err' id='err2'></div>
      <select name="gender" id='gender' onfocusout="genderfunc()">
        <option value="none">Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      <div class='err' id='err3'></div>
      <div class='dob' >Date of Birth: </div>
      <input type="date" name="dob" id='dob' onfocusout="dobfunc()" required> 
      <div class='err' id='err4'></div>
      <input type="text" name="phone" id='phone' onfocusout="phonefunc()" placeholder="Phone" required/>
      <div class='err' id='err5'></div>
      <textarea name="address" id='address' onfocusout="addrfunc()" placeholder="Address" required></textarea>
      <div class='err' id='err6'></div>
      <input id='login1' type="button" name="next" class="next1 action-button" value="Next" />
    </fieldset>

    <fieldset>
      <h2 class="fs-title">Create your account</h2>
      <h3 class="fs-subtitle">Enter your Academic Details</h3>

      <input type="text" name="regno" id='regno' placeholder="Registration number" onfocusout="regnofunc()" required/>
      <div class='err' id='err7'></div>
      <select name="program" id='program' onfocusout="programfunc()">
        <option value="none">Program</option>
        <option value="btech">B. Tech</option>
        <option value="mtech">M. Tech</option>
        <option value="phd">PHD</option>
      </select>
      <div class='err' id='err8'></div>
      <select name="dept" id='dept' onfocusout="deptfunc()">
        <option value="none">Department</option>
        <option value="CS">Computer Science & Engineering</option>
        <option value="EC">Electronics and Communication Engineering</option>
        <option value="IT">Information Technology</option>
      </select>
      <div class='err' id='err9'></div>
      <select name="sem" id='sem' onfocusout="semfunc()">
        <option value="none">Semester</option>
        <option value="3">3rd</option>
        <option value="4">4th</option>
        <option value="5">5th</option>
        <option value="6">6th</option>
        <option value="7">7th</option>
        <option value="8">8th</option>
      </select>
      <div class='err' id='err10'></div>
      <input type="text" name="roll" id='roll' placeholder="Roll number" onfocusin="roll_init()" onfocusout="rollfunc()" required/>
      <div class='err' id='err11'></div>
      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <input type="button" name="next" class="next2 action-button" value="Next" />
    </fieldset>

    <fieldset>
      <h2 class="fs-title">Create your account</h2>
      <h3 class="fs-subtitle">Enter your login details</h3>

      <input type="text" name="email" id='email' placeholder="Email" onfocusout="emailfunc()" required/>
      <div class='err' id='err12'></div>
      <input type="password" name="pass" id='pass' placeholder="Password (min. 8 characters)" onfocusout="passfunc()" required/>
      <div class='err' id='err13'></div>
      <input type="password" name="cpass" id='cpass' placeholder="Confirm Password" onfocusout="cpassfunc()" required/>
      <div class='err' id='err14'></div>
      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <input type="submit" name="submit" class="submit action-button" onclick='return signupsubmit();' value="Submit" />    
    </fieldset>


  </form>

  <script src="/js/jquery-3.1.1.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/main.js"></script>
</body>

</html>