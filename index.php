<?php


/*  */
// $opts = [
//   'http'=> [
//     'method'=>"GET",
//     'header'=>"Accept-language: en\r\n" .
//               "Authorization: Bearer 00826525-ada6-4264-befe-79acc3d8693d\r\n",
//   ]
// ];

// $context = stream_context_create($opts);

// // Accès à un fichier HTTP avec les entêtes HTTP indiqués ci-dessus
// $file = file_get_contents('https://api.le-systeme-solaire.net/rest/bodies/', false, $context);

// header("content-type: application/json");



// echo $file;




// $curl = curl_init('https://api.le-systeme-solaire.net/rest/bodies/');


// curl_setopt($curl, CURLOPT_HTTPHEADER, [
//     'Authorization: Bearer ' . "00826525-ada6-4264-befe-79acc3d8693d",
// ]);

// header("content-type: application/json");


// curl_exec($curl);

require_once './vendor/autoload.php'; 

$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://api.le-systeme-solaire.net/rest/bodies/terre', [
 'headers' => [
     "Authorization" =>  "Bearer 00826525-ada6-4264-befe-79acc3d8693d",
 ]]);
 echo $res->getBody();

