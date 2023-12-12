<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "your@email.com"; // Replace with your email address
    $subject = "New Form Submission";
    $message = $_POST["message"];
    $headers = "From: " . $_POST["email"];

    mail($to, $subject, $message, $headers);
    echo "Email sent successfully.";
}
?>
