<?php $page="signin"; ?>
<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sam Engineering</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="signin.css">
</head>
<body> 
  <?php include 'nav.php' ?>
  <div class="l"><h1>Sign in</h1></div>
  <form class="sform" method="POST" action="checks.php">
    <div class="inform">
    <label >Email id:</label>
    <input type="email" name="semail"></div>
    <div class="inform">
      <label>Password:</label>
    <input type="password" name="spwd"></div>

    <div class="inform">
      <br>
	  <button type="submit"  name="signin" value="signin">Sign In</button>
    </div>
  </form>
  <div class="inform">
   <br><br> <p style="margin-top:250px;">New here ?
   <button class="open-button" onclick="openForm()">Register</button></p>
  </div>


   <div class="form-popup" id="myForm">
  <form action="#" class="form-container" method="POST">
  <div class="l"><h1>Register</h1></div>
	<p>Full Name
	<input type="text" palceholder="Full Name" name="name" required maxlength="50" minlength="2">
	</p>
	<p>Age
	<input type="number" palceholder="Age" name="age" required max="100" min="18">
	</p>
	<p>Address
	<textarea palceholder="Address" name="address" required ></textarea>
	</p>
	<p>Phone
	<input type="text" palceholder="Enter valid phone nymber" name="phone" required pattern="[0-9]{10}" minlength="10" maxlength="10">
	</p>
    <p>Email id:
    <input type="email" name="email" palceholder="Enter valid email id" required >
    </p>
    <p>Password:
    <input type="password" name="pwd" required>
    </p>
	<br>
	<button type="submit"  name="save" value="save">Save</button>
  <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
	
	
	<?php					 						 
if(isset($_POST['save']))
{
	
		$name=$_POST['name'];
		$age=$_POST['age'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
        $pwd=$_POST['pwd'];	
	$query ="INSERT INTO `user`(`name`, `age`, `address`, `phone`,`email`,`password`) VALUES ('".$name."','".$age."','".$address."','".$phone."','".$email."','".$pwd."')";
						   
	mysqli_query($con, $query);
	echo "<script>
			alert('Saved Successfully');
		</script>";
	echo "<script> location.href=''; </script>";
}
	?>
<script>
  function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html> 