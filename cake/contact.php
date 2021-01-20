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
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li class="active"><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="map">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        
                    
                <div class="map__iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.525934602819!2d105.82820931414578!3d21.0116319937405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab80379563ab%3A0x34b6d1cf9e68d591!2zMjcgSOG7kyDEkOG6r2MgRGksIE5hbSDEkOG7k25nLCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1610254237394!5m2!1svi!2s" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
</div>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <div class="contact__address">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h5><b>Thông Tin Liên Hệ</b></h5>
                            <br>
                            <ul>
                                <li>
                                    <span class="icon_pin_alt"></span>
                                    <p>27 Hồ Đắc Di- Đống Đa_Hà Nội</p>
                                </li>
                                <li><span class="icon_headphones"></span>
                                    <p>098 131 16 42</p>
                                </li>
                                <li><span class="icon_mail_alt"></span>
                                    <p>Macrinabakery27hodacdi@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">

                    
                    <h5><b>Hỗ Trợ Khách Hàng</b></h5>
                    <br>
                    <div class="ul-footer">
                         <ul>
                                <li>
                                    <a href="./huong_dan_gioi_thieu.php">Giới thiệu</a>
                                </li>
                                <li><a href="./huong_dan_mua_hang.php"> Hưỡng dẫn mua hàng</a></li>

                                <li>
                                    <a href="./huong_dan_thanh_toan.php">Dịch vụ và thanh toán</a>
                                </li>
                                <li>
                                    <a href="./huong_dan_bao_mat.php">Chính sách bảo mật</a>
                                </li>
                                   
                         </ul>
                    </div>                  

                    </div><div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h5><b>Tiếp Xúc</b></h5>
                            <p>
                            <ul>
                                <p>Trong nhiều năm, Macrina Bakery đã cung cấp cho những người đam mê làm bánh những dư vị khó quên.Nếu có bất kỳ câu hỏi nào về chúng tôi? Vui lòng liên hệ với chúng tôi bên dưới!</p>
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>   
                        
                
              <br>          
                    
             <hr> 
             <br> 
                
            </div>
             <br>          
                    
             <hr> 
             <br>  
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact__text">
                        <h3>Liên Hệ Chúng Tôi</h3>
                        <ul>
                            <li>Thời Gian Làm Việc</li>
                            <li>Mon-Fri: 5:00am to 9:00pm</li>
                            <li>Sat-Sun: 6:00am to 9:00pm</li>
                        </ul>
                        <img src="img/cake-piece.png" alt="">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="contact__form">
                        <form action="lien_he_them_thuc_hien.php" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="txtTenKhach" placeholder="Tên của bạn">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="txtEmail" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea type="text" name="txtPhanHoi" placeholder="Phản hồi của bạn"></textarea>
                                    <button type="submit"  class="site-btn">Gửi đến chúng tôi</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>GIỜ MỞ CỬA</h6>
                        <ul>
                            <li>Thứ 2- Thứ 6: 08:00  – 20:30 </li>
                            <li>Thứ 7-Chủ Nhật: 10:00  – 16:30 </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Bánh là niềm đam mê bất tận của chúng tôi-đem lại cho bạn những dư vị
                        đậm chất Macrina Bakery</p>
                        <div class="footer__social">
                            <a href="https://www.facebook.com/macrinabakery"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/macrinabakery/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>Theo dõi</h6>
                        <p>Cập nhật những thông tin mới nhất</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>
                  <div class="col-lg-5">
                    <div class="copyright__widget">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>