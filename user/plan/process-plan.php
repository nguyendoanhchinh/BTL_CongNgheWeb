<?php
 session_start();
 include("./config/db.php");
 $id = $_SESSION['us_id'];
    // Kiểm tra có đúng là người dùng đã thực hiện nhấn Lưu trên FORM chưa
    if(isset($_POST['btnSave'])){
        // Lấy giá trị trên FORM và lưu vào các BIẾN
        $ngay      = $_POST['ngay'];
        $chude     = $_POST['chude'];
        $congviec     = $_POST['congviec'];
        
        // Thực hiện quy trình 3 bước:
        // Bước 01: Kết nối DBS
        require("config/db.php");

        // Bước 02: Khai báo truy vấn
        $sql = "INSERT INTO plan (id,ngay,chude,congviec)
        VALUES ( '$id','$ngay','$chude','$congviec')";

        echo $sql."<br>";

        if(mysqli_query($conn,$sql)==TRUE){
            echo "Thêm thành công";
            header("Location:plan.php");
        }else{
            echo "Chưa thêm được ....";
        }
         // Bước 03: Đóng kết nối
         mysqli_close($conn);
    }


?>