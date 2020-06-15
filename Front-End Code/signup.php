<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/signup.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">


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
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 style="text-align: center; color: black; font-weight:bold;">Sign Up</h3>
			</div>

			<div class="card-body">
				<form action="" onsubmit="return validation()" method="post">
					<div class="input-group form-group">
						<input type="text" class="form-control" placeholder="First Name" id="fname" name='fname' autocomplete="of">
					</div>
					<span id="fnames" class="text-danger font-weight-bold "></span>
					<div class="input-group form-group" >
						<input type="text" class="form-control" placeholder="Last Name" id="lname" name="lname" autocomplete="offf">
					</div>
					<span id="lnames" class="text-danger font-weight-bold"></span>
					<div class="input-group form-group">
						<input type="text" class="form-control" placeholder="Phone Number" id="pno" name="pno" autocomplete="off">
					</div>
					<span id="pnos" class="text-danger font-weight-bold"></span>
					<div class="input-group form-group">
						<input type="text" class="form-control" placeholder="E-mail" id="email" name="email" autocomplete="off">
					</div>
					<span id="emails" class="text-danger font-weight-bold"></span>
					<div class="input-group form-group">
						<input type="text" class="form-control" placeholder="User Id" id="user" name="user" autocomplete="off">
					</div>
					<span id="users" class="text-danger font-weight-bold"></span>
					<div class="input-group form-group">
						<input type="password" class="form-control" placeholder="password" id="password" name="password" autocomplete="off">
					</div>
					<span id="passwords" class="text-danger font-weight-bold"></span>
					<div class="input-group form-group">
						<input type="password" class="form-control" placeholder="Confirm password" id="cpassword" name="cpassword" autocomplete="off">
					</div>
					<span id="cpasswords" class="text-danger font-weight-bold"></span>
					<div class="input-group form-group">
						<input type="submit" value="Submit" class="btn login_btn" name="Submit" style="margin-left: 37%; margin-bottom: -10px; color: black;">
					</div>
				</form>
			</div>

		</div>
	</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


   <!-- Validation Started -->


<script type="text/javascript">
	
	function validation()
	{
		var fname = document.getElementById('fname').value;
		var lname = document.getElementById('lname').value;
		var mobile = document.getElementById('pno').value;
		var email = document.getElementById('email').value;
		var user = document.getElementById('user').value;
		var pass = document.getElementById('password').value;
		var cpass = document.getElementById('cpassword').value;

		if(fname == "")
		{
			document.getElementById('fnames').innerHTML="Please fill the First Name";
			return false;
		}
		if ((fname.length <=2) || (fname.length >= 11))
		{
			document.getElementById('fnames').innerHTML="Between 2 to 11 char";
			return false;

		}
		if (!isNaN(fname))
		{
			document.getElementById('fnames').innerHTML="numbers not allowed";
			return false;
		}


		if(lname == "") 
		{
			document.getElementById('lnames').innerHTML="Please fill the Last Name";
			return false;
		}
		if ((lname.length <=2) || (lname.length >= 11))
		{
			document.getElementById('lnames').innerHTML="Between 2 to 11 char";
			return false;

		}
		if (!isNaN(lname))
		{
			document.getElementById('lnames').innerHTML="numbers not allowed";
			return false;
		}



		if(mobile == "")
		{
			document.getElementById('pnos').innerHTML="Please fill the Mobile Number";
			return false;
		}
		if(isNaN(mobile))
		{
			document.getElementById('pnos').innerHTML="Only Numbers";
			return false;
		}
		if(mobile.length != 10)
		{
			document.getElementById('pnos').innerHTML="Number be must 10 digit";
			return false;
		}




		if(email == "")
		{
			document.getElementById('emails').innerHTML="Please fill the E-mail Id";
			return false;
		}
		if (email.indexOf('@') <= 0)
		{
			document.getElementById('emails').innerHTML="cannot start with @";
			return false;
		}
		if(email.charAt(email.length-4)!='.' && (email.chatAt(email.length-3)!='.'))
		{
			document.getElementById('emails').innerHTML=". invalid position";
			return false;
		}



		if(user == "")
		{
			document.getElementById('users').innerHTML="Please fill the User Id";
			return false;
		}



		if(pass == "")
		{
			document.getElementById('passwords').innerHTML="Please fill the password";
			return false;
		}
		if ((pass.length <=5) || (pass.length >= 20))
		{
			document.getElementById('passwords').innerHTML="size between 5 to 20";
			return false;

		}

		if(cpass == "")
		{
			document.getElementById('cpasswords').innerHTML="Password does not match";
			return false;
		}
		if ((cpass.length <=5) || (cpass.length >= 20))
		{
			document.getElementById('cpasswords').innerHTML="size between 5 to 20";
			return false;

		}
		if (cpass != pass)
		{
			document.getElementById('cpasswords').innerHTML="Password does not match";
			return false;
		}
	}

</script>

</body>
</html>


<?php
if(isset($_POST['Submit'])) {
$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'website');


$user = $_POST['user'];
$result = mysqli_query($con,"SELECT username FROM signup WHERE username = '$user'");

if(mysqli_num_rows($result) == 0) 
{
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pno = $_POST['pno'];
	$email = $_POST['email'];
	$user = $_POST['user'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	$query = " insert into signup (fname,lname,pno,email,username,password,cpassword) values ('$fname', '$lname', '$pno', '$email', '$user', '$password','$cpassword')";

	mysqli_query($con,$query);
} 

else 
{
	?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Example of Auto Loading Bootstrap Modal on Page Load</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top: 50%;">
            <!-- <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div> -->
            <div class="modal-body">
				<h3 style="text-align: center;">Sorry the USER ID already exist!!!</h3>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php 

}
}
?>