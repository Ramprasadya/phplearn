<?php

$servername = "localhost";
$username = "root";
$password  = "";
$database = "contact";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("Unable to connect".mysql_error());
}else{
	echo "Connection complete";
}

echo "<br>";

$sql = " SELECT sno , name ,email,description FROM contact  ";

$result = mysqli_query($conn ,$sql);


?>