<?php
require 'conn.php';
session_start();
$username=$_SESSION['loginKaryawan']['username'];
$barang = $_POST['namabarang1'];
$jumlah = $_POST['jumlahBarang'];
$query="SELECT * from barang where username='$username' and nama_barang='$barang'";
$res=mysqli_query($conn,$query);
$harga;
while($row=mysqli_fetch_assoc($res)){
    $harga = $row['harga'];
}
$tmp = array(
    "nama_barang" => $barang,
    "jumlah" => $jumlah,
    "harga" => $harga * $jumlah
);
$_SESSION['cart'][$barang] = $tmp;
$total = 0;
foreach ($_SESSION['cart'] as $key => $value) {
    if ($key != 'total') {
        $total += $value['harga'];
    }
}
$_SESSION['cart']['total'] = $total;

?>