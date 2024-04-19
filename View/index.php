<?php 
    require "../View/inc/header.php";
    require "../View/inc/banner.php";
    require "../View/Home/SanPhamBanChay.php";
    require "../View/inc/footer.php";
    include '../Models/DBconfig.php';
    $db = new Database;
    $db->connect();
?>