<?php
$to= 'mymail@bishoyabdelmalik.com';

$error=array();
$error=trim(addslashes($_GET["t"]));
$url=trim(addslashes($_GET["u"]));

$headers = 'From: webmaster@bishoyabdelmalik.com' . "\r\n" .
    'Reply-To: '.$email.' '. "\r\n" .
    'X-Mailer: PHP/' . phpversion();


if (!isset($error)){
    die();
}


$subject= "Site Error";
$message = "Error on url ";
$message .=$url;
$message .= " Error in element";
$message .=stripslashes($error);
    
    
    
    
$success = mail($to, $subject, $message, $headers);






?>
