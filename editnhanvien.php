<?php 
    include_once "connect.php";
    
    $manv = $_GET['manv'];

    // lay du lieu tu database
    $sql = "SELECT * FROM nhanvien WHERE manv = '$manv'";
    $query = mysqli_query($conn, $sql);
    $numRow = mysqli_num_rows($query);
    $row = mysqli_fetch_assoc($query);

    if(isset($_POST['submit'])) {
        $ten = $_POST['ten'];
        $sodienthoai = $_POST['sodienthoai'];
        $diachi = $_POST['diachi'];
        $email = $_POST['email'];

        $sqlUpdate = "UPDATE nhanvien SET ten='$ten', sodienthoai='$sodienthoai', diachi='$diachi', email='$email' WHERE manv = '$manv' ";
        $queryUpdate = mysqli_query($conn, $sqlUpdate);

        if($queryUpdate) {
            header("location: quanlynhanvien.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit thông tin nhân viên</title>
    <link rel="icon" href="./logo.png">
    <link rel="stylesheet" href="./editkhachhang.css">
</head>
<body>
<form action="" method="post">
    <div class="main">
        <h2>CHỈNH SỬA NHÂN VIÊN</h1>
        <div class="container">
            <div class="container__left">
                <p>Họ tên:</p>
                <input type="text" value="<?php echo "$row[ten]"?>" required name="ten">
                <p>Số điện thoại:</p>
                <input type="text" value="<?php echo "$row[sodienthoai]"?>" required name="sodienthoai">
            </div>
            <div class="container__right">
                <p>Địa chỉ:</p>
                <input type="text" value="<?php echo "$row[diachi]"?>" required name="diachi">
                <p>Email:</p>
                <input type="text" value="<?php echo "$row[email]"?>" required name="email">
                <input class="submit" name="submit" type="submit" value="Cập nhật">
            </div>
        </div>
    </div>
</form>

</body>
</html>