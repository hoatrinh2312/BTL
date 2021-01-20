
<!DOCTYPE html>
<html>
<head>
	<title>Thực hiện sửa chi tiết hóa đơn</title>
</head>
<body>
	<?php
		$ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

		$id_hd=$_POST["txtID"];
		$id_sp=$_POST["txtID1"];
		$so_luong=$_POST["txtSL"];
		$gia=$_POST["txtGia"];
		$thanh_tien=$so_luong*$gia;
		$tong_tien=0;

			$sql = "UPDATE `tbl_order_details` SET `order_id` = '".$id_hd."', `id_san_pham` = '".$id_sp."', `so_luong` = '".$so_luong."', `gia_ban` = '".$gia."', `thanh_tien` = '".$thanh_tien."'
			WHERE `tbl_order_details`.`order_id`= '".$id_hd."' and `tbl_order_details`.`id_san_pham` = '".$id_sp."'  ";
		
		// print_r($sql);
		// die();
		mysqli_query($ket_noi,$sql);
		$truy_van = "SELECT thanh_tien FROM tbl_order_details WHERE order_id= '".$id_hd."' ";
		$ket_qua = mysqli_query($ket_noi,$truy_van);
		while ($row = mysqli_fetch_array($ket_qua)) {
			$tong_tien += $row['thanh_tien'];
		}


			$sql_order = "UPDATE `tbl_order` SET `tong_tien` = '$tong_tien' WHERE `tbl_order`.`order_id` = '".$id_hd."'  ";

		mysqli_query($ket_noi,$sql_order);
		echo 
			"
				<script type='text/javascript'>
					window.alert('Sửa chi tiết hóa đơn thành công');
				</script>
			";
		echo 
			"
				<script type='text/javascript'>
					window.location.href='quan_tri_chi_tiet_hoa_don.php'
				</script>
			";
	;?>

</body>
</html>