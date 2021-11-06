<?php
    $conn = mysqli_connect("localhost","root","","thicuoiki");
    if(!$conn){
        die("Lỗi kết nối SQL");
    }
    
    $sql_ac = "SELECT * FROM account";
    $sql_us = "SELECT * FROM user";
