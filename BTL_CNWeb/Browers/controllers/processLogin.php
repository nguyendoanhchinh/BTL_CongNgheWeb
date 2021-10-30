<?php
    include("../config/db.php");

    $email = $_POST["txtEmail"];
    $pass = $_POST["txtPassword"];
    $sql = "SELECT * FROM account WHERE ac_email= '$email'";
    $result = mysqli_query($conn,$sql);
     
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $pass_saved = $row["ac_pass"];
        
        echo password_verify( $pass, $pass_saved);
        if(password_verify( $pass, $pass_saved) and $row['ac_status'] == 1){
            header("Location: ../register.php");
        }else{
            echo " ko đúng";
        }
    }else{
        echo "Email ko đúng";
    }
    