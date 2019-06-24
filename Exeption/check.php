<?php
$email = $_POST["email"];
$message = $_POST["message"];
$error = '';

if (trim($email) == '')
    $error = "Input your email";
elseif (trim($message) == '')
    $error = 'Input your message';
elseif (strlen($message) < 10)
    $error = "message must will be long";

if ($error != "") {
    echo $error;
    exit;
}
$subject = '=?utf-8?B?'.base64_encode("Test")."?=";
$headers = 'From:$email\r\nReply-to:$email\r\nContent-type:text/html;charset=utf-8\r\n ';

mail("romanov1301@gmail.com",$subject,$message,$headers);

header('Location:/about.php');

?>
