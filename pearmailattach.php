<?php

include 'Mail.php';
include 'Mail/mime.php' ;

$text = 'Text version of email';
$html = '<html><body>HTML version of email</body></html>';
$file = 'file1.jpg';
$crlf = "\n";
$hdrs = array(
              'From'    => 'pm.stewart@ulster.ac.uk',
              'Subject' => 'Test mime message with attachment'
              );

$mime = new Mail_mime(array('eol' => $crlf));

$mime->setTXTBody($text);
$mime->setHTMLBody($html);
$mime->addAttachment($file, 'image/jpeg');

$body = $mime->get();
$hdrs = $mime->headers($hdrs);

$mail =& Mail::factory('mail');
$result = $mail->send('pm.stewart@ulster.ac.uk', $hdrs, $body);
var_dump($result);
?>