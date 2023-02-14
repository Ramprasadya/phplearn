<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "tabledb";

$conn = mysqli_connect($servername , $username , $password ,$database);

if(!$conn){
	die("Unable to connect" . mysqli_error());
}
else{
	echo "Connection complete";
}

// Inserting multiple data in once  .. 

$sql = "INSERT INTO `employee` (`srno`, `name`, `age`, `gender`) VALUES ('3', 'rohit', '22', 'male');";
$sql .= "INSERT INTO `employee` (`srno`, `name`, `age`, `gender`) VALUES ('4', 'swati', '20', 'female');";
$sql .= "INSERT INTO `employee` (`srno`, `name`, `age`, `gender`) VALUES ('5', 'chandu', '24', 'male');";



$result = mysqli_multi_query($conn ,$sql);

if($result){
	echo "New detail inserted";
}else{
	echo "Error".$sql. "<br>" .mysqli_error($conn);
}



?>