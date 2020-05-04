<?php
    require_once 'conn.php';
    $userlog = $_POST['user'];
    $passLog = $_POST['pass'];
    $loginPack;
    $ctrLog = 0;
    $querySelect = "SELECT * FROM users";
    $res = mysqli_query($conn, $querySelect);
    while ($row = mysqli_fetch_assoc($res)){
        if ($userlog == $row['username']) {
            $ctrLog++;
            if (password_verify($passLog, $row['password'])) {
                $ctrLog++;
                $loginInfo = $row;
                $loginPack = $row['packages'];
            }
        }
    }
    if ($ctrLog == 0) {
        echo "username";
    }else if ($ctrLog == 1) {
        echo "pass";
    }else if ($ctrLog == 2) {
        session_start();
        $_SESSION['login'] = $loginInfo;
        if ($loginPack == 'gold') {
            echo "g";
        }else if ($loginPack == 'silver') {
            echo "s";
        }else if ($loginType == 'diamond') {
            echo "d";
        }
    }
?>