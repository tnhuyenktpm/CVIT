<?php
include '../models/connect.php';
if (isset($_POST['submit'])){
    $tieu_de=$_POST['tieu_de'];
    $noi_dung=$_POST['noi_dung'];
$sql="INSERT INTO dang_tt(tieu_de,noi_dung) VALUES ('$tieu_de','$noi_dung')";
if (mysqli_query($connect,$sql)){
	echo'<script language="javascript">
                        alert("đăng tin thành công")
                    </script>';
        header("Refresh:0; url=../views/dangtintuyendung.php");
} else
{
	echo'<script language="javascript">
                        alert("đăng tin thất bại")
                    </script>';
        header("Refresh:0; url=../views/dangtintuyendung.php");
}

}
?>
