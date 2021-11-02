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
            $sql = $sql . " and us_name = '$us_name' ";
        }
        if($us_email != ""){
            $sql = $sql . " and us.email = '$us_email' ";
        }
        if($us_phone  != ""){
            $sql = $sql . " and us_phone = '$us_phone'";
        }
        if($us_city  != ""){
            $sql = $sql . " and us_city = '$us_city' ";
        }
        if($us_career  != ""){
            $sql = $sql . " and us_career = '$us_career' ";
        }
       
    }
    //Paging
    
?>


    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>...</h1>
                    <div class="congCu">
                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" method="POST" action="">
                            <div class="search-data row">
                                <div class="group-search col-md-3">
                                    <span>Họ tên</span>
                                    <input type="search" name="us_name" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                                </div>
                                <div class="group-search col-md-3">
                                    <span>Email</span>
                                    <input type="search" name="us.email" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
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
                                
                                <div class="group-search col-md-3">
                                    <button class="btn btn-primary"  name="btnTim">Tìm kiếm</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="title-table row">
                        <h4 class="col-md-8">...</h4>
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
                                    <th scope="col">Xóa</th>
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
                                            <td><a href="index.php?us_id=<?php echo $row['us_id']; ?>"><i class="fas fa-trash"></i></a></td>
                                           
                                        </tr>
                                        
                                <?php
                                        $i++;
                                    }
                                }

                                ?>
                                
                            </tbody>
                        </table>
                        <button class="col-12 text-center">Chỉnh sửa</a></button>
                    </div>

                    
                </div>
            </div>
        </div>
    </main>
