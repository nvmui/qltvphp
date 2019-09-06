<?php
// Read JSON file
// $readjson = file_get_contents('data.json') ;

// //Decode JSON
// $data = json_decode($readjson, true);

// //Print data
// print_r($data);
// echo "<br/><br/> Employee names are: <br/>";

// //Parse the employee name
// foreach ($data as $emp) {
//   echo $emp['TenSach']."<br/>";
// }
$url='http://localhost:1337/saches';
$contents = file_get_contents($url);
// $contents = utf8_encode($contents);
$results = json_decode($contents, true);
print_r($results); 
foreach ($results as $item) {
  echo $item['TenSach']."<br/>";
}
?>