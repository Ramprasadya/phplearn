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

$sql = "SELECT srno ,name ,age ,gender FROM employee WHERE name = 'chandu'  ";

$result = mysqli_query($conn ,$sql);

if(mysqli_num_rows($result)>0){
	while($rows = mysqli_fetch_assoc($result)){

		echo "srno" .$rows["srno"]. "name" .$rows["name"]. "age" .$rows["age"] . "gender" .$rows["gender"] ;
	}
}else{
	echo " 0 result" ;
}


?>