<?php
require 'conn.php';
session_start();
$username=$_SESSION['loginKaryawan']['username'];
$query="SELECT * from barang where username='$username' and stok>0";
$strings='';
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)==0)echo '0';
else
{
    $ctr=1;
    while($row=mysqli_fetch_assoc($res))
    {
        $strings=$strings."<button type='submit' class='btn btn-light m-3' name='cart".$row['nama_barang']."' id='cart".$row['nama_barang']."' style='width:150px;height: 
        150px;transform: translate(20px,100px);float: left;'>".$row['nama_barang']."
        </button>";
        $ctr++;
    }
    echo json_encode($strings);
}
?>