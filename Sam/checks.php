<?php
include('connection.php');
session_start();
$em="";
if(isset($_POST['signin']))
{
    $email = mysqli_real_escape_string($con, $_POST['semail']);
    $password = mysqli_real_escape_string($con, $_POST['spwd']);
    $_SESSION['auth_user'] = $email;
    if($email=="admin@gmail.com")
    { header("Location: admin.php");
    }
    else
    {
    $query = "SELECT * FROM user where email='$email' and password='$password' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        $row = mysqli_fetch_array($query_run);

        // Authenticating Logged In User
        $_SESSION['authentication'] = true;

        // Storing Authenticated User data in Session
        

        $_SESSION['message'] = "You are Logged In Successfully"; //message to show
        header("Location: home.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Invalid Email or Password"; //message to show
        header("Location: signin.php");
        exit(0);
    }
    }
    
}
?>