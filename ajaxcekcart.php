<?php
session_start();
if(isset($_SESSION['cart']))echo '1';
else echo '0';
?>