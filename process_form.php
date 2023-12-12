<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $children = $_POST["children"];

    $to = "csspt12@gmail.com";
    $subject = "معلومات التسجيل الجديدة";
    $message = "الاسم: $firstname\nاللقب: $lastname\nعدد الأولاد: $children";

    // إرسال البريد الإلكتروني
    mail($to, $subject, $message);

    echo "تم التسجيل بنجاح. شكراً لك!";
}
else {
    http_response_code(405);
    echo "ERROR: Method Not Allowed";
}
?>
