<?php
   if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message">
           <span>'.$message.'</span>
           <i class="fas fa-times" onclick="this.parentElement.remove()"></i>
        </div>
         ';
    }
   }
?>

<header class="header">
    
    <div class="header-1">
        <div class="flex">
        <div class="share">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-twitter"></a>
        </div>
        <p>new <a href="login.php">login</a> | new <a href="register.php">register</a></p>
    </div>
    </div>  

    <div class="header-2">
    <div class="flex">
        <a href="home.php" class="logo">ABC Book Store</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="shop.php">Shop</a>
        </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="search_page.php" class="fas fa-search"></a>
        <div id="user-btn" class="fas fa-user"></div>
    </div>

    <div class="user-box">
        <p>username: <span><?php echo $_SESSION['user_name'];?></span></p>
        <p>email: <span><?php echo $_SESSION['user_email'];?></span></p>
        <p>phone number: <span><?php echo $_SESSION['user_number'];?></span></p>
        <a href="logout.php" class="delete-btn">logout</a>
       </div>  
    </div>
    </div>

</header>
