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
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                        <?php 
                            $connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
                            $sql = "SELECT sum(tong_tien),count(order_id), count(id_dang_nhap) FROM tbl_order";
                            $kq = mysqli_query($connect,$sql);
                            $each = mysqli_fetch_array($kq);

                            $sql1 = "SELECT sum(so_luong) FROM tbl_order_details";
                            $kq1 = mysqli_query($connect,$sql1);
                            $each1 = mysqli_fetch_array($kq1);
                        ?>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $each['sum(tong_tien)'] ;?></span></div>
                                            <div class="stat-heading">Doanh thu</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $each['count(order_id)'] ?></span></div>
                                            <div class="stat-heading">Đơn hàng</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib" >
                                            <div class="stat-text"><span class="count"><?php echo $each1['sum(so_luong)'] ?></span></div>
                                            <div class="stat-heading">Số lượng</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $each['count(id_dang_nhap)'] ?></span></div>
                                            <div class="stat-heading">Khách hàng</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
                
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-8" >
                            <div class="card" style="width: 1070px">
                                <div class="card-body">
                                <?php 
                                    $connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
                                    $sql = "SELECT * FROM tbl_order";
                                    $ket_qua = mysqli_query($connect,$sql);
                                    
                                ?>
                                <h4 class="box-title" style="" >Hóa Đơn </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>Mã HĐ</th>
                                                    <th>Mã KH</th>
                                                    <th>Họ tên</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Email</th>
                                                    <th>Ngày đặt</th>
                                                    <th style="width: 90px;">Trạng thái</th>
                                                    <th>Chú ý</th>
                                                    <th>Tổng tiền</th>
                                                    <th style="width: 130px; text-align: center;">Chức năng</th>
                                                </tr>
                                            </thead>
                                    <?php 
                                        while ($row = mysqli_fetch_array($ket_qua)) {
                                            
                                    ?>
                                            <tbody>
                                                <tr style="text-align: center;">
                                                    <td class="serial"><a href="quan_tri_chi_tiet_hoa_don.php?id=<?php echo $row["order_id"] ;?> " ><?php echo $row['order_id'] ;?></a></td>
                                                    <td> <?php echo $row['id_dang_nhap'] ;?> </td>
                                                    <td> <span class="name"><?php echo $row['ten_nguoi_nhan'] ;?></span> </td>
                                                    <td> <span class="name"><?php echo $row['sdt'] ;?></span> </td>
                                                    <td> <span class="name"><?php echo $row['email'] ;?></span> </td>
                                                    <td> <span ><?php echo $row['ngay_dat'] ;?></span> </td>

                                            <form action="hoa_don_sua_thuc_hien.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                                    <td> 
                                                        <div class="col-12 col-md-9">
                                                            <select name="txtTrangThai" id="select" class="form-control" style="width: 150px;">
                                                                <option selected="selected"><?php echo $row['status'] ;?></option>
                                                                <option value="">Chưa xử lý</option>
                                                                <option value="Đang chuẩn bị">Đang chuẩn bị</option>
                                                                <option value="Đang giao">Đang giao</option>
                                                                <option value="Đã giao">Đã giao</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td> <span class="name"><?php echo $row['chu_y'] ;?></span> </td>
                                                    <td> <span class="name"><?php echo number_format($row["tong_tien"],0,",",".") ;?></span> </td>
                                                    <td>
                                                    <button type="submit" style="color: black ; background: #ffffff;border: none; padding: 10px 15px;">Lưu</button>
                                                    <input type="hidden" name="txtID" value="<?php echo $row["order_id"] ;?>">
                                            </form>
                                                    <a href="hoa_don_xoa.php?id=<?php echo $row["order_id"] ;?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm?')" ><img src="images/delete.jpg" style="width: 40px; height: auto;"></a> 
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
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        
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
