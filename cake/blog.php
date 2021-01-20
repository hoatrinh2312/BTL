    <?php
        require_once 'header.php';
    ?>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./about.php">About</a></li>
                            <li><a href="./shop.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Checkout</a></li>
                                </ul>
                            </li>
                            <li  class="active"><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Blog</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.php">Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad" style="padding-top: 30px; padding-bottom: 30px;">
        <div class="container">
            <?php  
                    $connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
                    $sql = "SELECT * FROM tbl_blog  ";
                    $result = mysqli_query($connect,$sql);
                    $so_bai_viet = mysqli_num_rows($result);
                    $so_bai_viet_tren_mot_trang = 4;
                    $so_trang = ceil($so_bai_viet/$so_bai_viet_tren_mot_trang);
                    //lay so sanpham bo qua
                    $trang = 1;
                    if(isset($_GET['trang'])){
                        $trang = $_GET['trang'];
                    }
                    $bo_qua = ($trang - 1) * $so_bai_viet_tren_mot_trang;
                    $sql = "$sql limit $so_bai_viet_tren_mot_trang offset $bo_qua";
                    $result = mysqli_query($connect,$sql);
                
            ?>
            <div class="row">
                <div class="col-lg-8">
                            <?php
                $i=0;
                while ($row = mysqli_fetch_array($result)) {
                    $i++;
            ;?>
                <!-- ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
                <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="./img/blog/<?php echo $row["hinh_anh"];?>" >
                            <div class="blog__pic__inner">
                                <div class="label">Recipes</div>
                                <ul>
                                    <li>By <span> <?php echo $row["tac_gia"];?></span></li>
                                    <li><?php echo $row["ngay_dang"];?></li>
                                    <li><?php echo $row["luot_xem"];?> Views</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__item__text">
                            <h2><?php echo $row["tieu_de"];?></h2>
                            <p><?php echo $row["Mo_ta"];?></p>
                            <a href="blog-details.php?id=<?php echo $row["id_blog"];?>">Công thức</a>
                        </div>
                    </div>
                <!-- KẾT THÚC ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
            <?php
                }
            ;?>
                    <div class="shop__pagination">
                        <?php for($i=1;$i<=$so_trang;$i++){ ?>
                            <a href="?trang=<?php echo $i ?>"><?php echo $i ?></a>
                            <?php } ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__item">
                            <h5>Follow me</h5>
                            <div class="blog__sidebar__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h5>Bài viết phổ biến</h5>
                            
                           <!--  <div class="blog__sidebar__recent"> -->

                                <?php 
                                $sql1 = "SELECT * FROM tbl_blog ORDER BY id_blog ASC LIMIT 4";
                                $ket_qua = mysqli_query($connect,$sql1);
                                while ($row =mysqli_fetch_array($ket_qua)) {
                                    
                            ?>
                            <div class="blog__sidebar__recent" style="margin-left: 50px;">
                                    <div class="blog__sidebar__recent__item__pic" >
                                        <img style=" width: 100px; height: 100px; margin-left: 75px;" src="img/blog/<?php echo $row["hinh_anh"];?>" >
                                    </div>
                                    <div class="blog__sidebar__recent__item__text" style="width: 285px; height: 90px;">
                                        <a href="blog-details.php?id=<?php echo $row["id_blog"];?>"><h4 style="font-size: 15px; text-align: center;"><?php echo $row["tieu_de"];?></h4></a>
                                        <span style="margin-left: 30px;"><?php echo $row["ngay_dang"];?></span>
                                    </div>
                                
                            </div>

                            <?php }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <?php
        require_once 'footer.php';
    ?>