<?php

require('../../../wp-config.php');

function send_email($subject, $email_message, $reply_to, $honeypot = "") {
  if (empty($honeypot)) {
    _do_send_email($subject, $email_message, $reply_to);
  } else {
    // You fell in to the honey pot!
    // Nope, no email sending for you!
  }

  $url = "/contact/thanks/";
  header("Location: $url\r\n");
}

function _do_send_email($subject, $message, $reply_to) {
  /* $to = "belingham-circus-guild@googlegroups.com"; */
  /* $cc = "website@bellinghamcircusguild.com"; */
  $to = "amiel.martin@gmail.com";

  $api_key = constant('BCG_SENDGRID_API_KEY');
  $url = 'https://api.sendgrid.com/api/mail.send.json';

  $params = array(
    'to' => $to, 'cc' => $cc, 'subject' => $subject, 'replyto' => $reply_to,
    'fromname' => "BCG Website", 'from' => 'website@bellinghamcircusguild.com',
    'text' => $message,
  );

  $headers = array("Authorization: Bearer $api_key");

  $session = curl_init($url);
  curl_setopt($session, CURLOPT_POST, true);
  curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($session, CURLOPT_POSTFIELDS, $params);
  curl_setopt($session, CURLOPT_HTTPHEADER, $headers);

  $response = curl_exec($session);
  curl_close($session);
}
