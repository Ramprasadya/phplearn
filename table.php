<?php
echo "Creating table with php";
echo "<br>";
// creating table using php ;

$servername = "localhost";
$username = "root";
$password  = "";
$database = "tabledb";

$conn = mysqli_connect( $servername , $username ,$password , $database );

//die if connection is not complete ;

if (!$conn) {
	echo "Sorry we unable to connect ".mysqli_connect_error();
}else{
	echo "Connection is successfully complete ";
}

echo "<BR>";
// creating table ;

$sql = "CREATE TABLE `employee`( `srno` INT NOT NULL AUTO_INCREMENT PRIMARY KEY , `name` VARCHAR(11) NOT NULL , `age` INT(11) NOT NULL , `gender` VARCHAR(11) NOT NULL )";

$result = mysqli_query($conn , $sql);

if($result){
	echo "Table has been created <br>";
}else{
	echo "Unable to create table  .. " .mysqli_error($conn);
}

?>