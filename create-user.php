<?php
$client = new Client();
$headers = [
  'Authorization' => 'pbF0IURpw2NeBoIF1HnM-58dmrQacWm3',
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "isidrei ",
  "password": "123",
  "real_name": "isidrei musni",
  "email": "musni.dan.isidrei@auf.edu.ph",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST','https://ipt10-2022.mantishub.io/api/rest/users/', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
