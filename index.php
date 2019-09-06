<!DOCTYPE html>
<html>
<head>
	<title>Quản lý thư viện</title>
	<link rel="stylesheet" type="text/css" href="style/temple.css" />
</head>
<body>
	<div class="waper">
		<div class="banner">
			<img src="img/images.jpg" width="100%" height="150px">
		</div>
		<div style="height: 30px;background:#09F;">
			<a href="index.php" style="line-height: 30px; text-decoration: none;margin-left: 10px; color: white">Trang chủ</a>
		</div>
		<div class="conten">
			<?php 
				if(isset($_GET['action']))
	    		{
	    			$action=$_GET['action'];
	    		}
	    		else $action="";
					if (isset($_GET['content'])) {
						switch ($_GET['content']) {
							case 'edit':
								include('editsach.php');
								break;
							case 'Delete':
								include('deleteSach.php');
								break;
							case 'Update':
								include('updateSach.php');
								break;
							case 'add':
								include('frmAddBook.php');
								break;
							default:
								break;
						}
					}else{
						include('frmViewBook.php');
					}
			?>
		</div>
		<div class="footer">
			<p style="text-align:center; color:#FFF; background:#09F;line-height:33px">Coppyright 2019</p>
		</div>
	</div>
	
</body>
</html>