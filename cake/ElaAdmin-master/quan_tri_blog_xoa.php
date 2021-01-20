<!DOCTYPE html>
<html>
<head>
	<title>Thực hiện xóa bài viết</title>
</head>
<body>
	<?php
		// 1. KẾT NỐI ĐẾN CSDL
		$ket_noi = mysqli_connect("localhost", "root", "", "cua_hang_banh");

		// 2. Lấy ID của tin tức cần xóa
		$id_blog = $_GET["id"];

		// echo $id_blog; exit();
		// 3. Viết câu lệnh SQL để xóa tin tức có id thu được ở trên
		$sql = "
			DELETE FROM `tbl_blog` 
			WHERE `tbl_blog`.`id_blog` = '".$id_blog."'
		";

		// 4. Thực hiện truy vấn để xóa tin tức
		mysqli_query($ket_noi, $sql);

		// 5. Thông báo việc xóa tin tức thành công & đẩy người dùng quay về trang quan trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã xóa bài viết thành công!');
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