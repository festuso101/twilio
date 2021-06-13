<?php

require './twilio-php/src/Twilio/autoload.php';
use Twilio\Rest\Client;



$sid = "SID"; // Your Account SID from www.twilio.com/console
$token = "AUTH TOKEN"; // Your Auth Token from www.twilio.com/console
$client = new Twilio\Rest\Client($sid, $token);

$twilio = new Client($sid, $token);

$call = $twilio->calls
              ->create("+1000000000", // to
                        "+100000000000", // from
                        [
                            "twiml" => "<Response><Say>Hello, World!</Say></Response>"
                        ]
              );

print($call->sid);


echo "Call Sent";

?>
