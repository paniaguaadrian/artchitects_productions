<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['comment'];

    $mailto = "pausaez9218@gmail.com ";
    $headers = "From: ".$mailFrom;
    $txt = "You have received and email from ".$name.".\n\n".$message;

    mail($mailto, $txt, $message, $headers);
    header("Location: index.html?mailsend");
}