<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$children = $_POST["children"];

		$to = "csspt12@gmail.com";
		$subject = "معلومات التسجيل الجديدة";
		$message = "الاسم: $firstname\nاللقب: $lastname\nعدد الأولاد: $children";
		$headers = "From: webmaster@example.com";
		
		// إرسال البريد الإلكتروني
		//mail($to, $subject, $message);
		if (mail($to, $subject, $message, $headers)) {
			echo "Email sent successfully.";
		} else {
			echo "Failed to send email.";
		}
		
	}
	else {
		http_response_code(405);
		echo "ERROR: Method Not Allowed";
	}

?>