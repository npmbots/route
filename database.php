<?php


session_start();




$con = mysqli_connect("https://demo.phpmyadmin.net");


mysqli_select_db($con, "user");


$name = $_POST["nama"];
$pass = $_POST['pass'];

$s = " select * from tableform where nama = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
 echo "Username Already Taken..    404 !";
	} else {
	$reg = " insert into tableform(name , password) values ('$name' , '$pass')";
	mysqli_query($con, $reg);
echo "Successfully created a User !, you can login it..    Ok!";
	}



?>


<html>
<head>
<title>[•] INFO [•]</title>
</head>
<body>
<br><br><br>

<a href="index.php">

<button type="submit">
 BACK TO GO  HOME
</button>
 </a>
</body>
</html>
