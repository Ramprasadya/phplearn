<?php
//INSERT INTO `mytable` (`sno`, `name`, `role`, `experience`) VALUES ('1', 'php my admin ', 'database management', '100+ year');


$servername = "localhost";
$usernmane = "root";
$password = "";
$database = "tabledata";

$conn = mysqli_connect($servername,$usernmane,$password,$database)

if(!$conn){
	die("Connection failed" .mysql_error() );

}else{
	echo "Connection complete";
}


<?