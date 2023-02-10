<!-- How you can send an email with a multiple recipient using Core PHP -->
<?php

   $to = "recipient1@example.com, recipient2@example.com, recipient3@example.com";
   $cc = "cc_recipient1@example.com, cc_recipient2@example.com, cc_recipient3@example.com";
   $subject = "Test email";
   $message = "Hello World, This is a test email.";
   $headers = "From: sender@example.com" . "\r\n" .
              "Cc: $cc" . "\r\n" .
              "Reply-To: sender@example.com" . "\r\n" .
              "X-Mailer: PHP/" . phpversion();

   if (mail($to, $subject, $message, $headers)) {
        echo "Email sended successfully!";
   } else {
      echo "An error occurred while sending the email.";
   }