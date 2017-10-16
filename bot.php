<?php
$access_token = 'tILI2h91gdcdxXKaUpt/yfXgIXcmK0D20ExoP1ZRft04RYjWm0HeICcNbBxGAH27rhek9NU64myzM6r8kHyDZ3rFJsHSxy8sP+fVIwbb15ZNqeDXX2yUG6tUYzEUehJytvpzvGzYe32Rdq9m8exkywdB04t89/1O/w1cDnyilFU=';
GET https://api.line.me/v2/bot/profile/{userId}
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<channel access token>');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<channel secret>']);
$response = $bot->getProfile('<userId>');
if ($response->isSucceeded()) {
    $profile = $response->getJSONDecodedBody();
    echo $profile['displayName'];
    echo $profile['pictureUrl'];
    echo $profile['statusMessage'];
}
