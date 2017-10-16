<?php
$access_token = 'BXaPBnJWb5J4qD5bQSkApsWIQTNS2fUgAdg4MyftueNW2mHKrq5laVLXRjAzGE/arhek9NU64myzM6r8kHyDZ3rFJsHSxy8sP+fVIwbb15br8i0lEwSA+CWxkl1v6WDPqwh4beMoyJ5nEIHCOEet+wdB04t89/1O/w1cDnyilFU=
';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<channel access token>');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<channel secret>']);
$response = $bot->getProfile('<userId>');
if ($response->isSucceeded()) {
    $profile = $response->getJSONDecodedBody();
    echo $profile['displayName'];
    echo $profile['pictureUrl'];
    echo $profile['statusMessage'];
}
