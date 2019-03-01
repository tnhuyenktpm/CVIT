<?php
include '../models/connect.php';
session_start();
$id_tv=$_GET['id_tv'];
// update thông tin giới thiệu
if (isset($_POST['update_gioi_thieu'])){
    $ho_ten=$_POST['ho_ten'];
	$gioi_tinh=$_POST['gioi_tinh'];
	$phone=$_POST['phone'];
	$ten_chuyen_nganh=$_POST['ten_chuyen_nganh'];
	$ten_tinh=$_POST['ten_tinh'];
	$quoc_tich=$_POST['quoc_tich'];
	$website=$_POST['website'];
	$mo_ta_ngan=$_POST['mo_ta_ngan'];
	$ngay_sinh=$_POST['ngay_sinh'];
    $layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
    $result=mysqli_query($connect,$layid);
    $row=$result->fetch_assoc();
    $id_tv=$row['id_tv'];
    $sql="update tt_thanh_vien set   gioi_tinh='$gioi_tinh', phone='$phone', quoc_tich='$quoc_tich', website='$website', mo_ta_ngan='$mo_ta_ngan', ngay_sinh='$ngay_sinh' where id_tv=$id_tv";
    if (mysqli_query($connect,$sql)){
    echo'<script language="javascript">
                        alert("Cập nhật thành công")
                    </script>';
        header("location:../views/update_cv.php?id_tv=$id_tv");
    } else
    {
    echo'<script language="javascript">
                        alert("Cập nhật thất bại")
                    </script>';
        header("Refresh:0; url=../views/update_cv.php?id_tv=$id_tv");
    }
}
?>