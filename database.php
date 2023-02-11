<?php

echo "Connecting to my sql database ";
echo "<br>";
// Connection with database ;

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

//  Create databse using php ;
$sql = "CREATE DATABASE tableDB ";
mysqli_query($conn , $sql);

if(!$conn){
	die("sorry we faild to connect".mysqli_connect_error());
}else{
	echo "Connection with database successfull ...";
}


?>