<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once './vendor/autoload.php';
//Khởi tạo đối tượng
$mail = new PHPMailer();

/*=====================================
 * THIET LAP THONG TIN GUI MAIL
 *=====================================*/

$mail->IsSMTP(); // Gọi đến class xử lý SMTP
$mail->Host       = "smtp.gmail.com"; // tên SMTP server
$mail->SMTPDebug  = 2;                    // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // Sử dụng đăng nhập vào account
$mail->SMTPSecure = "ssl";
$mail->Host       = "smtp.gmail.com";     // Thiết lập thông tin của SMPT
$mail->Port       = 465;                     // Thiết lập cổng gửi email của máy
$mail->Username   = "thanh01677457626@gmail.com"; // SMTP account username
$mail->Password   = "khanhthanh";            // SMTP account password

//Thiet lap thong tin nguoi gui va email nguoi gui
$mail->SetFrom("thanh01677457626@gmail.com","Duong Xuan Khang");

//Thiết lập thông tin người nhận
$mail->AddAddress("duongkhang56789@gmail.com", "Duong Xuan Khang");
$mail->AddAddress("duongkhang56789@gmail.com", "Duong Xuan Khang");

//Thiết lập email nhận email hồi đáp
//nếu người nhận nhấn nút Reply
$mail->AddReplyTo("duongkhang56789@gmail.com","Duong Xuan Khang");

/*=====================================
 * THIET LAP NOI DUNG EMAIL
 *=====================================*/

//Thiết lập tiêu đề
$mail->Subject    = "Test PHPMailer";

//Thiết lập định dạng font chữ
$mail->CharSet = "utf-8";

//Thiết lập nội dung chính của email
$body = "Test gui mail bang phpmailer";
$mail->Body = $body;

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}