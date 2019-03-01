
<?php 
include '../models/connect.php';

$ten = isset($_POST['hoten']) ? (string)$_POST['hoten'] : false;
$email = isset($_POST['mail']) ? (string)$_POST['mail'] : false;

	$sql = "UPDATE user SET ho_ten='$ten' where email='$email'";
	if ($connect->query($sql) === TRUE) {
	    echo "Bạn đã đổi tên thành: ".$ten;
	} else {
	    echo "Có lỗi: " . $connect->error;
	}

	$connect->close();

