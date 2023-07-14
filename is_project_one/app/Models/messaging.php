<?php

namespace App\Models;
use AfricasTalking\SDK\AfricasTalking;
class messaging{
    function sendSMS($message, $phoneNumber){
        $username = 'test_sms_benso'; // use 'sandbox' for development in the test environment
        $apiKey   = '25c08457aee81fce5d42584da44435ab97ac088b112c963540c3a4549747acad'; // use your sandbox app API key for development in the test environment
        $AT       = new AfricasTalking($username, $apiKey);

        // Get one of the services
        $sms      = $AT->sms();

        // Use the service
        $result   = $sms->send([
            'to'      => $phoneNumber,
            'message' => $message,
        ]);

//        print_r($result);
    }
}