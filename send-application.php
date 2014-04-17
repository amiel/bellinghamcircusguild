<?php

require_once('modules/email.php');

if ($_POST["application"]) {
  $name = $_POST["application"]["name"];
  $email = $_POST["application"]["email"];

  $shows = join(", ", $_POST["application"]["shows"]);
  $description = $_POST["application"]["description"];
  $tech = $_POST["application"]["tech"];

  $subject = "Vaudevillingham application from $name";
  $reply_to = "\"$name\" <$email>";
  $email_message = "

This is a Vaudevillingham application from $name ($email).

Shows: $shows

Description of act
==================
$description

Tech needs
==========
$tech

Kind Regards,
Your Website.
  ";

  send_email($subject, $email_message, $reply_to, $_POST['email']);
}
