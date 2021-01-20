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
                
                <!--  Traffic  -->
               
                                <?php 
                                    $connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
                                    $sql = "SELECT * FROM tbl_blog";
                                    $ket_qua = mysqli_query($connect,$sql);
?>
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-8" style="width: 1500px">
                            <div class="card" style="width: 1500px">        
                                <div class="card-body--">
                                    <table>
                                    <tr>
                                    <th><h4 class="box-title" style="margin-left: 15px;" >Blog </h4></th>
                                    <th><a href="quan_tri_blog_them_moi.php"><button style="margin-left: 1320px; color: #ffffff; background: #00C292;border: none; padding: 10px 15px;">Thêm blog</button></a></th>
                                    </tr>
                                </table>
</div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h" style="width: 1500px;">
                                        <table class="table ">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th style="width: 10px">ID BLOG</th>
                                                    <th style="width: 150px;">Hình ảnh</th>
                                                    <th style="width: 200px;">Tiêu đề</th>
                                                    <th style="width: 300px;">Mô tả</th>
                                                    <th style="width: 300px;">Nguyên liệu</th>
                                                    <th style="width: 500px;">Cách làm</th>
                                                    <th style="width: 50px; text-align: center;">Tác giả</th>
                                                    <th style="width: 50px;">Ngày đăng</th>
                                                    <th style="width: 50px;">Lượt xem</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                    <?php 
                                        while ($row = mysqli_fetch_array($ket_qua)) {
                                            
                                    ?>
                                            <tbody>
                                                <tr style="text-align: justify;">
                                                    <td class="serial"><?php echo $row['id_blog'] ;?></td>
                                                    <td> <span class="product" style="text-align: center;"><img src="../img/blog/<?php echo $row["hinh_anh"] ;?>" ></span> </td>
                                                    <td style="text-align: center;"> <?php echo $row['tieu_de'] ;?> </td>
                                                    <td><span ><?php echo $row['Mo_ta'] ;?></span></td>
                                                    <td><span ><?php echo $row['Nguyen_lieu'] ;?></span></td>
                                                    <td><span ><?php echo $row['Cach_lam'] ;?></span></td>
                                                    <td><span ><?php echo $row['tac_gia'] ;?></span></td>
                                                    <td><span ><?php echo $row['ngay_dang'] ;?></span></td>
                                                    <td><span ><?php echo $row['luot_xem'] ;?></span></td>
                                                    <td><a href="../ElaAdmin-master/quan_tri_blog_sua.php?id=<?php echo $row["id_blog"];?>"><img src="./images/edit.jpg" style="width: 32px; height: auto;"></a> <a onclick="return confirm('Bạn có chắc chắn muốn xóa blog này?')" href="../ElaAdmin-master/quan_tri_blog_xoa.php?id=<?php echo $row["id_blog"];?>"><img src="./images/delete.jpg" style="width: 32px; height: auto;"></a></td>
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