<?php

require './twilio-php/src/Twilio/autoload.php';

use Twilio\TwiML\VoiceResponse;


$sid = "SID"; // Your Account SID from www.twilio.com/console
$token = "AUTH TOKEN"; // Your Auth Token from www.twilio.com/console

// Start our TwiML response
$response = new VoiceResponse;

// Read a message aloud to the caller
$response->say(
    "Hello. Thank you for calling! All our customer representatives are currently busy at the moment. Kindly contact us via our email or live chat. Have a great day.", 
    array("voice" => "alice")
);


echo $response;

?>
