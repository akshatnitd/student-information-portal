<?php
session_start();

function isLoginSessionExpired() {
  $login_session_duration = 300; 
  $current_time = time(); 
  if(isset($_SESSION['loggedin_time']) and isset($_SESSION['reg'])){  
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
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg") {
  echo "Sorry, only JPG are allowed.";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  $name= $_SESSION['reg'];
  $target_file = $target_dir .$name.'.jpg' ;
  $_SESSION['file']=$imageFileType;
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    header('Location: profile.php');

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
