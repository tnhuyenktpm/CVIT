<?php
include '../models/connect.php';
session_start();
$id_tv=$_GET['id_tv'];
    //delete ky nang
$sql = "DELETE from tt_ky_nang where id_tv=$id_tv";
if (mysqli_query($connect,$sql)){
    echo'<script language="javascript">
                        alert("Xóa thành công")
                    </script>';
        header("location:../views/update_cv.php?id_tv=$id_tv");
    } else
    {
    echo'<script language="javascript">
                        alert("Xóa thất bại")
                    </script>';
        header("Refresh:0; url=../views/update_cv.php?id_tv=$id_tv");
    }
?>