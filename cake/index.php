    <?php
        require_once 'header.php';
    ?>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="./about.php">About</a></li>
                            <li><a href="./shop.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Checkout</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>


<body>


    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Welcome to <br> Macrina Bakery!</h2>
                                <a href="./shop.php" class="primary-btn">Our shop</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Making your life sweater one bite at a time!</h2>
                                <a href="./about.php" class="primary-btn">Our cakes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
   <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>Giới thiệu</span>
                            <h2>Macrina Bakery-<br>sự đơn giản và sẻ chia!</h2>
                        </div>
                        <p>Ý tưởng về Macrina Bakery được gieo mầm khi Leslie Mackie đang theo học tại trường nấu ăn
                        và tiếp tục bén rễ trong suốt sự nghiệp đầu bếp đầu tiên và trong những chuyến du lịch của cô.</p>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
            <?php 
                $connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
                $sql = "SELECT b2.ten_loai_san_pham, id_san_pham,gia_ban,hinh_anh,ten_san_pham FROM tbl_san_pham as b1 JOIN tbl_loai_san_pham as b2 ON b1.id_loai_san_pham=b2.id_loai_san_pham ORDER BY rand() LIMIT 4";
                $results = mysqli_query($connect,$sql);
                while ($row=mysqli_fetch_assoc($results)) {
            ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/<?php echo $row['hinh_anh'] ?>">
                            <div class="product__label">
                                <span><?php echo $row["ten_loai_san_pham"] ?></span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"><?php echo $row["ten_san_pham"] ?></a></h6>
                            <div class="product__item__price"><?=number_format($row['gia_ban'],0,",",".")?></div>
                            <div class="cart_add">
                                <a href="shop-details.php?id=<?php echo $row['id_san_pham'] ?>">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>

    <!-- Product Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="instagram__text">
                        <div class="section-title">
                            <span>Theo dõi trên instagram</span>
                            <h2>Những khoảnh khắc ngọt ngào<br> được lưu giữ thành kỉ niệm!</h2>
                        </div>
                        <h5><i class="fa fa-instagram"></i> @macrinabakery</h5>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/ig_cake_4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="img/instagram/ig_cake_2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/ig_cake_5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/ig_cake_6.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="img/instagram/ig_cake_3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/ig_cake_7.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

<?php
require_once 'footer.php';
?>
