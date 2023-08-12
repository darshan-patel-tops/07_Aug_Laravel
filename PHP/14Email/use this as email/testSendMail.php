<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
ob_start();
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$OTP = rand(1000,9999);
if (isset($_POST['sendmail'])) {
    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username   = 'darshan.patel.tops@gmail.com';                     //SMTP username
    $mail->Password   = '';  // your password 2step varified 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                
    $mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
    $mail->setFrom('darshan.patel.tops@gmail.com', 'Name');
    $mail->addAddress($_REQUEST['email']);   // Add a recipient
    $mail->isHTML(true);  // Set email format to HTML
    
    $bodyContent = "<h1>HeY!,</h1>: OTP : $OTP";
    $bodyContent .= '<p>This is a email that tops send you From LocalHost using PHPMailer</p>';
    $bodyContent .= "<h1 style='color:red;'>welcome to mail send session</h1>";
    $bodyContent .= "<img src='https://upload.wikimedia.org/wikipedia/commons/9/91/Pizza-3007395.jpg' alt='' height='150px' width='150px'>";
// 

    $mail->Body    = $bodyContent."<br>".$_REQUEST["body"];
    $mail->Subject = 'Email from Localhost by tops';
    if(!$mail->send()) {
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
      echo 'Message has been sent.';
    }
}

?>
<form method="post">
    <input type="text" name="email" id="email">
    <input type="text" name="body" id="body">
    <input type="text" name="check" id="check">
    <input type="submit" name="sendmail" id="sendmail">
</form>

