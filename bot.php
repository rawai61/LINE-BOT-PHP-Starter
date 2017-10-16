<?php


include ('line-bot-api/php/line-bot.php');

$channelSecret = '795f0abecb33a523dc346e84a3f4a0b2';
$access_token = 'BXaPBnJWb5J4qD5bQSkApsWIQTNS2fUgAdg4MyftueNW2mHKrq5laVLXRjAzGE/arhek9NU64myzM6r8kHyDZ3rFJsHSxy8sP+fVIwbb15br8i0lEwSA+CWxkl1v6WDPqwh4beMoyJ5nEIHCOEet+wdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
