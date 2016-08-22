<?php
include("Mail.php");

$FromPerson = ($_REQUEST['From']);
$Message = ($_REQUEST['Message']);

$to = 'march@kainos.com';
$from = 'uujproject2016@gmail.com';
$subject = 'Message from your webpage';
$body = "You have a new message on your webpage: " + $Message;



$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'uujproject2016@gmail.com',
        'password' => '1Password32$$'

    ));


$mail = @$smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) die($mail->getMessage());
?>

