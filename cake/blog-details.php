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

    <!-- Blog Hero Begin -->
    
                                <?php
                // 1. KẾT NỐI ĐẾN CSDL
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
               

                //4. Hiển thị dữ liệu lấy được lên màn hình
                $i=0;
                while ($row = mysqli_fetch_array($noi_dung)) {
                    $i++;
            ;?>
                <!-- ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
                <div class="blog-hero set-bg" data-setbg="img/blog/details/blog-hero.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="blog__hero__text">
                        <div class="label">Làm Bánh Cùng</div>
                        <h2>Macrina Bakery</h2>
                        <ul>
                            <li>By <span> <?php echo $row["tac_gia"];?></span></li>
                            <li><?php echo $row["ngay_dang"];?></li>
                            <li><?php echo $row["luot_xem"];?> Views</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__share">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                        <div class="blog__details__text">
                            
                        </div>
                        <div class="blog__details__recipe">
                            <div class="blog__details__recipe__item">
                                <h6><img src="img/blog/details/user.png" alt=""> Phục Vụ</h6>
                                <span>1 bếp chính, 2 bếp phụ</span>
                            </div>
                            <div class="blog__details__recipe__item">
                                <h6><img src="img/blog/details/clock.png" alt=""> Chuẩn bị</h6>
                                <span>15 Phút</span>
                            </div>
                            <div class="blog__details__recipe__item">
                                <h6><img src="img/blog/details/clock.png" alt=""> Chế biến</h6>
                                <span>45 phút</span>
                            </div>
                        </div>
                <div class="blog__details__recipe__details">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog__details__ingredients">
                                        <h3><?php echo $row["tieu_de"];?></h3>
                                        <br>
                            <h6>Nguyên liệu</h6>
                            <ul><?php echo $row["Nguyen_lieu"];?>
                            </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="blog__details__ingredients__pic">
                                        <div class="blog__item__pic set-bg" data-setbg="./img/blog/<?php echo $row["hinh_anh"];?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog__details__direction">
                            <br>
                            <h6>Cách làm</h6>
                            <ul>
                               <?php echo $row["Cach_lam"];?>
                            </ul>
                            <p> Chúc các bạn thành công & thường xuyên theo dõi web để cập nhật nhiều món ngon nhé <i class="fa fa-heart" aria-hidden="true"></i></p>
                        </div>
                <!-- KẾT THÚC ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
            <?php
                }
            ;?>
                           
                        <div class="blog__details__text">
                            <p>Thế giới các loại bánh cực kì đa dạng và phong phú, thế nhưng không phải loại bánh nào bạn cũng có thể làm thành công ngay lần đầu tiên, đặc biệt là với những người mới bắt đầu.</p>
                            <p>Để làm được những món bánh cầu kì, phức tạp, bạn sẽ cần những kỹ năng nâng cao, chuyên sâu và kinh nghiệm được tích lũy trong thời gian làm việc. Còn nếu bạn là “gà mới” thì sẽ thế nào? Những món bánh nào sẽ phù hợp để thử làm với những kỹ năng sơ khai mà bạn có được?</p>
                            <p>Cùng Macrina Bakery tạo ra những điều bất ngờ nhé ! </p>
                        </div>
                        <div class="blog__details__tags">
                            <span>Tag</span>
                            <a href="#">Food</a>
                            <a href="#">Material</a>
                            <a href="#">Cakes</a>
                            <a href="#">Baking</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

 <?php 
               
            $sql1 = "
                SELECT luot_xem
                FROM tbl_blog
                WHERE id_blog='".$id_blog."'
            ";

                // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
                $noi = mysqli_query($ket_noi, $sql1);
                $each = mysqli_fetch_array($noi);
                $view = $each["luot_xem"]+1;
                $up = "UPDATE `tbl_blog` SET `luot_xem` = '".$view."' WHERE `tbl_blog`.`id_blog` = '".$id_blog."' ";
                $result = mysqli_query($ket_noi,$up);
    ?>
     <?php
        require_once 'footer.php';
    ?>