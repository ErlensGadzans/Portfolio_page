<?php

if (isset($_POST["btn_send"])) {

    $sendersName = $_POST["name"];
    $sendersEmail = $_POST["email"];
    $messageSubject = $_POST["subject"];
    $message = $_POST["message"];

    $mailTo = "erlens.gadzans@gmail.com";
    $body = "";

    $body .= "You have an email from:" . $sendersName . "\r\n";
    $body .= "Senders email:" . $sendersEmail . "\r\n";
    $body .= "Message:" . $message . "\r\n";

    // mail($mailTo, $messageSubject, $body);
    // header('Location: index.php?success=true');
    // or die("Error");
    // $message_sent = true;
    // header("Location: index.php?mailsended#contact");

    mail($mailTo, $messageSubject, $body);
    header("location:index.php?success#contact");
}





// header("Location: index.html?mailsended#contact");

// $alert = "<script>alert('lalala');</script>";
// echo $alert;
// header("Location: index.html?mailsended#contact");
