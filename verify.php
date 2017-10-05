<?php
$access_token = '/840w9GOSCdL0MtaXT4hQRUTHHGFclkR5FDyReiizAOO9bW4aObDTEgf6Ab+uXjIauXlgJVSFv7aI/LTZK5NwlB4DjhEXi8KKvQnjDhivZBmoq1Lzxwo6snrW0u51LUgpRvkeEOoDauO/Mi/vkkzagdB04t89/1O/w1cDnyilFU=
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
