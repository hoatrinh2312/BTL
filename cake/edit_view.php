    <?php 
                $ket_noi = mysqli_connect("localhost", "root", "", "cua_hang_banh");

                // 2. Lấy ID của tin tức
                $id_blog = $_GET["id"];


                // 3. Lấy dữ liệu mong muốn
            $sql = "
                SELECT *
                FROM tbl_blog
                WHERE id_blog='".$id_blog."'
            ";

                // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
                $noi_dung = mysqli_query($ket_noi, $sql);
                $each = mysqli_fetch_array($noi_dung);
                $view = $each["luot_xem"]+1;
                $up = "UPDATE `tbl_blog` SET `luot_xem` = '".$view."' WHERE `tbl_blog`.`id_blog` = '".$id_blog."' ";
                $result = mysqli_query($ket_noi,$up);
                echo 
					"
						<script type='text/javascript'>
							window.location.href='blog-details.php'
						</script>
					";
    ?>