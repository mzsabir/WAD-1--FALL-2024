<?php
include("includes/connection.php");
if(isset($_POST['uname']))
{
    //print_r($_POST);
    $name=$_POST['uname'];
    $email=$_POST['email'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $city=$_POST['city'];
    if($pass1!=$pass2)
    {
        echo "Password does not match";
    }else
    {
        $r=mysqli_query($conn,"insert into users (name,email,password,city) values('$name','$email','$pass1','$city')");
        if($r)
        {
            header("location:index.php?success");
        }
            
        else
            $error="Error While registration process";
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/regstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Oleo+Script+Swash+Caps:wght@400;700&family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <script>

        function validateForm(event) {
            event.preventDefault();
            const username = document.querySelector('input[type="text"]').value;
            const password = document.querySelector('input[type="password"]').value;
            const usernameRegex = /^[A-Za-z_-]+$/;
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*-])[A-Za-z\d!@#$%^&*-]{8,}$/;
            if (!usernameRegex.test(username)) {
                alert("Username can only contain letters, underscores (_) and dashes (-). No numbers or special characters allowed.");
                return;
            }
            if (!passwordRegex.test(password)) {
                alert("Password should be minimum 8 characters, and must contains atleast one Capital Letter, small letter, special charactors and numbers");
                return;
            }
            alert("Form submitted successfully!");
            document.querySelector('form').submit();
        }
    </script>
</head>

<body>
    <div class="form-container">
        <h2>Register</h2>
        <?php
        if(isset($success))
            echo "<p style='color:green'>'.$success.'</p>";
        if(isset($error))
            echo "<p style='color:red'>'.$error.'</p>";
        ?>
        <form action="register.php" method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" placeholder="Enter name here" name="uname" >
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email" >
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass1" placeholder="Create a password" >
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="pass2" placeholder="Retype a password" >
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" name="city" placeholder="Enter your City" >
            </div>
            <div class="btn-con">
                <button type="submit" class="btn btn-register">Register</button>
            </div>
            <p class="reg">Already have an account? <a href="login.html">Login here</a></p>
        </form>
    </div>
</body>

</html>