<?php
require_once('Mail.php');
require_once('Mail/mime.php');
$message = new Mail_mime();
$message->setTXTBody("This is the text version.");
$message->setHTMLBody("This is the <strong>HTML</strong> version.");
$recipients = 'pm.stewart@ulster.ac.uk';
$headers['From'] = 'pm.stewart@ulster.ac.uk';
$headers['To'] = 'pm.stewart@ulster.ac.uk';
$headers['Subject'] = 'Sending HTML test message using Pear';
$mail =& Mail::factory('mail');
$result = $mail->send($recipients, $message->headers($headers), $message->get());
var_dump($result);
?>
