<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);


try {
    //Server settings
    $mail->SMTPDebug = 1;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->CharSet = "utf-8";  
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'pungpoo23@gmail.com';                     // SMTP username
    $mail->Password   = '22125233';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('pungpoo23@gmail.com', 'Computational Thinking Test');
    $mail->addAddress($_SESSION["Useremail"]);     // Add a recipient

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/img/test.png');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'ขอบคุณที่ทำการทดสอบ';
    $mail->Body    = 'คุณได้ทำแบบทดสอบเป็นที่เรียบร้อยแล้ว';
    $mail->Body    .= '<br/><b> URL : https://il.mahidol.ac.th/th/ </b> <br/>';
    // $mail->Body    .= '<img src="/img/test.png">';
    $mail->Body    .= '<br/><br/><strong>ขอแสดงความนับถือ</strong>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header( "Location: end.php" );
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>