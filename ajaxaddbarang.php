<?php
require 'conn.php';
session_start();
$username=$_SESSION['login']['username'];
$nama=$_POST['namabarang'];
$jumlah=$_POST['jumlahbarang'];
$satuan=$_POST['satbarang'];
$batas=$_POST['batasb'];
$harga=$_POST['hargabarang'];
$queryinsert="INSERT into barang values ('$nama','$jumlah','$satuan','$batas','$username','$harga')";
$execute=mysqli_query($conn,$queryinsert);
if($execute)echo '1';
else echo '0';
?>