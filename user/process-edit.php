<?php
if(isset($_POST['btnSave'])) {
        $ten = $_POST['txtHoTen'];
        $ngaysinh = $_POST['ngaysinh'];
        $website = $_POST['website'];
        $dienthoai = $_POST['dienthoai'];
        $thanhpho = $_POST['thanhpho'];
        $tuoi = $_POST['tuoi'];
        $bangcap = $_POST['bangcap'];
        $email = $_POST['email'];
        $vitri = $_POST['vitri'];
        $id = $_POST['id'];

        $conn = mysqli_connect('localhost', 'root', '', 'thicuoiki');
        if (!$conn) {
            die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
        }
        $sql_update = "UPDATE users us set us.ten = '$ten',us.ngaysinh = '$ngaysinh',
        us.website = '$website', us.dienthoai = '$dienthoai',thanhpho = '$thanhpho', tuoi='$tuoi',bangcap='$bangcap',email='$email',vitri='$vitri' where id = '$id'";
        mysqli_query($conn,$sql_update);
        header('location: index.php');

    }
?>