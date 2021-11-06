<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
//
$email = $_GET['email'];
include("../../config/db.php");
$code = rand();
$confirmed = md5($code);
$result = mysqli_query($conn,"UPDATE account SET ac_confirmed = '$confirmed' where ac_email='$email'");

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
    $mail->isSMTP();// gửi mail SMTP
    $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->Username = 'anhduc.tit@gmail.com';// SMTP username
    $mail->Password = 'wnzevxwlunjkkmos'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->setFrom("anhduc.tit@gmail.com", 'Danh bạ điện tử');

    $mail->addReplyTo("anhduc.tit@gmail.com", 'Danh bạ điện tử');
      
    $mail->addAddress("$email"); // Add a recipient
    
   

    // Content
    $mail->isHTML(true);   // Set email format to HTML
    $tieude = 'Xác nhận tài khoản';
    $mail->Subject = $tieude;
    
    // Mail body content
    $bodyContent = "<p>Hãy nháy chuột vào <a href='http://localhost:88/user/controllers/accuracy.php?confirmed=$confirmed&email=$email'>Bấm vào link để xác nhận</a>";
    
    $mail->Body = $bodyContent;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    if($mail->send()){
        echo 'Thư đã được gửi đi';
    }else{
        echo 'Lỗi. Thư chưa gửi được';
    }  

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
 header("Location: ../../login.php?response=MaCM_failed");
?>