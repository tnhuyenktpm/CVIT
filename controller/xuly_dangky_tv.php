<?php
include '../models/connect.php';
//insert thành viên
if(isset($_POST['submit']))
{
	if (empty($_POST['email']) OR empty($_POST['ho_ten']) OR empty($_POST['pass']) OR empty($_POST['repass'])){
		echo'<script language="javascript">
                        alert("Vui lòng không được để trống")
                    </script>';
        header("Refresh:0; url=../views/index.php");
	}
	else 
	{
		$ho_ten=$_POST['ho_ten'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$repass=$_POST['repass'];
		$gioi_tinh=$_POST['gioi_tinh'];
		$phone=$_POST['phone'];
		$ten_chuyen_nganh=$_POST['ten_chuyen_nganh'];
		$ten_tinh=$_POST['ten_tinh'];
		$quoc_tich=$_POST['quoc_tich'];
		$website=$_POST['website'];
		$mo_ta_ngan=$_POST['mo_ta_ngan'];
		$ngay_sinh=$_POST['ngay_sinh'];
		if ($pass != $repass){
			echo'<script language="javascript">
                        alert("Nhập lại mật khẩu không đúng")
                    </script>';
            header("Refresh:0; url=../views/index.php");
		}
		else
		{
		$sql =" select * from user where email='$email'";
		$query = mysqli_query($connect,$sql);
		$num = mysqli_num_rows($query);
		if ($num == 0) {
			$sql2="INSERT INTO user(ho_ten,email,pass) VALUES ('$ho_ten','$email','$pass')";
			mysqli_query($connect,$sql2);

			$layid ="SELECT id_user from user order by id_user DESC limit 1";
			$result=mysqli_query($connect,$layid);
			$row=$result->fetch_assoc();
			$id_user=$row['id_user'];
			$sql3="INSERT INTO tt_thanh_vien(id_user,ngay_sinh,gioi_tinh,phone,website,quoc_tich,mo_ta_ngan,id_tinh,id_chuyen_nganh) values (".$id_user.",'$ngay_sinh','$gioi_tinh','$phone','$website','$quoc_tich','$mo_ta_ngan','$ten_tinh','$ten_chuyen_nganh')";
			$data =mysqli_query($connect,$sql3);
			if($data){
				echo'<script language="javascript">
                        alert("Đăng ký thành công")
                    </script>';
                header("Refresh:0; url=../views/index.php");
			}
			else
			{
				echo'<script language="javascript">
                        alert("Đăng ký thất bại")
                    </script>';
                header("Refresh:0; url=../views/index.php");
			}
		}
		else{
			echo'<script language="javascript">
                        alert("Email đã tồn tại")
                    </script>';
            header("Refresh:0; url=../views/index.php");
		}
		}
	}
}

?>
