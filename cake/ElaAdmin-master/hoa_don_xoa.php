
<!DOCTYPE html>
<html>
<head>
    <title>Thực hiện xóa hóa đơn</title>
</head>
<body>
    <?php
        $ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

        $id_hd=$_GET["id"];

        $sql="DELETE FROM `tbl_order` WHERE `tbl_order`.`order_id` = '".$id_hd."'";
        $sql1 = "DELETE FROM `tbl_order_details` WHERE `tbl_order_details`.`order_id` = '".$id_hd."'";

        mysqli_query($ket_noi,$sql);
        mysqli_query($ket_noi,$sql1);

        //5.kết nối thành công đẩy về trang quản trị tin tức
        echo 
            "
                <script type='text/javascript'>
                    window.alert('Xóa hóa đơn thành công');
                </script>
            ";
        echo 
            "
                <script type='text/javascript'>
                    window.location.href='quan_tri_hoa_don.php'
                </script>
            ";

    ;?>

</body>
</html>