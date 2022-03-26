
<h1>Checkout</h1>
   <form action="" method="post" id="placeOrder">
          <input type="hidden" name="Quantity" value="">
          <input type="hidden" name="Total" value="">
          <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email: " required>
          </div>
          <div class="form-group">
            <input type="text" name="password" class="form-control" placeholder="Password:" required>
          </div>
 
   
          <h4 class="text-center "> Payment </h4>
          <div class="form-group">
            <select name="payment method" class="form-control">
              <option value="" selected >-Select Payment Mode-</option>
              <option value="cod">Cash</option>
              <option value="cards">Visa Card</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Submit" class="btn btn-danger btn-block">
          </div>
        </form>
</html>
</?php
$servername ="localhost";
$username ="root";
$Password ="";
$dbname ="coffeeshop";
$conn =new mysqli($servername,$username,$Password,$dbname);
if(isset($_POST['submit'])){
	$Email=$_POST['email'];
	$Password=$_POST['password'];
	$sql="insert into user(email,password)
	values('$email','$password')";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("Location:home.php");
	}
}
?/>