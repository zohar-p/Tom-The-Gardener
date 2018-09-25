<?php
if(!isset($_POST['submit'])) {
    header("Location: $url");
} else {
    
    $enteredName = htmlspecialchars($_POST['name']);
    $enteredPhone = htmlspecialchars($_POST['phone']);
    
    function checkName ($enteredName){
        if(empty($enteredName)){
            return 'empty';
        } else {
            return $enteredName;
        }
    }
    
    function checkPhone($enteredPhone){
        if (empty($enteredPhone)){
            return 'empty';
        } else {
            return $enteredPhone;
        }
    }

    $getName = "name=".checkName($enteredName);
    $getPhone = "phone=".checkPhone($enteredPhone);
    
    if($getName == "name=empty" || $getPhone == "phone=empty"){
        header("Location: ../index.php?$getName&$getPhone");
        exit();
    } else {
        $to = 'pfzohar@gmail.com';
        $subject = '=?UTF-8?B?'.base64_encode("קיבלת פניה חדשה מהאתר!").'?=';
        $msg = "שם: " . $enteredName . ", " . "טלפון: " . $enteredPhone;
        $headers = array(
            "From: donotreplay@tom-haganan.com",
    
            "Reply-To: " . "abc@def.co.il",
    
            "Content-Type: text/html; charset=utf-8",
    
            "MIME-Version: 1.0",
    
            "X-Mailer: PHP/7.2.10"
        );
    
        $headers = implode("\r\n", $headers);
    
        if(mail($to, $subject, $msg, $headers)){
            header('Location: ../index.php?contact=success#anchor');
        } else {
            header('Location: ../index.php?contact=fail');
        };
    }
  
}


