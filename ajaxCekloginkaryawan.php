<?php
    session_start();
    require_once 'conn.php';
    $company = $_POST['company'];
    $userlog = $_POST['user'];
    $passLog = $_POST['pass'];
    $usercom='';
    $loginInfo=[];
    $usernamelog='';
    $usernameklog='';
    $ctrLog = 0;
    $queryselect="SELECT username FROM users where company='$company'";
    $res = mysqli_query($conn, $queryselect);
    while ($row = mysqli_fetch_assoc($res))
    {
        $usercom=$row['username'];
    }
    $querySelect = "SELECT * FROM karyawan where username='$usercom' and username_karyawan='$userlog'";
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
                
                $usernameklog=$row['username_karyawan'];
                
            }           
        }
    }
    // echo $usernamelog;
    // echo $usernameklog;
    $query = "SELECT status FROM karyawan where username='$usernamelog' and username_karyawan='$usernameklog'";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        // echo ($row['status']);
        if($row['status']=='1')$ctrLog++;
    }
    if ($ctrLog == 0) {
        echo "username";
    }else if ($ctrLog == 1) {
        echo "pass";
    }else if ($ctrLog == 2) {
        echo 'nonaktif';  
        // echo $usernamelog.$usernameklog;     
    }
    else if ($ctrLog == 3){ 
        $_SESSION['loginKaryawan'] = $loginInfo;
        echo "s";
    }
?>