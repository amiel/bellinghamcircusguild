<?php

function send_email($subject, $email_message, $honeypot = "") {
  if (empty($honeypot)) {
    // $to = "belingham-circus-guild@googlegroups.com, website@bellinghamcircusguild.com";
    $to = "amiel.martin@gmail.com";

    $headers = 'From: "Guild Website" <website@bellinghamcircusguild.com>' . "\r\n" .
        "Reply-To: \"$name\" <$email>, \"Bellingham Circus Guild\" <belingham-circus-guild@googlegroups.com>" . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $email_message, $headers);
  } else {
    // You fell in to the honey pot!
    // Nope, no email sending for you!
  }

  $url = "/contact/thanks/";
  header("Location: $url\r\n");
}
