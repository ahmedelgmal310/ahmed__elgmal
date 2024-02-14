<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'ahmedelgmal763@gmail.com';
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";

    $email_body = "You have received a new message from $name.\n\n" .
                  "Subject: $subject\n\n" .
                  "Message: $message\n";

    // Sending email
    if (mail($to, $subject, $email_body, $headers)) {
        echo 'Message sent successfully.';
    } else {
        echo 'Sorry, unable to send your message.';
    }
}
?>
