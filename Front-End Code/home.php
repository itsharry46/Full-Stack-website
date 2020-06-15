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
	<title>Home Page</title>
	<meta charset="utf-8">

	 <!-- metadata code for container  -->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body style="background-color: rgb(140, 139, 139); overflow-x: hidden;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-center" href="#">Animae World </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
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


		<!-- ***********************************Carousel Code Started******************************************* -->


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  <div class="carousel-inner" class="padding ">
    <div class="carousel-item active">
      <img src="images/dragon_ball.jpg" alt="Dragon Ball Z" width="1100" height="500">
      <div class="carousel-caption">
        <p>Best Animae Of All Time!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/pokemon.jpg" alt="pokemon" width="1100" height="500">
      <div class="carousel-caption">
        <p>Gota Catch Them All!!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/one.jpg" alt="onepuchman" width="1100" height="500">
      <div class="carousel-caption">
        <p>Power of Fist.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="images/naruto.jpg" alt="naruto" width="1100" height="500">
      <div class="carousel-caption">
        <p>The best action animae.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/death.jpg" alt="death" width="1100" height="500">
      <div class="carousel-caption">
        <p>The power of Devil Book!</p>
      </div>   
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- ***********************************Carousel Code Ended******************************************* -->

<h2 style="text-align: center; margin-top: 05%; color: white;">Trending Topics</h2>

<div class="container" style="margin-top: 05%;">

<div class="card-deck" style="height: 400px; width: 100%; background-color: rgba(255,255,255,0.3);">

<div class="card-deck" style=" padding: 50px; height: 400px; width: 1250px;">
  <div class="card bg-primary" style="background-image: url(images/card1.jpg); background-size: cover;">
    <div class="card-body text-center">
      <!-- <p class="card-text">Some text inside the first card</p> -->
    </div>
  </div>
  <div class="card bg-warning" style="background-image: url(images/card2.jpg); background-size: cover;">
    <div class="card-body text-center">
    </div>
  </div>
  <div class="card bg-success" style="background-image: url(images/card3.jpg); background-size: cover;">
    <div class="card-body text-center">
    </div>
  </div>
  <div class="card bg-danger" style="background-image: url(images/card4.jpg); background-size: cover;">
    <div class="card-body text-center">
    </div>
  </div>
</div>

</div>

</div>

<section class="my-5">  <!-- my for margin -->
	<div class="py-5">  <!-- py for padding -->
		<h2 class="text-center" style="color: white;">About Us</h2>
	</div>
</section>

<div class="card-deck" style="height: 200px; width: 100%; margin-left: 03px; ">
  <div class="card" style="background-color: rgba(0,0,0,0.5);">
    <div class="card-body text-center">
      <h3 style="text-align: center; color: white;">Here is a short view about website</h3>
      <p style="color: white;">Animae World is a blog that focuses on all type of anime. They feature information on animae world conventions and other anime topics. Hear from famous anime filmmakers and artists as well as plenty of news about the art of cartoon creation in the world. Animae World themself, so he relates to the content on a personal level and enjoys dwelling on the art and the technology involved in created anime. Check out this blog if you are interested in animation or if you want to find out what motivates others to watch this unique art form.</p>
    </div>
  </div>
</div>


	<!-- script code for container -->

<footer>
	<p class="p-3 bg-dark text-white text-center" style="margin-top: 30px;">&copy AnimeWorld Since 2020</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
