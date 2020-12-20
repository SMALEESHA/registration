<html>
<head>
	<title>sign up</title>
	<body>
		<h2>register here!!!!!!</h2>
		<form action="registration.php">
			name:
			<input type="text" name="name"><br>
			password:
	<input type="password" name="password"><br>
	emil id:
	<input type="text" name="email"><br>

	<input type="submit" name="signup" value="signup">
	</form>
	</body>
	</head>






<?php
$dbhost='localhost';
$usename='root';
$password='';
$db='registration';

mysqli_connect("$dbhost","$usename","$password","$db");



if(isset($_POST['signup']))
{
	 echo $name=$_POST['name']; //use the same name for the bracket as name in html code
	 echo $password=$_POST['password'];
	echo  $email=$_POST['email'];

	 $query="insert into registration (name,password,email) values ('$name','$password','$email')";//registration means table name not database name
	 if(mysqli_query($query)){
	 	echo "you have registered succesfully!!!!";
	 }
}


?>