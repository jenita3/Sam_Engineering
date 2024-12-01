<?php $page="admin"; ?>
<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sam Engineering</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">
<style>
	body{
    background-color:rgb(16, 16, 61);
}

.display{
    position: absolute;
    top:200px;
    left:400px;
    line-height: 50px;
    width:50%;
    text-align: center;
	background-color: white;
}

button{
	margin:450px 0 0 740px;
	background-color:white;
	height:50px;
	width:100px;
}
h1{
	margin-top: 50px;
	color: white;
	text-align: center;
}
</style>
</head>
<body>
	<div class="cl">
		<br>
	</div>
  <div >
	<h1>CUSTOMER REQUESTS</h1>
	<table border=2 class="display">
		<tr style="color:darkblue;">
			<th>Name</th>
			<th>Age</th>
			<th>Email</th>
			<th>Service</th>
            <th>Description</th>
		</tr>
		<?php
		$sql = "SELECT * from requests";
		$result = mysqli_query($con,$sql);
		$num=mysqlI_num_rows($result);

		if($num > 0)
		{ 
		while($row = mysqli_fetch_array($result))
		{ 
			$id=$row[0];
			$name=$row[1];
			$age=$row[2];
			$email=$row[3];
			$service=$row[4];
            $des=$row[5];
		?>
                                    <tr>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $age; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $service; ?></td>
                                        <td><?php echo $des; ?></td>
                                    </tr>
									<?php
		}
		}
									?>
                            </table>
	</div>
	<div>					
<button><a href="logout.php" name="logout" style="color:rgb(16,16,61);text-decoration:none;font-weight:bold;">LOGOUT</a> </button> 
</div>
  </body>
  </html>
