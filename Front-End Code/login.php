
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script language="javascript" type="text/javascript">window.history.forward();</script>
</head>
<body >


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-center" href="#">Anime World</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 style="text-align: center; color: black;">Sign In</h3>
			</div>
			<div class="card-body">
				<form action="logincheck.php" method="post">
					<div class="input-group form-group">
						<input type="text" class="form-control" placeholder="username" name="user">
						
					</div>
					<div class="input-group form-group">
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" name="Submit" style="color: black">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links" style=" color: black;">
					Don't have an account?<a href="signup.php" style="color: black">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
</div>

<footer>
	<p class="p-3 bg-dark text-white text-center" style="margin-top: 30px;">&copy AnimeWorld Since 2020</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>