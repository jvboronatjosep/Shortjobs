<?php
$to_email = "jobodo@softin.com";
$subject = "Test Mail from PHP using MailHog";
$body = "This is a test email sent from PHP using MailHog.";

$host = "mailhog"; // This should match the service name in your Docker Compose file
$port = 1025;      // MailHog SMTP port

$headers = "From: sender@example.com\r\n";
$headers .= "Reply-To: sender@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email";
} else {
    echo "Email delivery failed";
}
?>

