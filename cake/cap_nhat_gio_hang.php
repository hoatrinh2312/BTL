<?php 
	session_start();
	if(isset($_POST['arrSL'])){
		$so_luong = array();
		$so_luong = $_POST['arrSL'];
		$dem = 0;
		if(isset($_SESSION["gio_hang"])){
			foreach($_SESSION["gio_hang"] as $id_san_pham => $sl){
				$_SESSION["gio_hang"][$id_san_pham]['so_luong'] = $so_luong[$dem];
				$dem++;
			}
		}
	}
?>
<meta http-equiv="refresh" content="0,shoping-cart.php">