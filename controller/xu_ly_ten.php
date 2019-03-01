<?php
include '../models/connect.php';
session_start();
//insert thông tin chứng chỉ
$id_tv=$_GET['id_tv'];
if(isset($_POST['xu_ly_ten'])){
$ho_ten=$_POST['ho_ten'];
$query_tv = "SELECT id_user FROM tt_thanh_vien WHERE id_tv = $id_tv";
$result=mysqli_query($connect,$query_tv);
$row=$result->fetch_assoc();
$id_user=$row['id_user'];
$ten = "UPDATE user SET ho_ten='$ho_ten' where id_user=$id_user ";
if (mysqli_query($connect,$ten)){
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