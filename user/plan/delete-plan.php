<?php 
    $conn = mysqli_connect('localhost','root','','thicuoiki');
    $id = $_GET['id'];
    
    $delete = mysqli_query($conn,"DELETE from plan where id = '$id'");
    if($delete) {
        header('location:plan.php');
    }
    else{
        echo lol;
    }
        
?>