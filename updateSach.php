<?php

	if(isset($_POST['btn_Update'])){
		$id=$_POST['idhidden'];
		$TenSach=$_POST['tensach'];
		$TenTacGia=$_POST['tacgia'];
		$TenNXB=$_POST['nxb'];
		$NamXB=$_POST['namxb'];
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "localhost:1337/saches/".$id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "PUT",
			CURLOPT_POSTFIELDS =>"{\r\n\"TenSach\":\"$TenSach\",\r\n\"TenTacGia\":\"$TenTacGia\",\r\n\"TenNXB\":\"$TenNXB\",\r\n\"NamXB\":$NamXB\r\n}",
			CURLOPT_HTTPHEADER => array(
				"Content-Type: application/json",
				"Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1ZDQ1NTk3MjhiZTA1MzJhZDg3NDFjODMiLCJpZCI6IjVkNDU1OTcyOGJlMDUzMmFkODc0MWM4MyIsImlhdCI6MTU2NTUyOTg4MywiZXhwIjoxNTY4MTIxODgzfQ.cW4UN8vF4Fpn4kmiGwdCbjXWasSKzt_lMlCXmVTq8Yw"
			),
		));
		$response = curl_exec($curl);
		curl_close($curl);
		echo '<script>alert("Sách bạn đã được update thành công")</script>'; 
		echo '<script>window.location="index.php"</script>';
	}else{
		echo "Không thực hiện được";
	}
?>