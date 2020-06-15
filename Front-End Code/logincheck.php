<?php
session_start();
include_once("config.php");

if(isset($_POST['Submit']))
{
	$user = $_POST['user'];
	$pass = $_POST['password'];

	$sql = "select * from signup where username = '$user' and password = '$pass'";

	$query = mysqli_query($link,$sql);

	$row = mysqli_num_rows($query);

	if($row == 1)
	{
		$_SESSION['user'] = $user;
		header('location:home.php');
	}
	else
	{
		header('location:login.php');
	}
}
?>