<?php
	if(isset($_POST['btn_Add'])){
		$MaSach=$_POST['masach'];
		$TenSach=$_POST['tensach'];
		$TenTacGia=$_POST['tacgia'];
		$TenNXB=$_POST['nxb'];
		$NamXB=$_POST['namxb'];
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => "localhost:1337/saches/",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS =>"{\n    \"MaSach\":\"$MaSach\",\n    \"TenSach\": \"$TenSach\",\n    \"TenTacGia\": \"$TenTacGia\",\n    \"TenNXB\": \"$TenNXB\",\n    \"NamXB\": $NamXB\n}",
		CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json",
			"Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1ZDQ1NTk3MjhiZTA1MzJhZDg3NDFjODMiLCJpZCI6IjVkNDU1OTcyOGJlMDUzMmFkODc0MWM4MyIsImlhdCI6MTU2NTUyOTg4MywiZXhwIjoxNTY4MTIxODgzfQ.cW4UN8vF4Fpn4kmiGwdCbjXWasSKzt_lMlCXmVTq8Yw"
		),
	));
	$response = curl_exec($curl);
	curl_close($curl);
		// echo $response;
		echo '<script>alert("Sách đã được thêm mới thành công")</script>'; 
		echo '<script>window.location="index.php"</script>';
	}else{
		echo "Không thực hiện được";
	}
?>