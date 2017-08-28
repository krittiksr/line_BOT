<?php
$access_token = 'Uh+HwbIHhVuHiAK8cdHHbYPzoJNGjLOksHoem8qEWTGgOhLhOGSi0uKGuuUYJZbyJlQy3aQV7pAUb7oFOhdRAFcouSyCVx1pmL2W4jwR4OfSLlBA+KH6v5EBFfcybGAHRZGO0Y1Yi6vwMgFf+EFIwwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
