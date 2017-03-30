<?php
 
define('HOST','localhost');
define('USER','root');
define('PASS','');
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
            echo "Failed\n";            
        }
        else
        {
            echo "success\n";
            header('Location: home.html');   
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


