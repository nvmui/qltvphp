<?php
// $curl= curl_init();
$curl = curl_init('http://10.0.117.236:1337/saches');  
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");                                 
// curl_setopt($ch, CURLOPT_POSTFIELDS, $curl);                    
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);                        
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
  'Content-Type: application/json',
  'cache-control' => 'no-cache',
  'Connection' => 'keep-alive',
  'Accept-Encoding' => 'gzip, deflate',
  'Host' => 'http://10.0.117.236:1337',
  'Postman-Token' => '26-ba8f-4aab-9596-1bcd174603d6,976e9df4-8ff0-437c-8296-a9f720f7069d','Cache-Control' => 'no-cache',
  'Accept' => '/',
  'User-Agent' => 'PostmanRuntime/7.15.2',
  'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1ZDM5YWRlZmE2NDI1NzAzOWQzNmIxMjMiLCJpZCI6IjVkMzlhZGVmYTY0MjU3MDM5ZDM2YjEyMyIsImlhdCI6MTU2NTcxMzI1NiwiZXhwIjoxNTY4MzA1MjU2fQ.qg1LtSql_Yq9ubWg8oOd5mhow_ucr5fUdwE7jbzebFI'
));
$result = curl_exec($curl);
// echo $result;
print_r($result);
// try {
//   // $response = curl_exec($curl);
//   // echo $response;
// } catch (HttpException $ex) {
//   echo $ex;
// }
?>