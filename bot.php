<?php
$post = file_get_contents(‘php://input’);
$urlReply = ‘https://api.line.me/v2/bot/message/reply';
$token = 'BXaPBnJWb5J4qD5bQSkApsWIQTNS2fUgAdg4MyftueNW2mHKrq5laVLXRjAzGE/arhek9NU64myzM6r8kHyDZ3rFJsHSxy8sP+fVIwbb15br8i0lEwSA+CWxkl1v6WDPqwh4beMoyJ5nEIHCOEet+wdB04t89/1O/w1cDnyilFU=';

function postMessage($token,$packet,$urlReply){
 $dataEncode = json_encode($packet);
 $headersOption = array(‘Content-Type: application/json’,’Authorization: Bearer ‘.$token);
 $ch = curl_init($urlReply);
 curl_setopt($ch,CURLOPT_CUSTOMREQUEST,’POST’);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch,CURLOPT_POSTFIELDS,$dataEncode);
 curl_setopt($ch,CURLOPT_HTTPHEADER,$headersOption);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
 $result = curl_exec($ch);
 curl_close($ch);
}
			  
$res = json_decode($post, true);
if(isset($res[‘events’]) && !is_null($res[‘events’])){
 foreach($res[‘events’] as $item){
 if($item[‘type’] == ‘message’){
 switch($item[‘message’][‘type’]){
 case ‘text’:
break;
case ‘image’:
break;
 case ‘video’:
 
 break;
 case ‘audio’:
 
 break;
 case ‘location’:
break;
 case ‘sticker’:

 break;
}		

function getSticker($replyToken){
 $sticker = array(
 ‘type’ => ‘sticker’,
 ‘packageId’ => ‘4’,
 ‘stickerId’ => ‘300’
 );
 $packet = array(
 ‘replyToken’ => $replyToken,
 ‘messages’ => array($sticker),
 );
 return $packet;
}
	 $packet = getSticker($item[‘replyToken’]);
 postMessage($token,$packet,$urlReply);
