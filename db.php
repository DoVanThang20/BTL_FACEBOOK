<?php
//1.kết nối tới database server
    $server='localhost';
    $username='root';
    $password='';
    $dbname = "facebook";
    $conn=mysqli_connect($server,$username,$password,$dbname);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_connect_error());
        }
?>
