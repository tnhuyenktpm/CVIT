<?php
include '../models/connect.php';
session_start();
//insert thông tin dự án
$id_tv=$_GET['id_tv'];
if (isset($_POST['du_an'])){
    $time=$_POST['time'];
    $ten_du_an=$_POST['ten_du_an'];
    $mo_ta=$_POST['mo_ta'];
    $so_luong=$_POST['so_luong'];
    $vi_tri_cong_viec=$_POST['vi_tri_cong_viec'];
    $vai_tro=$_POST['vai_tro'];
    $cong_nghe=$_POST['cong_nghe'];
    $layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
    $result=mysqli_query($connect,$layid);
    $row=$result->fetch_assoc();
    $id_tv=$row['id_tv'];
    $sql="INSERT INTO du_an(id_tv,time,ten_du_an,mo_ta,so_luong,vi_tri_cong_viec,vai_tro,cong_nghe) VALUES (".$id_tv.",'$time','$ten_du_an','$mo_ta','$so_luong','$vi_tri_cong_viec','$vai_tro','$cong_nghe')";
    if (mysqli_query($connect,$sql)){
    echo'<script language="javascript">
                        alert("thêm thành công")
                    </script>';
        header("location:../views/tao-cv.php?id_tv=$id_tv");
    } else
    {
    echo'<script language="javascript">
                        alert("thêm thất bại")
                    </script>';
        header("Refresh:0; url=../views/tao-cv.php?id_tv=$id_tv");
    }
}
//update thông tin dự án
if (isset($_POST['update_du_an'])){
    $time_da=$_POST['time_da'];
    $ten_du_an=$_POST['ten_du_an'];
    $mo_ta=$_POST['mo_ta'];
    $so_luong=$_POST['so_luong'];
    $vi_tri_cong_viec=$_POST['vi_tri_cong_viec'];
    $vai_tro=$_POST['vai_tro'];
    $cong_nghe=$_POST['cong_nghe'];
    $layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
    $result=mysqli_query($connect,$layid);
    $row=$result->fetch_assoc();
    $id_tv=$row['id_tv'];
    $sql="update du_an set ten_du_an='$ten_du_an', time='$time_da', mo_ta='$mo_ta', so_luong='$so_luong', vi_tri_cong_viec='$vi_tri_cong_viec',vai_tro='$vai_tro',cong_nghe='$cong_nghe' where id_tv=$id_tv";
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
