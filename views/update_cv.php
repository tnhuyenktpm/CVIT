<?php 
include '../models/connect.php';
$id_tv=$_GET['id_tv'];
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
	<link rel="stylesheet" href="../assets/css/taocv.css">
</head> <!-- end head -->
<body class="edit-cv ">
	<div class="why update-cv">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 title text-center py-1">
					<h2>CẬP NHẬT CV</h2>
					<div class="line">
						<div class="linecolor"></div>
						<div class="icon"><i class="fa fa-codepen"></i></div>
					</div>
				</div> <!-- end title -->
				<div class="col-sm-12 tab">
					<div class="tabbtn">
						<ul>
							<li class=""><a href="#" class="btn btn-outline-danger"><i class="fa fa-star-o"></i></a></li>
							<li class="active"><a href="#" class="btn btn-outline-danger"><i class="fa fa-star-o"></i>CẬP NHẬT TÊN</a></li>
							<li class=""><a href="#" class="btn btn-outline-danger"><i class="fa fa-star-o"></i>ẢNH ĐẠI DIỆN</a></li>
							<li class=""><a href="#" class="btn btn-outline-danger"><i class="fa fa-star-o"></i>GIỚI THIỆU</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-star-o"></i>	TRÌNH ĐỘ HỌC VẤN</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-heart-o"></i> CHỨNG CHỈ</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-paper-plane-o"></i>	GIẢI THƯỞNG</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-hand-o-right"></i> HOẠT ĐỘNG</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-star-o"></i>	SỞ THÍCH</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-heart-o"></i> KỸ NĂNG</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-paper-plane-o"></i>	KINH NGHIỆM</a></li>
							<li><a href="#" class="btn btn-outline-danger"><i class="fa fa-hand-o-right"></i> DỰ ÁN</a></li>
						</ul>
					</div> <!-- end tabbtn  -->
					<div class="content">
						<ul>
							</li>
							<li class="content1">
								<div class="contentitem">
									<div class="phan-5">
										<div class="container">
											<div class="row">
										<?php
											$query = "select * from tt_thanh_vien where id_tv='$id_tv' ";
													$result = mysqli_query($connect,$query);
													foreach ($result as  $document) {
												?>
												<div class="col-md-12 tieu-de">
													<h2>Cập nhật ảnh đại diện</h2>
												</div>
												<div class="col-md-12">
													<div class="khung-anh">
														<div class="update-anhbia update-avatar">
																<div class="form-group">
																	<input type="file" name="image">
																</div>
														</div> <!-- end update-avatar -->
														<img src="<?php echo $document['hinh_anh'];?>" alt="">
													</div>
												</div>
												
												<div class="col-md-12">
													<center>
														<button name="update_anh" type="submit" class="btn btn-info" >Cập nhật</button>
														<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
													</center>					
												</div>
										<?php } ?>
									</div>
								</div>
							</div> <!-- 5 -->
						</div> <!-- end contentitem -->
					</li>
							<li class="content1 showup">
								<form action="../controller/xu_ly_ten.php?id_tv=<?php echo $document['id_tv'];?>" method="POST">
								<div class="contentitem">
									<div class="phan-5">
										<div class="container">
											<div class="row">
												<?php 
												$query = "select * from user,tt_thanh_vien where tt_thanh_vien.id_user=user.id_user and id_tv='$id_tv' ";
													$result = mysqli_query($connect,$query);
													foreach ($result as  $document) {

												?>
												<div class="col-md-12 tieu-de">
													<h2>Cập Nhật Tên</h2>
												</div>
												<div class="col-md-7 m-auto">
													
															<p><span>Họ và tên:</span><small class="ho-ten">
																<input type="text" value="<?php echo $document['ho_ten']; ?>" name="ho_ten" style="text-transform: unset";></small></p>
															<div id="showname"></div>
															<script>
																$( '.ho-ten input' ).change(function() {
																	$('#showname .alert').remove(); //remove tag alert
																	newname =$('.ho-ten input').val();
																	//console.log(x);
																	alert( "Bạn vừa mới thay đổi Họ tên thành: "+ newname ); //show alert
																	$('#showname').append('<p class="alert alert-success" role="alert">Bạn vừa mới thay đổi Họ tên thành:'+newname+'</p>'); //add html
																});
															</script>
														
														</div>

												<div class="col-md-12">
													<center>
														<button name="xu_ly_ten" type="submit" class="btn btn-info" >Cập nhật</button>
														<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
													</center>					
												</div>
											<?php }?>
									</div>
								</div>
							</div> <!-- 5 -->
						</div> <!-- end contentitem -->
					</form>
					</li>
							<li class="content1">
								<form action="../controller/cap_nhat_anh.php?id_tv=<?php echo $document['id_tv'];?>" method="POST" enctype="multipart/form-data" >
								<div class="contentitem">
									<div class="phan-5">
										<div class="container">
											<div class="row">
										<?php
											$query = "select * from tt_thanh_vien where id_tv='$id_tv' ";
													$result = mysqli_query($connect,$query);
													foreach ($result as  $document) {
												?>
												<div class="col-md-12 tieu-de">
													<h2>Cập nhật ảnh đại diện</h2>
												</div>
												<div class="col-md-4 m-auto">
													<div class="khung-anh">
														<div class="update-anhbia update-avatar">
																<div class="form-group">
																	<input type="file" name="image">
																</div>
														</div> <!-- end update-avatar -->
														<img src="<?php echo $document['hinh_anh'];?>" alt="" class=".update-img">
														<script>
																	$("body").on("change", ".form-control-file", function(){
																        var ready = new FileReader();
																        ready.onload  = function(e){
																            $(".update-img").attr('src', e.srcElement.result);
																        };
																        ready.readAsDataURL(this.files[0]);
																     });
																</script>
													</div>
												</div>
												
												<div class="col-md-12">
													<center>
														<button name="update_anh" type="submit" class="btn btn-info" >Cập nhật</button>
														<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
													</center>					
												</div>
										<?php } ?>
									</div>
								</div>
							</div> <!-- 5 -->
						</div> <!-- end contentitem -->
					</form>
					</li>
							<li class="content1">
								<form action="../controller/gioi_thieu.php?id_tv=<?php echo $document['id_tv'];?>" method="POST">
								<div class="contentitem">
									<div class="phan-5">
										<div class="container">
											<div class="row">
										<?php
											$query = "select * from user,tt_thanh_vien where tt_thanh_vien.id_user=user.id_user and id_tv='$id_tv' ";
													$result = mysqli_query($connect,$query);
													foreach ($result as  $document) {
												?>
												<div class="col-md-12 tieu-de">
													<h2>Giới thiệu</h2>
												</div>
												<div class="col-md-12">
													<table class="table table-bordered w-75 m-auto">
														<tbody>
													<tr>
														<th>Ngày sinh</th>
														<td>
															<input name="ngay_sinh" type="text" value="<?php echo $document['ngay_sinh'];?>">
														</td>
													</tr> <!-- hết 1 row -->
													<tr>
														<th>Giới tính</th>
														<td>
															<input name="gioi_tinh" type="text" value="<?php echo $document['gioi_tinh'];?>">
														</td>
													</tr> <!-- hết 1 row -->
													<tr>
														<th>Phone</th>
														<td>
															<input name="phone" type="text" value="<?php echo $document['phone'];?>">
														</td>
													</tr> <!-- hết 1 row -->
													<tr>
														<th>Quốc tịch</th>
														<td>
															<input name="quoc_tich" type="text" value="<?php echo $document['quoc_tich'];?>">
														</td>
													</tr> <!-- hết 1 row -->
													<tr>
														<th>Mô tả ngắn</th>
														<td>
															<textarea name="mo_ta_ngan"><?php echo $document['mo_ta_ngan'];?></textarea>
														</td>
													</tr> <!-- hết 1 row -->
													<tr>
														<th>Website </th>
														<td>
															<input name="website" type="text" value="<?php echo $document['website'];?>">
														</td>
													</tr> <!-- hết 1 row -->
												</tbody>
											</table>
										</div>

										<div class="col-md-12">
											<center>
												<button name="update_gioi_thieu" type="submit" class="btn btn-info" >Cập nhật</button>
												<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
											</center>					
										</div>
										<?php } ?>
									</div>
								</div>
							</div> <!-- 5 -->
						</div> <!-- end contentitem -->
					</form>
					</li>
							<li class="content2">
								<form action="../controller/hoc_van.php?id_tv=<?php echo $document['id_tv'];?>" method="POST">
								<div class="contentitem">
									<div class="phan-5">
										<div class="container">
											<div class="row">
										<?php
											$query = "select * from tt_thanh_vien,hoc_van where tt_thanh_vien.id_tv=hoc_van.id_tv and tt_thanh_vien.id_tv='$id_tv' ";
											$result = mysqli_query($connect,$query);
											foreach ($result as $document) {
											?>
												<div class="col-md-12 tieu-de">
													<h2>TRÌNH ĐỘ HỌC VẤN</h2>
												</div>
												<div class="col-md-12">
													<table class="table table-bordered w-75 m-auto">
														<tbody>
															<tr>
																<th>Năm học</th>
																<td>
																	<input name="time_hv" type="text" value="<?php echo $document['time'];?>">
																</td>
															</p>
														</td>
													</tr> <!-- hết 1 row -->
													<tr>
														<th>Tên nơi học</th>
														<td>
															<input name="noi_hoc" type="text" value="<?php echo $document['noi_hoc'];?>">
														</td>
													</tr> <!-- hết 1 row -->
													<tr>
														<th>Ghi chú</th>
														<td>
															<input type="text" name="chi_tiet" value="<?php echo $document['chi_tiet'];?>">
														</td>
													</tr> <!-- hết 1 row -->
												</tbody>
											</table>
										</div>

										<div class="col-md-12">
											<center>
												<button name="update_hoc_van" type="submit" class="btn btn-info" >Cập nhật</button>
												<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
											</center>					
										</div>
										<?php } ?>
									</div>
								</div>
							</div> <!-- 5 -->
						</div> <!-- end contentitem -->
					</form>
					</li>
					<li class="content2">
						<form action="../controller/chung_chi.php?id_tv=<?php echo $document['id_tv'];?>" method="POST">
						<div class="contentitem">
							<div class="phan-5">
								<div class="container">
									<div class="row">
										<?php
							$query = "select * from tt_thanh_vien,chung_chi where tt_thanh_vien.id_tv=chung_chi.id_tv and tt_thanh_vien.id_tv='$id_tv'";
							$result = mysqli_query($connect,$query);
							foreach ($result as $document) {
								?>
										<div class="col-md-12 tieu-de">
											<h2>CHỨNG CHỈ</h2>
										</div>
										<div class="col-md-12">
											<table class="table table-bordered w-75 m-auto">
												<tbody>
													<tr>
														<th>Năm học</th>
														<td>
															<input type="text" name="time" value="<?php echo $document['time']; ?>">
														</td>
													</p>
												</td>
											</tr> <!-- hết 1 row -->
											<tr>
												<th>Tên chứng chỉ</th>
												<td>
													<input type="text" name="ten_chung_chi" value="<?php echo $document['ten_chung_chi']; ?>">
												</td>
											</tr> <!-- hết 1 row -->
										</tbody>
									</table>
								</div>
								<div class="col-md-12">
									<center>
										<button name="update_chung_chi" type="submit" class="btn btn-info" >Cập nhật</button>
										<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
									</center>					
								</div>
								<?php } ?>
							</div>
						</div>
					</div> <!-- 5 -->
				</div> <!-- end contentitem -->
			</form>
			</li>
			<li class="content3">
				<form action="../controller/giai_thuong.php?id_tv=<?php echo $document['id_tv'];?>" method="POST">
				<div class="contentitem">
					<div class="phan-5">
						<div class="container">
							<div class="row">
								<?php
							$query = "select * from tt_thanh_vien,giai_thuong where tt_thanh_vien.id_tv=giai_thuong.id_tv and tt_thanh_vien.id_tv='$id_tv' ";
								$result = mysqli_query($connect,$query);
							foreach ($result as $document) {
								?>
								<div class="col-md-12 tieu-de">
									<h2>GIẢI THƯỞNG</h2>
								</div>
								<div class="col-md-12">
									<table class="table table-bordered w-75 m-auto">
										<tbody>
											<tr>
												<th>Thời gian</th>
												<td>
													<input name="time_gt" type="text" value="<?php echo $document['time'];?>">
												</td>
											</tr> <!-- hết 1 row -->
											<tr>
											<th>Tên giải thưởng</th>
											<td>
												<input name="ten_giai_thuong" type="text" value="<?php echo $document['ten_giai_thuong'];?>">
											</td>
											</tr> <!-- hết 1 row -->
										</tbody>
									</table>
								</div>
								<div class="col-md-12">
									<center>
										<button name="update_giai_thuong" type="submit" class="btn btn-info" >Cập nhật</button>
										<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
									</center>					
								</div>
								<?php } ?>
							</div>
						</div>
					</div> <!-- 5 -->
				</div> <!-- end contentitem -->
			</form>
			</li>
	<li class="content4">
		<form action="../controller/hoat_dong.php?id_tv=<?php echo $document['id_tv'];?>" method="POST">
		<div class="contentitem">
			<div class="phan-5">
				<div class="container">
					<div class="row">
						<?php
							$query = "select * from tt_thanh_vien,hoat_dong where tt_thanh_vien.id_tv=hoat_dong.id_tv and tt_thanh_vien.id_tv='$id_tv' ";
							$result = mysqli_query($connect,$query);
							foreach ($result as $document) {
								?>
						<div class="col-md-12 tieu-de">
							<h2>HOẠT ĐỘNG</h2>
						</div>
						<div class="col-md-12">
							<table class="table table-bordered w-75 m-auto">
								<tbody>
									<tr>
										<th>Thời gian</th>
										<td>
											<input name="time_hd" type="text" value="<?php echo $document['time']; ?>">
										</td>
									</p>
								</td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Tên hoạt động</th>
								<td>
									<input name="ten_hoat_dong" type="text" value="<?php echo $document['ten_hoat_dong']; ?>">
								</td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Ghi chú</th>
								<td>
									<input name="noi_dung" type="text" value="<?php echo $document['noi_dung']; ?>">
								</td>
							</tr> <!-- hết 1 row -->
						</tbody>
					</table>
				</div>

				<div class="col-md-12">
					<center>
						<button name="update_hoat_dong" class="btn btn-info" >Cập nhật</button>
						<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
					</center>					
				</div>
				<?php } ?>
			</div>
		</div>
	</div> <!-- 5 -->
