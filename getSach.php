<?php
  $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://10.0.117.236:1337/saches',
    CURLOPT_USERAGENT => 'Test api',
    CURLOPT_SSL_VERIFYPEER => false,
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',                  
    'Content-Length: ' . strlen($data_string))  
    // CURLOPT_POSTFIELDS => $data
  ));
    $result = curl_exec($curl);
  // if ($result === FALSE) {
  //   echo "Lỗi kết nối";
  // }else {
    // $data="'".$result."'";
    $shorkey = json_decode($result);
  //   // {
  //   //   foreach($result as $key => $value){        
  //   //     echo $value->TenSach, "\n";
  //   //   }
  //   // }
    
  //   // echo " "+$shorkey["TenSach"];
  // }
    // echo "'".$result."'";
    echo "test ".$result;
  // echo $shorkey['TenSach'];
  curl_close($curl);
?>