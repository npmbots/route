

<html>


<head>
<title>>> Route Lite Server <<</title>

<style>

.registerForm {
 text-align: center;
 background-repeat: no-repeat;
 background-size: 30%;
 background-color: #888;
}

.loginForm {
 text-align: center;
 background-color: #FFFB00;
}

footer {
 color: black;
 background-color: lavender;
 font-size: 19px;
 text-align: center;
 font-family: calibri;
 border: BLUE;
 background-repeat: repeat;
 cursor: pointer;
 
}

h1 {
	border: none;
	border-top: 20px;
	border-bottom: 17px;
}
 h2 {
    border: none;
    border-top: 20px;
    border-bottom: 18px;
    cursor: pointer();
}
</style>

<script>

alert("Welcome User !");

</script>
</head>


<body>






<!-- Register -->



<div class="registerForm">
<br>
<h1 id="h1">REGISTER HERE !</h1>
<hr>
<br>
<form action="register" method="post">

<label>Name :</label>
<input type="text" name="nama" id="nama" required="">
<br>
<label>Password :</label>
<input type="password" name="pass" id="pass" required="">
<br>
<button type="submit">Register</button>
</form>
</div>







<!-- Login -->


<div class="loginForm">
<br>
<h2 id="h2">Login Here !</h2>
<hr>
<br>

<form action="validation" method="post">

<label>Name :</label>
<input type="text" name="nama" required="">
<br>
<label>Password :</label>
<input type="password" name="pass">
<br>
<button type="submit">Login</button>
</form>
</div>
<hr>

<br><br>





</body>



</html>
