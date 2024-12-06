<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "JayHeredia2005@gmail.com"; 
    $subject = "New Form Submission";
    $body = "You have received a new form submission:\
\
" .
            "Name: $name\
" .
            "Email: $email\
" .
            "Message: $message\
";

    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>
