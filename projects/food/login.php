<?php
session_start();
include("includes/connection.php");
if(isset($_POST['email']))
{
    //print_r($_POST);
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $u=mysqli_query($conn,"select * from users where email='$email' and password='$pass'");
   
    if(mysqli_num_rows($u)>0)
    {
        $user=mysqli_fetch_array($u);
        $_SESSION['username']=$user['name'];
        $_SESSION['role']=$user['role'];
        header("location:index.php");
    }else
    {
        echo "Invalid Username & Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Oleo+Script+Swash+Caps:wght@400;700&family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email"  placeholder="Enter your Email">
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" name="password" placeholder="Enter your password">
            </div>
            <div  class="btn-con">
            <input type="submit" class="btn btn-login" value="Login" >
                    </div>
            <p class="acc">Don't have an account? <a href="Register.html">Register here</a></p>

        </form>
    </div>
</body>
</html>
