<?php

$servername = "localhost";
$username = "root";
$password  = "";
$database = "tabledb";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("Unable to connect".mysql_error());
}else{
	echo "Connection complete";
}

echo "<br>";

$sql = " SELECT srno , name ,age,gender FROM employee  ";

$result = mysqli_query($conn ,$sql);

if(mysqli_num_rows($result)){

	while ($rows = mysqli_fetch_assoc($result)) {
		echo "id" .$rows["srno"] . "name" .$rows["name"]. "age" .$rows["age"]. "gender" .$rows["gender"];
		echo "<br>";
	}
}else{
	echo "0 results";
}


?>