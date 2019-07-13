<?php

session_start();

if (!isset($_SESSION['username'])){
	 header('location:index.php');
	};



	

?>

<html>


<head>
<title> Home Page </title>
<style>

.position {
 text-align: center;
 background-color: #222;
}

</style>
</head>
<body>
<div class="position">
<br><br>
<a href="logout.php"> 
<button type="submit">
LOGOUT
</button>
 </a>
<br><br>
</div>
<br><br>
<h1>Welcome <font color="#666"><?php echo $_SESSION['username']?></font></h1>
<br><br>


</body>



</html>