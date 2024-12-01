<?php $page="acc"; 
include('connection.php');
include('checks.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sam Engineering</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">

</head>
<body>
 
<?php include('nav.php'); ?>
  
  <?php 
   $em=$_SESSION['auth_user'];
    
    $qu= "SELECT * FROM requests where email='$em'" ;
    $run = mysqli_query($con, $qu);
    $num=mysqli_num_rows($run);
    if($num > 0)
    {
      ?><table border="2" style="margin:250px 0 70px 550px ;">
      <tr>
        <th>Service Requested</th>
        <th>Description</th>
      </tr>
      <?php
      
      while($row = mysqli_fetch_array($run))
        {
           $service=$row[4];
           $desp=$row[5];
       
        ?>
          <tr>
            <td><?php echo $service; ?></td>
            <td><?php echo $desp; ?></td>
          </tr>
        
        <?php
         }
         ?>
         </table><?php
    }
    else
    {
    ?>
    <p style="margin-top:20%;">NO DATA</p>
    <?php  }
    ?>
<button style="margin:0 700px;background-color:rgb(16, 16, 61);height:50px;width:100px;"><a href="logout.php" name="logout" style="color:white;text-decoration:none;font-weight:bold;">LOGOUT</a> </button> 
 
    </body>
  </html>