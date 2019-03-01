
<?php
include '../models/connect.php';
if(isset($_POST['submit']))
{
	if (empty($_POST['email']) OR empty($_POST['pass']) OR empty($_POST['repass'])){
		echo'<script language="javascript">
                        alert("vui lòng không được để trống")
                    </script>';
        header("Refresh:0; url=../views/index.php");
	}
	else 
	{
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$repass=$_POST['repass'];
		if ($pass != $repass){
			echo'<script language="javascript">
                        alert("nhập lại mật khẩu đúng")
                    </script>';
            header("Refresh:0; url=../views/index.php");
		}
		else
		{
		$sql =" select * from user_ntd where email='$email'";
		$query = mysqli_query($connect,$sql);
		$num = mysqli_num_rows($query);
		if ($num ==0) {
			$sql2="INSERT INTO user_ntd(email,pass) VALUES ('$email','$pass')";
			$them= mysqli_query($connect, $sql2);
			if($them){
				echo'<script language="javascript">
                        alert("đăng ký thành công")
                    </script>';
                header("Refresh:0; url=../views/index.php");
			}
			else
			{
				echo'<script language="javascript">
                        alert("đăng ký thất bại")
                    </script>';
                header("Refresh:0; url=../views/index.php");
			}
		}
		else{
			echo'<script language="javascript">
                        alert("email da ton tai")
                    </script>';
            header("Refresh:0; url=../views/index.php");
		}
		}
	}



	
}
?>