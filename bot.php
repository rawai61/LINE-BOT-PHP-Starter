<?php
$access_token = 'BXaPBnJWb5J4qD5bQSkApsWIQTNS2fUgAdg4MyftueNW2mHKrq5laVLXRjAzGE/arhek9NU64myzM6r8kHyDZ3rFJsHSxy8sP+fVIwbb15br8i0lEwSA+CWxkl1v6WDPqwh4beMoyJ5nEIHCOEet+wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
