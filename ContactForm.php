<?php


$sendersName = $_POST["name"];
$sendersEmail = $_POST["email"];
$messageSubject = $_POST["subject"];
$message = $_POST["message"];

$mailTo = "erlens.gadzans@gmail.com";



mail($mailTo, $messageSubject, $message)
    or die("Error");

echo "message send";
