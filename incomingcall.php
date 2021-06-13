<?php

require './twilio-php/src/Twilio/autoload.php';
// use Twilio\Rest\Client;
use Twilio\TwiML\VoiceResponse;


$sid = "ACf8182bcaa986cf3337692ebaa8d9adc3"; // Your Account SID from www.twilio.com/console
$token = "deb9fd74093a5f05fb0ecc56aa83b264"; // Your Auth Token from www.twilio.com/console

// $client = new Twilio\Rest\Client($sid, $token);

// $twilio = new Client($sid, $token);

// $call = $twilio->calls
//               ->create("+18064783311", // to
//                         "+14439880198", // from
//                         [
//                             "twiml" => "<Response><Say>Hello, What's the update!</Say></Response>"
//                         ]
//               );

//print($call->sid);


// Start our TwiML response
$response = new VoiceResponse;

// Read a message aloud to the caller
$response->say(
    "Hello. Thank you for calling! All our customer representatives are currently busy at the moment. Kindly contact us via our email or live chat. Have a great day.", 
    array("voice" => "alice")
);


echo $response;

//echo "Call Sent";

?>