<?php
include_once "classes.php";
if(isset($_POST['submit'])){  //to check if form was submitted
	$email=$_POST['email'];
	$password=$_POST['password'];

	if(customer::InsertinDB_Static($email, $password))  //a static function to insert instead of adding lines of inserting using sql
		header("Location:index.php");
	else
		echo "Error";
}
?>
<h1> Signup </h1>
<form action="" method="post">
	email: <input type="text" name="email"> <br>
	password: <input type="password" name="password"> <br>
	<input type="submit" name="submit">
</form>
