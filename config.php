<?php
   $server = 'localhost';
   $user = 'root';
   $password = '';
   $database_name = 'abc_db';

   $conn= mysqli_connect($server,$user, $password, $database_name);

   if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
}
?>