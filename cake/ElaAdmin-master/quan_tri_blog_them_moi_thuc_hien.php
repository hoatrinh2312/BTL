<!DOCTYPE html>
<html>
<head>
	<title>Thực hiện thêm mới tin tức</title>
</head>
<body>
	<?php
		// 1. KẾT NỐI ĐẾN CSDL
		$ket_noi = mysqli_connect("localhost", "root", "", "cua_hang_banh");

		// 2. Lấy ra dữ liệu thu được từ FORM trước chuyển sang
		$tieu_de = $_POST["txtTieuDe"];
		$Mo_ta = $_POST["txtMoTa"];
		$Nguyen_lieu = $_POST["txtNguyenLieu"];
		$Cach_lam = $_POST["txtCachLam"];
		$tac_gia = $_POST["txtTacGia"];
		$luot_xem = 1;

		// Xử lý ảnh minh họa
		$anh_minh_hoa = "../img/blog/".basename($_FILES["txtAnhMinhHoa"]["name"]);
		$file_anh_tam =  $_FILES["txtAnhMinhHoa"]["tmp_name"];
		$result = move_uploaded_file($file_anh_tam, $anh_minh_hoa);
		if(!$result) {
			$anh_minh_hoa = NULL;
		}

		// 3. Viết câu lệnh SQL để thêm mới tin tức vào bảng tbl_tin_tuc
		$sql = " INSERT INTO `tbl_blog` (`id_blog`, `tieu_de`, `Mo_ta`, `Nguyen_lieu`, `Cach_lam`, `tac_gia`, `ngay_dang`, `luot_xem`, `hinh_anh`) VALUES  (' ', '".$tieu_de."', '".$Mo_ta."', '".$Nguyen_lieu."', '".$Cach_lam."', '".$tac_gia."', now(), '".$luot_xem."','".basename($_FILES["txtAnhMinhHoa"]["name"])."');";


		// echo $sql; exit();

		// 4. Thực hiện truy vấn để thêm mới tin tức
		mysqli_query($ket_noi, $sql);

		// 5. Thông báo việc thêm mới tin tức thành công & đẩy người dùng quay về trang quan trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã thêm mới bài viết thành công!');
			</script>
		";
		echo 
		"
			<script type='text/javascript'>
				window.location.href='../ElaAdmin-master/quan_tri_blog.php'
			</script>
		";
	;?>
</body>
</html>