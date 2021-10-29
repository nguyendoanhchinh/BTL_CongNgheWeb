<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mystery Code - Blog</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">Nguyễn Anh Đức</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav class="nav-menu">
                <ul>
                    <li class="active"><a href="index.html"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                    <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                    <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
                    <li><a href="#services"><i class="bx bx-server"></i> Services</a></li>
                    <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

                </ul>
            </nav>
            <!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Nguyễn Anh Đức</h1>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Thông tin cá nhân</h2>

                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">

                        <div class="row">
                            <div class="col-lg-6">
                            <?php

#Lấy dữ liệu từ CSDL và đổ ra bảng(phần lặp lại)
#B1 kết nối với CSDL
$conn=mysqli_connect('localhost','root','','thicuoiki');
mysqli_set_charset($conn,"utf8");//Định dang font chữ
if(!$conn){
    die("Không thể kết nối, kiểm tra lại các tham số kết nối");
}
#Bước 2: Khai báo câu lệnh thực thi và thực hiện truy vấn
if(isset($_GET['id'])) {
    $id = $_GET['id'];
$sql = "SELECT* from users WHERE id=$id";
$result = mysqli_query($conn,$sql);
}
#Bước 3: Xử lí kết quả trả về
if(mysqli_num_rows($result)>0){
    $i=1;
    while($row = mysqli_fetch_assoc($result)){
?>
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Tên:</strong><?php echo $row['ten']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Ngày Sinh:</strong><?php echo $row['ngaysinh']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> <?php echo $row['website']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Điện thoại:</strong> <?php echo $row['dienthoai']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Thành Phố:</strong><?php echo $row['thanhpho']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Tuổi:</strong> <?php echo $row['tuoi']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Bằng cấp:</strong> <?php echo $row['bangcap']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> <?php echo $row['email']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Vị trí:</strong> <?php echo $row['vitri']; ?></li>
                                    <li><button><a href="edit.php?id=<?php echo $row['id']; ?>">Chỉnh sửa</a></button><li>
                                </ul>
                                <?php
                        $i++;
                        }
                       }

                    ?>
                            </div>
                            <div class="col-lg-6">
                                
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Mystery Code</span></strong>
            </div>
            <div class="credits">
                Designed by <a href="#">Mystery Code</a>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>