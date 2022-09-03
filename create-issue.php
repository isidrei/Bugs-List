<?php
include "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;


$client = new Client();
$headers = [
  'Authorization' => 'pbF0IURpw2NeBoIF1HnM-58dmrQacWm3',
  'Content-Type' => 'application/json'
];
$body = '{
  "summary": "Dan Isidrei Musni",
  "description": "Description for sample REST issue.",
  "additional_information": "More info about the issue",
  "project": {
    "id": 1,
    "name": "mantisbt"
  },
  "category": {
    "id": 5,
    "name": "bugtracker"
  },
  "handler": {
    "name": "vboctor"
  },
  "view_state": {
    "id": 10,
    "name": "public"
  },
  "priority": {
    "name": "normal"
  },
  "severity": {
    "name": "trivial"
  },
  "reproducibility": {
    "name": "always"
  },
  "sticky": false,
  "custom_fields": [
    {
      "field": {
        "id": 4,
        "name": "The City"
      },
      "value": "Seattle"
    }
  ],
  "tags": [
    {
      "name": "mantishub"
    }
  ]
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/issues', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
