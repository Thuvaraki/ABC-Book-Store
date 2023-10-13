<?php
   include 'config.php';
   session_start();

   $admin_id= $_SESSION['admin_id'];
   echo $admin_id;
   $user_type= $_SESSION['user_type'];

   if(!isset($admin_id)){
    header('location:login.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
    <link rel="stylesheet" href="css/admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <?php
    include 'admin_header.php';
    ?>
    
         <section class="dashboard">
            <h1 class="title">dashboard</h1>
                 <div class="box-container">

                      <div class="box">
                         <?php
                           $select_products = mysqli_query($conn,"SELECT *FROM `PRODUCTS`") or die('query failed');
                           $number_of_products = mysqli_num_rows($select_products);
                         ?>
                         <h3><?php echo $number_of_products;?></h3>
                         <p>products added</p>
                      </div>

                      <div class="box">
                         <?php
                           $select_users = mysqli_query($conn,"SELECT *FROM `USERS` where user_type='User'") or die('query failed');
                           $number_of_users = mysqli_num_rows($select_users);
                         ?>
                         <h3><?php echo $number_of_users;?></h3>
                         <p>normal users</p>
                      </div>

                      <div class="box">
                         <?php
                           $select_admins = mysqli_query($conn,"SELECT *FROM `USERS` where user_type='Admin'") or die('query failed');
                           $number_of_admins = mysqli_num_rows($select_admins);
                         ?>
                         <h3><?php echo $number_of_admins;?></h3>
                         <p>admin users</p>
                      </div>

                      <div class="box">
                         <?php
                           $select_admins = mysqli_query($conn,"SELECT *FROM `USERS` where user_type='Super_Admin'") or die('query failed');
                           $number_of_super_admins = mysqli_num_rows($select_admins);
                         ?>
                         <h3><?php echo $number_of_super_admins;?></h3>
                         <p>super admin users</p>
                      </div>

                      <div class="box">
                         <?php
                           $select_account = mysqli_query($conn,"SELECT *FROM `USERS`") or die('query failed');
                           $number_of_account = mysqli_num_rows($select_account);
                         ?>
                         <h3><?php echo $number_of_account;?></h3>
                         <p>total accounts</p>
                      </div>
                 </div>
         </section>

    <?php
      if ($user_type == 'Super_Admin') {
         echo '<div class="add-admin">
            <a href="superAdmin_register.php">Add an Admin</a>
          </div>';
       }
     ?>

    <script src="js/admin_script.js"></script>
</body>
</html>