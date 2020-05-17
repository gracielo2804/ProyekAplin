<?php
require 'conn.php';
if(isset($_POST['btnUpload'])) {
  if (isset($_FILES["fileBukti"])) {
      var_dump($_FILES['fileBukti']);
    // Kalau dikirim, cek apakah file yang di upload error apa tidak
    // Error jika diatas 0! 
    if ($_FILES["fileBukti"]["error"] == 0) {
      // Upload file berhasil!
      $status = move_uploaded_file($_FILES["fileBukti"]["tmp_name"], 
      __DIR__."/gambar/".$_FILES["fileBukti"]["name"]);
      if ($status != false) {
        $a = $_FILES["fileBukti"]["name"];
        /** @var PDO $db Prepared statement */
        // $queryInsert = "UPDATE hsubs set buktitransfer = '$a' WHERE idTransSubs = '$_SESSION[idBukti]'";
        $queryInsert = "INSERT into testgambar values ('','$a')";
        $res = mysqli_query($conn,$queryInsert);
        if ($res) {
          echo "<script>alert('gambar berhasil di upload!');</script>";
        } 
        else {
          echo mysqli_error($conn);
        }
      } 
      else {
        echo "<script>alert('gambar gagal di upload!');</script>";
      }
    } 
    else {
      // Jika file upload diatas 0 error code nya, maka upload file gagal!
      echo "<script>alert('Tidak ada file yang diterima oleh server!');</script>";
    }
  }
//   unset($_SESSION['idBukti']);
//   header("Location: usersubs.php");
}
?>
<html>
<form method="POST" enctype="multipart/form-data">
    Upload Bukti Transfer
    <input type="file" style="font-size:12px;" class="btn btn-outline-info" name="fileBukti"></input>
    <button name='btnUpload'>Upload</button>
    <table border=1>
        <thead>
            <th>ID Gambar</th>
            <th>ID gambar</th>
        </thead>
        <tbody>
            <?php
                $query="SELECT * from testgambar";
                $res=mysqli_query($conn,$query);
                while ($row=mysqli_fetch_assoc($res)) {
                    echo"<tr><td>".$row['id']."</td>
                    <td><img src='gambar/".$row['nama']."' height=100px width=100px></td></tr>"
                    ;
                }
            ?>
        </tbody>
        
    </table>
</form>
</html>