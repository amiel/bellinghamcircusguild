<?php

if ($_POST["inquiry"]) {
  if (empty($_POST["email"])) {
    $name = $_POST["inquiry"]["name"];
    $email = $_POST["inquiry"]["email"];
    $phone = $_POST["inquiry"]["phone"];
    $message = $_POST["inquiry"]["message"];

    // $to = "belingham-circus-guild@googlegroups.com, website@bellinghamcircusguild.com";
    $to = "amiel.martin@gmail.com";
    $subject = "Website inquiry from $name";
    $email_message = "Hi there,
There is a new message from the website:

$message

This message is from:
From: $name
Email: $email
Phone: $phone

Kind Regards,
Your Website.
    ";

    $headers = 'From: "Guild Website" <website@bellinghamcircusguild.com>' . "\r\n" .
        "Reply-To: \"$name\" <$email>, \"Bellingham Circus Guild\" <belingham-circus-guild@googlegroups.com>" . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $email_message, $headers);
  } else {
    // Honey bucketted!
  }

  // $url = permalink_for_page("Contact us");
  // require_once("../themes/bcg/functions.php");
  $url = "/contact/thanks/";
  header("Location: $url\r\n");
}
