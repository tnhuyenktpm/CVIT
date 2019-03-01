<?php
include '../models/connect.php';
session_start();
//insert thông tin hoạt động
$id_tv=$_GET['id_tv'];
if (isset($_POST['hoat_dong'])){
    $time=$_POST['time'];
    $ten_hoat_dong=$_POST['ten_hoat_dong'];
    $noi_dung=$_POST['noi_dung'];
    $layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
    $result=mysqli_query($connect,$layid);
    $row=$result->fetch_assoc();
    $id_tv=$row['id_tv'];
    $sql="INSERT INTO hoat_dong(id_tv,time,ten_hoat_dong,noi_dung) VALUES (".$id_tv.",'$time','$ten_hoat_dong','noi_dung')";
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
//update thông tin hoạt động
if (isset($_POST['update_hoat_dong'])){
    $time_hd=$_POST['time_hd'];
    $ten_hoat_dong=$_POST['ten_hoat_dong'];
    $noi_dung=$_POST['noi_dung'];
    $layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
    $result=mysqli_query($connect,$layid);
    $row=$result->fetch_assoc();
    $id_tv=$row['id_tv'];
    $sql="update hoat_dong set ten_hoat_dong='$ten_hoat_dong', time='$time_hd', noi_dung='$noi_dung' where id_tv=$id_tv";
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
