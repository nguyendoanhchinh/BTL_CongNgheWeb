<?php
session_start();
$us_id = $_SESSION['us_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Kế hoạch</title>
</head>
<body>
    <div class ="container-fluid">
        <div class = "row header">
        </div>
        <div class = "row nav-menu">
            <div class="col-md-12">
              <nav class=" navbar-light bg-light">
                  <div class="container-fluid">
                  <div class="row">
                </div>
                </div>
              </nav>
            </div>
        </div>

            <div class="col">
                
                <div>
                <button class="btn btn-success" style= "background-color:blue; margin-left:30px; margin-top:20px;"><a href="add-plan.php" style="color: #fff;">Thêm kế hoạch</a></button>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                    <th scope="col">Số thứ tự</th>
                      <th scope="col">Ngày</th>
                      <th scope="col">Chủ đề</th>
                      <th scope="col">Kế hoạch</th>
                      <th scope="col">Sửa</th>
                      <th scope="col">Xóa</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    #Lấy dữ liệu từ CSDL và đổ ra bảng(phần lặp lại)
                    #B1 kết nối với CSDL
                    $conn=mysqli_connect('localhost','root','','thicuoiki');            
                    mysqli_set_charset($conn,"utf8");//Định dang font chữ 
                    if(!$conn){
                        die("Không thể kết nối, kiểm tra lại các tham số kết nối");
                    }
                    #Bước 2: Khai báo câu lệnh thực thi và thực hiện truy vấn
                    $sql1 = "SELECT * FROM user,plan WHERE user.us_id = plan.us_id and user.us_id= $us_id";
                    $result = mysqli_query($conn,$sql1);
                    #Bước 3: Xử lí kết quả trả về
                    if(mysqli_num_rows($result)>0){
                        $i=1;
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                            <tr>
                              <th scope="row"><?php echo $i; ?></th>
                              <td><?php echo $row['ngay']; ?></td>
                              <td><?php echo $row['chude']; ?></td>
                              <td><?php echo $row['congviec']; ?></td>
                              <!-- <td><?php echo $row['us_id']; ?></td> -->
                           
                              <td><a href="edit-plan.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a></td>
                              <td><a href="delete-plan.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash"></i></a></td>
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
</body>
</html>