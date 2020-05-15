<?php
require 'conn.php';
session_start();
$username=$_SESSION['login']['username'];
$nama=$_POST['namasearch'];
$query="SELECT * from h_nota where username='$username' and upper(id_nota) Like upper('%$nama%')";
$strings='';
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)==0)echo '0';
else
{
    $ctr=1;
    while($row=mysqli_fetch_assoc($res))
    {        
        $strings=$strings."<tr>
        <td>$ctr</td>
        <td>".$row['id_nota']."</td>
        <td>".$row['tanggal']."</td>
        <td>".$row['totalbayar']."</td>        
        <td align=center><button class='btn btn-warning' id='".$row['id_nota']."'>Detail</button></td>      
        </tr>";
        $ctr++;
    }
    echo json_encode($strings);
}
?>