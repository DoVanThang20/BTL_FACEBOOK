<?php
//1.kết nối tới database server
    $server='localhost';
    $username='root';
    $password='';
    $dbname = "user_registration";
    $conn=mysqli_connect($server,$username,$password,$dbname);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>