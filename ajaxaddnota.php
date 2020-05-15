<?php
    session_start();
    require 'conn.php';
    $ctr=1;
    $username=$_SESSION['loginKaryawan']['username'];
    $query="SELECT * FROM h_nota where username='$username'";
    $total=$_SESSION['cart']['total'];
    $res=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($res))
    {
        $ctr++;
    }
    $date = (new DateTime())->format('dmY');
    $tanggal=(new DateTime())->format('d-m-Y');
    $idnota="TRX".$date.$ctr;
    $insert="INSERT INTO h_nota VALUES ('$idnota','$tanggal','$total','$username')";
    $res=mysqli_query($conn,$insert);
    foreach ($_SESSION['cart'] as $key => $value) {
        if($key!='total'){
            $namabarang=$key;
            $jumbarang=$_SESSION['cart'][$key]['jumlah'];
            $hargabarang=$_SESSION['cart'][$key]['harga'];
            $insert="INSERT INTO d_nota VALUES ('$idnota','$namabarang','$jumbarang','$hargabarang','$username')";
            $res=mysqli_query($conn,$insert);
        }        
    }    
?>