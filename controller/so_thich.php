<?php
include '../models/connect.php';
session_start();
//insert thông tin sở thích
$id_tv=$_GET['id_tv'];
if (isset($_POST['so_thich'])){
    $ten_so_thich=$_POST['ten_so_thich'];
    $layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
    $result=mysqli_query($connect,$layid);
    $row=$result->fetch_assoc();
    $id_tv=$row['id_tv'];
    $sql="INSERT INTO tt_so_thich(id_tv,id_so_thich) VALUES (".$id_tv.",'$ten_so_thich')";
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
//thêm sở thích
if (isset($_POST['ten_so_thich'])){
    $ten_st=$_POST['ten_st'];
    $sql="INSERT INTO so_thich(ten_so_thich) VALUES ('$ten_st')";
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
