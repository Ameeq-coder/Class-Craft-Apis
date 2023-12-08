<?php
require 'connection.php';


$email=$_POST['email'];
$password=md5($_POST['password']);
$confirm=md5($_POST['confirm']);
$course=$_POST['course'];

$checkuser="SELECT * from studentregister WHERE email='$email'";
$checkQuery = mysqli_query($conn, $checkuser);
if(mysqli_num_rows($checkQuery)>0){
    $response['error']="401";
    $response['message']="User Exist";
}
else{
    $insertQuery="INSERT INTO studentregister(email,password,confirm,course) VALUES('$email','$password','$confirm','$course')";
    $result=mysqli_query($conn,$insertQuery);
    
      if($result){
        $response['error']="000";
        $response['message']="Register Sucessful";
    }
    else
    {
        $response['error']="402";
        $response['message']="Register failed";
    }
}

echo json_encode($response)

?>