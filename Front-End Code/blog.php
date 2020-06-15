<?php

  session_start();
  if(!isset($_SESSION['user']))
  {
    header('location:login.php');
  }

?>

<?php
      include_once("config.php");

      $result = mysqli_query($link,"SELECT * FROM posts ORDER BY id DESC");
?>



<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">

	 <!-- metadata code for container  -->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/blog.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body style="background-color: rgba(140, 139, 139,0.8);">

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-center" href="#">Animae World </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="post.php"> Post </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Sign out</a>
      </li>
    </ul>
  </div>
</nav>
	
<?php
          while($row = mysqli_fetch_assoc($result))
          {   ?>
<div class="container" style="text-align: center; margin-left: 20%;">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?php echo $row['title'] ?></h1>

        <!-- Author -->
        <p class="lead">
          <?php echo $row['subtitle'] ?><br/>
          by <?php echo $row['user'] ?>
        </p>

        <hr>

        <!-- Date/Time -->
        <p><?php echo $row['date'] ?></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded"><?php echo '<td><img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/> </td>' ?></img>

        <hr>

        <!-- Post Content -->
        <p class="lead"><?php echo $row['content'] ?></p>
        <br/><br/>

      </div>
    </div>
</div>

<?php
}
?>

<footer>
  <p class="p-3 bg-dark text-white text-center">&copy AnimeWorld Since 2020</p>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>