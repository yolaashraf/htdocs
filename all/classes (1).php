<?php
//by default signup usertype beyb2a client
$conn = mysqli_connect("localhost", "root", "", "coffeeshop");
class customer{
	public $email;
	public $passWord;

	function __construct($id){
		if($id != ""){
			$sql="select * from customer where id=$id";
			$cust = mysqli_query($_GLOBALS['con'], $sql);
			if($row = mysqli_fetch_array($cust)){
				$this->email=$row["email"];
				$this->passWord=$row["password"];
				$this->ID=$row["ID"];
			}
		}
	}
	static function InsertinDB_Static($UN,$PW){
		$sql = "insert into customer(email, password) values ('$UN', '$PW')";
		if(mysqli_query($GLOBALS['conn'], $sql))
			return true;
		else
			return false;
	}

	static function FetchfromDB_Static($UN,$PW){
		$sql="select * from customer where email='".$_POST['email']."' AND password='".$_POST['password'];
		$result=$conn->query($sql);

		if($result->num_rows>0){
			$row=$result->fetch_assoc();
			$_SESSION['email']=$row['email'];
			$_SESSION['password']=$row['password'];
	}
	}
}