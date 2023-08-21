<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = $_POST["recipient"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $headers = "From: bot@megatirfan.com\r\n";
    $headers .= "Reply-To: bot@megatirfan.com\r\n";
    $headers .= "Content-Type: text/html\r\n";

    if (mail($recipient, $subject, $message, $headers)) {
        // Email sent successfully
        echo 'success';
    } else {
        // Email could not be sent
        echo 'error';
    }
} else {
    echo 'error'; // Invalid request
}
?>
