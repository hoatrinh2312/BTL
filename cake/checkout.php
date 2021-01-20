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
                                    <li><a href="./xem_hoa_don.php">Your order</a></li>
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
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.php">Home</a>
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <?php if(!isset($_SESSION["logged"])){
        ?>
        <div class="woocommerce-info"><a href="user/login.php" ><font style="margin-left: 100px;" size="5px">Nhấn vào đây để đăng nhập</font></a>
                            </div>
    <?php } ?>
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="process_dat_hang.php" method="GET">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                    <?php 
                        if(isset($_SESSION["logged"])){
                        $connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
                        $id = $_SESSION['id'] ;
                        $sql = "SELECT * FROM tbl_dang_nhap WHERE id_dang_nhap= '".$id."' ";
                        $array = mysqli_query($connect,$sql);
                        $each = mysqli_fetch_array($array);
                        if(isset($_SESSION['gio_hang'])){
                    ?>
                            <h6 class="checkout__title">Chi tiết thanh toán</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Họ và tên<span>*</span></p>
                                        <input type="text" name="ten_nguoi_nhan" value="<?php echo $each['ten_dang_nhap'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ giao hàng<span>*</span></p>
                                <input class="checkout__input__add" type="text" name="ten_dia_chi" value="<?php echo $each['dia_chi'] ?>" placeholder="Số nhà, thôn(xóm), xã, quận(huyện),Tỉnh">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại<span>*</span></p>
                                        <input type="text" name="sdt_nguoi_nhan" value="<?php echo $each['so_dien_thoai'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email" value="<?php echo $each['email'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Chú ý đơn hàng</p>
                                <input type="text" name="note" placeholder="Chú ý đơn hàng">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                
                        
                                <h6 class="order__title">Đơn hàng của bạn</h6>
                                <div class="checkout__order__products">Sản phẩm <span>Tổng</span></div>
                        <?php 
                            $gio_hang = $_SESSION['gio_hang'];
                            $tong_tien = 0;
                            foreach ($gio_hang as $id_san_pham => $soluong) {
                         $sql = "select * from tbl_san_pham where id_san_pham = '$id_san_pham'";
                         $i=0;
                    }
                            foreach ($gio_hang as $id_san_pham => $tbl_san_pham) {
                                $i++;
                        ?>
                                <?php $tong_tien += $tbl_san_pham['gia_ban']*$tbl_san_pham['so_luong']; ?>
                              
                                <ul class="checkout__total__products">
                                    <li><samp><?php echo "0$i. ";?></samp> <?php echo $tbl_san_pham['ten_san_pham'] ;?> <span><?=number_format($tbl_san_pham['gia_ban']*$tbl_san_pham['so_luong'],0,",",".") ;?></span></li>
                                </ul>
                        <?php } ?>
                                <ul class="checkout__total__all">
                                    <li>Tổng cộng <span><?=number_format($tong_tien,0,",",".")  ?></span></li>
                                </ul>
                                
                                <button type="submit" class="site-btn">Đặt hàng</button>
                            </div>
                        <?php 
                            }else{ ?>
                                    <font size="4px" color="red">Bạn chưa mua hàng</font>
                        <?php } 
                        }?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    <?php
        require_once 'footer.php';
    ?>
