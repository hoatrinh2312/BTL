<?php 
session_start();
if (isset($_GET['ten_nguoi_nhan']) && isset($_GET['sdt_nguoi_nhan']) && isset($_GET['email']) && isset($_GET['ten_dia_chi'])&& isset($_GET['note'])) 
	   {
		    $ten_nguoi_nhan = $_GET['ten_nguoi_nhan'];
			$sdt = $_GET['sdt_nguoi_nhan'];
			$ten_dia_chi = $_GET['ten_dia_chi'];
			$email=$_GET['email'];
			$note = $_GET['note'];
			$status = "Chưa xử lý";
		if ($ten_nguoi_nhan == "" || $sdt == "" || $email == "" || $ten_dia_chi == "" ) {
	              echo 
	                "
						<script type='text/javascript'>
							window.alert('Bạn phải điền đầy đủ thông tin!');
						</script>
					";
					echo 
					"
						<script type='text/javascript'>
							window.location.href='checkout.php'
						</script>
					";
	         }else{
					$id_user = $_SESSION['id'];

					$gio_hang = $_SESSION['gio_hang'];
					$tong_tien = 0;
					$thanh_tien = 0;
					foreach ($gio_hang as $id_san_pham => $soluong) {
					     $sql = "select * from tbl_san_pham where id_san_pham = '$id_san_pham'";

					}
					// die();
					 $connect=mysqli_connect("localhost","root","","cua_hang_banh");
					$sql = "SELECT max(order_id) from tbl_order";
					$array = mysqli_query($connect,$sql);
					$each = mysqli_fetch_array($array);

					$max_id = $each['max(order_id)'];
					$order_id = $max_id + 1;
					foreach ($_SESSION['gio_hang'] as $id_san_pham => $tbl_san_pham) {
						$sql = "select * from tbl_san_pham where id_san_pham = '$id_san_pham'";
						$result = mysqli_query($connect,$sql);
						$each = mysqli_fetch_array($result);

						$gia= $tbl_san_pham['gia_ban'];
						$soluong= $tbl_san_pham['so_luong'];
						$thanh_tien = $tbl_san_pham['gia_ban']*$tbl_san_pham['so_luong'];
						$demo = "INSERT INTO `tbl_order_details` ( `order_id`, `id_san_pham`, `so_luong`, `gia_ban`, `thanh_tien`) VALUES ( '".$order_id."', '".$id_san_pham."', '".$soluong."', '".$gia."', '".$thanh_tien."') ";
						mysqli_query($connect,$demo);
					   //  print_r($demo);
					   // die();
						$tong_tien += $tbl_san_pham['gia_ban']*$tbl_san_pham['so_luong'];
					}
					

					$sql = "INSERT INTO tbl_order(order_id,id_dang_nhap,ten_nguoi_nhan,sdt,dia_chi,email,chu_y,ngay_dat,tong_tien,status) VALUES('$order_id','$id_user','$ten_nguoi_nhan','$sdt','$ten_dia_chi','$email','$note',now(),'$tong_tien','$status')  ";
					 mysqli_query($connect,$sql);
					//   print_r($sql);
					 

					
	                echo 
	                "
						<script type='text/javascript'>
							window.alert('Bạn đã đặt hàng thành công!');
						</script>
					";
					echo 
					"
						<script type='text/javascript'>
							window.location.href='luu.php'
						</script>
					";
	       }
	   }

