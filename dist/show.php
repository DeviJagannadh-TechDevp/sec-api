<?php

$name=$_GET['n'];
$email=$_GET['e'];
$amt=$_GET['a'];


$to = "devijagannadh@gmail.com";
$subject = "Details of ".$email;
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: akarsha.barbigirl@gmail.com";

mail($to,$subject,$txt,$headers);

?>