</div> <!-- end contentitem -->
</form>
	</li>
	<li class="content4">
		<form action="../controller/update_so_thich.php?id_tv=<?php echo $document['id_tv'];?>" method="POST">
		<div class="contentitem">
			<div class="phan-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 tieu-de">
							<h2>SỞ THÍCH</h2>
						</div>
						<div class="col-md-12 taocv-st">
							<div class="form-group fl td ">
								<div class="icon-map"></div>
								<?php
											$query = "select * from so_thich,tt_thanh_vien,tt_so_thich where tt_so_thich.id_tv=tt_thanh_vien.id_tv and tt_so_thich.id_so_thich=so_thich.id_so_thich and tt_so_thich.id_tv=$id_tv";
											$result =mysqli_query($connect,$query);
											foreach ($result as  $value) {
            						?>
           							 <p class="td stk">
           							 	<input name="ten_so_thich" type="text" placeholder="" value="<?php echo $value['ten_so_thich'];?>">
           							 	<a href="../controller/xoa_st.php?id_tv=<?php echo $document['id_tv']?>" class="btn btn-info">Xóa</a>
           							 </p>
           						 <?php } ?>
           							<p>
           						 		<select id="inputState" class="form-control" name="ten_so_thich">
											<option selected="">Chọn sở thích..</option>
											<?php
											$query = "select * from so_thich";
											$result =mysqli_query($connect,$query);
											foreach ($result as  $value) {
											?>
											<option value="<?php echo $value['id_so_thich'] ?>"><?php echo $value['ten_so_thich']; ?></option>
											<?php } ?>	
										</select>
										<button name="add_so_thich" type="submit" class="btn btn-info">Thêm</button>
           							</p>
           						 	
							</div> 		
						</div>
						<div class="col-md-12">
							<center>
								<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
							</center>					
						</div>
					</div>
				</div> <!-- 5 -->
			</div> <!-- end contentitem -->
		</div>
	</form>
		</li>
		<li class="content4">
			<form action="../controller/update_ky_nang.php?id_tv=<?php echo $document['id_tv'];?>" method="POST">
			<div class="phan-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 tieu-de">
							<h2>KỸ NĂNG</h2>
						</div>
						<div class="col-md-12 taocv-st">
							<div class="form-group fl td ">
								<div class="icon-map"></div>
									<?php
											$query = "select * from ky_nang,tt_thanh_vien,tt_ky_nang where tt_ky_nang.id_tv=tt_thanh_vien.id_tv and tt_ky_nang.id_kn=ky_nang.id_kn and tt_ky_nang.id_tv=$id_tv";
											$result =mysqli_query($connect,$query);
											foreach ($result as  $value) {
            						?>
           							 <p class="td stk">
           							 	<input name="ten_ky_nang" type="text" placeholder="" value="<?php echo $value['ten_ky_nang'];?>">
           							 	<a href="../controller/xoa_kn.php?id_tv=<?php echo $document['id_tv']?>" class="btn btn-info">Xóa</a>
           							 </p>
           						 <?php } ?>
           						 <select id="inputState" class="form-control" name="ten_ky_nang">
									<option selected="">Chọn kỹ năng..</option>
											<?php
											$query = "select * from ky_nang";
											$result =mysqli_query($connect,$query);
											foreach ($result as  $value) {
											?>
											<option value="<?php echo $value['id_kn'] ?>"><?php echo $value['ten_ky_nang']; ?></option>
											<?php } ?>	
									</select>
									<button name="add_ky_nang" type="submit" class="btn btn-info">Thêm</button>
							</div>	
						</div>
						<div class="col-md-12">
							<center>
								<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
							</center>					
						</div>
					</div>
				</div> <!-- 5 -->
			</div> <!-- end contentitem -->
		</form>
		</li>
		<li class="content4">
			<form action="../controller/kinh_nghiem.php?id_tv=<?php echo $document['id_tv'];?>" method="POST">
			<div class="contentitem">
				<div class="phan-5">
					<div class="container">
						<div class="row">
							<?php
									$query = "select * from tt_thanh_vien, kinh_nghiem
						where tt_thanh_vien.id_tv=kinh_nghiem.id_tv and tt_thanh_vien.id_tv='$id_tv'";
									$result = mysqli_query($connect,$query);
									foreach ($result as $document) {
							?>
							<div class="col-md-12 tieu-de">
								<h2>KINH NGHIỆM</h2>
							</div>
							<div class="col-md-12">
								<table class="table table-bordered w-75 m-auto">
									<tbody>
										<tr>
											<th>Thời gian</th>
											<td>
												<input name="time_kn" type="text" value="<?php echo $document['time']; ?>">
											</td>
										</p>
									</td>
								</tr> <!-- hết 1 row -->
								<tr>
									<th>Nơi làm</th>
									<td>
										<input name="noi_lam" type="text" value="<?php echo $document['noi_lam']; ?>">
									</td>
								</tr> <!-- hết 1 row -->
								<tr>
									<th>Ghi chú</th>
									<td>
										<input name="chi_tiet_kn" type="text" value="<?php echo $document['chi_tiet']; ?>">
									</td>
								</tr> <!-- hết 1 row -->
							</tbody>
						</table>
					</div>

					<div class="col-md-12">
						<center>
							<button name="update_kinh_nghiem" type="submit" class="btn btn-info" >Cập nhật</button>
							<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
						</center>					
					</div>
					<?php } ?>
				</div>
			</div>
		</div> <!-- 5 -->
	</div> <!-- end contentitem -->
