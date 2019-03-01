
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
	<div class="clickform clickdn clickan">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="dn choose">
						<a class="clickout"><i class="fa fa-close"></i></a>
						<a href="index.php" class="logo"><img src="../assets/img/logo.png" alt=""></a>
						<h4>ĐĂNG NHẬP</h4>
						<a id="dangnhaptd" class="btn btn-primary button btn-block">Nhà tuyển dụng</a>
						<a id="dangnhaptv" class="btn btn-primary button btn-block">Thành viên</a>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end clickdn -->
	
	<div class="clickform clickdntd clickan">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="dn">
						<a class="clickout"><i class="fa fa-close"></i></a>
						<a href="index.php" class="logo">
							<img src="../assets/img/logo.png" alt="">
						</a>
						<h6>( Dành cho Nhà tuyển dụng )</h6>
						<form action="../controller/xuly_login_ntd.php" method="POST">
							<div class="form-group us">
								<input type="email" class="form-control" id="email" name="email" placeholder="Nhập email..">
								<div class="icon"><i class="fa fa-user"></i></div>
							</div>
							<div class="form-group pw">
								<input type="password" class="form-control" id="pass" name="pass" placeholder="Nhập mật khẩu..">
								<div class="icon"><i class="fa fa-key"></i></div>
							</div>
							<button type="submit" class="btn btn-default button" value="Login">Đăng nhập</button>
						</form>
						<div class="duoi">
							<a class="linkdangnhaptv">Đăng nhập cho Thành viên</a> <br>
							<a href="" class="">Quên mật khẩu?</a>
							<span class="duongke"></span>
							<a class="linkdangkytd">Đăng ký tài khoản</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end clickdntd -->
	<div class="clickform clickdntv clickan">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="dn">
						<a class="clickout"><i class="fa fa-close"></i></a>
						<a href="index.html" class="logo">
							<img src="../assets/img/logo.png" alt="">
						</a>
						<h6>( Dành cho Thành viên )</h6>
						<form action="../controller/xuly_login_tv.php" method="POST">
							<div class="form-group us">
								<input type="email" class="form-control" id="email" name="email" placeholder="Nhập email..">
								<div class="icon"><i class="fa fa-user"></i></div>
							</div>
							<div class="form-group pw">
								<input type="password" class="form-control" id="pass" name="pass" placeholder="Nhập mật khẩu..">
								<div class="icon"><i class="fa fa-key"></i></div>
							</div>
							<button type="submit" class="btn btn-default button">Đăng nhập</button>
						</form>
						<div class="duoi">
							<a class="linkdangnhaptd">Đăng nhập cho Nhà tuyển dụng</a> <br>
							<a href="" class="">Quên mật khẩu?</a>
							<span class="duongke"></span>
							<a class="linkdangkytv">Đăng ký tài khoản</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end clickdntv -->
	<div class="clickform clickdk clickan">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="dn choose">
						<a class="clickout"><i class="fa fa-close"></i></a>
						<a href="index.php" class="logo"><img src="../assets/img/logo.png" alt=""></a>
						<h4>ĐĂNG KÝ</h4>
						<a id="dangkytd" class="btn btn-primary button btn-block">Nhà tuyển dụng</a>
						<a id="dangkytv" class="btn btn-primary button btn-block">Thành viên</a>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end clickdk -->
	<div class="clickform clickdktd clickan">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="dn dk">
						<a class="clickout"><i class="fa fa-close"></i></a>
						<h3>ĐĂNG KÝ TÀI KHOẢN</h3>
						<h6>( Dành cho Nhà tuyển dụng )</h6>
						<form action="../controller/xuly_dangky_ntd.php" method="POST">
							<div class="form-group us">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email (để quản lý CV về sau)...">
							</div>
							<div class="form-group pw">
								<input type="password" class="form-control" id="pass" name="pass" placeholder="Nhập mật khẩu">
							</div>
							<div class="form-group pw">
							<input type="password" class="form-control" id="repass" name="repass" placeholder="Nhập lại mật khẩu">
							</div>
							<button type="submit" name="submit" class="btn btn-default button" value="Register">Đăng Ký</button>
						</form>
						<div class="duoi">
							<span>Bạn đã có tài khoản ?</span>
							<a class="linkdangnhaptd">Đăng nhập</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end clickdktd -->
	<div class="clickform clickdktv clickan">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="dn dk">
						<a class="clickout"><i class="fa fa-close"></i></a>
						<h3>ĐĂNG KÝ TÀI KHOẢN</h3>
						<h6>( Dành cho Thành viên )</h6>
						<form action="../controller/xuly_dangky_tv.php" method="POST">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group us">
										<input type="text" class="form-control" id="ho_ten" name="ho_ten" placeholder="Họ và tên..">				
									</div>
									<div class="form-group us">
										<input type="text" class="form-control" id="gioi_tinh" name="gioi_tinh" placeholder="Giới tính..">
									</div>
									<div class="form-group us">
										<input type="tel" class="form-control" id="ho_ten" name="phone" placeholder="Số điện thoại..">		
									</div>
									<div class="form-group us">
										<input type="email" class="form-control" id="email" name="email" placeholder="Email (để quản lý CV về sau)...">
									</div>
									<div class="form-group pw">
										<input type="password" class="form-control" id="pass" name="pass" placeholder="Nhập mật khẩu">
									</div>
									<div class="form-group pw">
										<input type="password" class="form-control" id="repass" name="repass" placeholder="Nhập lại mật khẩu">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<select class="form-control" name="ten_tinh">
											<option selected="">Tỉnh thành..</option>
											<?php 
											$query = "select * from tinh_thanh";
											$result =mysqli_query($connect,$query);
											foreach ($result as  $value) {
											?>
											<option value="<?php echo $value['id_tinh'] ?>"><?php echo $value['ten_tinh']; ?></option>
										<?php }?>
										</select>
									</div>
									<div class="form-group">
										<select class="form-control" name="ten_chuyen_nganh">
											<option selected="">Chọn chuyên ngành..</option>
											<?php
											$query = "select * from chuyen_nganh";
											$result =mysqli_query($connect,$query);
											foreach ($result as  $value) {
											?>
											<option value="<?php echo $value['id_chuyen_nganh'] ?>"><?php echo $value['ten_chuyen_nganh']; ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="form-group us">
										<input type="text" class="form-control" id="ho_ten" name="ngay_sinh" placeholder="Ngày sinh...">				
									</div>
									<div class="form-group us">
										<input type="text" class="form-control" id="ho_ten" name="website" placeholder="Webstie...">				
									</div>
									<div class="form-group us">
										<input type="text" class="form-control" id="ho_ten" name="mo_ta_ngan" placeholder="Mô tả ngắn...">
									</div>	
									<div class="form-group us">
										<input type="text" class="form-control" id="ho_ten" name="quoc_tich" placeholder="Quốc tịch...">
									</div>			
								</div>
								<div class="col-sm-12">
									<button type="submit" name="submit" class="btn btn-default button" value="Register">Đăng Ký</button>
								</div>
							</div>
						</form>
						<div class="duoi">
							<span>Bạn đã có tài khoản ?</span>
							<a class="linkdangnhaptv">Đăng nhập</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end clickdktv -->
	<header class="menu-top-fixed">
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
								<?php
									$query = "select * from tinh_thanh";
									$result =mysqli_query($connect,$query);
									foreach ($result as  $value) {
								?>
								<option><?php echo $value['ten_tinh'];?></option>
								<?php }?>
							</select>
						</div>
						<div class="form-group fl cn">
							<div class="icon-map"><i class="fa fa-graduation-cap"></i></div>
							<select id="inputState" class="form-control ">
								<option selected>Tất cả chuyên ngành </option>
								<?php
									$query = "select * from chuyen_nganh";
									$result =mysqli_query($connect,$query);
									foreach ($result as  $value) {
								?>
								<option><?php echo $value['ten_chuyen_nganh'];?></option>
								<?php }?>
							</select>
						</div>
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<div class="col-md-3 header-right">
					<div class="content">	
						<a id="dangnhap"><i class="fa fa-user-circle"></i> <span>Đăng nhập</span></a>
						<a id="dangky"><i class="fa fa-plus-circle"></i> <span>Đăng ký</span></a>
					</div>
				</div>
			</div>
		</div>
	</header> <!-- end header -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-12">
					<a href="index.html" class="logo-main"><img src="../assets/img/logo.png" alt="" class=""></a>
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
								<option></option>
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
								<a class="nav-link home-link" href="index.php"><i class="fa fa-home"></i>TRANG CHỦ</a>
							</li>
							<li class="nav-item cn">
								<a class="nav-link" href="#chuyennganh-con" data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample">CHUYÊN NGÀNH <i class="fa fa-caret-down "></i></a>
								<ul class="navbar-nav menu-kid collapse" id="chuyennganh-con" >
									<?php 
									$query = "select * from chuyen_nganh ";
										$result = mysqli_query($connect,$query);
										while ($row =mysqli_fetch_assoc($result)){
										echo"<li class='nav-item'>
										<a class='nav-link' href='../views/chuyen_nganh.php?id_chuyen_nganh=".$row["id_chuyen_nganh"]."'> ".$row['ten_chuyen_nganh']."</a>
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