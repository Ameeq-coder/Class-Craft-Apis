<?php

$hostname='localhost';
$username='root';
$userpass='';
$dbName='classcraft';
$conn=mysqli_connect($hostname,$username,$userpass,$dbName);
if(!$conn){
    echo "connection failed";
}else
    echo "connection sucess";

?>