<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailerAutoload.php';  // تأكد من مسار مكتبة PHPMailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // إعداد PHPMailer
    $mail = new PHPMailer(true);  // نستخدم PHPMailer للتعامل مع الإيميلات
    try {
        // إعدادات الخادم
        $mail->isSMTP();  
        $mail->Host = 'smtp.gmail.com';  // استبدل بالخادم المناسب (مثلًا Gmail)
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com';  // استبدل ببريدك
        $mail->Password = 'your-email-password';  // استبدل بكلمة المرور الخاصة بالبريد
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;  // منفذ SMTP

        // مستلم ومرسل البريد
        $mail->setFrom('your-email@gmail.com', 'Andrew Ashraf Weddings');
        $mail->addAddress('andrewashrafphotography1m@gmail.com');  // بريد المرسل إليه

        // المحتوى
        $mail->isHTML(true);
        $mail->Subject = "Message from " . $name;
        $mail->Body    = "You have received a message from " . $name . " (" . $email . ").<br><br>" . "Message:<br>" . nl2br($message);

        // إرسال الإيميل
        $mail->send();
        echo "<script>alert('Your message has been sent successfully!'); window.location.href = 'index.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('There was an error sending your message. Please try again later.'); window.location.href = 'index.php';</script>";
    }
}
?>
