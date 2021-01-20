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
                            <li class="active"><a href="./shop.php">Shop</a></li>
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
<body>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Shop</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.php">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    
    <!-- Shop Section Begin -->
    
        <section class="shop spad">
        <div class="container">
            <div class="shop__option">
            <?php  
                $connect = mysqli_connect("localhost", "root", "", "cua_hang_banh");
                if (isset($_REQUEST['ok'])) 
                            {
                $search ="";
                
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                
                    $strSelect = "SELECT id_san_pham,b2.ten_loai_san_pham,ten_san_pham,gia_ban,hinh_anh FROM tbl_san_pham as b1 JOIN tbl_loai_san_pham as b2 ON b1.id_loai_san_pham=b2.id_loai_san_pham where ten_san_pham like '%$search%' ";
                    $resultSP = mysqli_query($connect,$strSelect);
                    $so_san_pham = mysqli_num_rows($resultSP);
                    $so_san_pham_tren_mot_trang = 12;
                    $so_trang = ceil($so_san_pham/$so_san_pham_tren_mot_trang);
                    //lay so sanpham bo qua
                    $trang = 1;
                    if(isset($_GET['trang'])){
                        $trang = $_GET['trang'];
                    }
                    $bo_qua = ($trang - 1) * $so_san_pham_tren_mot_trang;
                    $strSelect = "$strSelect limit $so_san_pham_tren_mot_trang offset $bo_qua";
                    $resultSP = mysqli_query($connect,$strSelect);
                
            ?>
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="shop__option__search">
                            <form action="" method="GET">
                                <input name="search" type="text" placeholder="Tìm Kiếm"  id="tim_kiem" >
                                <button type="submit" value="search" name="ok"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
            <?php 
                if ($so_san_pham > 0 && $search != "") 
                                            {   

                while($row = mysqli_fetch_array($resultSP)) {

            ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
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
                }
            ?>
            <div class=container>
                <div class="shop__last__option">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__pagination">
                        <?php for($i=1;$i<=$so_trang;$i++){ ?>
                            <a href="?trang=<?php echo $i ?>"><?php echo $i ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php  }
                                     
                                    else 
                                    {
                                        echo "Không tìm thấy kết quả!";
                                    }
                                }
                                } 
                            else { 
                    $strSelect = "SELECT id_san_pham,b2.ten_loai_san_pham,ten_san_pham,gia_ban,hinh_anh FROM tbl_san_pham as b1 JOIN tbl_loai_san_pham as b2 ON b1.id_loai_san_pham=b2.id_loai_san_pham  ";
                    $resultSP = mysqli_query($connect,$strSelect);
                    $so_san_pham = mysqli_num_rows($resultSP);
                    $so_san_pham_tren_mot_trang = 12;
                    $so_trang = ceil($so_san_pham/$so_san_pham_tren_mot_trang);
                    //lay so sanpham bo qua
                    $trang = 1;
                    if(isset($_GET['trang'])){
                        $trang = $_GET['trang'];
                    }
                    $bo_qua = ($trang - 1) * $so_san_pham_tren_mot_trang;
                    $strSelect = "$strSelect limit $so_san_pham_tren_mot_trang offset $bo_qua";
                    $resultSP = mysqli_query($connect,$strSelect); ;?>
                <div class="shop__option">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="shop__option__search">
                            <form action="" method="GET">
                                <input name="search" type="text" placeholder="Tìm Kiếm"  id="tim_kiem"   >
                                <button type="submit" value="search" name="ok"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
            <?php 

                while($row = mysqli_fetch_array($resultSP)) {

            ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
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
                }
            ?>
            <div class=container>
                <div class="shop__last__option">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__pagination">
                        <?php for($i=1;$i<=$so_trang;$i++){ ?>
                            <a href="?trang=<?php echo $i ?>"><?php echo $i ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

<?php 
                                    };?>

            </div>
        </div>
    </section>

    <!-- Shop Section End -->

<?php
require_once 'footer.php';
?>
