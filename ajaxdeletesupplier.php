<?php
    session_start();
    require_once('conn.php'); 
    $username=$_SESSION['login']['username'];
    $namabarang=$_POST['namasupplier'];   
    $getdata="DELETE from supplier where nama_supplier='$namabarang' and username='$username'";
    $res=mysqli_query($conn,$getdata);    
    echo "sukses";    
?>