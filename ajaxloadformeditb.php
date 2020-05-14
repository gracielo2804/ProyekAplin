<?php
require 'conn.php';
session_start();
$nama=$_POST['namabarang'];
$username=$_SESSION['login']['username'];
$arr=[];
$sql="SELECT * from barang where username='$username' and nama_barang='$nama'";
$res=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($res)) {
	$arr[]=$row['nama_barang'];
	$arr[]=$row['stok'];
	$arr[]=$row['satuan'];
	$arr[]=$row['batas_bawah'];
	// echo "
	// 	$('#fullname1').val('".$row['nama_karyawan']."');
	// 	$('#user1').val('".$row['username_karyawan']."');
	// 	$('#alamat1').val('".$row['alamat']."');
	// 	$('#telp1').val('".$row['no_telp']."');
	// 	$('#myModal1').modal('toggle');
	// ";
	echo json_encode($arr);
}
?>			