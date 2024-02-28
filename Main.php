<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer1/src/Exception.php';
require 'PHPMailer1/src/PHPMailer.php';
require 'PHPMailer1/src/SMTP.php';


$mail = new PHPMailer(true);

try {
    
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'shyamduba58@gmail.com'; 
    $mail->Password   = 'ijud xhfp kmre iukk'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port       = 587;

    
    $mail->setFrom('shyamduba58@gmail.com', 'Your Name'); 
    $mail->addAddress($_POST["email"]);          

    
    $mail->isHTML(true);
    $mail->Subject = 'movie recomendation';
    $mail->Body    = '<h1 style="color:red">Room Shambels</h1>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
