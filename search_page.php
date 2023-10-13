<?php
   include 'config.php';
   session_start();

   $user_id= $_SESSION['user_id'];

   if(!isset($user_id)){
    header('location:login.php');
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
   <?php
      include 'header.php';
   ?>
   
   <div class="heading">
      <h3>search page</h3>
      <p><a href="home.php">home</a>/search</p>
   </div>
   
   <section class="search-form">
     <form action="" method="post">
      <input type="text" name="search" placeholder="search products..." class="box">
      <input type="submit" name="submit" value="search" class="btn">
     </form>
   </section>

   <section class="products">
      <div class="box-container">
     <?php
      if(isset($_POST['submit'])){
         $search_item = $_POST['search'];
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE name LIKE '%{$search_item}%'") 
         or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
     ?>
     <form action="" method="post" class="box">
      <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="" class="image">
      <div class="name"><b><?php echo $fetch_product['name']; ?></b></div>
      <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
      <div class="description"><?php echo $fetch_product['description']; ?></div>
     </form>
     <?php
            }
         }else{
            echo '<p class="empty">no result found!</p>';
         }
      }else{
         echo '<p class="empty">search something!</p>';
      }
      ?>
   </div>
  </section>

   <?php
      include 'footer.php';
   ?>

    <script src="js/script.js"></script>
</body>
</html>