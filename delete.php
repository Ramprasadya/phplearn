<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "tabledb";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("unable to connect" .mysqli_error());
}else{
	echo "Cnnection complete";
}

$sql = "DELETE FROM employee WHERE srno=1";

$result = mysqli_query($conn , $sql);

if($result){
	echo "Record deleted successfully !!";
}else{
	echo "Error deleting record " . mysqli_error($conn);
}






?>

