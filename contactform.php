<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// PHPMailer library files include cheyandi (Composer vaduthunte require 'vendor/autoload.php'; unchandi)
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Input values Sanitization
    $full_name = filter_var(trim($_POST["full_name"]), FILTER_SANITIZE_SPECIAL_CHARS);
    $phone     = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_SPECIAL_CHARS);
    $email     = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $treatment = filter_var(trim($_POST["treatment"]), FILTER_SANITIZE_SPECIAL_CHARS);
    $message   = filter_var(trim($_POST["message"]), FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($full_name) || empty($phone) || empty($email) || empty($treatment) || empty($message)) {
        echo "<script>
                alert('Please fill in all required fields.');
                window.history.back();
              </script>";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // ===============================================
        // GMAIL SMTP SETTINGS (Mee User ID & App Password)
        // ===============================================
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        
        // Mee Gmail ID enter cheyandi
        $mail->Username   = 'sairampachipala00@gmail.com'; 
        
        // Google Account lo create chesina 16-digit App Password ikkada ivvandi
        $mail->Password   = 'hetpnbxyctpodhkv'; 
        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipient details (Mail evariki vellali)
        $mail->setFrom('sairampachipala00@gmail.com', 'IALIGN Dental Website');
        $mail->addAddress('sairampachipala00@gmail.com'); // Admin email (Neeku message raavalani anukune ID)
        $mail->addReplyTo($email, $full_name);     // Patient Email ID to reply directly

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Inquiry from ' . $full_name;
        
        $mail->Body    = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; background-color: #f4f6f9; color: #333; padding: 20px; }
                .container { max-width: 600px; background: #ffffff; padding: 25px; border-radius: 8px; border: 1px solid #e1e1e1; }
                h2 { color: #1a5632; border-bottom: 2px solid #1a5632; padding-bottom: 8px; }
                table { width: 100%; border-collapse: collapse; margin-top: 15px; }
                td { padding: 10px; border-bottom: 1px solid #eeeeee; }
                td.label { font-weight: bold; width: 35%; color: #555; }
            </style>
        </head>
        <body>
            <div class='container'>
                <h2>New Website Inquiry</h2>
                <table>
                    <tr><td class='label'>Full Name:</td><td>$full_name</td></tr>
                    <tr><td class='label'>Phone Number:</td><td>$phone</td></tr>
                    <tr><td class='label'>Email Address:</td><td>$email</td></tr>
                    <tr><td class='label'>Selected Treatment:</td><td>$treatment</td></tr>
                    <tr><td class='label'>Message:</td><td>" . nl2br($message) . "</td></tr>
                </table>
            </div>
        </body>
        </html>";

        $mail->send();
        echo "<script>
                alert('Thank you! Your message has been sent successfully.');
                window.location.href = 'contact.php';
              </script>";
    } catch (Exception $e) {
        echo "<script>
                alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
                window.history.back();
              </script>";
    }
} else {
    header("Location: contact.php");
    exit;
}
?>