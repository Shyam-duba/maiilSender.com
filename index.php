<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


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
    $mail->Body    = 'This is a test email which will send the recommemded movies';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>