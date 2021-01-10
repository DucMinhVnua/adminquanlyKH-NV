<?php 
	// Kết nối database
	include_once "connect.php";

	$sql = "SELECT * FROM nhanvien";
	$query = mysqli_query($conn, $sql);

	// Kiểm tra nếu bên trong table có dữ liêu thì lấy dữ liệu ra
	$numRow = mysqli_num_rows($query);	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quản lý khách hàng</title>
	<meta charset="utf-8">
	<link rel="icon" href="./logo.png">
	<link rel="stylesheet" type="text/css" href="./stylequanlykhachhang.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>

<div class="container-form">
	<span class="btn-add">
		<a id="add">Thêm nhân viên</a>
	</span>

	<table class="styled-table" action="" method ="POST">
	    <thead>
	        <tr>
	            <th>Họ tên</th>
	            <th>Số điện thoại</th>
	            <th>Địa chỉ</th>
	            <th>Email</th>
	            <th>Chức năng 1</th>
	            <th>Chức năng 2</th>
	        </tr>
	    </thead>
	    <tbody>
	        <tr>
	        	<?php 
	        		if($numRow > 0) {
	        			$dem = 0;
						while ($row = mysqli_fetch_assoc($query)) {
							if($dem++ % 2 == 0) {
								echo "
									<tr class = 'active-row'>
										<td>$row[ten]</td>
										<td>$row[sodienthoai]</td>
										<td>$row[diachi]</td>
										<td>$row[email]</td>
							            <td id='cn' class='edit'><button><a href='editnhanvien.php?manv=$row[manv]'>Sửa</a></button></td>
							            <td id='cn'><button><a href='deletenhanvien.php?manv=$row[manv]'>Xóa</a></button></td>
									<tr>
								";	
							} else {
								echo "
									<tr>
										<td>$row[ten]</td>
										<td>$row[sodienthoai]</td>
										<td>$row[diachi]</td>
										<td>$row[email]</td>
							            <td id='cn' class='edit'><button><a href='editnhanvien.php?manv=$row[manv]'>Sửa</a></button></td>
							            <td id='cn'><button><a href='deletenhanvien.php?manv=$row[manv]'>Xóa</a></button></td>
									<tr>
								";	
							}
							
						}
					}
	        	?>
	        <tr>
	    </tbody>
	</table>
</div>

<div class="add-information">
	<form action="xulythemnhanvien.php" method="POST">
		<i class="fas fa-times"></i>
		<div class="table-add">
			<div class="table-left">
	            <div>Tên nhân viên:</div>
	            <div>Số điện thoại:</div>
	            <div>Địa chỉ:</div>
	            <div>Email:</div>
			</div>
			<div class="table-right">
	           <input type="text" name="ten" required>
	           <input type="text" name="sodienthoai" required>
	           <input type="text" name="diachi" required>
	           <input type="text" name="email" required>
	        </div>
	        <div class="button-add">
	            <input type="submit" value="THÊM NHÂN VIÊN">
	        </div>
		</div>
	</form>   
</div>

<script src="./main.js"></script>
	
<script type="text/javascript" src="./cn-form.js"></script>
 
</body>
</html>