<?php 
   session_start();
   unset($_SESSION['gio_hang']);
   header("location:shoping-cart.php");