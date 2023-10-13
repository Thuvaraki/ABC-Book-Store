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
   <title>home</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
   <?php
      include 'header.php';
   ?>

   <div class="heading">
     <h3>Books in our store</h3>
     <p><a href="home.php">home</a>/shop</p>
   </div>

   <section class="products">
   <h1 class="title">Latest books</h1>

   <div class="box-container">
      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
      <div class="name"><b><?php echo $fetch_product['name']; ?></b></div>
      <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
      <div class="description"><?php echo $fetch_product['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">No products added yet!</p>';
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