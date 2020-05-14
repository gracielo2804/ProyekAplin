<?php
    require_once 'conn.php';
    $company = $_POST['company'];
    $userlog = $_POST['user'];
    $passLog = $_POST['pass'];
    $loginInfo=[];
    $ctrLog = 0;
    $querySelect = "SELECT * FROM karyawan k,users u where u.company='$company' and k.username_karyawan='$userlog'";
    $res = mysqli_query($conn, $querySelect);
    while ($row = mysqli_fetch_assoc($res)){
        if ($userlog == $row['username_karyawan']) {
            $ctrLog++;
            if (password_verify($passLog, $row['password'])) {
                $ctrLog++;
                $loginInfo['username_karyawan']=$row['username_karyawan'];
                $loginInfo['nama_karyawan']=$row['nama_karyawan'];
                $loginInfo=$row;
            }
        }
    }
    if ($ctrLog == 0) {
        echo "username";
    }else if ($ctrLog == 1) {
        echo "pass";
    }else if ($ctrLog == 2) {
        session_start();
        $_SESSION['loginKaryawan'] = $loginInfo;
        echo "s";
    }
?>