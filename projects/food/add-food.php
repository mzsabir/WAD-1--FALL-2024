<?php
session_start(); 
$error="";
include('includes/connection.php');
if(!(isset($_SESSION['role']) && $_SESSION['role']=="admin"))
    header("location:login.php");

if(isset($_POST['fname']))
{
    //print_r($_POST);
    //print_r($_FILES);
    $fname=$_POST['fname'];
    $category=$_POST['category'];
    $detail=$_POST['detail'];
    $price=$_POST['fprice'];

    $new_name="";
    if($_FILES['fpic']['name']!="")
    {
        $name=$_FILES['fpic']['name'];
        $upload_error=$_FILES['fpic']['error'];
        $tmp_name=$_FILES['fpic']['tmp_name'];
        $type=$_FILES['fpic']['type'];
        if($upload_error === UPLOAD_ERR_OK)
        {   
            $pos=strpos($name,".");
            $ext=strtolower(substr($name,$pos));
            if(!($ext=='.jpg' || $ext==".png")) /* Extension Check */
            {
                $error="Error : File must be JPG or PNG";
            }
            else
            {
                $new_name=date("dmyhms").$ext;
                if(move_uploaded_file($tmp_name, "images/".$new_name))
                {			
                    $succes="Congrates : Estimate Uploaded Scussfully";	
                }
            }
        }
        else
        {
            $error="Error : Unable to upload File";
        }

    if($new_name!="")
    {
        $result=mysqli_query($conn,"INSERT INTO `foods`(`name`, `picture`, `category_id`, `price`) VALUES ('$fname','$new_name','$category','$price')");
        if($result)
        {
            header('location:index.php');
        }else{
            $error='Unable to Add to database';
            @unlink("images/".$new_name);
        }
        
    }
}


}

$res=mysqli_query($conn,"select * from categories");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Ordering App</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 970px)" href="phone.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Oleo+Script+Swash+Caps:wght@400;700&family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
</head>
<body>
    <?php include("includes/header.php"); ?>
    <main style="margin:0 auto; ">
        <h1>Add New Food Item</h1>
        <?php
        if(isset($error) && $error!="")
        {
            echo '<p style="background:yellow; padding:5px;">'.$error.'</p>';
        }
        ?>
        <form action="add-food.php" method="post" enctype="multipart/form-data">
            <div>
                <label>Food Name</label>
                <input type="text" name="fname">
            </div>
            <div>
                <label>Food Pictreu</label>
                <input type="file" name="fpic">
            </div>
            <div>
                <label>Food Price</label>
                <input type="number" name="fprice">
            </div>
            <div>
                <label>Category</label>
                <select name="category">
                <?php
                while($row=mysqli_fetch_array($res))
                {
                    echo '<option value='.$row['id'].'>'.$row['type'].'</option>';
                }
               
                ?>
                 </select>
            </div>
            <div>
                <label>Food Detail</label>
                <textarea cols="30" rows="6" name="fdetail"></textarea>
            </div>
            <input type="submit" value="Add New Item">

        </form>
    </main>
    <?php include("includes/footer.php"); ?>
</body>
</html>