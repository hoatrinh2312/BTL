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
    <div id="right-panel" class="right-panel">
    
<?php
    require_once 'header.php';
?>
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                        <?php 
                            $connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
                            $sql = "SELECT * FROM tbl_lien_he";
                            $ket_qua = mysqli_query($connect,$sql);
                        ?>
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-8" >
                            <div class="card" style="width: 1070px">
                                <div class="card-body">
                                <?php 
                                    $connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
                                    $sql = "SELECT * FROM tbl_lien_he";
                                    $ket_qua = mysqli_query($connect,$sql);
                                    
                                ?>
                                <h4 class="box-title" style="" >Liên hệ </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>Mã liên hệ</th>
                                                    <th>Tên khách</th>
                                                    <th>Email</th>
                                                    <th style="text-align: center;">Phản hồi</th>
                                                </tr>
                                            </thead>
                                    <?php 
                                        while ($row = mysqli_fetch_array($ket_qua)) {
                                            
                                    ?>
                                            <tbody>
                                                <tr style="text-align: center;">
                                                    <td class="serial"><?php echo $row['id_lien_he'] ;?></td>
                                                    <td> <span class="name"><?php echo $row['ten_khach'] ;?></span> </td>
                                                    <td> <span class="name"><?php echo $row['email'] ;?></span> </td>
                                                    <td style="text-align: center;"> <span class="name" ><?php echo $row['phan_hoi'] ;?></span> </td>
                                                </tr>
                                            </tbody>     
                                            <?php }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div> 
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