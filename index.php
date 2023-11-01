<?php
    include_once "models/connect.php";
    include_once "models/sach.php";
    $nguoixem = get_nguoixem();
    $sachmoi = get_sachmoi();
    include_once "views/home.php";
?>
