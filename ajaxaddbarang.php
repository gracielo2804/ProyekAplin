<?php
require 'conn.php';
session_start();
$username=$_SESSION['login']['username'];
$nama=$_POST['namabarang'];
$jumlah=$_POST['jumlahbarang'];
$satuan=$_POST['satbarang'];
$batas=$_POST['batasb'];
$harga=$_POST['hargabarang'];
$cekgambar=false;
$gambar='';
if (isset($_FILES["filegambar"])) {
    // echo (var_dump($_FILES['filegambar']));    
  // Kalau dikirim, cek apakah file yang di upload error apa tidak
  // Error jika diatas 0! 
  if ($_FILES["filegambar"]["error"] == 0) {
    // Upload file berhasil!
    $status = move_uploaded_file($_FILES["filegambar"]["tmp_name"], 
    __DIR__."/gambar/".$_FILES["filegambar"]["name"]);
    if ($status != false) {
      $gambar = $_FILES["filegambar"]["name"];
      /** @var PDO $db Prepared statement */
      // $queryInsert = "UPDATE hsubs set buktitransfer = '$a' WHERE idTransSubs = '$_SESSION[idBukti]'";
      $cekgambar=true;
    //   $queryInsert = "INSERT into testgambar values ('','$a')";
    //   $res = mysqli_query($conn,$queryInsert);
    //   if ($res) {
    //     echo "<script>alert('gambar berhasil di upload!');</script>";
    //   } 
    //   else {
    //     echo mysqli_error($conn);
    //   }
    } 
    else {
     
    }
  } 
  else {
    // Jika file upload diatas 0 error code nya, maka upload file gagal!
    
  }
}
if($cekgambar){
    $queryinsert="INSERT into barang values ('$nama','$jumlah','$satuan','$batas','$username','$harga','$gambar')";
    $execute=mysqli_query($conn,$queryinsert);
    if($execute)echo '1';
    else echo '0';
}
else{
    echo 'gambar' ;
}
?>