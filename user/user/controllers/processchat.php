<?php
session_start();
$txtName = $_POST['txtName'];
$pass1 = $_POST['txtpass1'];

require("db/db.php");

$result = mysqli_query($con, "SELECT * FROM login WHERE txtName='$txtName' AND password='$password'");
if(mysqli_num_rows($result)){
	$res = mysqli_fetch_array($result);
	$_SESSION['txtName'] = $res['txtName'];

}else{
	$message = "No txtName found !";
	header("location: index.php?message=$message");
	}
?>