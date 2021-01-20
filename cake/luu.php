<?php 
   session_start();
   unset($_SESSION['gio_hang']);
   header("location:xem_hoa_don.php");
   ?>