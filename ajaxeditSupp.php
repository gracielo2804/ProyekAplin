<?php
require 'conn.php';
session_start();
$username=$_SESSION['login']['username'];
$nama=$_POST['namasup1'];
$alamat=$_POST['alamat1'];
$telp=$_POST['telp1'];
$keterangan=$_POST['ketsup1'];
$queryinsert="UPDATE supplier set alamat='$alamat',no_telp='$telp',keterangan='$keterangan' where nama_supplier='$nama' and username='$username'";
$execute=mysqli_query($conn,$queryinsert);
echo $jumlah;
?>