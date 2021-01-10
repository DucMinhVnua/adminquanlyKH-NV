<?php 
	include_once "connect.php";
	$manv = $_GET['manv'];
	
	$sql = "DELETE FROM nhanvien WHERE manv = '$manv'";
	$query = mysqli_query($conn, $sql);
	if($query) {
		header("location: quanlynhanvien.php");
	}
?>