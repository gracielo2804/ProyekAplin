<?php
require 'conn.php';
session_start();

$uang = $_POST['inputuang'];
if ($uang < $_SESSION['cart']['total']) {
    echo 0;
}else {
    $kembalian = $uang - $_SESSION['cart']['total'];
    $arr[] = 1;
    $arr[] = $kembalian;
    echo json_encode($arr);
}
?>