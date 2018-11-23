
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body style="height: 1500px">
  


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">CodeTrackForum</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">QUESTION</a>
    </li>
<div class="container mt-5">

    <div class="container-fluid">

  </ul>
<div class="col-xl-8">
  <div class="dropdown">
<button button class="fa fa-cog dropdown-toggle" type="dropdown" data toggle="dropdown">
  </button>
  <span class="caret bg-light">
</span>
<ul class="dropdown-menu">
  <li><a href="#">HTML</a></li>
  <li><a href="#">JAVa</a></li>
  <li><a href="#">java</a></li>
</ul>
</div>
</div>
</nav>
  <br><br>


   <div class="row">
<div class="col-sm-1"></div>
<div class="col-xl-7"><h4>Questions</h4></div>
  <div class="=col"><input class="form-control mr-sm-1" type="text" placeholder="Search Questions"></div>
   <div class="=col"><button class="btn btn-success" type="submit" >Ask Question</button></div>

</nav>
</nav>
</div>
<br>






<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codetrek_forum";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT title,body,tags,created_at,updated_at FROM questions";
$result = $conn->query($sql);

if ($result->num_rows> 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       
   ?>
<div class="card" style="margin: 0em 10em 0em 10em ;">
  <div class="card-body">
    <h3 class="card-title"><?php echo "".$row["title"]."";?></h3>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo "".$row["body"]."";?></h6>
    <p class="card-text"></p>
 <?php   
$string = $row["tags"];


$array  = explode(",", $string);

for($x=0;$x<sizeof($array);$x++){


?>
<a href="#" class="badge badge-primary"><?php echo $array[$x];?></a>
   <?php } ?>
    
    <a href="" class="card-link">Abhinav Posti,</a>
    <a class="card-text">Asked on 26feb 2018</a>
    <br>
    <i class="far fa-thumbs-up"></i>24
   <i class="far fa-thumbs-down"></i>0
       <i class="far fa-comments"></i>4

    

     </div>
</div>   
<br><br>

<?php
 }
} 
else {
    echo "0 results";
}

$conn->close();
?>


</body>
</html>
