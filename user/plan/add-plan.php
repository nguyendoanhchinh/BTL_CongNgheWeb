<?php
session_start();
$us_id = $_SESSION['us_id'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Kế hoạch</title>
  </head>
  <body>
    <header>
        <div class="container-fluid border-bottom border-1 border-dark">
            <div class="row">
            </div>
        </div>
    </header>
    <main class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Thêm kế hoạch</h2>
                    <form action="process-plan.php" method="post">
                        <div class="row mb-3">
                            <label for="txtHoTen" class="col-sm-2 col-form-label">Ngày</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="txtHoTen" name="ngay">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtChucVu" class="col-sm-2 col-form-label">Chủ đề</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtChucVu" name="chude">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtMayBan" class="col-sm-2 col-form-label">Công việc</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtMayBan" name="congviec">
                        </div>
                        <button  style= " width:75px; background-color:blue; margin-left:10px; margin-top:20px;" type="submit" class="btn btn-primary" name="btnSave">Lưu</button>
                    </form>
                </div>
            </div>
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
