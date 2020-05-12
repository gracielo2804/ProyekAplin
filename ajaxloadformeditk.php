<?php
require 'conn.php';
session_start();
$userk=$_POST['userkaryawan'];
$username=$_SESSION['login']['username'];
$arr=[];
$sql="SELECT * from karyawan where username='$username' and username_karyawan='$userk'";
$res=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($res)) {
	$arr[]=$row['nama_karyawan'];
	$arr[]=$row['username_karyawan'];
	$arr[]=$row['alamat'];
	$arr[]=$row['no_telp'];
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