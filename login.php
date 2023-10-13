<?php
  include 'config.php';
  session_start();

  if(isset($_POST['submit'])){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);

    $select_users = mysqli_query($conn,"SELECT * FROM `users` where email='$email' and password='$password'") or die('query failed');

    if(mysqli_num_rows($select_users) >0){
       $row = mysqli_fetch_assoc($select_users);

       if ($row['user_type'] == 'Super_Admin' || $row['user_type'] == 'Admin') {
        $_SESSION['admin_name'] = $row['name'];
        $_SESSION['admin_email'] = $row['email'];
        $_SESSION['admin_id'] = $row['id'];
        $_SESSION['admin_number'] = $row['number'];
        $_SESSION['user_type'] = $row['user_type'];
        header('location: admin_page.php');
        }
      elseif ($row['user_type'] == 'User') {
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_number'] = $row['number'];
        $_SESSION['user_type'] = $row['user_type'];
        header('location: home.php');
       } 
      else {
        $message[] = 'Incorrect email or password!';
       }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>

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

<div class="form-container">
        <form action="" method="post">
            <h3>login now!</h3>
            <input type="email" name="email"  placeholder="Enter your email" required class="box">
            <input type="password" name="password"  placeholder="Enter your password" required class="box">
            <input type="submit" name="submit" value="login now" class="btn">
            <p>Don't have an account? <a href="register.php">Register now</a></p>
        </form>
    </div>
</body>
</html>