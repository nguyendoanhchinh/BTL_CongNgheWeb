<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin </title>

    <!-- Bootstrap Core CSS -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../public/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../public/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   

    <!-- Add custom CSS here -->
    <link href="../public/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.../public/js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="../public/ckeditor/ckeditor.js"></script>

</head>

<body>

      <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand " href="index.html"> Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.html"><i class="fa fa-home"></i> Trang trủ</a></li>
            <li><a href="#"><i class="fa fa-user"></i> Quản lý users</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Quản lí bài viết <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Danh sách bài viết</a></li>
                <li><a href="#">Chủ đề bài viết</a></li>
                
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
        
      <!-- table  -->
      <!-- <?php 
        $conn=new mysqli("localhost","root","","thicuoiki");
        if(!$conn){
          die("ket noi khong thanh cong".$conn->connect_error); 
        }
        $sql="SELECT * FROM  URES";
        $result= $conn->query($sql);
        
        if($result->num_rows>0){
          while($row=$result->fetch_assoc()){
            echo $row["name"]."<br>";
          }
        }
        $conn->close();
      ?> -->
      <!-- 
        <?php 
          try{
            $conn = new PDO("mysql:host=localhost;dbname=thicuoiki", 'root', '');
          }catch(PDOException $e){
            echo" có lỗi".$e->getMessage() ;
          }
            //truy vấn PDO
            $sql="SELECT * FROM  URES";
            $result= $conn->query($sql);
            if($result->rowCount()>0){
              while($row=$result->fetch()){
                echo $row["name"]."<br>";
              }
            }
        $conn=null;

        ?>
       -->
      </div><!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../public/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../public/js/plugins/morris/raphael.min.js"></script>
    <script src="../public/js/plugins/morris/morris.min.js"></script>
    <script src="../public/js/plugins/morris/morris-data.js"></script>

</body>

</html>
