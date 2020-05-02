<?php
require 'conn.php';
$email = $_POST['email'];
$sql = "select * from users where email='$email'";
$hasil = mysqli_query($conn, $sql);
$num = mysqli_num_rows($hasil);
if ($num>0){
    echo 0;
} else {
    echo 1;
}