<?php
if(isset($_POST['submit'])) {
    
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);

    if(empty($name)){
        header('Location: index.php?contact=name-missing');
        exit();
    } else if (empty($phone)){
        header('Location: index.php?contact=phone-missing');
        exit();
    } else {
        $to = 'pfzohar@gmail.com';
        $subject = '=?UTF-8?B?'.base64_encode("קיבלת פניה חדשה מהאתר!").'?=';
        $msg = "שם: " . $name . ", " . "טלפון: " . $phone;
        $headers = array(
            "From: donotreplay@tom-haganan.com",
    
            "Reply-To: " . "abc@def.co.il",
    
            "Content-Type: text/html; charset=utf-8",
    
            "MIME-Version: 1.0",
    
            "X-Mailer: PHP/7.2.10"
        );
    
        $headers = implode("\r\n", $headers);
    
        if(mail($to, $subject, $msg, $headers)){
            header('Location: index.php?contact=success');
        } else {
            header('Location: index.php?contact=fail');
        };
    }
  
}


