<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "your@email.com";
    $subject = "Subject of the Email";
    $message = "This is the content of the email.";

    $headers = "From: webmaster@example.com"; // Replace with a valid email address

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>