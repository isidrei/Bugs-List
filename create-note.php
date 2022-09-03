<?php
$client = new Client();
$headers = [
  'Authorization' => 'pbF0IURpw2NeBoIF1HnM-58dmrQacWm3',
  'Content-Type' => 'application/json'
];
$body = '{
  "text": "musni.danisidrei@auf.edu.ph",
  "view_state": {
    "name": "public"
  }
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/issues/1234/notes', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
