<?php $page="contact"; ?>
<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sam Engineering</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">
<style>
 body{
    background-image: url(signbg.png) ;
    background-size: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
}

h1{
    font-size:30px;
    color:rgb(22, 22, 66);
    margin-left: 20%;
    padding-bottom: 20px;
}

.cform{
    position: absolute;
    top:20%;
    left:31%;
    border: 3px solid rgb(25, 32, 73);
    padding: 40px;
    border-radius: 5%;
}
 

.info{
    display: block;
    padding: 10px;
    text-align: center;
}

button{
    background-color: rgb(29, 29, 81);
    color:white;
    border: 2px solid rgb(25, 25, 89);
    padding: 10px;
}

button:hover{
   
    background-color: rgb(227, 227, 232);
    color:rgb(17, 17, 66);
}
</style>

</head>
<body>
  <?php include('nav.php'); ?>
  <div class="cform"><h1>Request A Quote</h1>
  <form  method="POST" action="#">
    <div class="info" >
    <label>Name:</label>
    <input type="text" name="uname" required></div>
    <div class="info" >
    <label>Age:</label>
    <input type="number" name="age" required></div>
    <div class="info" >
    <label >Email id:</label>
    <input type="email" name="uemail" required></div>
    <div class="info" >
    <label >Service :</label> 
    <select name="serv">
        <option name="roof">Roofing</option>
        <option name="gate">Gates</option>
        <option name="mflr">Mezannine Floor</option>
        <option name="rail">Railing</option>
    </select></div>
    <div class="info" >
    <label>Description:</label>
    <textarea rows="10" cols="50" name="desc" required></textarea></div>

      <br>
      <div class="info">
	  <button type="submit"  name="submit" value="submit">Submit</button>
      </div>
      </div>
  </form>

	
	<?php					 						 
if(isset($_POST['submit']))
{
	
		$name=$_POST['uname'];
		$age=$_POST['age'];
    $email=$_POST['uemail'];
		$service=$_POST['serv'];
    $des=$_POST['desc'];
	$query ="INSERT INTO `requests`(`name`, `age`,`email`,`service`,`description`) VALUES ('".$name."','".$age."','".$email."','".$service."','".$des."')";
						   
	mysqli_query($con, $query);
	echo "<script>
			alert('Saved Successfully');
		</script>";
	echo "<script> location.href=''; </script>";
}
	?>

</body>
</html>