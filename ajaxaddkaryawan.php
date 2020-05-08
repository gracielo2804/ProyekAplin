<?php
require 'conn.php';
session_start();
$username=$_SESSION['login']['username'];
$nama=$_POST['fullname'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$date=(new DateTime())->format('d-m-Y');
$passhashed=password_hash($pass,PASSWORD_DEFAULT);
$queryinsert="INSERT into karyawan values ('$user','$nama','$alamat','$telp','$date','$username','$passhashed','1')";
$execute=mysqli_query($conn,$queryinsert);
if($execute)echo '1';
else echo (mysqli_error($conn));
?>