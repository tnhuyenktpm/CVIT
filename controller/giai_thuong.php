<?php
include '../models/connect.php';
session_start();
//insert thông tin giai thuong
$id_tv=$_GET['id_tv'];
if (isset($_POST['giai_thuong'])){
    $time=$_POST['time'];
    $ten_giai_thuong=$_POST['ten_giai_thuong'];
    $layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
    $result=mysqli_query($connect,$layid);
    $row=$result->fetch_assoc();
    $id_tv=$row['id_tv'];
    $sql="INSERT INTO giai_thuong(id_tv,time,ten_giai_thuong) VALUES (".$id_tv.",'$time','$ten_giai_thuong')";
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
//update thông tin giai thuong
if (isset($_POST['update_giai_thuong'])){
    $time_gt=$_POST['time_gt'];
    $ten_giai_thuong=$_POST['ten_giai_thuong'];
    $layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
    $result=mysqli_query($connect,$layid);
    $row=$result->fetch_assoc();
    $id_tv=$row['id_tv'];
    $sql="update giai_thuong set  time='$time_gt', ten_giai_thuong='$ten_giai_thuong' where id_tv=$id_tv";
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
