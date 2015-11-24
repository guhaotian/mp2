<?php

session_start();

require 'vendor/autoload.php';
use Aws\Sns\SnsClient;
//session_start();

$client = SnsClient::factory(array(
        'version' =>'latest',
        'region'  => 'us-west-2'
            ));


$result = $client->publish([
    'Message' => 'upload a image', // REQUIRED


    'TopicArn' => 'arn:aws:sns:us-west-2:272403141514:mp2-ght'
]);
echo 'success';
?>

