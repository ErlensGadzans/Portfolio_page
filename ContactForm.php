<?php

if (isset($_POST["submit"])) {
    $sendersName = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $text = $_POST["textarea"];

    $mailTo = "erlens.gadzans@gmail.com";
    // $headers = "From: " . $sendersName . "<" . $email . ">\r\n";
    // $text = "You received an e-mail from " . $sendersName;



    mail($mailTo, $sendersName, $email, $subject, $text,);
    header("Location: index.html?mailsend?");
}




// mail($mailTo, $headers, $text);
// header("Location: index.html?mailsended#contact");


// require_once "ContactForm.php"