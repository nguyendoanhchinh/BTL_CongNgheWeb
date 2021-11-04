<?php 
  session_start();
  include("./config/db.php");
  $us_add = $_SESSION['us_id'];
   if(isset($_GET["us_id"])){
    $us_confirm = $_GET['us_id'];
    if( $us_add != $us_confirm){
        $sql_add_cr = "INSERT INTO friend(user_add,user_confirm)
        VALUE ($us_add,$us_confirm)";
        mysqli_query($conn, $sql_add_cr);
    
     }
   }
 echo "bạn đã gửi lời mời kết bạn";
  
  
        
?>  