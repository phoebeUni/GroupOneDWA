<?php
include('Mail.php');
$recipients = 'pm.stewart@ulster.ac.uk';
$headers['From'] = 'pm.stewart@ulster.ac.uk';
$headers['To'] = 'pm.stewart@ulster.ac.uk';
$headers['Subject'] = 'Sending test message using Pear';
$body = 'This is a test message sent using Pear';
$mail =& Mail::factory('mail');
$result = $mail->send($recipients, $headers, $body);
var_dump($result);
?>