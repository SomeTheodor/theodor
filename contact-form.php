<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "theolj2004@hotmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");
echo "<script> setTimeout(\"location.href='index.html'\")</script>";
?>