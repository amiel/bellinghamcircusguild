<?php


require_once('modules/email.php');

if ($_POST["inquiry"]) {
  $name = $_POST["inquiry"]["name"];
  $email = $_POST["inquiry"]["email"];
  $phone = $_POST["inquiry"]["phone"];

  $type = $_POST["inquiry"]["type"];
  $budget = $_POST["inquiry"]["budget"];
  $how_many = $_POST["inquiry"]["how_many"];
  $description = $_POST["inquiry"]["description"];

  $subject = "Performer request from $name";
  $email_message = "

Type: $type
Budget: $budget
How many performers: $how_many

$description

This message is from:
From: $name
Email: $email
Phone: $phone

Kind Regards,
Your Website.
  ";

  send_email($subject, $email_message, $_POST['email']);
}
