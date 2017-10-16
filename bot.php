$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('BXaPBnJWb5J4qD5bQSkApsWIQTNS2fUgAdg4MyftueNW2mHKrq5laVLXRjAzGE/arhek9NU64myzM6r8kHyDZ3rFJsHSxy8sP+fVIwbb15br8i0lEwSA+CWxkl1v6WDPqwh4beMoyJ5nEIHCOEet+wdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['795f0abecb33a523dc346e84a3f4a0b2' => '795f0abecb33a523dc346e84a3f4a0b2']);
$response = $bot->getProfile('<userId>');
if ($response->isSucceeded()) {
    $profile = $response->getJSONDecodedBody();
    echo $profile['displayName'];
    echo $profile['pictureUrl'];
    echo $profile['statusMessage'];
}
