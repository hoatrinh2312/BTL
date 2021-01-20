<?php 
  session_start();
  if (!isset($_SESSION['loggedd'])) {
    header("location:page-login.php");
    edit();
  }
;?>
<!DOCTYPE html>
<html>
<head>
    <title>Thực hiện xóa hóa đơn</title>
</head>
<body>
    <?php
        $ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

        $id_hd=$_GET["id"];
        $id_sp = $_GET["id1"];
                

        $sql_order = "SELECT thanh_tien from tbl_order_details where `tbl_order_details`.`order_id` = '".$id_hd."'and `tbl_order_details`.`id_san_pham` = '".$id_sp."' ";
        $sql_moi = "SELECT tong_tien from tbl_order where order_id='".$id_hd."' ";

        
                $tong =  mysqli_query($ket_noi,$sql_moi);
                $kq =  mysqli_query($ket_noi,$sql_order);
                $each = mysqli_fetch_array($tong);
                $each1 = mysqli_fetch_array($kq);

                $tong_tien = $each['tong_tien'];
                

                //$tong_tien = (int)$tong;
                $result = $each1['thanh_tien'];

                $tong_tien_moi = $tong_tien -$result;

         $sql_order = "UPDATE `tbl_order` SET `tong_tien` = '".$tong_tien_moi."' WHERE `tbl_order`.`order_id` = '".$id_hd."'  ";
         // print_r($sql_order);
         // die();
         mysqli_query($ket_noi,$sql_order);
         $sql = "DELETE FROM `tbl_order_details` WHERE `tbl_order_details`.`order_id` = '".$id_hd."' and `tbl_order_details`.`id_san_pham` = '".$id_sp."'";

         mysqli_query($ket_noi,$sql);

        echo 
            "
                <script type='text/javascript'>
                    window.alert('Xóa chi tiết hóa đơn thành công');
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