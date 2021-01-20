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

                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-8" style="width: 1050px">
                            <div class="card" style="width: 1050px">
                                <div class="card-body">
                                <?php 
                                    $connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
                                    $sql = "SELECT b1.id_san_pham,b2.ten_loai_san_pham,ten_san_pham,gia_ban,hinh_anh,mo_ta, b1.id_loai_san_pham FROM tbl_san_pham as b1 JOIN tbl_loai_san_pham as b2 ON b1.id_loai_san_pham=b2.id_loai_san_pham";
                                    $ket_qua = mysqli_query($connect,$sql);
                                    
                                ?>
                                <table>
                                    <tr>
                                    <th><h4 class="box-title" style="" >Sản phẩm </h4></th>
                                    <th><a href="san_pham_them.php"><button style="margin-left: 750px; color: #ffffff; background: #00C292;border: none; padding: 10px 15px;">Thêm sản phẩm</button></a></th>
                                    </tr>
                                </table>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th style="width: 85px">Mã SP</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Loại</th>
                                                    <th style="width: 80px;">Hình ảnh</th>
                                                    <th style="width: 100px;">Giá Bán</th>
                                                    <th style="width: 400px;">Mô tả</th>
                                                    <th style="width: 150px; text-align: center;">Chức năng</th>
                                                </tr>
                                            </thead>
                                    <?php 
                                        while ($row = mysqli_fetch_array($ket_qua)) {
                                            
                                    ?>
                                            <tbody>
                                                <tr style="text-align: center;">
                                                    <td class="serial"><?php echo $row['id_san_pham'] ;?></td>
                                                    <td> <?php echo $row['ten_san_pham'] ;?> </td>
                                                    <td> <span class="name"><?php echo $row['ten_loai_san_pham'] ;?></span> </td>
                                                    <td> <span class="product" style="text-align: justify;"><img src="../img/shop/<?php echo $row["hinh_anh"] ;?>" style="width: 130px; height: auto;"></span> </td>
                                                    <td> <span class="name"><?php echo number_format($row["gia_ban"],0,",",".") ;?></span> </td>
                                                    <td><span ><?php echo $row['mo_ta'] ;?></span></td>
                                                    <td>
                                                    <a href="san_pham_sua.php?id=<?php echo $row["id_san_pham"] ;?>"><img src="images/edit.jpg" style="width: 32px; height: auto;"></a>
                                                    <a href="san_pham_xoa.php?id=<?php echo $row["id_san_pham"] ;?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm?')" ><img src="images/delete.jpg" style="width: 40px; height: auto;"></a> 
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



                <!-- Modal - Calendar - Add New Event -->
                <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add New Event</strong></h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#event-modal -->
                <!-- Modal - Calendar - Add Category -->
                <div class="modal fade none-border" id="add-category">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add a category </strong></h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="pink">Pink</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        
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
