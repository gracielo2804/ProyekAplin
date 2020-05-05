<?php
require 'conn.php';
session_start();
$username=$_SESSION['login']['username'];
$nama=$_POST['namabarang1'];
$jumlah=$_POST['jumlahbarang1'];
$satuan=$_POST['satbarang1'];
$batas=$_POST['batasb1'];
$queryinsert="UPDATE barang set stok='$jumlah',satuan='$satuan',batas_bawah='$batas' where nama_barang='$nama' and username='$username'";
$execute=mysqli_query($conn,$queryinsert);
echo $jumlah;
?>