<?php
require 'conn.php';
session_start();
$username=$_SESSION['login']['username'];
$user=$_POST['username'];
$queryinsert="UPDATE karyawan set status='0'where username_karyawan='$user' and username='$username'";
$execute=mysqli_query($conn,$queryinsert);
?>