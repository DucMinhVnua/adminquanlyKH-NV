<?php 
	include_once "connect.php";
	$makh = $_GET['makh'];
	
	$sql = "DELETE FROM khachhang WHERE makh = '$makh'";
	$query = mysqli_query($conn, $sql);
	if($query) {
		header("location: quanlykhachhang.php");
	}
?>