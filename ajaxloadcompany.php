<?php
    session_start();
    require 'conn.php';
    $query="SELECT username, company from users";
    $res=mysqli_query($conn,$query);
    $string="";
    while ($row=mysqli_fetch_assoc($res)) {
        $string=$string."<option value=".$row['username'].">".$row['company']."</option>";
    }
    echo json_encode($string);
?>