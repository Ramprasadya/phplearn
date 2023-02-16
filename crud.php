<?php 

//connection with database ..
//INSERT INTO `note` (`sno`, `title`, `description`, `time`) VALUES (NULL, 'buy books from store', 'from lanka bhu varanasi', current_timestamp());
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";

$conn = mysqli_connect($servername ,$username ,$password ,$database);

if(!$conn){
  die("Unable to connect ..."  .mysqli_error());
}else{
  echo "Connection complete";
}
echo "<br>";


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $title = $_POST["title"];
  $description = $_POST["description"];

  //connecting with database ..

$sql = "INSERT INTO `note` ( `title`, `description`) VALUES ('$title', '$description')";
$result = mysqli_query($conn,$sql);

if($result){
  echo "data saved successfully ..";
}else{
  echo "Unable to save data.." .mysqli_error($conn) ;
}


}



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container my-4" >
  <form action="crud.php" method="post" >
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" id="description" name="description" rows="3"></textarea>
</div>
  
  <button type="submit" class="btn btn-primary">Add Note</button>
</form>
</div>

<div class="container" >
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
   
   $sql = "SELECT * FROM `note` ";

   $result = mysqli_query($conn,$sql);
     $sno = 0;
   while($rows = mysqli_fetch_assoc($result)){ 
     $sno = $sno+1;
    ?>

      <tr>
      <th scope="row"><?php echo $sno ?></th>
      <td><?php echo $rows["title"] ?></td>
      <td><?php echo $rows["description"] ?></td>
      <td>Action</td>
    </tr>

   <?php } ?> 
    
  </tbody>
</table>
</div>
 



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>