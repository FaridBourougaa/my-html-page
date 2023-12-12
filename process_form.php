<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $headers = "From: csspt12@gmail.com"; // Replace with your email address
    $headers .= "Content-type: text/html; charset=UTF-8";

    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email. Please check your server configuration.";
    }
}
?>
