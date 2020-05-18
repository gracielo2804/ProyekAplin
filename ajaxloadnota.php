<?php
require 'conn.php';
session_start();
if($_SESSION['cart']!='0')
{
    $strings='';

    $ctr=1;
    
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($key != 'total') {
            $strings=$strings."<tr>
            <td>$ctr</td>
            <td>".$value['nama_barang']."</td>
            <td>".$value['jumlah']."</td>
            <td>".$value['harga']."</td>
            <td><button type='submit' class='btn' name='del".$value['nama_barang']."' id='del".$value['nama_barang']."' style='background-color: Transparent; background-repeat:no-repeat; border: none;'>
                <svg class='bi bi-trash-fill' width='1em' height='1em' viewBox='0 0 16 16' fill='red' xmlns='http://www.w3.org/2000/svg'>
                <path fill-rule='evenodd' d='M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z' clip-rule='evenodd'/>
                </svg>
            </button>
            </td>
            </tr>";
            $ctr++;
        }
    }
    $arr[] = $strings;
    $arr[] = $_SESSION['cart']['total'];
    echo json_encode($arr);
}
else echo '0'

?>