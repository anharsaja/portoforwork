<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address

$receiving_email_address = 'anharmukhlis1@gmail.com';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  $body = "From: $name\n";
  $body .= "Email: $email\n\n";
  $body .= "Message:\n$message";

  if (mail($receiving_email_address, $subject, $body, $headers)) {
    echo "OK";
  } else {
    echo "ERROR";
  }

}

?>
