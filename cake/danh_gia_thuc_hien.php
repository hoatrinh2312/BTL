
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thực hiện thêm mới đánh giá</title>
</head>
<body>
<?php
    $ket_noi= mysqli_connect("localhost","root","","cua_hang_banh");
//lấy dữ liệu từ trang trước chuyển sang
    $ho_ten=$_POST["txtHoTen"];
    $anh_minh_hoa="img/đánh giá/".basename($_FILES["txtAnhMinhHoa"]["name"]);
    $file_anh_tam=$_FILES["txtAnhMinhHoa"]["tmp_name"];
    $result=move_uploaded_file($file_anh_tam, $anh_minh_hoa);
    if(!$result){
        $anh_minh_hoa=null;
    }
    $dia_chi=$_POST["txtDiaChi"];
    $ten_san_pham=$_POST["txtTenSanPham"];
    $noi_dung=$_POST["txtNoiDung"];
    $muc_do_hai_long=$_POST["txtHaiLong"];



    //viết câu lệnh spl thêm mớiLL
    $sql="INSERT INTO `tbl_danh_gia` (`id_danh_gia`, `ho_ten`, `hinh_anh`, `dia_chi`, `ten_san_pham`, `noi_dung`, `id_muc_do_hai_long`) VALUES (NULL, '".$ho_ten."','".$anh_minh_hoa."', '".$dia_chi."', '".$ten_san_pham."', '".$noi_dung."', '".$muc_do_hai_long."')";
    
    //echo $sql;exit();
    
//caaau lenh lay ra du lieu mong muon
    mysqli_query($ket_noi, $sql);

    //5.kết nối thành công trang đánh giá
    echo 
            "
                <script type='text/javascript'>
                    window.alert('Bạn đã đánh giá sản phẩm thành công');
                </script>
            ";
            echo 
            "
                <script type='text/javascript'>
                    window.location.href='../cake/about.php'
                </script>
            ";
;?>

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Giờ làm việc</h6>
                        <ul>
                            <li>Thứ 2 - Thứ 6: 08:00 am – 08:30 pm</li>
                            <li>Thứ 7 - Chủ nhật: 10:00 am – 16:30 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Bánh là niềm đam mê bất tận của chúng tôi-đem lại cho bạn những dư vị đậm chất của Macrina Bakery.</p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/macrina_cafe_/"><i class="fa fa-instagram"></i></a>
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