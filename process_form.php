<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "csspt12@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $message = $_POST["message"];
    $headers = "From: " . $_POST["email"];

    mail($to, $subject, $message, $headers);
    echo "Email sent successfully.";
}
?>
