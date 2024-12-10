<?php
$con=mysqli_connect("localhost","root","","food");
/* Insert */
if(isset($_POST['uname']))
{
    $uname=$_POST['uname'];
    $r=mysqli_query($con,"INSERT INTO `users`(`name`, `email`, `password`, `city`) VALUES ('".$uname."','email@gmail.com','1234','Rawalpindi')");
}
/* edit */
if(isset($_POST['edit_id']))
{
    $uname=$_POST['uname'];
    $r=mysqli_query($con,"update `users` set name='".$uname."' where id=".$_POST['edit_id']);
}
/* Delete */
if(isset($_GET['id']))
{
    $r=mysqli_query($con,"DELETE from users where id=".$_GET['id']);
}



$result=mysqli_query($con,"select * from users");
$no=mysqli_num_rows($result);
echo "Number of Rows: ".$no;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Data from MySQL Database</h3>
    <form action="index.php" method="POST">
        <lable>Name</lable>
        <input type="text" name="uname">
        <input type="submit" value="Add to Database">
    </form>
    <?php
    if($no>0)
    {
        ?>
        <table border="1" cellpadding="10">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Actions</th>
            </tr>
        <?php
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['city']."</td>";
            echo "<td><a href='index.php?id=".$row['id']."'>Delete</a></td>";
            echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a></td>";
            echo "</tr>";
        }
        ?>
        </table>
        <?php
    }else
        echo "<p>No User Exist in Database. </p>";
    ?>
</body>
</html>