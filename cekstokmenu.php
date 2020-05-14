<?php
require 'conn.php';
session_start();
$username=$_SESSION['loginKaryawan']['username'];
$jumlah=$_POST['jumlahBarang'];
$nama=$_POST['namabarang1'];
$sql="SELECT * from barang where username='$username' and nama_barang='$nama'";
$res=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($res)) {
	if ($row['stok'] < $jumlah) {
        echo 0;
    }else echo 1;
}
?>