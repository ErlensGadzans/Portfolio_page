<?php


$sendersName = $_POST["name"];
$sendersEmail = $_POST["email"];
$messageSubject = $_POST["subject"];
$message = $_POST["message"];

$mailTo = "erlens.gadzans@gmail.com";
$body = "";

// $body .= "You have a message from:" . $sendersName . "\r\n";
// $body .= "Senders e-mai:" . $sendersEmail . "\r\n";
// $body .= "Message:" . $message . "\r\n";



mail($mailTo, $messageSubject, $message)
    or die("Error");

echo "message send";
