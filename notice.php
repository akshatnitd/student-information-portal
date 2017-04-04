<?php
session_start();
?>

<html>
<head>
  <title>SIP - Notices</title>
  <link rel = "stylesheet"
  type = "text/css"
  href = "/css/home.css" />
  <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
</head>

<body>
  <header>
    <ul>
      <?php

      if(isset($_SESSION['email']))
      {
        echo "<li><a href='home.php'><i class='fa fa-home'></i> Home</a></li>";        

      }
      ?>
      <li>
        <a  href='about.php'><i class="fa fa-info"></i> About Us</a>
      </li>
      <li>
        <a class='active' href='notice.php'><i class="fa fa-sticky-note"></i> Notice Board</a>
      </li>
      <li>
        <a href='contact.php'><i class="fa fa-phone"></i> Contact Us</a>
      </li>

      <?php

      if(!isset($_SESSION['email']))
      {
        echo "<li style='float: right;'><a href='index.php'><i class='fa fa-sign-in'></i> Sign In / Sign Up</a></li>";      

      }
      else
      {
        echo "<li style='float: right;'><a href='logout.php'><i class='fa fa-sign-in'></i> Sign Out</a></li><li style='float: right;'><a href='profile.php'><i class='fa fa-user'></i> My Profile</a></li>";
      }  
      ?>
    </ul>
  </header>

  <div class="notice-box">

    <div class='in-box'>
      <b>Student Notice Board</b>
    </div>
    <div class='notice-text'>
      <?php
      define('HOST','localhost');
      define('USER','root');
      define('PASS','labwebsite');
      define('DB','student_information_portal');
// Create connection
      $conn = mysqli_connect(HOST,USER,PASS,DB);
      $sql = "SELECT * FROM notice where type='student'";

      $res = mysqli_query($conn,$sql);
      $result = array();

//echo json_encode(array("result"=>$res));    
      if(isset($res))
      {
        while($row = mysqli_fetch_array($res)){
          array_push($result,
            array('id'=>$row[0],
              'type'=>$row[1],
              'content'=>$row[2],
              'data'=>$row[3]));
        }

        if (empty($result)) {
          echo "Failed\n";            
        }
        else
        {
//echo "success\n";

//echo json_encode(array("result"=>$result));    
        }
      }



      $sql2 = "SELECT * FROM notice where type='event'";
      $res2 = mysqli_query($conn,$sql2);
      $result2 = array();

      if(isset($res2))
      {
        while($row = mysqli_fetch_array($res2)){
          array_push($result,
            array('id'=>$row[0],
              'type'=>$row[1],
              'content'=>$row[2],
              'data'=>$row[3]));
        }

        if (empty($result)) {
          echo "Failed\n";            
        }
        else
        {
//echo "success\n";

//echo json_encode(array("result"=>$result));    
        }

        mysqli_close($conn);
      }
      else
      {
        echo "Failed conn\n";
      }
//$conn->close();
      ?>
      <?php if (count($result) > 0): ?>
        <table>
          <thead>
            <tr>
              <th><?php echo implode('</th><th>', array_keys(current($result))); ?></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result as $row): array_map('htmlentities', $row); ?>
              <tr>
                <td><?php echo implode('</td><td>', $row); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>

      <ul>
        <li>Notice 1</li>
        <li>Notice 2</li>
        <li>Notice 3</li>
      </ul>
    </div>
  </div>

  <div class="notice-box">

    <div class='in-box'>
      <b>Events: Seminars & Workshops</b>
    </div>
    <div class='notice-text'>
      <?php if (count($result2) > 0): ?>
        <table>
          <thead>
            <tr>
              <th><?php echo implode('</th><th>', array_keys(current($result2))); ?></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result2 as $row): array_map('htmlentities', $row); ?>
              <tr>
                <td><?php echo implode('</td><td>', $row); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>
      <ul>
        <li>Notice 1</li>
        <li>Notice 2</li>
        <li>Notice 3</li>
      </ul>
    </div>
  </div>
  <script src="/js/jquery-3.1.1.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/main.js"></script>
</body>
</html>
