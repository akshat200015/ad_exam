<html lang="en">
<head>
</head>
<body>

<center><br>
<?php
	if(isset($_POST["register-btn"])){
require("connection.php");

$name=$_POST["name"];
$contact=$_POST["contact"];
$fruit=$_POST["fruit"];


$sql = "INSERT INTO select_fruit(name, contact,fruits) values ('$name', '$contact', 'fruit')";

if (mysqli_query($conn,$sql)){
	echo "ORDER SUCCESSFULLY REGISTERED";

}
else{
	echo "Error: ".$sql."<br>".mysqli_error($conn);	
}

mysqli_close($conn);
}
?>
</center>

<div class="auth-content">

	<form action="selection.php" method="post">
	<h2 class="form-title"> Select the Fruit</h2>



	<br>
	<div>
	<label>Name</label>
	<input type="text" name="name" class="text-input"><br>
	<lable>Contact</lable>
	<input type="contact" name="contact" class="text-input">
	</div>
	<div>
	<label>Fruits</label>
	<select name="fruits" id=>
	<option value="apple">apple</option>
	<option value="banana">banana</option>
	<option value="orange">orange</option>
	<option value="kiwi">kiwi</option>
	</select>
	<br>
	<br>
	</div>
	<div>
	<button type="submit" name="register-btm" class="btn btn-big">Submit</button>
	</div>
	</form>
	</body>
</html>
	
	








