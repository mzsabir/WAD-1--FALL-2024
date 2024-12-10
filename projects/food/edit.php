<?php
$con=mysqli_connect("localhost","root","","food");
$result=mysqli_query($con,"select * from users where id=".$_GET['id']);
$user=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit Record in Database</h3>
    <form action="index.php" method="POST">
        <lable>Name</lable>
        <input type="text" name="uname" value="<?php echo $user['name']; ?>">
        <input type="hidden" name="edit_id" value="<?php echo $user['id'];?>">
        <input type="submit" value="Update Database">
    </form>
</body>
</html>