<?php 
    $conn = mysqli_connect('localhost','root','','thicuoiki',3306);
    if(!$conn){
        die("Kết nối không thành công. Kiểm tra lại các tham số khai báo kết nối");
    }
    $sql = "SELECT * FROM user Where us_id ";
    if((isset($_POST['btnTim']))){
        $us_name = $_POST['us_name'];
        $us_email = $_POST['us_email'];
        $us_phone = $_POST['us_phone'];
        $us_city = $_POST['us_city'];
        $us_career = $_POST['us_career'];
       
        
        
        if($us_name != ""){
            $sql = $sql . " and (us.name like '%$us_name' or us.name like '$us_name%' or us.name like '%$us_name%')";
        }
        if($us_email != ""){
            $sql = $sql . " and (us_email like '%$us_email' or us_email like '$us_email%' or us_email like '%$us_email%')";
        }
        if($us_phone  != ""){
            $sql = $sql . " and (us_phone  like '%$us_phone ' or us_phone  like '$us_phone%' or us_phone like '%$us_phone%')";
        }
        if($us_city  != ""){
            $sql = $sql . " and (us_city like '%$us_city ' or us_city like '$us_city%' or us_city like '%$us_city%')";
        }
        if($us_career  != ""){
            $sql = $sql . " and (us_career like '%$us_career ' or us_career like '$us_career%' or us_career like '%$us_career%')";
        }
        $result = mysqli_query($conn,$sql);
    }
    //Paging
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tìm Kiếm Bạn Bè</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../../assets/css/config.css">
  <!-- Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header">
    
        <div class="d-flex flex-column">
             
            <div class="profile">
                <img src="./assets/img/avatar121.png " alt="" class="img-fluid rounded-circle">
                
                <div class="social-links mt-3 text-center">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    <?php
                                    
                                ?>
                </div>
            </div>

            <nav class="nav-menu">
            
                <ul>
                <li class="active"><a href="index.php"><i class="bx bx-home"></i> <span>Trang chủ</span></a></li>
                    <li  class="active"><a href="search fr.php"><i class="bx bx-book-content"></i>Tìm Kiếm Bạn Bè</a></li>
                    <li  class="active"><a href="kb.php"><i class="bx bx-book-content"></i>Lời mời kết bạn</a></li>

                    <li  class="active"><a href="list fr.php"><i class="bx bx-book-content"></i> Bạn bè</a></li>
                    <li  class="active"><a href="plan/plan.php?us_id=<?php echo $row['us_id']; ?>"><i class="bx bx-file-blank"></i> <span>Kế hoạch</span></a></li>
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
                    <h2>Tìm kiếm bạn bè</h2>

                </div>

                <main>
      
            <div class="row">
                <div class="col-md-12">
                    <div class="congCu">
                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" method="POST" action="">
                            <div class="search-data row">
                                <div class="group-search col-md-3">
                                    <span>Họ tên</span>
                                    <input type="search" name="us_name" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                                </div>
                                <div class="group-search col-md-3">
                                    <span>Email</span>
                                    <input type="search" name="us_email" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                                </div>
                                <div class="group-search col-md-3">
                                    <span>Số điện thoại</span>
                                    <input type="search" name="us_phone" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                                </div>
                                <div class="group-search col-md-3">
                                    <span>Thành phố</span>
                                    <input type="search" name="us_city" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                                </div>
                                <div class="group-search col-md-3">
                                    <span>Nghề nghiệp</span>
                                    <input type="search" name="us_career" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                                </div>
                                
                                <div class="group-search col-md-4">
                                    <button class="btn btn-primary"  name="btnTim">Tìm kiếm</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="title-table row">
                        <h4 class="col-md-8">Gợi ý kết bạn</h4>
                    </div>
        
                    <div class="row">
                <div></div>
                <div class="directory-table">
                    <div class="table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">email</th>
                                  
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Thành phố</th>
                                    <th scope="col">Nghề nghiệp</th>
                                    <th scope="col">Thông tin</th>
                                  
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Nhan xet :day la vung du lieu thay doi duoc-->
                                <?php
                                //b1 :ket noi csdl

                                //b2 khai bao va thuc hien truy vấn
                                // $sql = "SELECT * FROM user ";
                                $result10 = $conn->query( $sql);

                                //b3  kiem tra va xu li tap ket qua  - ung voi cau lenh select  
                                if (mysqli_num_rows($result10) > 0) {
                                    $i = 1;
                                    while ($row = $result10->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; ?></th>
                                            <td><?php echo $row['us_name']; ?></td>
                                            <td><?php echo $row['us_email']; ?></td>
                                            <td><?php echo $row['us_phone']; ?></td>
                                            <td><?php echo $row['us_city']; ?></td>
                                            <td><?php echo $row['us_career']; ?></td>
                                            <td><a href="friend.php?us_id=<?php echo $row['us_id']; ?>"><button class="btn btn-primary">trang cá nhân</button></a></td>
                                          
                                            
                                        </tr>
                                        
                                <?php
                                        $i++;
                                    }
                                }

                                ?>
                                
                            </tbody>
                        </table>
                     
                    </div>

                    
                </div>
            </div>
        </div>
    </main>
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