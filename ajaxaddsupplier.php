<?php
require 'conn.php';
session_start();
$username=$_SESSION['user'];
$nama=$_POST['namasup'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$queryinsert="INSERT into supplier values ('$nama','$alamat','$telp','$username')";
$execute=mysqli_query($conn,$queryinsert);
if($execute)echo '1';
else echo '0';
?>