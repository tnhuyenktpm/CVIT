<?php
include '../models/connect.php';
session_start();
//insert thông tin kỹ năng
$id_tv=$_GET['id_tv'];
if (isset($_POST['ky_nang'])){
    $ten_ky_nang=$_POST['ten_ky_nang'];
    $layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
    $result=mysqli_query($connect,$layid);
    $row=$result->fetch_assoc();
    $id_tv=$row['id_tv'];
    $sql="INSERT INTO tt_ky_nang(id_tv,id_kn) VALUES (".$id_tv.",'$ten_ky_nang')";
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

//thêm kỹ năng
if (isset($_POST['ten_ky_nang'])){
    $ten_kn=$_POST['ten_kn'];
    $sql="INSERT INTO ky_nang(ten_ky_nang) VALUES ('$ten_kn')";
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

?>
