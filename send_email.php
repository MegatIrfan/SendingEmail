<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = $_POST["recipient"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $mail = new PHPMailer;

    // Configure SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.megatirfan.com'; // Your SMTP server hostname
    $mail->SMTPAuth = true;
    $mail->Username = 'bot@megatirfan.com'; // Your SMTP username
    $mail->Password = 'gg112211'; // Your SMTP password
    $mail->SMTPSecure = 'tls'; // SSL/TLS
    $mail->Port = 587; // SMTP port

    $mail->setFrom('bot@megatirfan.com', 'Dev Megat'); // Replace with your email and name
    $mail->addAddress($recipient);

    $mail->Subject = $subject;
    $mail->Body = $message;

    if ($mail->send()) {
        echo json_encode(array("status" => "success"));
        echo "<script>
                  Swal.fire({
                      icon: 'success',
                      title: 'Email Sent Successfully!',
                      text: 'The email has been sent successfully.',
                  });
              </script>";
    } else {
        echo json_encode(array("status" => "error", "message" => $mail->ErrorInfo));
        echo "<script>
                  Swal.fire({
                      icon: 'error',
                      title: 'Email Sending Failed',
                      text: 'There was an error sending the email. Please try again later.',
                  });
              </script>";
    }
}
?>
