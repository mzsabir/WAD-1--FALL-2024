<header>
    <nav id="navbar">
        <div id="logo">
            <img src="images/logo3.png" alt="Online Food Ordering Website">
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="#food-items">Food Items</a></li>

            <li class="item"><a href="aboutus.html">About Us</a></li>
            <?php 
            if(!isset($_SESSION['username']))
            {
            ?>
            <li class="item"><a href="login.php">Login</a></li>
            <li class="item"><a href="register.php">Register</a></li>
            <?php }else
            {
                echo "<li style='color:white; margin-top:3px;'>(".$_SESSION['username'].")</li>";
                echo "<li> <a href='logout.php'>Logout</a></li>";
            } 
            
            if(isset($_SESSION['role']) && $_SESSION['role']=="admin")
            {
                echo '<li class="item"><a href="add-food.php">ADD FOOD</a></li>';
            }
            ?>
            
        </ul>
    </nav>
</header>