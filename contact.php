<?php

if(isset($_POST['submit'])) {
    $receiver = "nyeinchana465@gmail.com";
    $name = $_POST['name'];    
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    if(mail($receiver, $name, $message, $subject, $email)) {
        echo "Email Sent Successfully";
    } else {
        echo "Email failed";
    }
}