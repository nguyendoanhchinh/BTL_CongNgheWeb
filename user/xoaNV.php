<?php 
 session_start();
$conn = mysqli_connect('localhost','root','','thicuoiki');
  $us_confirm = $us_id;
  $us_add = $_SESSION['us_id'];
  $delete = mysqli_query($conn,"DELETE from user where us_id = '$us_id'");
        
?>  