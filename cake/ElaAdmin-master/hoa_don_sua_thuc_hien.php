
<!DOCTYPE html>
<html>
<head>
	<title>Thực hiện sửa hóa đơn</title>
</head>
<body>
	<?php
		$ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

		$order_id=$_POST["txtID"];
		$status=$_POST["txtTrangThai"];
		
			$sql="UPDATE `tbl_order` 
			SET `status` = '".$status."'
			WHERE `tbl_order`.`order_id` = '".$order_id."'";
		
		// print_r($sql);
		// die();
		mysqli_query($ket_noi,$sql);

		echo 
			"
				<script type='text/javascript'>
					window.location.href='index.php'
				</script>
			";
	;?>

</body>
</html>