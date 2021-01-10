<?php 
	include_once "connect.php";

		$ten = $_POST['ten'];
		$sodienthoai = $_POST['sodienthoai'];
		$diachi = $_POST['diachi'];
		$email = $_POST['email'];

		// Thêm vào table
			$sql = "INSERT INTO nhanvien (ten, sodienthoai, diachi, email) VALUES ('$ten', '$sodienthoai', '$diachi', '$email')";
			$query = mysqli_query($conn, $sql);
			if($query) {
				header("location: quanlynhanvien.php");
			}	
?>