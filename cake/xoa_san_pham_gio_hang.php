<?php 
    session_start();
    $id_san_pham=$_GET['id_san_pham'];
    if(isset($_GET['id_san_pham'])){
        unset($_SESSION["gio_hang"][$_GET['id_san_pham']]);
    }
header("location:shoping-cart.php");