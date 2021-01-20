<!DOCTYPE html>
<html>
<head>
	<title>Thực hiện thêm phản hồi</title>
</head>
<body>
	<?php
		// 1. KẾT NỐI ĐẾN CSDL
		$ket_noi = mysqli_connect("localhost", "root", "", "cua_hang_banh");

		// 2. Lấy ra dữ liệu thu được từ FORM trước chuyển sang
		$txtTenKhach= $_GET["txtTenKhach"];
		$txtEmail = $_GET["txtEmail"];
		$txtPhanHoi= $_GET["txtPhanHoi"];
		

		// 3. Viết câu lệnh SQL để thêm mới tin tức vào bảng tbl_tin_tuc
		

		$sql="INSERT INTO `tbl_lien_he`(`ten_khach`, `email`, `phan_hoi`) VALUES('$txtTenKhach','$txtEmail','$txtPhanHoi')";

		// echo $sql; exit();

		// 4. Thực hiện truy vấn để thêm mới tin tức
		mysqli_query($ket_noi, $sql);

		// 5. Thông báo việc thêm mới tin tức thành công & đẩy người dùng quay về trang quan trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.alert('Cảm ơn bạn gửi phản hồi đến chúng tôi!');
			</script>
		";
		echo 
		"
			<script type='text/javascript'>
				window.location.href='contact.php'
			</script>
		";
		//header("location: phong_tro.php");
	;?>
</body>
</html>