<?php
    if(isset( $_POST['name']))
        $name = $_POST['name'];

    if(isset( $_POST['email']))
        $email = $_POST['email'];

    $content="From: $name";
    $recipient = "info@roarbikes.com";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $content, $mailheader) or die("Error!");

    echo "Email sent!";
?>
