<?php 
include '../models/connect.php';
$id_tv=$_GET['id_tv'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CVIT</title>

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
	<link rel="stylesheet" href="../assets/css/style.css">
</head> <!-- end head -->
<body>
	<div class="fix-phai">
		<a href="#" class="btn len-tren"><i class="fa fa-chevron-up"></i></a>
		<!-- <a href="" class="btn xuong-duoi"><i class="fa fa-chevron-down"></i></a> -->
	</div>
	<div class="container-fluid phan-1">
		<img src="../assets/img/3.jpg" alt="" class="layer-1">
		<div class="layer-2"></div>
		<div class="layer-3">
			<?php
			$query = "select * from user,tt_thanh_vien,chuyen_nganh where tt_thanh_vien.id_user=user.id_user and tt_thanh_vien.id_chuyen_nganh=chuyen_nganh.id_chuyen_nganh and id_tv='$id_tv' ";
			$result = mysqli_query($connect,$query);
			foreach ($result as  $document) {

				?>
				
				<i class="fa fa-graduation-cap" style="font-size:80px;"></i>
				<h2 style="position: relative; width: 80%; margin: auto;">
					<input type="text" value="<?php echo $document['ho_ten']; ?>" name="ho_ten" style="text-transform: none; border: 1px solid; border-radius: 5px;" class="ho-ten" id="hoten" onchange="load_ajax()">
					<input class="btn btn-primary" type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Đổi họ tên" style="position: absolute; top: 6px; right: 6px; padding: 13px; font-size: 0.6em;"/>
				</h2> <!-- Chỗ update ho-ten -->

				<div id="showname"></div>
				
				<h1><?php echo $document['ten_chuyen_nganh']; ?></h1>
				<p><?php echo $document['mo_ta_ngan'];?></p>
				<p id="mail" style="display:none;" ><?php echo $document['email'];?></p>
				<p id="ten_re" style="display:none;" ><?php echo $document['ho_ten'];?></p>
				<script>
						function load_ajax(){
							var newname =$('input.ho-ten').val();
							if ($('#hoten').val() == ''){
								alert('Họ tên không được bỏ trống!');
							}else if($.isNumeric($('#hoten').val())){
								alert('Họ tên không được nhập số!');
								$("#hoten").val() = $('#ten_re').val();
							}
							else if ($('#hoten').val().length <6){
								alert('Họ tên quá ngắn!');
							}else if ($('#hoten').val().length >30){
								alert('Họ tên quá dài!');
							}
							else{
								$.ajax({

									url : "../controller/doiten_ajax.php",
									type : "post",
									dataType:"text",
									data : {
										hoten : $('#hoten').val(),
										mail : $('#mail').text()
									},
									success : function (result){
										$('#showname').html(result);
									}
								});
							}

						}				
					</script>
					<?php 
				}
				?>
			</div>
		</div> <!-- hết phan-1 -->
		<div class="phan-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 tieu-de">
						<h2>Giới thiệu về tôi</h2>
					</div>
					<div class="col-md-5 anh">
						<div class="khung-anh">
							<?php
							$query = "select * from user,tt_thanh_vien,chuyen_nganh where tt_thanh_vien.id_user=user.id_user and id_tv='$id_tv' ";
							$result = mysqli_query($connect,$query);
							foreach ($result as $document) {
								?>
								<img src="<?php echo $document['hinh_anh'];?>" alt="">
							<?php }
							?>
						</div>

					</div>
					<div class="col-md-7 content">
						<?php
						$query = "select * from tt_thanh_vien, tinh_thanh, user
						where tt_thanh_vien.id_tinh=tinh_thanh.id_tinh
						and tt_thanh_vien.id_user=user.id_user
						and id_tv='$id_tv' ";
						$result = mysqli_query($connect,$query);
						foreach ($result as $document) {
							?>
							<p><span>Họ và tên:</span><small class="ho-ten"><?php echo $document['ho_ten'];?></small></p>
							<p><span>Ngày sinh:</span><?php echo $document['ngay_sinh'];?></p>
							<p><span>Giới tính:</span><?php echo $document['gioi_tinh'];?></p>
							<p><span>Địa chỉ:</span><?php echo $document['ten_tinh'];?></p>
							<p><span>Quốc tịch:</span><?php echo $document['quoc_tich'];?></p>
							<p><span>Phone:	</span><?php echo $document['phone'];?></p>
							<p><span>Email:</span><?php echo $document['email'];?></p>
							<p><span>Website:</span><?php echo $document['website'];?></p>
							<?php 
						}
						?>
					</div>
				</div>
			</div>
		</div> <!-- hết phan-2 -->
		<div id="particles-js" class="phan-3">
			<div class="container noflow">
				<div class="row">
					<div class="col-md-6">
						<div class="card hoc-van">
							<div class="card-header ">
								Trình độ học vấn
							</div>

							<div class="card-body">
								<?php
								$query = "select * from tt_thanh_vien,hoc_van where tt_thanh_vien.id_tv=hoc_van.id_tv and tt_thanh_vien.id_tv='$id_tv' ";
								$result = mysqli_query($connect,$query);
								foreach ($result as $document) {
									?>
									<div class="mot-field">
										<div class="nam"><?php echo $document['time'];?></div>
										<div class="noidung">
											<p><h6 class="td"><?php echo $document['noi_hoc'];?></h6></p>
											<p><?php echo $document['chi_tiet'];?></p>
										</div>

									</div> <!-- end 1 field -->
								<?php } ?>
							</div>

						</div>
					</div> <!-- end 1 card -->

					<div class="col-md-6">
						<div class="card chung-chi">
							<div class="card-header ">
								Chứng chỉ
							</div>
							<div class="card-body">
								<?php
								$query = "select * from tt_thanh_vien,chung_chi where tt_thanh_vien.id_tv=chung_chi.id_tv and tt_thanh_vien.id_tv='$id_tv'";
								$result = mysqli_query($connect,$query);
								foreach ($result as $document) {
									?>
									<div class="mot-field">
										<div class="nam"><?php echo $document['time']; ?></div>
										<div class="noidung">
											<p><?php echo $document['ten_chung_chi']; ?></p>
										</div>
									</div> <!-- end 1 field -->
								<?php } ?>
							</div>
						</div>
					</div> <!-- end 1 card -->
					<div class="col-md-6">
						<div class="card giai-thuong">
							<div class="card-header ">
								Giải thưởng
							</div>
							<div class="card-body">
								<?php
								$query = "select * from tt_thanh_vien,giai_thuong where tt_thanh_vien.id_tv=giai_thuong.id_tv and tt_thanh_vien.id_tv='$id_tv' ";
								$result = mysqli_query($connect,$query);
								foreach ($result as $document) {
									?>
									<div class="mot-field">
										<div class="nam"><?php echo $document['ten_giai_thuong']; ?></div>
										<div class="noidung">
											<p><?php echo $document['time']; ?></p>
										</div>

									</div> <!-- end 1 field -->
								<?php } ?>
							</div>
						</div>
					</div> <!-- end 1 card -->
					<div class="col-md-6">
						<div class="card hoat-dong">
							<div class="card-header ">
								Hoạt động
							</div>
							<div class="card-body">
								<?php
								$query = "select * from tt_thanh_vien,hoat_dong where tt_thanh_vien.id_tv=hoat_dong.id_tv and tt_thanh_vien.id_tv='$id_tv' ";
								$result = mysqli_query($connect,$query);
								foreach ($result as $document) {
									?>
									<div class="mot-field">
										<div class="nam"><?php echo $document['time']; ?></div>
										<div class="noidung">
											<p><h6><?php echo $document['ten_hoat_dong']; ?></h6></p>
											<p><?php echo $document['noi_dung']; ?></p>
										</div>
									</div> <!-- end 1 field -->
								<?php } ?>
							</div>
						</div>
					</div> <!-- end 1 card -->		
				</div>
				<script src='https://cldup.com/S6Ptkwu_qA.js'></script>
				<script  src="../assets/js/particle.js"></script>
			</div>
		</div><!-- hết phan-3 -->
		<div class="phan-4">
			<div class="container">
				<div class="row">
					<div class="ke-doc">
						<!-- <div class="hinh-tron top"></div> -->
						<div class="hinh-tron mid-1"></div>
						<div class="hinh-tron mid-2"></div>
						<div class="hinh-tron mid-3"></div>
						<!-- <div class="hinh-tron bottom"></div> -->
					</div>

					<div class="col-md-6 so-thich">
						<div class="card w-75 float-right mr-5">
							<div class="hinh-vuong"></div>
							<div class="card-body">
								<h5 class="card-title">SỞ THÍCH</h5>

								<div class="noidung">
									<?php
									$query = "select * from tt_thanh_vien, so_thich,tt_so_thich where tt_thanh_vien.id_tv=tt_so_thich.id_tv and so_thich.id_so_thich=tt_so_thich.id_so_thich and tt_thanh_vien.id_tv='$id_tv'";
									$result = mysqli_query($connect,$query);
									foreach ($result as $document) {
										?>
										<div class="mot-tin">
											<i class="fa fa-check-circle"></i>
											<span class="td"><?php echo $document['ten_so_thich'];?></span> <br>
										</div> <!-- hết mot-tin -->
									<?php } ?>
								</div>

							</div>
						</div>
					</div> <!-- hết so-thich -->
					<div class="col-md-6 ky-nang ">

						<div class="card w-75 float-left ml-5">
							<div class="hinh-vuong"></div>
							<div class="card-body">
								<h5 class="card-title">KỸ NĂNG</h5>
								<div class="noidung">
									<?php
									$query = "select * from tt_thanh_vien, ky_nang,tt_ky_nang where tt_thanh_vien.id_tv=tt_ky_nang.id_tv and ky_nang.id_kn=tt_ky_nang.id_kn and tt_thanh_vien.id_tv='$id_tv'";

									$result = mysqli_query($connect,$query);
									foreach ($result as $document) {
										?>
										<div class="mot-tin">
											<i class="fa fa-check-circle"></i>
											<span class="td"><?php echo $document['ten_ky_nang']; ?></span>
										</div> <!-- hết mot-tin -->
									<?php } ?>
								</div>
							</div>
						</div>
					</div> <!-- hết so-thich -->
					<div class="col-md-6 kinh-nghiem ">
						<div class="card w-75 float-right mr-5">
							<div class="hinh-vuong"></div>
							<div class="card-body">
								<h5 class="card-title">KINH NGHIỆM</h5>
								<div class="noidung">
									<?php
									$query = "select * from tt_thanh_vien, kinh_nghiem
									where tt_thanh_vien.id_tv=kinh_nghiem.id_tv and tt_thanh_vien.id_tv='$id_tv'";
									$result = mysqli_query($connect,$query);
									foreach ($result as $document) {
										?>
										<div class="mot-tin">
											<span class="nam"><?php echo $document['time']; ?></span>
											<span class="td"><?php echo $document['noi_lam']; ?></span>
											<span class="chitiet"><?php echo $document['chi_tiet']; ?></span>
										</div> <!-- hết mot-tin -->
									<?php } ?>

								</div>
							</div>
						</div>
					</div> <!-- hết kinh-nghiem -->
				</div>
			</div>
		</div> <!-- hết phan-4 -->
		<div class="phan-5">
			<div class="container">
				<div class="row">
					<?php
					$query = "select * from tt_thanh_vien,du_an where tt_thanh_vien.id_tv=du_an.id_tv and tt_thanh_vien.id_tv='$id_tv'";
					$result = mysqli_query($connect,$query);
					foreach ($result as $document) {
						?>
						<div class="col-md-12 tieu-de">

							<h2>DỰ ÁN</h2>
							<h5><?php echo $document['ten_du_an']; ?></h5>
							<span><?php echo $document['time']; ?></span>
						</div>

						<div class="col-md-12">
							<table class="table table-bordered w-75 m-auto">
								<tbody>
									<tr>
										<th>Mô tả</th>
										<td>
											<p><?php echo $document['mo_ta']; ?></p>
										</td>
									</tr> <!-- hết 1 row -->
									<tr>
										<th>Số lượng thành viên</th>
										<td><?php echo $document['so_luong']; ?></td>
									</tr> <!-- hết 1 row -->
									<tr>
										<th>Vị trí trong công việc</th>
										<td><?php echo $document['vi_tri_cong_viec']; ?></td>
									</tr> <!-- hết 1 row -->
									<tr>
										<th>Vai trò trong dự án</th>
										<td>
											<p><?php echo $document['vai_tro']; ?></p>
										</td>
									</tr> <!-- hết 1 row -->
									<tr>
										<th>Công nghệ sử dụng</th>
										<td>
											<p><?php echo $document['cong_nghe']; ?></p>

										</td>
									</tr> <!-- hết 1 row -->
								</tbody>
							</table>
						</div>
					<?php } ?>
					<div class="col-md-12">
						<center>
							<a href="update_cv.php?id_tv=<?php echo $document['id_tv'];?>" class="btn btn-success" >Cập nhật CV</a>
							<a href="#" class="btn btn-danger" >Xóa CV</a>
							<a href="index_canhan.php" class="btn btn-primary" >Trở lại trang chủ <i class="fa fa-angle-right"></i> </a>
						</center>					
					</div>

				</div>
			</div>
		</div> <!-- 5 -->

	</body>
	</html>