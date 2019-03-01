<?php
	include '../models/connect.php';
	session_start();
	//insert thông tin hoạt động
	$id_tv=$_GET['id_tv'];
	if(isset($_POST['update_anh'])){
		$target = "../assets/img/".basename($_FILES['image']['name']);

		$image = $_FILES['image']['name'];
		$layid ="SELECT id_tv from tt_thanh_vien where id_tv=$id_tv";
	    $result=mysqli_query($connect,$layid);
	    $row=$result->fetch_assoc();
	    $id_tv=$row['id_tv'];
		$sql="update tt_thanh_vien set hinh_anh='../assets/img/$image' where id_tv=$id_tv";
		mysqli_query($connect,$sql);
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
		echo'<script language="javascript">
                        alert("thêm thành công")
                    </script>';
        header("location:../views/update_cv.php?id_tv=$id_tv");
    } else
    {
    echo'<script language="javascript">
                        alert("thêm thất bại")
                    </script>';
        header("Refresh:0; url=../views/update_cv.php?id_tv=$id_tv");
    }

}