<?php
require 'conn.php';
session_start();
$username=$_SESSION['login']['username'];
$user=$_POST['username'];
$query="SELECT * from karyawan where username_karyawan='$user' and username='$username'";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
    if($row['status']=='0')
    {
        $queryinsert="UPDATE karyawan set status='1'where username_karyawan='$user' and username='$username'";
        $execute=mysqli_query($conn,$queryinsert);
    }
    else
    {
        $queryinsert="UPDATE karyawan set status='0'where username_karyawan='$user' and username='$username'";
        $execute=mysqli_query($conn,$queryinsert);
    }
}

?>