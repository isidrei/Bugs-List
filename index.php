<?php
include "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

define('TOKEN', '[YOUR TOKEN]');
define('MANTISHUB_URL', 'https://ipt10-2022.mantishub.io/');


$client = new Client();
$headers = [
  'Authorization' => 'pbF0IURpw2NeBoIF1HnM-58dmrQacWm3'
];
$request = new Request('GET', 'https://ipt10-2022.mantishub.io/api/rest/issues?page_size=10&page=1', $headers);
$res = $client->sendAsync($request)->wait();
$bugs = $res->getBody()->getContents();

$bugs_list = json_decode($bugs);

//foreach ($bugs_list->issues as $bug)
//{
//	echo '<li>' . $bug->id . ' ' .
//$bug->summary . ' - ' .
//$bug->severity->name . ' - ' .
//$bug->status->name . "\n";
//}

?>



<!DOCTYPE html>
<html>
    <UTF-8>
<head>
<title> IPT-10 Bugs</title>
<style> table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }</style>

  

</head>
<center>
<body>
    
    <h1 style="color:rgb(0, 0, 0);font-size:45px;"> IPT-10 Bugs-List</h1>
    
    <p1 style="color:rgb(0, 0, 0);font-size:25px;"> Dan Isidrei Musni</p1>
    <br>
    <br>

    <table style="width:50%">
        <tr>
          <th>ID</th>
          <th>Summary</th>
          <th>Severity</th>
          <th>Status</th> 
        </tr>
<?php
        foreach ($bugs_list->issues as $bug)
  {
    ?>
        <tr>
          <td><?php echo $bug->id; ?> </td>
          <td><?php echo $bug->summary; ?> </td>
          <td><?php echo $bug->severity->name ?> </td>
          <td><?php echo $bug->status->name ?> </td>
        </tr>
        <?php
  }
  ?>

      </table>
      </center>
</body>





    </UTF-8>
</html>



