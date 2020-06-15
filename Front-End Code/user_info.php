<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'website');


$user = $_POST['user'];
$password = $_POST['pass'];

$result = mysqli_query($con,"SELECT user FROM signup WHERE user = '$user'");
$result1 = mysqli_query($con,"SELECT password FROM signup WHERE password = '$pass'");

if(mysqli_num_rows($result) == 0 and mysqli_num_rows($result1) == 0) 
{
    
} 

else 
{

}

?>