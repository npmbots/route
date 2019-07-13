<?php


session_start();



$con = mysqli_connect("localhost","root","");


mysqli_select_db($con, "user");


$name = $_POST["nama"];
$pass = $_POST['pass'];

$s = " select * from tableform where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
	$_SESSION['username'] = $name;
	header('location:homepage.php');
	} else {
		header('location:index.php');
		}



?>