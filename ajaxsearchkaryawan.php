<?php
require 'conn.php';
session_start();
$username=$_SESSION['login']['username'];
$nama=$_POST['namasearch'];
$query="SELECT * from karyawan where username='$username' and upper(nama_karyawan) Like upper('%$nama%')" ;
$strings='';
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)==0)echo '0';
else
{
    $class='';
    $ctr=1;
    while($row=mysqli_fetch_assoc($res))
    {
        if($row['status']=='1')
        {
            $class='danger';
            $status='Aktif';
        }
        else if ($row['status']=='0')
        {
            $class='success';
            $status='Tidak Aktif';
        }        
        $strings=$strings."<tr>
        <td>$ctr</td>
        <td>".$row['nama_karyawan']."</td>
        <td>".$row['username_karyawan']."</td>
        <td>".$row['alamat']."</td>
        <td>".$row['no_telp']."</td>
        <td>".$row['tanggal_daftar']."</td>
        <td>".$status."</td>
        <td align=center><button type='submit'class='btn btn-warning' name='edit".$row['username_karyawan']."' id='edit".$row['username_karyawan']."' data-toggle='modal' data-target='#myEdit'>
                <svg class='bi bi-pencil-square' width='1em' height='1em' viewBox='0 0 16 16' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                <path d='M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z'/>
                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z' clip-rule='evenodd'/>
                </svg>
            </button>
            <button type='submit' class='btn btn-".$class."' name='del".$row['username_karyawan']."' id='del".$row['username_karyawan']."'>
                <i class='fas fa-power-off' style='color:black;'></i>
            </button>
        </td>
        </tr>";
        $ctr++;
    }
    echo json_encode($strings);
}
?>