<?php
include '../models/connect.php';
if (isset($_POST['submit'])){
    $ho_ten=$_POST['ho_ten'];
    $sql="update user set ho_ten=$ho_ten where id_user=6";
    if (mysqli_query($connect,$sql)){
    echo'<script language="javascript">
                        alert("thêm thành công")
                    </script>';
        header("location:test.php");
    } else
    {
    echo'<script language="javascript">
                        alert("thêm thất bại")
                    </script>';
          }

}
?>