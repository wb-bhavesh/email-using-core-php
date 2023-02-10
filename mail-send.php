<!-- How you can send an email using Core PHP -->
<?php

   $to = "recipient@example.com";
   $subject = "Test email";
   $message = "Hello World, This is a test email.";
   $headers = "From: sender@example.com" . "\r\n" .
              "Reply-To: sender@example.com" . "\r\n" .
              "X-Mailer: PHP/" . phpversion();

   if (mail($to, $subject, $message, $headers)) {
      echo "Email sended successfully!";
   } else {
      echo "An error occurred while sending the email.";
   }