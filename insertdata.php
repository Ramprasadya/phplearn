<?php 

echo "inserting data into databaase";
echo "<br>";

$servername = "localhost";
$username = "root";
$password = "";
$database = "tabledb";

$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn) {
	 die("Connection faild".mysqli_error());
}else{
	echo "Connection complete";
}

// using variable for saving the data ;

$name = "Ronit";
$age = "34";
$gender = "male";

// inserting data into database ;


$sql = "INSERT INTO   employee( name, age, gender) VALUES ( '$name', '$age', '$gender')";

$result =mysqli_query($conn,$sql);

if($result){
	echo "New record added successfully !!";
}
else{
	echo "Unable to insert data" .$sql. "<br>" .mysqli_error($conn);
};


?>