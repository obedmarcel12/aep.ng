<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@aep.ng"; // Your email address
    $subject = "New Contact Form Message from AEP Website";

    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subjectInput = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);

    $email_content = "You received a new message:\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Subject: $subjectInput\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: $name <$email>";

    if (mail($to, $subject, $email_content, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.history.back();</script>";
    } else {
        echo "<script>alert('Error sending message. Try again later.'); window.history.back();</script>";
    }
}
?>
