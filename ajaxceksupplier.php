<?php
require 'conn.php';
session_start();
$username=$_SESSION['login']['username'];
$namasup=$_POST['namasup'];
$sql = "SELECT * from supplier where username='$username' and nama_supplier='$namasup'";
$hasil = mysqli_query($conn, $sql);
$num = mysqli_num_rows($hasil);
while($row=mysqli_fetch_assoc($hasil)){
    echo json_encode($row);
}
if ($num>0){
    echo 'ada';
} else {
    echo 'tidak ada';
}