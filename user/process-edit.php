<?php
        //xu li file
        $target_dir = "assets/img/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST['btnSave'])) {
        $ten = $_POST['txtHoTen'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $career = $_POST['career'];
        $id = $_POST['id'];

        $conn = mysqli_connect('localhost', 'root', '', 'thicuoiki');
        if (!$conn) {
            die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
        }
        $sql_update = "UPDATE user us set us.us_name = '$ten',us.us_email = '$email',
        us.us_phone = '$phone', us.us_city = '$city',us_career='$career' where us_id = '$id'";
        mysqli_query($conn,$sql_update);
        if($imageFileType == 'png'){
            if(file_exists($target_file)){
                echo "xin loi file da ton tai";
                $uploadOk = 0;
            }else{
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
                  } else {
                    echo "Xin loi toi khong the tai anh len thu muc";
                  }
            }
        }else{
            echo "xin loi chung toi chi chap nhan anh co dinh dang png";
        }
        if(isset($_GET['us_id'])) {
            $id = $_GET['us_id'];
            $sql = "SELECT * FROM user";
            $result_2 = mysqli_query($conn, $sql);
        }
        $sql_update = "UPDATE user  set avatar = '$target_file' WHERE us_id = $id ";
        echo $sql_update;
        mysqli_query($conn,$sql_update);
        if(mysqli_query($conn,$sql_update)){
            echo "OK";
        }
        if(mysqli_query($conn,$sql_update)==TRUE){
            echo "Thêm thành công";
            header("Location:index.php");
        }else{
            echo "Chưa thêm được ....";


        }
        header('location: index.php');

    }
?>