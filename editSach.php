<!DOCTYPE html>
<html>
<head>
	<title>Quản lý thư viện</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/temple.css" />
</head>
<body>
	<?php
		$id=$_GET['id'];
		$curl = curl_init();
		curl_setopt_array($curl, array(
	    CURLOPT_URL => "localhost:1337/saches/".$id,
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_ENCODING => "",
	    CURLOPT_MAXREDIRS => 10,
	    CURLOPT_TIMEOUT => 0,
	    CURLOPT_FOLLOWLOCATION => true,
	    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	    CURLOPT_CUSTOMREQUEST => "GET",
	    CURLOPT_HTTPHEADER => array(
	        "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1ZDQ1NTk3MjhiZTA1MzJhZDg3NDFjODMiLCJpZCI6IjVkNDU1OTcyOGJlMDUzMmFkODc0MWM4MyIsImlhdCI6MTU2NTUyOTg4MywiZXhwIjoxNTY4MTIxODgzfQ.cW4UN8vF4Fpn4kmiGwdCbjXWasSKzt_lMlCXmVTq8Yw"
	    ),
	));
	$response = curl_exec($curl);
	$results = json_decode($response, true);
	$err = curl_error($curl);
	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {?>
	  <div>
	  		<FORM action="updateSach.php" method="POST">
	  			<br>
	  			<table class="table table-bordered" border="1px" style="border-collapse:collapse; border-color: green; width: 450px;line-height: 30px; margin-left: 275px">	
	  			<tr style="border: none;">
	  				<td colspan="2"><h2 style="text-align: center;">UPDATE CÁC ĐẦU SÁCH</h2></td></tr>
		  		<input type="hidden" name="idhidden" value="<?php echo $results["id"]; ?>" />
		  		<tr style="border: none;">
		  			<td style="column-width: 70px"><h4 style="text-align:left; ">Mã sách</h4></td>
		  			<td><input style="text-align: left; width: 70px; line-height: 20px" type="text" name="masach" value="<?php echo $results["MaSach"];?>"></td>
		  		</tr>
		  		<tr style="border: none;">
		  			<td style="column-width: 70px"><h4 style="text-align:left; ">Tên sách</h4></td>
		  			<td><input style="text-align: left; width: 200px; line-height: 20px" type="text" name="tensach" value="<?php echo $results["TenSach"];?>"></td>
		  		</tr>
		  		<tr style="border: none;">
		  			<td style="column-width: 70px"><h4 style="text-align:left; ">Tên tác giả</h4></td>
		  			<td><input style="text-align: left; width: 200px; line-height: 20px" type="text" name="tacgia" value="<?php echo $results["TenTacGia"];?>"></td>
		  		</tr>
		  		<tr style="border: none;">
		  			<td style="column-width: 70px"><h4 style="text-align:left; ">Nhà xuất bản</h4></td>
		  			<td><input style="text-align: left; width: 300px; line-height: 20px" type="text" name="nxb" value="<?php echo $results["TenNXB"];?>"></td>
		  		</tr>
		  		<tr style="border: none;">
		  			<td style="column-width: 70px"><h4 style="text-align:left; column-width: 70px">Năm xuất bản</h4></td>
		  			<td><input style="text-align: left; width: 70px; line-height: 20px" type="text" name="namxb" value="<?php echo $results["NamXB"];?>"></td>
		  		</tr>
		  		<tr></tr>
		  		<tr style="border: none;" >
		  			<td  colspan="2" style="text-align: center;"><input type="submit" name="btn_Update" value="Update" width="100px" /></td>
		  		</tr>
				</table>
			</FORM>
	</div>
	<?php
	}
	curl_close($curl);
    ?>
</body>
</html>