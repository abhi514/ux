<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "abhinavramesh2529@gmail.com"; // Replace with your email address
  $headers = "From: $name <$email>";
  $email_body = "You have received a new message from your website contact form.\n\n".
                "Name: $name\n".
                "Email: $email\n".
                "Phone: $phone\n".
                "Subject: $subject\n".
                "Message:\n$message\n";

  // Send email
  mail($to, $subject, $email_body, $headers);

  // Optionally, redirect to a thank you page
  header('Location: thank-you.html');
  exit;
}
?>
