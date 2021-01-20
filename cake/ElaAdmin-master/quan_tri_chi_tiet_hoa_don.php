  <?php 
  session_start();
  if (!isset($_SESSION['loggedd'])) {
    header("location:page-login.php");
    edit();
  }
;?>
    <?php
        require_once 'left.php';
    ?>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
    <?php
        require_once 'header.php';
    ?>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
  

                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-8" >
                            <div class="card" style="width: 1050px">
                                <div class="card-body">
                                <?php 
                                    
                                    $connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
                                    if(isset($_GET["id"])){
                                      $id= $_GET["id"];
                                      $sql = "SELECT b1.order_id,b2.id_san_pham,b2.ten_san_pham,so_luong, b1.gia_ban,thanh_tien FROM tbl_order_details as b1 JOIN tbl_san_pham as b2 ON b1.id_san_pham=b2.id_san_pham where b1.order_id= '".$id."'  " ;  
                                    }
                                    else{
                                        $sql = "SELECT b1.order_id,b2.id_san_pham,b2.ten_san_pham,so_luong, b1.gia_ban,thanh_tien FROM tbl_order_details as b1 JOIN tbl_san_pham as b2 ON b1.id_san_pham=b2.id_san_pham ORDER BY b1.order_id " ;
                                    }
                                    $ket_qua = mysqli_query($connect,$sql);
                                    
                                ?>
                                <h4 class="box-title" style="" >Chi tiết hóa đơn </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>Mã HĐ</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Số lượng</th>
                                                    <th>Giá</th>
                                                    <th>Thành tiền</th>
                                                    <th style="width: 150px; text-align: center;">Chức năng</th>
                                                </tr>
                                            </thead>
                                    <?php 
                                        while ($row = mysqli_fetch_array($ket_qua)) {
                                            
                                    ?>
                                            <tbody>
                                                <tr style="text-align: center;">
                                                    <td class="serial"><?php echo $row['order_id'] ;?></td>
                                                    <td> <?php echo $row['ten_san_pham'] ;?> </td>
                                                    <td> <span class="name"><?php echo $row['so_luong'] ;?></span> </td>
                                                    <td> <span class="name"><?php echo $row['gia_ban'] ;?></span> </td>
                                                    <td> <span class="name"><?php echo number_format($row["thanh_tien"],0,",",".") ;?></span> </td>
                                                    <td>
                                                    <a href="edit_orderdetails.php?id=<?php echo $row["order_id"];?> & id1=<?php echo $row["id_san_pham"];?>"><img src="images/edit.jpg" style="width: 32px; height: auto;"></a>
                                                    <a href="del_orderdetails.php?id=<?php echo $row["order_id"] ;?> & id1=<?php echo $row["id_san_pham"];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này ra khỏi giỏ hàng?')" ><img src="images/delete.jpg" style="width: 40px; height: auto;"></a> 
                                                    </td>
                                                </tr>
                                            </tbody>     
                                            <?php }
                                            ?>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->




            </div>
            <!-- .animated -->
        </div>
        
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <?php
        require_once 'footer.php';
    ?>
