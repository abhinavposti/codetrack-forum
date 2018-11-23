

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

<?php
$id=$_GET['title'];
$sql="SELECT * FROM questions WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>

     <div class="container mt-5" >
          <h3> <?php  echo $row['Title']; ?></h3> 
          <p class="text-secondary">

            <?php  echo $row['Description']; ?>
          </p>

            <?php $tags=explode(',',$row['Tags']);
               foreach ( $tags as $i) {
                 echo "<span class='badge badge-primary mr-2'>".$i."</span>";
               }
              ?>




<span class="badge badge-info">Info</span>
<span class="badge badge-info">Info</span>
<span class="badge badge-info">Info</span>
<br>



    <a href="" class="card-link">Abhinav Posti,</a>
    <a class="card-text">Asked on 26feb 2018</a>
    <br>
    <i class="far fa-thumbs-up" id="like" onclick="Likecolor()"><span id="increase1">14</span>
              </i>
   <i class="far fa-thumbs-down" id="dislike" onclick="DislikeColor()"></i><span id="decrease1">2</span>

       <i class="far fa-comments"></i>4
  </div>
</div><br><br>


<div class="row">
  <div class="col-sm-1"></div>
<div class="col-sm-10">
<div class="card">
  <div class="card-body">
<a href="#" class="card-link">RAJNEESH</a>
<a class="card-text">Asked on 26feb 2018</a>
<span class="badge badge-success float-right">Correct Answer</span>
<i class="far fa-check"></i>
<p>
syg  In most organized forms of writing, such as essays, paragraphs contain a topic sentence . This topic sentence of the paragraph tells the reader what the paragraph will be about. Essays usually have multiple paragraphs that make claims to support a thesis statement, which is the central idea of the essay.
</p><br><br>
</div>
</div>
<br>

  </div>
</div>
<br>


<div class="row">
  <div class="col-sm-1"></div>
<div class="col-sm-10">
<div class="card">
<div class="card-body">

     <a href="#" class="card-link">ABHINAV POSTI</a>
     <a class="card-text">Asked on 26feb 2018</a>
     <br><p>      
In most organized forms of writing, such as essays, paragraphs contain a topic sentence . This topic sentence of the paragraph tells the reader what the paragraph will be about. Essays usually have multiple paragraphs that make claims to support a thesis statement, which is the central idea of the essay.
</p>
<br><br>
 </div>
</div>
<br><br>
<?php
$conn->close();
?>

<div class="card">
<div class="card-body">

         <div class="form-group">
  <h3>Your answer</h3>
  <textarea class="form-control" rows="10" id="comment"></textarea>
 </div>

<button type="button" class="btn btn-primary">PostYourAnswar
</button>
</div></div>



          </div></div>
  <footer class="bg-light py-3 text-center mt-5">
      <span class="text-primary"><i class="fas fa-code"></i> Developed at CodeTrek Tehri 2018
      </span>



<script src="main.js">

</script>


</body></html>
