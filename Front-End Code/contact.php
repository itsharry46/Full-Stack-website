<?php

  session_start();
  if(!isset($_SESSION['user']))
  {
    header('location:login.php');
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">

	 <!-- metadata code for container  -->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/contact.css">

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-center" href="#">Anime World</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="post.php">Post</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Sign out</a>
      </li>
    </ul>
  </div>
</nav>

		<!-- JumboTron started -->


<div class="jumbotron" style="background-image: url(images/contact.jpg); background-size: 100%; background-position: center;">
   <div class="container">
   <h1 style=" color: black;">Get in Touch!</h1>
   </div>
</div>


		<!-- Cards started -->

<div class="card-deck" style="margin-left: 10px; margin-right: 10px; margin-bottom: 30px;">
  <div class="card bg-dark">
    <div class="card-body text-center">
      <h3 style="text-align: center; color: white;">Talk to Sales</h3>
      <p class="card-text py-4" style="color: white;">Intrested in Animae World? Just pick up the phone to chat with a member of our sales team.</p>
      <button type="button" class="btn btn-light">+91 8888-8888-88</button>
    </div>
  </div>
  <div class="card bg-dark">
    <div class="card-body text-center">
    	<h3 style="text-align: center; color: white;">Contact Customer Support</h3>
      <p class="card-text py-4" style="color: white;">Sometimes you need a little help from your friends. Or a Animae support rep. Don't worry..... we're here for you</p>
      <button type="button" class="btn btn-light">Contact Support</button>
    </div>
  </div> 
</div>

<footer>
	<p class="p-3 bg-dark text-white text-center">&copy AnimeWorld Since 2020</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>