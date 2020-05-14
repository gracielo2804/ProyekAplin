<?php
require 'conn.php';
session_start();
$nama=$_POST['namabarang'];
$username=$_SESSION['loginKaryawan']['username'];
$arr=[];
$sql="SELECT * from barang where username='$username' and nama_barang='$nama'";
$res=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($res)) {
	$arr[]=$row['nama_barang'];
	$arr[]=$row['stok'];
	$arr[]=$row['satuan'];
	$arr[]=$row['batas_bawah'];
	echo json_encode($arr);
}
?>			