<?php

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_PORT => "1337",
  CURLOPT_URL => "http://localhost:1337/saches",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1ZDQ1NTk3MjhiZTA1MzJhZDg3NDFjODMiLCJpZCI6IjVkNDU1OTcyOGJlMDUzMmFkODc0MWM4MyIsImlhdCI6MTU2NTUyOTg4MywiZXhwIjoxNTY4MTIxODgzfQ.cW4UN8vF4Fpn4kmiGwdCbjXWasSKzt_lMlCXmVTq8Yw",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Type: application/x-www-form-urlencoded",
    "Host: localhost:1337",
    "Postman-Token: 835b6ef4-e432-4698-a808-bf4d7ec60bd9,cda7f69f-1093-4080-b0ed-707107733fea",
    "User-Agent: PostmanRuntime/7.15.2",
    "cache-control: no-cache"
  ),
));
$response = curl_exec($curl);
$results = json_decode($response, true);
// print_r($results); 

$err = curl_error($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  // foreach ($results as $item) {
  // echo $item['TenSach']."<br/>";
// }
}
curl_close($curl);
?> 