<?php
session_start();
if(isset($_GET['id'])){
	$id = $_GET['id'];
	if(empty($_SESSION["gio_hang"])){
		$_SESSION['gio_hang'] = array();
	}
		
	//day khong phai lan dau them vao gio hang
	if(isset($_SESSION["gio_hang"][$id])){
		//san pham da co trong gio hang
		$_SESSION["gio_hang"][$id]['so_luong']++;
	}
	else{
		// neu san pham chua co trong gio hang
		require_once './user/connect.php';
		$sql = "select * from tbl_san_pham where id_san_pham = '".$id."'";
		$result = mysqli_query($connect,$sql);
		$each = mysqli_fetch_array($result);

		$_SESSION["gio_hang"][$id]['gia_ban'] = $each['gia_ban'];
		$_SESSION["gio_hang"][$id]['hinh_anh'] = $each['hinh_anh'];
		$_SESSION["gio_hang"][$id]['ten_san_pham'] = $each['ten_san_pham'];
		$_SESSION["gio_hang"][$id]['so_luong'] = 1;
	}
}
?>
 <meta http-equiv="refresh" content="0,shoping-cart.php">