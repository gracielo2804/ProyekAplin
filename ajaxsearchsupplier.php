<?php
require 'conn.php';
session_start();
$username=$_SESSION['login']['username'];
$nama=$_POST['namasearch'];
$query="SELECT * from supplier where username='$username' and upper(nama_supplier) Like upper('%$nama%') ";
$strings='';
$res=mysqli_query($conn,$query);
echo mysqli_error($conn);
if(mysqli_num_rows($res)==0)echo '0';
else
{
    $ctr=1;
    while($row=mysqli_fetch_assoc($res))
    {
        $strings=$strings."<tr>
        <td>$ctr</td>
        <td>".$row['nama_supplier']."</td>
        <td>".$row['alamat']."</td>
        <td>".$row['no_telp']."</td>
        <td>".$row['keterangan']."</td>
        <td align=center><button type='submit'class='btn btn-warning' name='edit".$row['nama_supplier']."' id='edit".$row['nama_supplier']."' data-toggle='modal' data-target='#myEdit'>
                <svg class='bi bi-pencil-square' width='1em' height='1em' viewBox='0 0 16 16' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                <path d='M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z'/>
                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z' clip-rule='evenodd'/>
                </svg>
            </button>
            <button type='submit' class='btn btn-danger' name='del".$row['nama_supplier']."' id='del".$row['nama_supplier']."'>
                <svg class='bi bi-trash-fill' width='1em' height='1em' viewBox='0 0 16 16' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                <path fill-rule='evenodd' d='M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z' clip-rule='evenodd'/>
                </svg>
            </button>
        </td>
        </tr>";
        $ctr++;
    }
    echo json_encode($strings);
}
?>