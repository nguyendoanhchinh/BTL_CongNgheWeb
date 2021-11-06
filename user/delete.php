<?php 
    $conn = mysqli_connect('localhost','root','','thicuoiki');
    $us_id = $_GET['us_id'];
    
    $delete = mysqli_query($conn,"DELETE from user where us_id = '$us_id'");
    if($delete) {   
        header('location:layout/admin.php');}
        
?>