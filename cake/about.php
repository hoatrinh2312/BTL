    <?php
        require_once 'header.php';
    ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li class="active"><a href="./about.php">About</a></li>
                            <li><a href="./shop.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contact</a></li>
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
                        <h2>About</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.php">Home</a>
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about spad" style="padding-bottom: 15px; padding-top: 15px;">
        <div class="container" style="margin-top: 15px;">
<!--             <div class="row">
                <div class="col-lg-12">
                    <div class="about__img">
                       <img src="img/about-img6.jpg" alt="">
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>Giới thiệu</span>
                            <h2>Macrina Bakery-sự đơn giản và sẻ chia</h2>
                        </div>
                        <p>Ý tưởng của Macrina Bakery được gieo mầm khi Leslie Mackie đang theo học tại trường nấu ăn và tiếp tục bén rễ trong suốt sự nghiệp đầu bếp đầu tiên và trong những chuyến du lịch của cô.</p>
                        <p>Leslie Mackie từng nói:"Khi tìm kiếm một cái tên cho tiệm bánh mới này, tôi muốn một cái gì đó không liên quan đến bất kỳ quốc gia hay nền văn hóa nào, nhưng phản ánh triết lý của tôi. Đầu tiên tôi thích âm thanh của cái tên Macrina, nhà thần bí và nhìn xa trông rộng của Hy Lạp thế kỷ thứ 4, sau đó tôi phát hiện ra rằng qua nghiên cứu, Macrina bắt đầu một trong những cộng đồng đầu tiên có tài sản chung và nhấn mạnh một cuộc sống đơn giản, tự túc. Quan tâm nhiều như tôi làm về mối liên hệ giữa bánh mì và sự hiệp thông chia sẻ xảy ra trong các bữa ăn, có một mối liên hệ tự nhiên với triết lý của cộng đồng Macrina. Triết lý của tiệm bánh là nâng cao cả sản phẩm tự nhiên và hương vị của các loại ngũ cốc khác nhau. Các món nướng được tạo ra từ táo Tây Bắc, khoai tây, quả nam việt quất và quả phỉ, cũng như bột mì, lúa mạch đen, lúa mạch và kiều mạch. Macrina Casera, bánh mì nhà, được phát triển để có thể ăn trong bất kỳ bữa ăn nào, bổ sung cho tất cả các loại thực phẩm. Những đầu bếp tại Macrina luôn tìm tòi, thử nghiệm và kết hợp những nguyên liệu mới mẻ để chế biến lên những chiếc bánh không chỉ đẹp về vẻ bề ngoài mà còn đem đến một hương vị khó quên cho khách hàng."
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__bar">
                        <div class="about__bar__item">
                            <p>Trang trí</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Hương vị</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                            <div class="about_picture">
                                <img style="width: 550px; height: 650px;" src="img/hero/hero-3.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span><a href="../cake/danh_gia.php">Đánh giá</a>
                </a>
            </span>
                        <h2>Cảm nhận của khách hàng</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <?php
                    $ket_noi= mysqli_connect("localhost","root","","cua_hang_banh");

                   $sql ="
                   SELECT *
                   FROM tbl_danh_gia 
                   ";
                   //caau lenh lay ra du lieu mong muon
                   $noi_dung = mysqli_query($ket_noi, $sql);
                   //4.
                   
                   while ($row= mysqli_fetch_array($noi_dung)) {
                    
                    ;?>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                
                                <div class="testimonial__author__pic"> 
                                    <img src="img/đánh giá/<?php echo $row["hinh_anh"];?>">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5><?php echo $row["ho_ten"];?></h5>
                                    <span><?php echo $row["dia_chi"];?></span>
                                </div>
                            </div>
                            <div class="rating">
                                <span><?php echo $row["so_sao"];?>/5</span>
                            </div>
                            <p><?php echo $row["noi_dung"];?></p>
                            <p><?php echo $row["ten_san_pham"];?></p>
                        </div>
                    </div>
                     <?php
                }
                ;?>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <span>Đội ngũ nhân viên</span>
                        <h2>Sweet Staff </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $ket_noi= mysqli_connect("localhost","root","","cua_hang_banh");

                   $sql ="
                   SELECT *
                   FROM tbl_nhan_vien order by id_nhan_vien ASC LIMIT 4
                   ";
                   //caau lenh lay ra du lieu mong muon
                   $noi_dung = mysqli_query($ket_noi, $sql);
                   //4.
                   $i=0;
                   while ($row= mysqli_fetch_array($noi_dung)) {
                    $i++;
                    ;?>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="img/team/<?php echo $row["hinh_anh"];?>"">
                        <div class="team__item__text">
                            <h6><?php echo $row["ho_ten"];?></h6>
                            <span><?php echo $row["cong_viec"];?></span>
                            <div class="team__item__social">
                                <a href="<?php echo $row["facebook"];?>""><i class="fa fa-facebook"></i></a>
                                <a href="<?php echo $row["instagram"];?>""><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ;?>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Footer Section Begin -->
   <?php
        require_once 'footer.php';
    ?>
