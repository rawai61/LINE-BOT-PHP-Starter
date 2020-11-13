<?php
$access_token = 'Exj6FwWb9NBo9PfD/SxjQj6iISD4FOTdZrR/CZk+GUJP9vUKmpQrtK7afSABo0ABKIY5ABpNy6Gx02dJ5r6n5tT1S9aZEllOA3jsdQ+WcGCfDezbBQ6p18dXCuQ6OouNWq5H04eSZmw6Iz1gi44kWQdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
