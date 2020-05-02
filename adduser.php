<?php
require 'conn.php';
$$user=$_POST['user'];
$pass=$_POST['pass'];
$nama=$_POST['fullname'];
$company=$_POST['company'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pass=password_hash($pass,PASSWORD_DEFAULT);
$queryinsert="INSERT into users values ('$user','$pass','$company','$nama','$email','$phone')";
$execute=mysqli_query($conn,$queryinsert);