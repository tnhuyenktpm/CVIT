<?php
include '../models/connect.php';
session_start();
//insert thông tin kinh nghiệm
$id_tv=$_GET['id_tv'];
if (isset($_POST['kinh_nghiem'])){
    $time=$_POST['time'];
    $noi_lam=$_POST['noi_lam'];
    $chi_tiet=$_POST['chi_tiet'];
    $layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
    $result=mysqli_query($connect,$layid);
    $row=$result->fetch_assoc();
    $id_tv=$row['id_tv'];
    $sql="INSERT INTO kinh_nghiem(id_tv,time,noi_lam,chi_tiet) VALUES (".$id_tv.",'$time','$noi_lam','chi_tiet')";
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
//update thông tin kinh nghiệm
if (isset($_POST['update_kinh_nghiem'])){
    $time_kn=$_POST['time_kn'];
    $noi_lam=$_POST['noi_lam'];
    $chi_tiet_kn=$_POST['chi_tiet_kn'];
    $layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
    $result=mysqli_query($connect,$layid);
    $row=$result->fetch_assoc();
    $id_tv=$row['id_tv'];
    $sql="update kinh_nghiem set noi_lam='$noi_lam', time='$time_kn', chi_tiet='$chi_tiet_kn' where id_tv=$id_tv";
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
