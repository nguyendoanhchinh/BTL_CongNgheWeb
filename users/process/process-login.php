<?php  
session_start();
include ("../config/db.php");

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {
// xác định biến và đặt thành giá trị trống
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);
    //xác định xem có biến trống hay không
	if (empty($username)) {
		header("Location: ../login.php?error=Vui lòng nhập tên tài khoản");
	}else if (empty($password)) {
		header("Location: ../login.php?error=Vui lòng điền mật khẩu");
	}else {

		// Băm mật khẩu
		$password = md5($password);
        
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);        

        if (mysqli_num_rows($result) === 1) {
        	//  // Nếu khớp nhau -> Tức là Đăng nhập thành công
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] === $password && $row['role'] == $role) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['username'] = $row['username'];
                //đăng nhập thành công chuyển vào trong chủ
        		header("Location: ../home.php");

        	}else {
        		header("Location: ../login.php?error=Tên đăng nhập hoặc mật khẩu không chính xác");
        	}
        }else {
        	header("Location: ../login.php?error=Tên đăng nhập hoặc mật khẩu không chính xác");
        }

	}
	
}else {
	header("Location: ../login.php");
}