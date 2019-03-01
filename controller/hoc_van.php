<?php
include '../models/connect.php';
session_start();
//insert thông tin học vấn
$id_tv=$_GET['id_tv'];
if (isset($_POST['submit'])){
    $time=$_POST['time'];
    $noi_hoc=$_POST['noi_hoc'];
    $chi_tiet=$_POST['chi_tiet'];
    $layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
    $result=mysqli_query($connect,$layid);
    $row=$result->fetch_assoc();
    $id_tv=$row['id_tv'];
    $sql="INSERT INTO hoc_van(id_tv,time,noi_hoc,chi_tiet) VALUES (".$id_tv.",'$time','$noi_hoc','chi_tiet')";
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
//update thông tin học vấn
if (isset($_POST['update_hoc_van'])){
    $time_hv=$_POST['time_hv'];
    $noi_hoc=$_POST['noi_hoc'];
    $chi_tiet=$_POST['chi_tiet'];
    $layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
    $result=mysqli_query($connect,$layid);
    $row=$result->fetch_assoc();
    $id_tv=$row['id_tv'];
    $sql="update hoc_van set noi_hoc='$noi_hoc', time='$time_hv', chi_tiet='$chi_tiet' where id_tv=$id_tv";
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
