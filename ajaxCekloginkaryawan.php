<?php
    require_once 'conn.php';
    session_start();    
    $company = $_POST['company'];
    $userlog = $_POST['user'];
    $passLog = $_POST['pass'];
    $loginInfo=[];
    $usernamelog='';
    $usernameklog='';
    $ctrLog = 0;
    $querySelect = "SELECT * FROM karyawan where username='$company' and username_karyawan='$userlog'";
    $res = mysqli_query($conn, $querySelect);
    while ($row = mysqli_fetch_assoc($res)){
        if ($userlog == $row['username_karyawan']) {
            $ctrLog++;
            if (password_verify($passLog, $row['password'])) {
                $ctrLog++;
                $loginInfo['username_karyawan']=$row['username_karyawan'];
                $loginInfo['nama_karyawan']=$row['nama_karyawan'];
                $loginInfo=$row;
                $usernamelog=$row['username'];
                // echo $usernamelog;
                $usernameklog=$row['username_karyawan'];
                // echo $usernameklog;
            }           
        }
    }
    $query = "SELECT status FROM karyawan where username='$usernamelog' and username_karyawan='$usernameklog'";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        if($row['status']=='1')$ctrLog++;
    }
    if ($ctrLog == 0) {
        echo "username";
    }else if ($ctrLog == 1) {
        echo "pass";
    }else if ($ctrLog == 2) {
        echo 'nonaktif';    
    }
    else if ($ctrLog == 3){ 
        $_SESSION['loginKaryawan'] = $loginInfo;
        echo "s";
    }else{
        echo $ctrLog;
    }
?>