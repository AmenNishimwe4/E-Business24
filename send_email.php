<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { $name = htmlspecialchars($_POST['name']); $email = htmlspecialchars($_POST['email']); $subject = htmlspecialchars($_POST['subject']); $message = htmlspecialchars($_POST['message']);
$to = "amennish257@gmail.com"; $headers = "From: $email\r\n"; $headers .= "Reply-To: $email\r\n"; $fullMessage = "Name: $name\nEmail: $email\n\n$message";
if (mail($to, $subject, $fullMessage, $headers)) { echo "Thank you! Your message has been sent successfully."; } else { echo "Sorry, something went wrong. Please try again later."; } } else {
echo "Invalid request.";
} ?>
