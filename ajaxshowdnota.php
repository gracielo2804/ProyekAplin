<?php
    require_once('conn.php');
    session_start();
    $strings="
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>Nama Barang</th>
                    <th scope='col'>Jumlah</th>                                                                                                     
                    <th scope='col'>Harga</th>                                                                                                     
                </tr>
            </thead>
            <tbody>";
    $total=0;    
    $idnota=$_POST['idnota'];
    $username=$_SESSION['login']['username'];
    $query="SELECT * FROM `d_nota` where `id_nota`='$idnota' and `username`='$username'";
    $res=mysqli_query($conn,$query);
    while ($row=mysqli_fetch_assoc($res) ) {
        $strings=$strings. "
            <tr>
                <td>".$row['nama_barang']."</td>
                <td>".$row['jumlah']."</td>
                <td>".$row['total']."</td>
            </tr>
        ";
        $total+=(int)$row['total'];
    }
    $strings=$strings."
            <tr>
                <td><b>Grand Total<b></td>
                <td></td>
                <td><b>".$total."<b></td>                                    
            </tr>
        </tbody>
    </table>                        
    </div>
    <div class='modal-footer'>
    <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>   
    </div>";
    echo json_encode($strings);
?>