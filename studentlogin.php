<?php
require 'connection.php';
$email=$_POST['email'];
$password=md5($_POST['password']);
$checkUser="SELECT * FROM studentregister WHERE email='$email'and password='$password'";
$result=mysqli_query($conn,$checkUser);
if(mysqli_num_rows($result)>0){
    $response['error']="000";
    $response['message']="login sucess";
}else{
    $response['error']="001";
    $response['message']="login failed";
}

echo json_encode($response);

?>