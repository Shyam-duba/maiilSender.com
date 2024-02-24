<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Email :</label>
        <input type="email" name="email">
        <label>Genre</label>
        <input type="text" name="genre">
        <input type="submit" name="submit">
    </form>
</body>
</html>

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