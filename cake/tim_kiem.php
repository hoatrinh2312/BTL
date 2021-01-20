<?php
	$LoaiBanh = $_POST["value"];
	$Banh = $_POST["txtBanh"];

	$connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
	$sql = "SELECT * FROM tbl_san_pham where id_loai_san_pham = '".$LoaiBanh."' ";
	$ket_qua = mysqli_query($connect,$sql);
?>
<meta http-equiv="refresh" content="0,shop.php">