<?php
    $name = $_POST['name'];
    $name = $_POST['name2'];
    $name = $_POST['Date'];
    $name = $_POST['phone'];
    $email = $_POST['email'];
    $name = $_POST['place'];
    $name = $_POST['chois'];
    $name = $_POST['time'];
    $name = $_POST['days'];
    $message = $_POST['message'];
    $from = 'From: http://127.0.0.1:5500/web/index.html';
    $to = 'saheersaheer212@gmail.com';
    $subject = 'Customer Inquiry';
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) {
            echo '<p>Your message has been sent!</p>';
        } else {
            echo '<p>Something went wrong, go back and try again!</p>';
        }
    }
?>