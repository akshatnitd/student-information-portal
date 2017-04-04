<?php
session_start();
?>

<html>
<head>
  <title>SIP - Contacts</title>
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
        echo "<li><a href='home.php'><i class='fa fa-home'></i> Home</a></li>";        


      ?>
      <li>
        <a  href='about.php'><i class="fa fa-info"></i> About Us</a>
      </li>
      <li>
        <a href='notice.php'><i class="fa fa-sticky-note"></i> Notice Board</a>
      </li>
      <li>
        <a class='active' href='contact.php'><i class="fa fa-phone"></i> Contact Us</a>
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

  <div class="box">
    <div class='in-box'>
      <b>Director</b>
    </div>
    <div class='text'>
      <p>
        <b>Prof. (Dr.) Asok De</b><br>
        Phone: +91-343-2546397<br>
        Fax: +91-343-2547375<br>
        Email: director@admin.nitdgp.ac.in
      </p>
    </div>
  </div>

  <div class="box">
    <div class='in-box'>
      <b>Registrar</b>
    </div>
    <div class='text'>

      <p>
        <b>Brig. A. S. Nijjar</b><br>
        Phone: +91-343-2545290<br>
        Fax: +91-343-2546406<br>
        Email: registrar@admin.nitdgp.ac.in
      </p>
    </div>
  </div>

  <div class="box">
    <div class='in-box'>
      <b>Deans</b>
    </div>
    <div class='text'>
      <p>
        <b>Dean (Faculty Welfare)</b><br>
        Prof. Aniruddha Gangopadhyay <br>
        Phone: +91-343-2754430 <br>
        Mobile: +91-9434788033 <br>
        Email: deanfaculty@admin.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Dean (Planning & Development)</b><br>
        Prof. Kamal Bhattacharya<br>
        Phone: +91-343-2754180<br>
        Mobile : +91-9434788040<br>
        Email: deanpd@admin.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Dean (Alumni, International Relations & Outreach)</b><br>
        Prof. Parthapratim Gupta<br>
        Phone: +91-343-2754079<br>
        Mobile : +91-9434788028<br>
        Email: deanairo@admin.nitdgp.ac.in
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Dean (Academic)</b><br>
        Prof. Saradindu Ghosh<br>
        Phone: +91-343-2754336<br>
        Mobile: +91-9434788096<br>
        Email: deanac@admin.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Dean (Research & Consultancy)</b><br>
        Prof. Sudip Chattopadhyay<br>
        Phone: +91-343-2754030<br>
        Mobile : +91-9434788029<br> 
        Email: deanresearch@admin.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Dean (Student Welfare)</b><br>
        Prof. Nilotpal Banerjee <br>
        Phone: +91-343-2754679, +91-343-2754676/4677<br>
        Mobile : +91-9434788009<br>
        Email: deansw@admin.nitdgp.ac.in<br>
      </p>
    </div>
  </div>

  <div class="box">
    <div class='in-box'>
      <b>Associate Deans</b>
    </div>

    <div class='text'>
      <p>
        <b>Associate Dean(Academic & Examination)</b><br>
        Dr. N. B. Hui<br>
        Phone: +91-343-2754688<br>
        Mobile : +91-9434788117<br>
        Email: nirmal.hui@me.nitdgp.ac.in<br>

      </p>
    </div>

    <div class='text'>
      <p>
        Dr. P. S. Bhowmik<br>
        Phone: +91-343-2754332<br>
        Mobile : +91-9434788174<br>
        Email: psbhowmik@ee.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        Dr. S. Roy Barman<br>
        Phone: +91-343-2754038<br>
        Mobile : +91-9434789002<br>
        Email: subhankarroy.barman@bt.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Associate Dean (Alumni, International Relations & Outreach)</b><br>

        Dr. Diptesh Das<br> 
        Phone: +91-343-2754183<br>
        Mobile : +91-9434788152<br>
        Email: diptesh.das@ce.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Associate Dean (Student Welfare)</b><br>
        Dr. Durbadal Mandal<br>
        Phone: +91-343-2754390<br>
        Mobile : +91-9434788059<br>
        Email: durbadal.mondal@ece.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        Dr. S. N. Mahato<br>    
        Phone: +91-343-2754339<br>
        Mobile : +91-9434788057<br>
        Email: sankar.mahato@ee.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Associate Dean (Research & Consultancy)</b><br>
        Dr. Amit Kumar Chakraborty<br>
        Phone: +91-343-2754780<br>
        Mobile : +91-9434788137<br>
        Email: amit.chakraborty@phy.nitdgp.ac.in<br>
      </p>
    </div>
  </div>

  <div class="box">
    <div class='in-box'>
      <b>Head of Departments</b>
    </div>

    <div class='text'>
      <p>
        <b>Biotechnology</b><br>
        Dr. Kaustav Aikat<br>
        Phone: +91-343-2754029, +91-343-2754026/4027<br>
        Mobile : +91-9434788140<br>
        Email: hod@bt.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Chemical Engineering</b><br>
        Prof. Anup Kumar Sadhukhan<br>
        Phone: +91-343-2754087, +91-343-2754076/4077<br>
        Mobile : +91-9434788048<br>
        Email: hod@che.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Chemistry</b><br>
        Dr. Milan Maji<br>
        Phone: +91-343-2754131, +91-343-2754126/4127<br>
        Mobile : +91-9434788124<br>
        Email: hod@ch.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Civil Engineering</b><br>
        Dr. Atul Krishna Banik<br>
        Phone: +91-343-2754179, +91-343-2754176/4177<br>
        Mobile : +91-9434788101<br>
        Email: hod@ce.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Computer Science & Engineering</b><br>
        Dr. Goutam Sanyal<br>
        Phone: +91-343-2754235, +91-343-2754226/4227<br>
        Mobile : +91-9434788006<br>
        Email: hod@cse.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Computer Application</b><br>
        Dr. Goutam Sanyal<br>
        Phone: +91-343-2754235, +91-343-2754226/4227<br>
        Mobile : +91-9434788006<br>
        Email: hod@ca.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Electrical Engineering</b><br>
        Prof. Subrata Banerjee<br>
        Phone: +91-343-2754330, +91-343-2754326/4327<br>
        Mobile : +91-9434788129<br>
        Email: hod@ee.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Electronics & Communication Engineering</b><br>
        Prof. Sumit Kundu<br>
        Phone: +91-343-2754385, +91-343-2754376/4377<br>
        Mobile : +91-9434788127<br>
        Email: hod@ece.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Mathematics</b><br>
        Prof. (Mrs.) Kajla Basu<br>
        Phone: +91-343-2754580, +91-343-2754576/4577<br>
        Mobile : +91-9434788132<br>
        Email: hod@maths.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Mechanical Engineering</b><br>
        Prof. Amar Nath Mullick<br>
        Phone: +91-343-2754696<br>
        Mobile : +91-9434788052<br>
        Email: hod@me.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Physics</b><br>
        Prof. Ajit Kumar Meikap<br>
        Phone: +91-343-2754782, +91-343-2754776/4777<br>
        Mobile : +91-9434788060<br>
        Email: hod@phy.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Management Studies</b><br>
        Dr. Gautam Bandyopadhyay<br>
        Phone: +91-343-2754279, +91-343-2754276/4277<br>
        Mobile : +91-9434788030<br>
        Email: hod@dms.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Humanities & Social Science</b><br>
        Prof. P. P. Sengupta<br>
        Phone: +91-343-2754483, +91-343-2754526/4527<br>
        Mobile : +91-9434788045<br>
        Email: hod@hu.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Information Technology</b><br>
        Dr. Goutam Sanyal<br>
        Phone: +91-343-2754235, +91-343-2754226/4227<br>
        Mobile : +91-9434788006<br>
        Email: hod@ee.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Metallurgical & Materials Engineering</b><br>
        Dr. Joydeep Maity<br>
        Phone: +91-343-2754733, +91-343-2754726/4727<br>
        Mobile : +91-9434788136<br>
        Email: hod@mme.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Earth & Environmental Study</b><br>
        Dr. Kalyan Adhikari<br>
        Phone: +91-343-2754429, +91-343-2754426/4427<br>
        Mobile : +91-9434788091<br>
        Email: hod@ees.nitdgp.ac.in<br>
      </p>
    </div>
  </div>

  <div class="box">
    <div class='in-box'>
      <b>Training & Placement</b>
    </div>

    <div class='text'>
      <p>
        <b>Head-Training & Placement</b><br>
        Dr. Susanta Pramanik<br>
        Mobile: +91-9434788183<br>
        Phone: +91-0343-275-2230/2228<br>
        and +91-0343-254-6753/6099<br>
        Fax: +91-0343-2752230<br><br>
        Email: For Placement: placementcell@admin.nitdgp.ac.in<br>
        Email: For Training/Internship: training@admin.nitdgp.ac.in<br>
      </p>
    </div>
  </div>

  <div class="box">
    <div class='in-box'>
      <b>Wardens for Halls of Residence</b>
    </div>

    <div class='text'>
      <p>
        <b>Chief Warden </b><br>
        Dr. Kalyan Adhikari<br>  
        Phone: +91-343-2754429<br>
        Mobile: +91-9434788091<br>
        Email: chief.w@ees.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Netaji Subhash Chandra Bose Hall</b><br>
        Dr. Suvomoy Chongder<br> 
        Mobile: +91-9434788094<br>
        Email: suvamoy.changder@ca.nitdgp.ac.in<br><br>

        Dr. Aniruddha Mondal<br>
        Mobile: +91-9434789024<br>
        Email:  aniruddha.mondal@phy.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>J.C. Bose Hall</b><br>
        Dr. Sajal Mukhopadhyay<br>
        Phone: +91-343-2754538<br>
        Mobile: +91-9434788177<br>
        Email: sajal.mukhopadhyay@it.nitdgp.ac.in<br><br>

        Dr. Debasis Mitra<br>
        Phone: +91-343-2754537<br>
        Mobile: +91-9434789012<br>
        Email: debasis.mitra@it.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Tagore Hall</b><br>
        Dr. Rajat Mahapatra<br>
        Phone: +91-343-2754396<br>
        Mobile: +91-9434788126<br>
        Email: rajat.mahapatra@ece.nitdgp.ac.in<br><br><br>

        Dr. Pijush Topder<br>  
        Phone: +91-343-2754196<br>
        Mobile: +91-9434788156<br>
        Email: pijush.topdar@ce.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>C. V. Raman Hall   </b><br>
        Dr. Gopinath Halder<br>
        Phone: +91-343-2754090<br>
        Mobile: +91-9434788189<br>
        Email: gopinath.halder@che.nitdgp.ac.in<br><br>

        Dr. Sanjay Dhar Roy<br>
        Phone: +91-343-2754383<br>
        Mobile: +91-9434788166<br>
        Email: sanjay.dharroy@ece.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Vivekananda Hall  </b><br>
        Dr. Samarjit Kar<br> 
        Phone: +91-343-2754582<br>
        Mobile: +91-9434788032<br>
        Email: samarjit.kar@maths.nitdgp.ac.in<br><br>

        Dr. Sujit Kumar Mondal<br>
        Phone: +91-343-2754392<br>
        Mobile: +91-9434789013<br>
        Email: sujit.mandal@ece.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Aurovindo Hall </b><br>
        Dr. Dalia Dasgupta<br>
        Phone: +91-343-2754032<br>
        Mobile: +91-9434788141<br>
        Email: dalia.dasgupta@bt.nitdgp.ac.in<br><br>

        Dr. Kazy Sufia Khannam<br>
        Email: sufia.kazy@bt.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Sister Nivedita Hall  </b><br>
        Dr. Suchismita Roy<br>
        Phone: +91-343-2754233<br>
        Mobile: +91-9434788122<br>
        Email: suchismita.roy@cse.nitdgp.ac.in<br><br>

        Dr. Jayati De<br>
        Mobile: +91-9434788173<br>
        Email: jayati.dey@ee.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Preeti Lata Hall </b><br>
        Dr. Durba Pal<br>
        Phone: +91-343-2754286<br>
        Mobile: +91-9434789007<br>
        Email: durba.pal@dms.nitdgp.ac.in<br><br>

        Dr. Nibedita Mahata<br>
        Email: nibedita.mahata@bt.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>S. N. Bose Hall  </b><br>
        Dr. Radhikesh Prasad Nanda<br>
        Phone: +91-343-2754197<br>
        Mobile: +91-9434788118<br>
        Email:  rpnanda@ce.nitdgp.ac.in<br><br>

        Dr. Anupam De<br>
        Phone: +91-343-2754281<br>
        Mobile: +91-9434789006<br>
        Email:  anupam.de@dms.nitdgp.ac.in<br><br>

        Dr. Durbadal Mondal<br>
        Phone: +91-343-2754390<br>
        Mobile: +91-9434788059<br>
        Email:  durbadal.mondal@ece.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Mother Teresa Hall </b><br>
        Mrs. Deepanwita Das<br>
        Phone: +91-343-2754531<br>
        Mobile: +91-9434788179<br>
        Email:  deepanwita.das@it.nitdgp.ac.in<br><br>

        Smt. Mousumi Saha<br>
        Mobile: +91-9434788194<br>
        Email:  mousumi.saha@ca.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Meghnad Saha Hall </b><br>
        Dr. Bijay Kr. Show<br>
        Phone: +91-343-2754739<br>
        Mobile: +91-9434788184<br>
        Email:  bijaykumar.show@mme.nitdgp.ac.in<br><br>

        Dr. Manas Kr. Mondal<br>
        Phone: +91-343-2754736<br>
        Mobile: +91-9434789016<br>
        Email:  manas.mandal@mme.nitdgp.ac.in<br><br>

        Dr. Amlan Ghosh<br>
        Mobile: +91-9434110206<br>
        Email:  amlan.ghosh@dms.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>Hall - 12 </b><br>
        Dr. Supriya Bera<br>
        Mobile: +91-9434788185<br>
        Email:  supriya.bera@mme.nitdgp.ac.in<br>
      </p>
    </div>

    <div class='text'>
      <p>
        <b>A-B Type Quarters  </b><br>
        Dr. Durba Pal<br>
        Phone: +91-343-2754286<br>
        Mobile: +91-9434789007<br>
        Email: durba.pal@dms.nitdgp.ac.in<br>
        Dr. Nibedita Mahata<br>
        Email:  nibedita.mahata@bt.nitdgp.ac.in
      </p>
    </div>
  </div>

  <script src="/js/jquery-3.1.1.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/main.js"></script>
</body>
</html>












