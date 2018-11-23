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

<div class="container">
    <div class="container-fluid">

  </ul></div>
<div class="col-xl-8">



  <div class="dropdown">

  <div class="fa fa-cog fa-lg dropdown-toggle" style="color:grey;" type="dropdown" data-toggle="dropdown"  ></div> 


  <span class="caret bg-light">
</span>
<ul class="dropdown-menu">
  <li><a href="#">My Profile</a></li>
  <li><a href="#">Repositories</a></li>
  <li><a href="#">Sign Out</a></li>
</ul>
</div>
</div>
</nav>
  <br><br>

  <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-6"><h4>ASK QUESTIONS</h4></div>
</div>

<form action="thanku.php" method="POST">
<div class="row">
  <div class="col-sm-1"></div>
<div class="col-xl-10">
  <div class="card">
  

 <div class="card-body">
<h4 class="card-title">TITLE*</h4>
<div class="form-group">
 <textarea class="form-control" rows="1" id="comment" name="TITLE"></textarea>
</div>

</div>
<div class="card-body">
<h4 class="card-title">DESCRIPTION*</h4>
<div class="form-group">
 <textarea class="form-control" rows="4" id="comment" name="DESCRIPTION"></textarea>
</div>



<div class="card-body">
<h4 class="card-title">Add Tags</h4>
<div class="form-group">
   <textarea class="form-control" rows="1" id="comment" name="Add_Tags"></textarea>
</div>  
<h6>Tag will help other to find your question faster.add comma separated tags for ex:codetrack,bootsrap,frontend</h6><br>

<h6><button class="btn btn-primary" id="demo" onclick="validateForm(),validateForm1(),validateForm2()" >Post your Question</button></h6>
</div>

</div></div>

</form>
<script src="main.js"></script>

</body>
</html>