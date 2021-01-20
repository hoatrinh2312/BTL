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
                                    <li><a href="./xem_hoa_don.php">Your Order</a></li>
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
                        <h2>Giỏ hàng</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.php">Home</a>
                        <span>Giỏ hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    
    <!-- Shopping Cart Section Begin -->
    <?php  
                $connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
                $strSelect = "select * from tbl_san_pham";
                $resultSP = mysqli_query($connect,$strSelect);
                
    ?>
    
<!-- Shopping Cart Section Begin -->

    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <?php if(!isset($_SESSION["logged"])){
                                ?>
                            <div class="woocommerce-info"><a href="user/login.php" ><font  size="5px">Nhấn vào đây để đăng nhập</font></a>
                            </div>
                <?php } ?>

                <div class="col-lg-8">
                <?php if(isset($_SESSION["logged"])){
                ?>
                    <?php if (isset($_SESSION['gio_hang']) && count($_SESSION['gio_hang'])) {
                            $array_gio_hang = $_SESSION['gio_hang'];    
                        ?>
                    <form action="cap_nhat_gio_hang.php" method="post">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                <?php 
                    if(isset($_SESSION['gio_hang'])){
                        $gio_hang = $_SESSION['gio_hang'];
                ?>
                <?php 
                    $tongtien=0;
                    foreach ($gio_hang as $id_san_pham => $tbl_san_pham) {
                ?>
                            <tbody>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="img/shop/<?php echo $tbl_san_pham['hinh_anh'] ;?>" style="width: 100px; height: auto">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6><?php echo $tbl_san_pham['ten_san_pham'] ;?></h6>
                                            <h5><?=number_format($tbl_san_pham['gia_ban'],0,",",".")?></h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" name="arrSL[]" value="<?php echo $tbl_san_pham['so_luong'];?>" >
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price"><?php $tongtien += $tbl_san_pham['gia_ban']*$tbl_san_pham['so_luong']; ?>
                                        <?=number_format($tbl_san_pham['gia_ban']*$tbl_san_pham['so_luong'],0,",",".") ;?>
                                    </td>
                                    <td class="cart__close"><a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?')" href="xoa_san_pham_gio_hang.php?id_san_pham=<?php echo $id_san_pham ;?>" style="text-decoration: none""><span class="icon_close"></span></a></td>
                                </tr>
                            </tbody>
                            <?php }?>
                            <?php }?>
                            <tbody>
                                <tr>
                                    <td class="quantity__item">TỔNG TIỀN</td>
                                    <td class="cart__price">&nbsp;</td>
                                    <td class="cart__price"><?=number_format($tongtien,0,",",".")  ?></td>
                                    <td ><a href="xoa-giohang.php" style="text-decoration: none" onclick="return confirm('Bạn có chắc chắn muốn xóa giỏ hàng?')" >Xóa</a></td>
                                </tr>
                            </tbody>

                    
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="shop.php">Tiếp tục mua hàng</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <p><input class="site-btn" type="submit" value="CẬP NHẬT GIỎ HÀNG"  /></p>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <form action="./checkout.php">
                    <div class="cart__total">
                        <h6>Tổng Giỏ Hàng</h6>
                        <ul>
                            <li>Tổng tiền <span><?=number_format($tongtien,0,",",".")  ?></span></li>
                        </ul>
                        <p><input type="submit" name="checkout" class="primary-btn" value="Tiến hành thanh toán"> </p>
                    </div>
                    </form>
                    <?php } else{ ?>
                                  <p style='color: red;'><strong>Không có sản phẩm nào trong giỏ hàng</strong></p>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
            
     </div>
            <?php } ?>
    </section>

    <!-- Shopping Cart Section End -->

    <!-- Footer Section Begin -->
    <?php
        require_once 'footer.php';
    ?>
