<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// PHPMailer files include cheyandi (Composer waaduthunte: require 'vendor/autoload.php';)
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Appointment Form Inputs Capture & Sanitize
    $name      = htmlspecialchars(trim($_POST['name'] ?? ''));
    $phone     = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $email     = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $treatment = htmlspecialchars(trim($_POST['treatment'] ?? ''));
    $date      = htmlspecialchars(trim($_POST['date'] ?? ''));
    $time      = htmlspecialchars(trim($_POST['time'] ?? ''));
    $message   = htmlspecialchars(trim($_POST['message'] ?? ''));

    $mail = new PHPMailer(true);

    try {
        // ===================================================
        // SMTP SETTINGS & CREDENTIALS
        // ===================================================
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';             // Gmail SMTP Server
        $mail->SMTPAuth   = true;
        
        // ---------------------------------------------------
        // EKKADA MEE EMAIL & APP PASSWORD ENTER CHEYYALI:
        // ---------------------------------------------------
        $mail->Username   = 'sairampachipala00@gmail.com';             // <-- IKKADA MEE GMAIL ID (Sender Email)
        // $mail->Password   = 'your-16-digit-app-password';  IKKADA MEE 16-DIGIT APP PASSWORD 
        $mail->Password   = 'hetpnbxyctpodhkv'; // <-- IKKADA MEE 16-DIGIT APP PASSWORD 
        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port       = 587;                          // Port: 587 (TLS) or 465 (SSL)

        // Receivers Info
        $mail->setFrom('sairampachipala00@gmail.com', 'IALIGN Dental Care'); // Sender Email
        $mail->addAddress('sairampachipala00@gmail.com');               // Mail eh address ki raavalano (Receiver Email)
        $mail->addReplyTo($email, $name);                     // Form fill chesina user email

        // Mail Content
        $mail->isHTML(true);
        $mail->Subject = "New Appointment Booking Request - " . $name;
        $mail->Body    = "
            <div style='font-family: Arial, sans-serif; padding: 15px;'>
                <h3 style='color: #0d6efd;'>New Appointment Request Details</h3>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Phone:</strong> {$phone}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Treatment:</strong> {$treatment}</p>
                <p><strong>Preferred Date:</strong> {$date}</p>
                <p><strong>Preferred Time:</strong> {$time}</p>
                <p><strong>Additional Message:</strong><br>" . nl2br($message) . "</p>
            </div>
        ";

        $mail->send();
        // Mail success aynapu appointment.php ki success message తో redirect అవుతుంది
        header("Location: appointment.php?status=success");
        exit;
    } catch (Exception $e) {
        // Error vaste error message తో redirect అవుతుంది
        header("Location: appointment.php?status=error");
        exit;
    }
} else {
    header("Location: appointment.php");
    exit;
}
?>