<?php
require 'conn.php';
$user = $_POST['user'];
$sql = "select * from users where username='$user'";
$hasil = mysqli_query($conn, $sql);
$num = mysqli_num_rows($hasil);
if ($num>0){
    echo 0;
} else {
    echo 1;
}