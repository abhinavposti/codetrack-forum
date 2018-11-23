

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

$title =$_POST['TITLE'];
$body =$_POST['DESCRIPTION'];
$tags =$_POST['Add_Tags'];
$sql = "INSERT INTO questions(title,body,tags,created_at,updated_at)
VALUES ('$_POST[TITLE]','$_POST[DESCRIPTION]','$_POST[Add_Tags]')";

if($conn->query($sql)==TRUE)
{
$last_id=$conn->insert_id;
echo"hello".$last_id;

}
else{
  echo "error".$sql."<br>".$conn->error;
}


$conn->close();








?>


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
  </ul></div>
<div class="col-xl-16">
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

<div class="container" mt-5>
  <div class="alert alert-success"><strong>THANKU!</strong><h5>Welcome to my page</h5>
    <a href="new-question.php">Post a new question</a>
    <ul>

<?php
echo "<li>".$title."</li>";
echo "<li>".$body."</li>";
echo "<li>".$tags."</li>";


?>




    </ul>
    

</div>


</div>
</body></html>