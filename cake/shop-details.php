    <?php
        require_once 'header.php';
    ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./about.php">About</a></li>
                            <li><a href="./shop.php">Shop</a></li>
                            <li class="active"><a href="#">Pages</a>
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

<body>
 <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Chi tiết sản phẩm</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.php">Home</a>
                        <a href="./shop.php">Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Details Section Begin -->
 
    <section class="product-details spad" style="margin-bottom: 50px; margin-top: 0px;">
        <div class="container">

            <?php 
                $connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
                    
                    if(isset($_GET["id"])){
                            $id_san_pham = $_GET["id"];
                            $sql = "SELECT id_san_pham,b2.ten_loai_san_pham,ten_san_pham,gia_ban,hinh_anh,mo_ta, b1.id_loai_san_pham FROM tbl_san_pham as b1 JOIN tbl_loai_san_pham as b2 ON b1.id_loai_san_pham=b2.id_loai_san_pham  WHERE id_san_pham= '".$id_san_pham."'";
                            $result_row = mysqli_query($connect,$sql);
                            $row = mysqli_fetch_row($result_row);        
                ?>

            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__img">
                        <div class="product__details__big__img">
                            <img class="big_img" style="width: auto; height: 520px" src="img/shop/<?php echo $row[4] ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <div class="product__label"><?=$row[1] ?></div>
                        <h4 class="justify"><?=$row[2] ?></h4>
                        <h5><?=number_format($row[3],0,",",".")?></h5>
                        <p><?=$row[5] ?></p>
                        <ul>
                            
                            <li>Loại bánh: <span><?=$row[1] ?></span></li>
                        </ul>

                        <form class="product__details__option" action="add.php?id=<?php echo $row[0];?>" method="POST" enctype="multipart/form-data">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" name="quantity[]" value="1" min="1" >
                                </div>
                            </div>
                            <input class="site-btn" type="submit" name="txtAdd" value="Mua sản phẩm">
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>    
    </section>

    <!-- Shop Details Section End -->

    <!-- Related Products Section Begin -->
<section class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                    
                    $others = "SELECT * from tbl_san_pham WHERE id_loai_san_pham= $row[6]  order by rand() limit 4 " ;
                    $Results_row = mysqli_query($connect,$others);
                    while ($row = mysqli_fetch_assoc($Results_row)){ 
                ?>
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/shop/<?=$row['hinh_anh'];?>">
                                <div class="product__label">
                                    <span><?=$row['ten_loai_san_pham'];?></span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="./shop-details.php?id=<?php echo $row['id_san_pham'] ?>"><?=$row['ten_san_pham'];?></a></h6>
                                <div class="product__item__price"><?=number_format($row['gia_ban'],0,",",".")?></div>
                                <div class="cart_add">
                                    <a href="cho_san_pham_vao_gio_hang.php?id=<?php echo $row['id_san_pham'] ?>">Thêm vào giỏ </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                }?>

        
            <?php 
            }else{ ?>
                <font  size="4px" color="red">Không có thông tin chi tiết sản phẩm.<br>
                Bạn vui lòng chọn một sản phẩm để xem được thông tin của chúng.
                </font>
        <?php } ?>
            </div>  
        </div>
    </section>


    <?php
        require_once 'footer.php';
    ?>
