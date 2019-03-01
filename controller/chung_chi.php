<?php
include '../models/connect.php';
session_start();
//insert thông tin chứng chỉ
$id_tv=$_GET['id_tv'];
if (isset($_POST['chung_chi'])){
    $time=$_POST['time'];
    $ten_chung_chi=$_POST['ten_chung_chi'];
    $layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
    $result=mysqli_query($connect,$layid);
    $row=$result->fetch_assoc();
    $id_tv=$row['id_tv'];
    $sql="INSERT INTO chung_chi(id_tv,time,ten_chung_chi) VALUES (".$id_tv.",'$time','$ten_chung_chi')";
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
//update thông tin chứng chỉ
if (isset($_POST['update_chung_chi'])){
    $time=$_POST['time'];
    $ten_chung_chi=$_POST['ten_chung_chi'];
    $layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
    $result=mysqli_query($connect,$layid);
    $row=$result->fetch_assoc();
    $id_tv=$row['id_tv'];
    $sql="update chung_chi set ten_chung_chi='$ten_chung_chi', time='$time' where id_tv=$id_tv";
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
