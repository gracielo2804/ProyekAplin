<?php
    session_start();
    require_once('conn.php'); 
    $username=$_SESSION['login']['username'];
    $namabarang=$_POST['namabarang'];   
    $getdata="DELETE from barang where nama_barang='$namabarang' and username='$username'";
    $res=mysqli_query($conn,$getdata);    
    echo "sukses";    
?>