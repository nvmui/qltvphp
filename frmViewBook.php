<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/temple.css" />
</head>
<body>
	<div class="table-responsive">
        <a href="index.php?content=add"><img src="img/addNew.png" width="30px" height="30px" align="right" style="margin-right: 20px; text-align: right;"></a>
		<h2 align="center">DANH SÁCH SÁCH CÓ TRONG THƯ VIỆN</h2>
        <br>
       <table class="table table-bordered" border="1px" style="border-collapse:collapse; border-color: green">  
            <tr style="font-weight:bold; background-color: green">  
                 <th width="40%">Tên tác phẩm</th>  
                 <th width="30%">Tên tác giả</th>  
                 <th width="15%">Nhà XB</th>  
                 <th width="15%">Năm XB</th>
                 <th width="10%">Update</th>
                 <th width="10%">Delete</th>
            </tr>  
            <tr>  
                <?php
                session_start();
                include 'getall.php';                 
                    foreach ($results as $item) {

                ?>
                 <td style="padding-left: 10px; font-weight: bold;"><a href="#" style="text-decoration: none;"><?php echo $item['TenSach'];?></a></td>  
                 <td style="text-align:center"><?php echo $item['TenTacGia'];?></td>  
                 <td style="text-align:right; padding-right:5px;"><?php echo $item['TenNXB'];?></td>  
                 <td style="text-align:right; padding-right:5px;"><?php echo $item['NamXB'];?></td>
                 <td><a href="index.php?content=edit&id=<?php echo $item['id'] ?>" style="text-decoration: none;"><img src="img/edit.png" width="30px" height="30px"></a></td>
                 <td><a href="index.php?content=Delete&id=<?php echo $item['id'] ?>" style="text-decoration: none;"><img src="img/Delete.png" width="30px" height="30px"></a></td>      
            </tr>
                <?php
                    }
                ?>               
       </table>  
  </div> 
</body>
</html>