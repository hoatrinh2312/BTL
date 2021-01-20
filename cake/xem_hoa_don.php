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
                                    <li><a href="./checkout.php">Your order</a></li>
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
                        <h2>Your Order</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.php">Home</a>
                        <span>Your Order</span>
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
   <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <?php if(!isset($_SESSION["logged"])){
                                ?>
                            <div class="woocommerce-info"><a href="user/login.php" ><font  size="5px">Nhấn vào đây để đăng nhập</font></a>
                            </div>
                <?php } ?>

                <div class="col-lg-8">
                    <form action="#" method="post">
                    <div class="shopping__cart__table">
                        <table style="text-align: center; width: 1050px;">
                            <thead>
                                <tr>
                                    <th style="width: 150px;">Mã hóa đơn</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Thành tiền</th>
                                    <th>Trạng thái</th>
                                    
                                </tr>
                            </thead>
                <?php 
                    $tong_tien =0;
                    if(isset($_SESSION["logged"])){
                        $id = $_SESSION["id"];
                    }
                    $connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
                    $sql = "SELECT b2.order_id, b1.ten_san_pham, b2.so_luong, b2.thanh_tien,b3.status,b2.gia_ban FROM tbl_san_pham as b1 JOIN tbl_order_details as b2 ON b1.id_san_pham = b2.id_san_pham JOIN tbl_order as b3 ON b2.order_id=b3.order_id WHERE b3.id_dang_nhap = '".$id."'    ";
                    $result = mysqli_query($connect,$sql);
                    while ($row=mysqli_fetch_array($result)) {
                        $tong_tien+=$row['thanh_tien'];
                    
                ?>
                            <tbody>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <h6><?php echo $row['order_id'] ;?></h6>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <h6><?php echo $row['ten_san_pham'] ;?></h6>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <h6><?php echo $row['so_luong'] ;?></h6>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <h6><?=number_format($row['gia_ban'],0,",",".")  ?></h6>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <h6><?=number_format($row['thanh_tien'],0,",",".")  ?></h6>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <h6><?php echo $row['status'] ;?></h6>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <?php } ?>
                            <tbody>
                                <tr>
                                    <td class="quantity__item">TỔNG TIỀN</td>
                                    <td class="cart__price">&nbsp;</td>
                                    <td class="cart__price">&nbsp;</td>
                                    <td class="cart__price"><?=number_format($tong_tien,0,",",".")  ?></td>
                                    <td class="cart__price">&nbsp;</td>
                                </tr>
                            </tbody>

                    
                        </table>
                    </div>
                    </form>
                </div>
            </div>
        </div>
            
     </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    <?php
        require_once 'footer.php';
    ?>
