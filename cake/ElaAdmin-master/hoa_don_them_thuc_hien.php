<?php
session_start();
		$so_luong = $_POST['txtSL'];
		$id_san_pham = $_POST['txtSP'];
		$ten = $_POST['txtTen'];

		if(empty($_SESSION["gio_hang"])){
		$_SESSION['gio_hang'] = array();}
		
		if ($so_luong == "" || $id_san_pham == "" ) {
	              echo 
	                "
						<script type='text/javascript'>
							window.alert('Bạn phải điền đầy đủ thông tin!');
						</script>
					";
					echo 
					"
						<script type='text/javascript'>
							window.location.href='./hoa_don_them.php'
						</script>
					";
	         }else{
					if(empty($_SESSION["gio_hang"])){
						$_SESSION['gio_hang'] = array();}


					$connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
					$sql = "select * from tbl_san_pham where id_san_pham = '".$id_san_pham."'";

					if(isset($_POST['txtSL'])){
								$so_luong = array();
								$so_luong = $_POST['txtSL'];
								$dem = 0;
						
							$_SESSION["gio_hang"][$id_san_pham]['so_luong'] = $so_luong[$dem];
							$dem++;
						
					}
					if(isset($_POST['txtSP'])){
								$id_san_pham = array();
								$id_san_pham = $_POST['txtSP'];
								$count = 0;
						
							$_SESSION["gio_hang"][$id_san_pham]['id_san_pham'] = $id_san_pham[$count];
							$count++;
						
					}					

					
					

					$result = mysqli_query($connect,$sql);
					$each = mysqli_fetch_array($result);

					$_SESSION["gio_hang"][$ten]['gia_ban'] = $each['gia_ban'];

		
		
		
					$thanh_tien = 0;

					$sql = "SELECT max(order_id) from tbl_order";
					$array = mysqli_query($connect,$sql);
					$each = mysqli_fetch_array($array);

					$max_id = $each['max(order_id)'];
					$order_id = $max_id + 1;
					foreach ($_SESSION['gio_hang'] as $ten=> $tbl_san_pham) {
						$sql = "select * from tbl_san_pham where ten_san_pham = '$ten'";
						$result = mysqli_query($connect,$sql);
						$each = mysqli_fetch_array($result);

						$thanh_tien = $tbl_san_pham['gia_ban']*$tbl_san_pham['so_luong'];

						$demo = "INSERT INTO tbl_order_details(order_id,id_san_pham,so_luong,gia_ban,thanh_tien)
								 VALUES('$order_id','$id_san_pham','$so_luong','$gia','$thanh_tien')";
						//mysqli_query($connect,$demo);
					    print_r($demo);
					   die();
					}
					}
					
					// echo 
					// "
					// 	<script type='text/javascript'>
					// 		window.location.href='hoa_don_them.php'
					// 	</script>
					// ";
?>
	   

