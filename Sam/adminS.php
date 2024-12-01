<?php $page='admin'; ?>
<?php
require('connection.php');

session_start();

$username = "admin";
$password = "12345";
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['username'];
    $pass = $_POST['password'];

    if ($name == $username && $pass == $password) {
        $_SESSION['loggedin'] = true;
        echo "<script>alert('success');</script>";
        header('Location:admin.php');
        exit;
    } else {
        $error = "Invalid login credentials.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="signin.css">
</head>
<body>
    <?php include('nav.php'); ?>
    <h2 >Admin Login</h2>
    <form class="sform" action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

