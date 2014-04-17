<?php

require_once('modules/email.php');

if ($_POST["inquiry"]) {
  $name = $_POST["inquiry"]["name"];
  $email = $_POST["inquiry"]["email"];
  $phone = $_POST["inquiry"]["phone"];
  $message = $_POST["inquiry"]["message"];

  $subject = "Website inquiry from $name";
  $reply_to = "\"$name\" <$email>, \"Bellingham Circus Guild\" <belingham-circus-guild@googlegroups.com>";
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
