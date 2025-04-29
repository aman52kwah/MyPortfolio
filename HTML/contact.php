<?php
if(isset($_POST['email'])) {
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Replace with your email address
  $to = "amankwaamichael52@gmail.com";
  $subject = "New message from $name";
  
  $email_body = "You have received a new message from $name.\n\n" .
                "Email address: $email\n\n" .
                "Message:\n$message";
  
  $headers = "From: $email";
  
  // Send email
  mail($to, $subject, $email_body, $headers);
  
  // Redirect to thank you page
  header('Location: thank_you.php');
}
?>
