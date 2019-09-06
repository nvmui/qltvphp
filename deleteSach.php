<?php
$curl = curl_init();
$id=$_GET['id'];
curl_setopt_array($curl, array(
    CURLOPT_URL => "localhost:1337/saches/".$id,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "DELETE",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1ZDQ1NTk3MjhiZTA1MzJhZDg3NDFjODMiLCJpZCI6IjVkNDU1OTcyOGJlMDUzMmFkODc0MWM4MyIsImlhdCI6MTU2NTUyOTg4MywiZXhwIjoxNTY4MTIxODgzfQ.cW4UN8vF4Fpn4kmiGwdCbjXWasSKzt_lMlCXmVTq8Yw"
    ),
));
$response = curl_exec($curl);
curl_close($curl);
echo '<script>alert("Sách bạn đã được xoá")</script>'; 
echo '<script>window.location="index.php"</script>';
// echo $response;
?>