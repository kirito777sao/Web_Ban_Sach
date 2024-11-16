<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Đường dẫn đến file autoload của Composer

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'youremail@gmail.com';                     // SMTP username
    $mail->Password   = 'your_gmail_app_password';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable implicit TLS encryption
    $mail->Port       = 465;                                    // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('youremail@gmail.com', 'Tên người gửi'); // Email và tên người gửi
    $mail->addAddress('duchoan77482003@gmail.com', 'Tên người nhận');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Phản hồi từ website';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $mail->Body    = "Bạn nhận được tin nhắn từ: $name ($email) <br><br> Nội dung: $message";
    $mail->AltBody = "Bạn nhận được tin nhắn từ: $name ($email)\n\n Nội dung: $message"; // Nội dung thay thế nếu không hiển thị được HTML


    $mail->send();
    echo 'Message has been sent';

    // Chuyển hướng người dùng sau khi gửi email thành công
    header("Location: trang_cam_on.html"); // Thay trang_cam_on.html bằng trang bạn muốn chuyển hướng đến
    exit(); // Đảm bảo dừng thực thi script sau khi chuyển hướng



} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>