<?php
$conn = mysqli_connect('localhost', 'root', '', 'thicuoiki');
if (!$conn) {
    die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
}
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * from users WHERE id='$id' ";
    $result_2 = mysqli_query($conn, $sql);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <main class="mt-4">
        <div class="container">
        <?php while($row = mysqli_fetch_assoc($result_2)){?>
            <div class="row">
                <div class="col-md-12">
                    <h2>Sửa thông tin cá nhân</h2>
                    <form action="process-edit.php" method="post">
                        <div class="row mb-3">
                            <label for="txtHoTen" class="col-sm-2 col-form-label">Họ và tên</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtHoTen" name="txtHoTen"value="<?php echo $row['ten']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtChucVu" class="col-sm-2 col-form-label">Ngày Sinh</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtChucVu" name="ngaysinh" value = "<?php echo $row['ngaysinh']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtMayBan" class="col-sm-2 col-form-label">Website</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtMayBan" name="website"value = "<?php echo $row['website']; ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="txtEmail" class="col-sm-2 col-form-label">Điện thoại</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtEmail" name="dienthoai" value = "<?php echo $row['dienthoai']; ?>">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="txtMobile" class="col-sm-2 col-form-label">Thành Phố</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtMobile" name="thanhpho" value = "<?php echo $row['thanhpho']; ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="txtMobile" class="col-sm-2 col-form-label">Tuổi</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtMobile" name="tuoi" value = "<?php echo $row['tuoi']; ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="txtMobile" class="col-sm-2 col-form-label">Bằng cấp</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtMobile" name="bangcap" value = "<?php echo $row['bangcap']; ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="txtMobile" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="txtMobile" name="email" value = "<?php echo $row['email']; ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="txtMobile" class="col-sm-2 col-form-label">Vị Trí</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtMobile" name="vitri" value = "<?php echo $row['vitri']; ?>">
                            </div>
                        </div>
                        <input type="hidden" name="id" class="form-control" id="txtMaNV" value="<?php echo $row['id']; ?>">
                        <button type="submit" class="btn btn-primary" name="btnSave">Lưu</button></a>
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>
    <footer>

    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
