<?php
require 'conn.php';
session_start();
$username=$_SESSION['user'];
$query="SELECT * from barang where username='$user'";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)==0)
echo '0';
?>