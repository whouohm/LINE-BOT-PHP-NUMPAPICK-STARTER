<?php
$access_token = 'iNUrOFH6jdjQJ3RzfRsqhsy744hemfiqfph5NWRIPkawDKideScS9dn5oqW3DupD5IcOOAiTMiRassNvwt89PhOhvcjx0I2YIxMuxDfc2b7W4NTxGwFF2fKgUfxEkFLjr2/C29y6N7OOscwzzyp4jwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
