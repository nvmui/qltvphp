<!DOCTYPE html>
<html>
<head>
	<title>Quản lý thư viện</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/temple.css" />
</head>
<body>
	<div>
  		<FORM action="addBook.php" method="POST">
  			<br>
  			<table class="table table-bordered" border="1px" style="border-collapse:collapse; border-color: green; width: 450px;line-height: 30px; margin-left: 275px">	
  			<tr style="border: none;">
  				<td colspan="2"><h2 style="text-align: center;">NHẬP CÁC ĐẦU SÁCH</h2></td></tr>
	  		<tr style="border: none;">
	  			<td style="column-width: 70px"><h4 style="text-align:left; ">Mã sách</h4></td>
	  			<td><input style="text-align: left; width: 70px; line-height: 20px" type="text" name="masach"></td>
	  		</tr>
	  		<tr style="border: none;">
	  			<td style="column-width: 70px"><h4 style="text-align:left; ">Tên sách</h4></td>
	  			<td><input style="text-align: left; width: 200px; line-height: 20px" type="text" name="tensach"></td>
	  		</tr>
	  		<tr style="border: none;">
	  			<td style="column-width: 70px"><h4 style="text-align:left; ">Tên tác giả</h4></td>
	  			<td><input style="text-align: left; width: 200px; line-height: 20px" type="text" name="tacgia"></td>
	  		</tr>
	  		<tr style="border: none;">
	  			<td style="column-width: 70px"><h4 style="text-align:left; ">Nhà xuất bản</h4></td>
	  			<td><input style="text-align: left; width: 300px; line-height: 20px" type="text" name="nxb"></td>
	  		</tr>
	  		<tr style="border: none;">
	  			<td style="column-width: 70px"><h4 style="text-align:left; column-width: 70px">Năm xuất bản</h4></td>
	  			<td><input style="text-align: left; width: 70px; line-height: 20px" type="text" name="namxb"></td>
	  		</tr>
	  		<tr></tr>
	  		<tr style="border: none;" >
	  			<td  colspan="2" style="text-align: center;"><input type="submit" name="btn_Add" value="Thêm mới" width="100px" /></td>
	  		</tr>
			</table>
		</FORM>
	</div>
</body>
</html>