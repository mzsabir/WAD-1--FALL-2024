<?php
session_start(); 
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
    <?php include('includes/header.php');
   
    ?>
    <section id="home">
        <h1 class="h-primary">Welcome To FoodHarmony </h1>
        <?php 
         if(isset($_GET['success']))
         echo "<p style='color:green'>User has been Registered.</p>";
        ?>
        <p>Craving something delicious? At FoodHarmony, we bring the best local flavors directly to you!
            Browse our extensive menu and enjoy a seamless ordering experience that transforms your meal times into
            delightful moments</p>
        <button class="btn">Order Now</button>
    </section>
    <section class="services-container"></section>
    <h1 id="food-items" class="h-primary center">Food Items</h1>
    <div id="services">
        <div class="box">
            <img src="images/pizza1.png" alt="Pizza">
            <h2 class="h-secondary center">Delicious Pizzas</h2>
            <p class="center">Indulge in our mouthwatering pizzas crafted
                with the freshest ingredients, rich flavors, and love baked into every slice..</p>
            <button class="bton">Order Now</button>
        </div>
        <div class="box">
            <img src="images/sandwich.png" alt="sandwich">
            <h2 class="h-secondary center">Loaded Sandwiches</h2>
            <p class="center">Bite into our loaded sandwiches,
                where each layer is packed with mouthwatering ingredients that satisfy every craving.</p>
            <button class="bton">Order Now</button>
        </div>
        <div class="box">
            <img src="images/burgor.png" alt="burgers">
            <h2 class="h-secondary center">Cheese Burgers</h2>
            <p class="center">Dive into our mouthwatering cheeseburgers,
                loaded with cheese and juicy patties that create the ultimate indulgence in every bite.</p>
            <button class="bton">Order Now</button>
        </div>
    </div>


</body>

</html>