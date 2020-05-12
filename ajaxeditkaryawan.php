<?php
require 'conn.php';
session_start();
$username=$_SESSION['login']['username'];
$user=$_POST['user1'];
$pass=$_POST['pass1'];
$alamat=$_POST['alamat1'];
$telp=$_POST['telp1'];
$passhashed=password_hash($pass,PASSWORD_DEFAULT);
$queryinsert="UPDATE karyawan set password='$passhashed',no_telp='$telp',alamat='$alamat' where username_karyawan='$user' and username='$username'";
$execute=mysqli_query($conn,$queryinsert);
echo $jumlah;
?>