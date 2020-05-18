<?php
    session_start();
    require_once('conn.php'); 
    $namabarang=$_POST['namabarang']; 
    unset($_SESSION['cart'][$namabarang]);
    $total = 0;
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($key != 'total') {
            $total = $total + $value['harga'];
        }
    }
    $_SESSION['cart']['total'] = $total;
    echo "sukses";    
?>