</form>
</li>
<li class="content4">
	<form action="../controller/du_an.php?id_tv=<?php echo $document['id_tv'];?>" method="POST">
	<div class="contentitem">
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
					</div>
					<div class="col-md-12">
						<table class="table table-bordered w-75 m-auto">
							<tbody>
								<tr>
								<th>Tên dự án</th>
									<td><input type="text" value="<?php echo $document['ten_du_an']; ?>" name="ten_du_an"></td>		
								</tr> <!-- hết 1 row -->
							<tr>
								<th>Thời gian</th>
									<td><input type="text" value="<?php echo $document['time']; ?>" name="time_da"></td>
							</tr> <!-- hết 1 row -->
								<tr>
									<th>Mô tả</th>
									<td>
										<textarea name="mo_ta"><?php echo $document['mo_ta']; ?>
										</textarea>
									</p>
								</td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Số lượng thành viên</th>
								<td><input name="so_luong" type="text" value="<?php echo $document['so_luong']; ?>"></td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Vị trí trong công việc</th>
								<td><input type="text" name="vi_tri_cong_viec" value="<?php echo $document['vi_tri_cong_viec']; ?>"></td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Vai trò trong dự án</th>
								<td>
									<textarea name="vai_tro"><?php echo $document['vai_tro']; ?>
									</textarea>
								</p>
							</td>
						</tr> <!-- hết 1 row -->
						<tr>
							<th>Công nghệ sử dụng</th>
							<td>
								<textarea name="cong_nghe"><?php echo $document['cong_nghe']; ?>
								</textarea>
							</td>
						</tr> <!-- hết 1 row -->
					</tbody>
				</table>
			</div>

			<div class="col-md-12">
				<center>
					<button name="update_du_an" type="submit" class="btn btn-info" >Cập nhật</button>
					<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
				</center>					
			</div>
			<?php } ?>
		</div>
	</div>
</div> <!-- 5 -->
</div> <!-- end contentitem -->
</form>
</li>

</ul>
</div> <!-- end tabcontent -->
</div> <!-- end tab -->
</div>
</div> <!-- end container -->
</div> <!-- end ourteam -->
<script>
	$(function(){
		$('.tabbtn li').click(function() {
			$('.tabbtn li').removeClass('active');
			$(this).addClass('active');
			x= $(this).index();
			x = x+1;

 		// Cho nd tuong ung hien thi
 		// .content ul li:nth-child('+x+') noi chuoi de hien thi bien x o tren
 		$('.content ul li').removeClass('showup');
 		$('.content ul li:nth-child('+x+')').addClass('showup');
 	})
	})
</script>
</body>
</html>