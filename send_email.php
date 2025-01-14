<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "mkd_pun1sh3r@hotmail.com"; // Your email address
    $subject = "Newsletter Signup";
    $message = "New signup: " . $_POST['email_address'];
    $headers = "From: no-reply@example.com";

    mail($to, $subject, $message, $headers);
}
?>
