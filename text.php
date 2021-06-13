
<?php

require './twilio-php/src/Twilio/autoload.php';
use Twilio\Rest\Client;

$sid = "ACf8182bcaa986cf3337692ebaa8d9adc3"; // Your Account SID from www.twilio.com/console
$token = "deb9fd74093a5f05fb0ecc56aa83b264"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  '18064783311', // Text this number
  [
    'from' => '14439880198', // From a valid Twilio number
    'body' => 'This is just to prove that this actually works.'
  ]
);

//print $message->sid;

echo "Message Sent";

?>