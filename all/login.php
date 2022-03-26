<?php
include_once "classes.php";
if(isset($_POST['submit'])){  //to check if form was submitted
	$email=$_POST['email'];
	$password=$_POST['password'];

	if(customer::FetchfromDB_Static($email,$password))  //a static function to insert instead of adding lines of inserting using sql
		header("Location:index.php");
	else
		echo "Error";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<h1>Login</h1>

<form method="post">
	Email:<br>
	<input type="text" name="email"><br>
	Password:<br>
	<input type="text" name="password"><br>
	<input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit']))
	header('location:index.php');
else
	echo "Error";

?>
</body>
</html>