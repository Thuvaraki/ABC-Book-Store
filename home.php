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

   <section class="home">
      <div class="content">
           <h3>Welcome to ABC Book Store - Your Literary Paradise!</h3>
           <p>Discover a world of stories, knowledge, and imagination at our store, your premier destination for books of all genres. Whether you're an avid reader, a casual bookworm, or a literary explorer, our online bookstore offers a vast collection that caters to all tastes.</p>
           <a href="#" class="white-btn">Discover more</a>
      </div>
   </section>  

   <section class="products">
   <h1 class="title">New Books</h1>
   <div class="box-container">
      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
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
   <div class="load-more" style="margin-top: 2rem; text-align:center; margin-bottom:2rem">
      <a href="shop.php" class="option-btn">load more</a>
   </div>
</section>

  <?php
      include 'footer.php';
   ?>

   <script src="js/script.js"></script>
</body>
</html>