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

   <section class="instagram spad" style=" background: #FDF3EA; height: 800px; width: 2000px;padding-bottom: 20px" >
        <div class="container" style=" background: white; margin-top: 50px;margin-bottom: 5px;margin-left: 50px;">
            <div class="row">
                <div class="contact__text">
                   <h3 style="color: black">ĐÁNH GIÁ</h3>
                </div>
                <div style="margin-left: 80px">
                  <form style="height: 400px;width: 500px; margin-top: 100px;";  method="POST" action="../cake/danh_gia_thuc_hien.php" enctype="multipart/form-data">
                 <table style="height:auto;width: 500px" cellpadding="10px">
                     <tr>
                       <th >Họ tên</th>
                       <th><input type="text" name="txtHoTen" style="width: 150%"></th>
                    </tr>
                    <tr>
                        <th>Ảnh</th>
                        <th><input type="file" name="txtAnhMinhHoa" style="width: 100%"></th>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <th><input type="text" name="txtDiaChi" style="width: 150%"></th>
                    </tr>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th><input type="text" name="txtTenSanPham" style="width: 150%"></th>
                    </tr>
                    <tr>
                        <th>Nội dung</th>
                        <th><textarea name="txtNoiDung" style="width: 150%"></textarea></th>
                    </tr>
                    <tr>
                        <th>Mức độ hài lòng</th>
                        <th>
                            <select name="txtHaiLong" id="">
                                <option value="0">---Chọn---</option>
                                <option value="1">1. Rất không hài lòng</option>
                                <option value="2">2. Không hài lòng</option>
                                <option value="3">3. Hài lòng</option>
                                <option value="4">4. Rất hài lòng</option>
                                <option value="5">5. Cực kỳ hài lòng</option>
                            </select>    
                        </th>
                    </tr>
                    <tr>
                        <th></th>
                        <th colspan="3" align="center">
                        <input type="submit" name="Danhgia" style="width: 50%;height:position: center; background: #FC741A;" value="Đánh giá"></input></th>
                    </tr>
                 </table>
                </form>                        
              </div>
            </div>
        </div>
    </section>
   <?php
        require_once 'footer.php';
    ?>