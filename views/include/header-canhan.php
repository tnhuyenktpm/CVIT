<?php 
session_start();
$email1=$_SESSION['email'];
$query = "select * from user,tt_thanh_vien where tt_thanh_vien.id_user=user.id_user and email='$email1' ";
$data = mysqli_query($connect,$query);
$result =mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CVIT</title>
	<link rel="icon" href="../assets/img/favicon-logo.png">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../assets/css/style.css">
</head> <!-- end head -->
<body>
	<header class="menu-top-fixed trangtk">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-12">
					<a href="index.php" class="logo-main"><img src="../assets/img/logo.png" alt="" class=""></a>
				</div>
				<div class="col-md-7">
					<form class="example form-search" action="action_page.php">
						<input type="text" placeholder="Tìm kiếm.." name="search">
						<div class="form-group fl">
							<div class="icon-map"><i class="fa fa-map-marker"></i></div>
							<select id="inputState" class="form-control">
								<option selected>Tất cả địa điểm </option>
								<option>Cần Thơ</option>
								<option>Kiên Giang</option>
								<option> An Giang</option>
							</select>
						</div>
						<div class="form-group fl cn">
							<div class="icon-map"><i class="fa fa-graduation-cap"></i></div>
							<select id="inputState" class="form-control ">
								<option selected>Tất cả chuyên ngành </option>
								<option>Kỹ thuật phần mềm</option>
								<option>Khoa học máy tính</option>
								<option>Hệ thống thông tin</option>
							</select>
						</div>
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>

				<div class="col-md-3 header-right">
					<div class="content">
<!-- 						<a class="info">
							<img src="../assets/img/kai.jpg" alt="">
							<span class="name">Trần Ngọc Huyền</span>
						</a> -->	
						
						<div class="dropdown">
                    		

							<a class="btn btn-outline-secondary dropdown-toggle info" href="#" role="button" id="dropdowntk" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="<?php echo $result['hinh_anh'];  ?>" alt="">
								<span class="name"><?php echo $result['ho_ten'];  ?></span>
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdowntk">
								<a class="dropdown-item" href="../views/trangcv_canhan.php?id_tv=<?php echo $result['id_tv'];?>">CV cá nhân</a>
								<a class="dropdown-item" href="../controller/logout.php">Đăng xuất</a>
							</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> <!-- end header -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-12">
					<a href="index_canhan.php" class="logo-main"><img src="../assets/img/logo.png" alt="" class=""></a>
				</div>
				<div class="col-md-7">
					<form class="example form-search" action="action_page.php">
						<input type="text" placeholder="Tìm kiếm.." name="search">
						<div class="form-group fl">
							<div class="icon-map"><i class="fa fa-map-marker"></i></div>
							<select id="inputState" class="form-control">
								<option selected>Tất cả địa điểm </option>
								<option>Cần Thơ</option>
								<option>Kiên Giang</option>
								<option> An Giang</option>
							</select>
						</div>
						<div class="form-group fl cn">
							<div class="icon-map"><i class="fa fa-graduation-cap"></i></div>
							<select id="inputState" class="form-control ">
								<option selected>Tất cả chuyên ngành </option>
								<option>Kỹ thuật phần mềm</option>
								<option>Khoa học máy tính</option>
								<option>Hệ thống thông tin</option>
							</select>
						</div>
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>

				</div>
				<div class="col-md-3 header-right">
					<div class="content">	
						<a id="dangnhap"><i class="fa fa-user-circle"></i> <span>Đăng nhập</span></a>
						<a id="dangky""><i class="fa fa-plus-circle"></i> <span>Đăng ký</span></a>
					</div>
				</div>
			</div>
		</div>
		<script src="../assets/js/login.js"></script>
	</header> <!-- end header background - mobile -->
	<nav class="navbar navbar-expand-lg navbar-dark menu-dad">
		<div class="container">
			<div class="row">
				<div class="col-md-12 khoinut-mobile">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" ">
						<span class="navbar-toggler-icon"></span>
					</button>
					<a class="buttonsearch-mobile" data-toggle="collapse" href="#search-mobile" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search"></i></a>
				</div>
				<div class="col-md-12">
					<div class="collapse navbar-collapse" id="navbarSupportedContent1">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link home-link" href="index_canhan.php"><i class="fa fa-home"></i>TRANG CHỦ</a>
							</li>
							<li class="nav-item cn">
								<a class="nav-link" href="#chuyennganh-con" data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample">CHUYÊN NGÀNH <i class="fa fa-caret-down "></i></a>
								<ul class="navbar-nav menu-kid collapse" id="chuyennganh-con" >
									<?php 
									$query = "select * from chuyen_nganh ";
										$result = mysqli_query($connect,$query);
										while ($row =mysqli_fetch_assoc($result)){
										echo"<li class='nav-item'>
										<a class='nav-link' href='../views/chuyen_nganh_canhan.php?id_chuyen_nganh=".$row["id_chuyen_nganh"]."'> ".$row['ten_chuyen_nganh']."</a>
										</li>";
									}
									?>
							</ul>
						</li>
					</ul> <!-- end ul -->
				</div>
				<?php include'searchform-mobile.php'; ?>
			</div>
		</div>
	</div>
	</nav> <!--nav -->
	<div class="container-fluid banner">
	<div class="row">
		<div class="layer1">

		</div>
		<div class="layer2">
			<h2>BẠN CHƯA CÓ CV CHO RIÊNG MÌNH?</h2>
			<p>Dễ dàng tạo hồ sơ xin việc với nhiều mẫu CV đẹp, ấn tượng chỉ trong 5 phút!</p>
			<?php
			$query = "select * from user,tt_thanh_vien where tt_thanh_vien.id_user=user.id_user and email='$email1' ";
			$result = mysqli_query($connect,$query);
			foreach ($result as  $value) { 
			?>
			<a href="../views/tao-cv.php?id_tv=<?php echo $value['id_tv'];?>" class="button-create">
				<i class="fa fa-pencil"></i> <span class="content">Tạo cv đầu tiên</span>
			</a>
			<?php
		}
		?>
		</div> <!-- end layer2 -->
	</div>
</div> <!-- end-banner -->