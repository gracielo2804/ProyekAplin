<?php
require 'conn.php';
session_start();
$username=$_SESSION['login']['username'];
$nama=$_POST['namabarang1'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$keterangan=$_POST['ketsup'];
$queryinsert="INSERT into supplier values ('$nama','$alamat','$telp','$username','$keterangan')";
$execute=mysqli_query($conn,$queryinsert);
if($execute)echo '1';
else echo '0';
?>