
<?php

require './twilio-php/src/Twilio/autoload.php';
use Twilio\Rest\Client;

$sid = "SID"; // Your Account SID from www.twilio.com/console
$token = "AUTH TOKEN"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  '1000000000000000000', // Text this number
  [
    'from' => '10000000000000', // From a valid Twilio number
    'body' => 'This is just to prove that this actually works.'
  ]
);

print $message->sid;

echo "Message Sent";

?>
