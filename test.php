<?php
// INSERT INTO `h_nota`(`id_nota`, `tanggal`, `totalbayar`, `username`) VALUES ('11',
// STR_TO_DATE('15-05-2020', '%d-%m-%Y'),'10000','cielo')
    $date = (new DateTime())->format('dmY');
    echo $date;
?>