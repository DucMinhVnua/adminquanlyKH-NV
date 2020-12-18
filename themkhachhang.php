<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm khách hàng</title>
    <link rel="stylesheet" type="text/css" href="./stylethemkhachhang.css">
</head>
<body>

	<form name="form-add"  action="xulythemkhachhang.php" method="POST" id="form">
        <input type="text" value="" name="ten" required="" placeholder="Nhập tên khách hàng"><br/>

        <input type="text" value="" name="sodienthoai" required="" placeholder="Nhập số điện thoại khách hàng"><br/>

	    <input type="text" value="" name="diachi" required="" placeholder="Nhập địa chỉ khách hàng"><br/>
	    
        <input type="text" value="" name="email" required="" placeholder="Nhập email khách hàng"><br/>
	    <input type="submit" value="Lưu" name="submit-add">
    </form>
          
	
</body>