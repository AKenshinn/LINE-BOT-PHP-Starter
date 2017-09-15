<?php
$access_token = 'Pl/wnMLVkzxzrMj+Lm0KLxW0fommkNHHxYc3kTt9GAsHoKTu2F9Ut49Fpu6r5+R2odf6Kjb/oUlgFG7/GTBhDzzL/XBIyamlqpb8Cm1j4+KtMRnJMpdx7gmUnBiZepq/XI2kqo6qdGem33lliisvdQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;