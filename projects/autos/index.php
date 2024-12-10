<?php
$conn=mysqli_connect("localhost","root","","autos");
$result=mysqli_query($conn,"select * from cars");
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $res=mysqli_query($conn,"select * from cars where id=".$id);
    $car=mysqli_fetch_array($res);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Select your Car for Booking</h1>
    <a href="add_car.php">Add New Car</a>
    <ul>
        <?php while($row=mysqli_fetch_array($result))
        {
            ?>
            <li><a href="index.php?id=<?php echo $row['id']?>"><?php echo $row['name'];?></a></li>
            <?php
        }
        ?>
    </ul>
    
    <h2><?php echo $car['name']?></h2>
    <p>Model: <?php echo $car['model']?></p>
    <p><?php echo $car['detail']?></p>
</body>
</html>