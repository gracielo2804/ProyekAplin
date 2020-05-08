<?php
require 'conn.php';
session_start();
$username=$_SESSION['login']['username'];
$user = $_POST['user'];
$sql = "SELECT * from karyawan where username_karyawan='$user' and username='$username'";
$hasil = mysqli_query($conn, $sql);
$num = mysqli_num_rows($hasil);
if ($num>0){
    echo 0;
} else {
    echo 1;
}