<?php
require 'conn.php';
session_start();
$username=$_SESSION['loginKaryawan']['username'];
foreach ($_SESSION['cart'] as $key => $value) {
    if ($key != 'total') {
        $nama = $value['nama_barang'];
        $jumlah = $value['jumlah'];
        $stok = 0;
        $query="SELECT * from barang where username='$username' and nama_barang='$nama'";
        $res=mysqli_query($conn,$query);
        while ($row=mysqli_fetch_assoc($res)) {
            $stok = $row['stok'];
        }
        $stok = $stok - $jumlah;
        echo $stok;
        echo '<br>';
        $queryinsert="UPDATE barang set stok='$stok' where nama_barang='$nama' and username='$username'";
        $execute=mysqli_query($conn,$queryinsert);
    }
}
unset($_SESSION['cart']);
?>