<?php

#Lấy dữ liệu từ CSDL và đổ ra bảng(phần lặp lại)
#B1 kết nối với CSDL
$conn=mysqli_connect('localhost','root','','thicuoiki');
mysqli_set_charset($conn,"utf8");//Định dang font chữ
if(!$conn){
    die("Không thể kết nối, kiểm tra lại các tham số kết nối");
}
#Bước 2: Khai báo câu lệnh thực thi và thực hiện truy vấn
if(isset($_GET['us_id'])) {
    $us_id = $_GET['us_id'];
$sql = "SELECT* from user WHERE us_id=$us_id";
$result = mysqli_query($conn,$sql);
}
#Bước 3: Xử lí kết quả trả về
if(mysqli_num_rows($result)>0){
    $i=1;
    while($row = mysqli_fetch_assoc($result)){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bạn Bè</title>
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
                <img src="<?php echo $row['avatar']; ?> " alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><?php echo $row['us_name']; ?></h1>
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
                    <li class="active"><a href="index.php"><i class="bx bx-home"></i> <span>Trang chủ</span></a></li>
                    <li  class="active"><a href="search fr.php?us_id=<?php echo $row['us_id']; ?>"><i class="bx bx-book-content"></i>Tìm Kiếm Bạn Bè</a></li>
                    <li  class="active"><a href="kb.php"><i class="bx bx-book-content"></i>Lời mời kết bạn</a></li>

                    <li  class="active"><a href="friend2.php"><i class="bx bx-book-content"></i> Bạn bè</a></li>
                    <li  class="active"><a href="plan/plan.php"><i class="bx bx-file-blank"></i> <span>Kế hoạch</span></a></li>
                    <li  class="active"><a href="login.php"><i class="bx bx-envelope"></i>Log Out</a></li>
                    
                    
                </ul>
            </nav>
            <!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Thông tin Bạn bè</h2>

                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                    <img  style = "width:250px" src="<?php echo $row['avatar']; ?>" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content "data-aos="fade-left">

                        <div class="row">
                            <div class="col-lg-6">

                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Họ và tên:</strong><?php echo $row['us_name']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong><?php echo $row['us_email']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Số điện thoại:</strong> <?php echo $row['us_phone']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Thành Phố:</strong> <?php echo $row['us_city']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Nghề Nghiệp:</strong><?php echo $row['us_career']; ?></li>
                                    <li><a href="process-send.php?us_id=<?php echo $row['us_id']; ?>"><button class="btn btn-primary">kết bạn</a></button></a><li>
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