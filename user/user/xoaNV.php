<?php 
 session_start();
$conn = mysqli_connect('localhost','root','','thicuoiki');
 $fr_id=$_GET['fr_id'];
  $delete = mysqli_query($conn,"DELETE from friend where fr_id = '$fr_id'");
  if($delete) {   
    header('location:kb.php');}
?>  