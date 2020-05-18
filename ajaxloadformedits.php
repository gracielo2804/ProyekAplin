<?php
require 'conn.php';
session_start();
$nama=$_POST['namasupp'];
$username=$_SESSION['login']['username'];
$arr=[];
$sql="SELECT * from supplier where username='$username' and nama_supplier ='$nama'";
$res=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($res)) {
	$arr[]=$row['nama_supplier'];
	$arr[]=$row['alamat'];
	$arr[]=$row['no_telp'];
	$arr[]=$row['keterangan'];
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