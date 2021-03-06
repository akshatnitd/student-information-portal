<?php
session_start();
?>

<html>
<head>
  <title>SIP - About</title>
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
        <a class='active' href='about.php'><i class="fa fa-info"></i> About Us</a>
      </li>
      <li>
        <a href='notice.php'><i class="fa fa-sticky-note"></i> Notice Board</a>
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

  <h2 class="fs-title" style="text-align: center; color: #fff; font-size: 24px; padding-top: 50px;">About Page</h2>
  <img src='/images/about_us.png' border="0" height="148" width="100%" />
  <div class="box">

    <div class='in-box'>
      <b>History</b>
    </div>
    <div style="text-align: justify; padding: 20px;">

      <p>
        The National Institute of Technology, Durgapur (formerly Regional Engineering College, Durgapur), was established by an Act of Parliament in 1960 as one of the eight such colleges aimed to function as a pace setter for engineering education in the country and to foster national integration.It is a fully-funded premier Technological Institution of the Government of India and is administered by an autonomous Board of Governors.

        The Institute is a University which awards B.Tech., M.C.A., M.Sc., M.B.A.,M.Tech. and Ph.D. degrees to students after their successful completion of the specified courses. The Institute imparts education in the disciplines of Chemical Engineering, Civil Engineering, Computer Science and Engineering, Electrical Engineering, Electronics and Communication Engineering, Mechanical Engineering, Metallurgical and Materials Engineering,Information Technology, Biotechnology, Physics, Chemistry, Mathematics, Environmental science, Materials Science and Management Studies.

        As decided by the Ministry of Human Resource Development, Government of India, the procedure for selection of candidates for admission to the Bachelor Degree Courses in Engineering/Technology in National Institute of Technology Durgapur and in other NITs is on the basis of State Rank/ All India Rank (AIR) of AIEEE conducted by Central Board of Secondary Education, New Delhi, and the same is executed through counselling by Central Counselling Board, AIEEE under guidance from MHRD, GOI as per schedule notified by CCB. In addition to the normal intake, a few seats are reserved for Foreign Students who are nominated by the Ministry of External Affairs, Government of India, and the Indian Council for Cultural Relations, Government of India.

      </p>
    </div>
  </div>
  <div class="box">

    <div class='in-box'>
      <b>Location</b>
    </div>
    <div style="text-align: justify; padding: 20px;">
      <div id="map"></div>
      <p>
        The Institute is located about 160 KMs north-west of Kolkata on the Howrah-Delhi main railway route and overlooking the National Highway No. 2(the great Grand- Trunk Road). The Institute spreads over an area of 187 acres of land. It is fully residential and co-educational. At present about 2500 boys and 500 girls reside in seven boys' hostels and two girls' hostels. The annual undergraduate intake is more than 1000 students.<br><br>
      </p>
    </div>
  </div>
  <div class="box">

    <div class='in-box'>
      <b>Administration</b>
    </div>
    <div style="text-align: justify; padding: 20px;">

      <p>
        The highest body in the administrative setup of the Institute is the Board of Governors which is headed by the eminent scientist and educationist Prof. Bikash Sinha, the former Director of VECC and Saha Institute of Nuclear Physics. The Board has representatives from the State and Central Governments, the University, All India Council of Technical Education, Indian Institute of Technology, the Industry and the Faculty of the Institute. The Director is the Head of Administration in the Institute.
      </p>
    </div>
  </div>

  <script>
    function initMap() {
// Add latitude and longitude of the college
var college = {lat: 23.547619, lng: 87.289375};
var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 15,
  center: college
});
var marker = new google.maps.Marker({
  position: college,
  map: map
});
}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCS8BqZUJVDS10qTFvq-4VMhwCRvwzyi9A&callback=initMap">
</script>

<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/main.js"></script>
</body>
</html>