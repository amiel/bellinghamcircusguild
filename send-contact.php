<?php

require_once('modules/email.php');

if ($_POST["inquiry"]) {
  $name = $_POST["inquiry"]["name"];
  $email = $_POST["inquiry"]["email"];
  $phone = $_POST["inquiry"]["phone"];
  $message = $_POST["inquiry"]["message"];

  $subject = "Website inquiry from $name";
  // apparently, only one email address is supported
  $reply_to = $email;
  $email_message = "

$message

This message is from:
From: $name
Email: $email
Phone: $phone

Kind Regards,
Your Website.
  ";

  send_email($subject, $email_message, $reply_to, $_POST['email']);

}
