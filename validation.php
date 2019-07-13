<?php


session_start();



$con = mysqli_connect("https://demo.phpmyadmin.net");


mysqli_select_db($con, "user");


$name = $_POST["nama"];
$pass = $_POST['pass'];

$s = " select * from tableform where nama = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
	$_SESSION['username'] = $name;
	header('location:home');
	} else {
		header('location:index.php');
		}



?>
