<?php 
session_start();
include '../models/connect.php';
if(isset($_POST['email'])){
	$email=$_POST['email'];
	$pass=$_POST['pass'];

	$sql="select * from user where email='$email' and pass='$pass' ";
	$query=mysqli_query($connect,$sql);
	$num=mysqli_num_rows($query);

	if ($num == 1){
        $_SESSION['email']=$email;
        header("location:../views/index_canhan.php");
       
	}
	else{
		echo'
                    <script language="javascript">
                        alert("sai email hoặc mật khẩu")
                    </script>';
        header("Refresh:0; url=../views/index.php");          
	}

}
?>