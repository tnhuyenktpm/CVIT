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
	<?php
	$query = "select * from tt_thanh_vien where id_tv='$id_tv' ";
	$result = mysqli_query($connect,$query);
	foreach ($result as $document) {
	?>
	<div class="why">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 title text-center py-1">
					<h2>TẠO CV</h2>
					<div class="line">
						<div class="linecolor"></div>
						<div class="icon"><i class="fa fa-codepen"></i></div>
					</div>
				</div> <!-- end title -->
				<div class="col-sm-12 tab">
					<div class="tabbtn">
						<ul>
							<li class="active"><a href="#" class="btn btn-outline-danger"><i class="fa fa-star-o"></i>ẢNH ĐẠI DIỆN</a></li>
							<li class="#"><a href="#" class="btn btn-outline-danger"><i class="fa fa-star-o"></i>	TRÌNH ĐỘ HỌC VẤN</a></li>
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
							<li class="content1 showup">
								<form action="../controller/anh_dai_dien.php?id_tv=<?php echo $document['id_tv'];?>" method="POST" enctype="multipart/form-data" >
								<div class="contentitem">
									<div class="phan-5">
										<div class="container">
											<div class="row">
												<div class="col-md-12 tieu-de">
													<h2>Cập nhật ảnh đại diện</h2>
												</div>
												<div class="col-md-4 m-auto">
													<div class="khung-anh">
														<div class="update-anhbia update-avatar">
																<div class="form-group">
																	<label for="exampleFormControlFile1"><i class="fa fa-camera" name="image"></i> Cập nhật ảnh đại diện</label>
																	<input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
																</div>
														</div> <!-- end update-avatar -->
														<img src="" alt="">
														<script>
																	$("body").on("change", ".form-control-file", function(){
																        var ready = new FileReader();
																        ready.onload  = function(e){
																            $(".img").attr('src', e.srcElement.result);
																        };
																        ready.readAsDataURL(this.files[0]);
																     });
																</script>
													</div>
												</div>

												<div class="col-md-12">
													<center>
														<button name="dai_dien" type="submit" class="btn btn-info" >Cập nhật</button>
														<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
													</center>					
												</div>
									</div>
								</div>
							</div> <!-- 5 -->
						</div> <!-- end contentitem -->
					</form>
					</li>
							<li class="content1">
								<form action="../controller/hoc_van.php?id_tv=<?php echo $document['id_tv'];?>" method="POST">
								<div class="contentitem">
									<div class="phan-5">
										<div class="container">
											<div class="row">
												<div class="col-md-12 tieu-de">
													<h2>TRÌNH ĐỘ HỌC VẤN</h2>
												</div>
												<div class="col-md-12">
													<table class="table table-bordered w-75 m-auto">
														<tbody>
															<tr>
																<th>Năm học</th>
																<td>
																	<input type="text" value="2018" name="time">
																</td>
															</p>
														</td>
													</tr> <!-- hết 1 row -->
													<tr>
														<th>Tên nơi học</th>
														<td>
															<input type="text" value="Trường.." name="noi_hoc">
														</td>
													</tr> <!-- hết 1 row -->
													<tr>
														<th>Ghi chú</th>
														<td>
															<input type="text" value="..." name="chi_tiet">
														</td>
													</tr> <!-- hết 1 row -->
												</tbody>
											</table>
										</div>
										<div class="col-md-12">
											<center>
												<button name="submit" type="submit" class="btn btn-info" >Thêm thông tin</button>
												<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
											</center>					
										</div>
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
										<div class="col-md-12 tieu-de">
											<h2>CHỨNG CHỈ</h2>
										</div>
										<div class="col-md-12">
											<table class="table table-bordered w-75 m-auto">
												<tbody>
													<tr>
														<th>Năm học</th>
														<td>
															<input type="text" value="2018" name="time">
														</td>
													</p>
												</td>
											</tr> <!-- hết 1 row -->
											<tr>
												<th>Tên chứng chỉ</th>
												<td>
													<input type="text" value="Chứng chỉ tin học.." name="ten_chung_chi">
												</td>
											</tr> <!-- hết 1 row -->
										</tbody>
									</table>
								</div>
								<div class="col-md-12">
									<center>
										<button name="chung_chi" type="submit" class="btn btn-info" >Thêm thông tin</button>
										<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
									</center>					
								</div>
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
								<div class="col-md-12 tieu-de">
									<h2>GIẢI THƯỞNG</h2>
								</div>
								<div class="col-md-12">
									<table class="table table-bordered w-75 m-auto">
										<tbody>
											<tr>
												<th>Thời gian</th>
												<td>
													<input type="text" value="2018" name="time">
												</td>
											</p>
										</td>
									</tr> <!-- hết 1 row -->
									<tr>
										<th>Tên giải thưởng</th>
										<td>
											<input type="text" value="Học bổng.." name="ten_giai_thuong">
										</td>
									</tr> <!-- hết 1 row -->
								</tbody>
							</table>
						</div>
						<div class="col-md-12">
							<center>
								<button name="giai_thuong" type="submit" class="btn btn-info" >Thêm thông tin</button>
								<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
							</center>					
						</div>
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
						<div class="col-md-12 tieu-de">
							<h2>HOẠT ĐỘNG</h2>
						</div>
						<div class="col-md-12">
							<table class="table table-bordered w-75 m-auto">
								<tbody>
									<tr>
										<th>Thời gian</th>
										<td>
											<input type="text" value="2018" name="time">
										</td>
									</p>
								</td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Tên hoạt động</th>
								<td>
									<input type="text" value="Nhóm tình nguyện hè.." name="ten_hoat_dong">
								</td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Ghi chú</th>
								<td>
									<input type="text" value="..." name="noi_dung">
								</td>
							</tr> <!-- hết 1 row -->
						</tbody>
					</table>
				</div>
				<div class="col-md-12">
					<center>
						<button name="hoat_dong" type="submit" class="btn btn-info" >Thêm thông tin</button>
						<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
					</center>					
				</div>
			</div> <!-- 5 -->
		</div> <!-- end contentitem -->
	</div>
</div>
</form>
	</li>
	<li class="content4">
		<form action="../controller/so_thich.php?id_tv=<?php echo $document['id_tv'];?>" method="POST">
		<div class="contentitem">
			<div class="phan-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 tieu-de">
							<h2>SỞ THÍCH</h2>
						</div>
						<div class="col-md-12 taocv-st">
							<div class="form-group fl td ">
								<div class="icon-map"><i class="fa fa-graduation-cap"></i></div>
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
							</div>
							<span class="td stk"><input type="text" name="ten_st" placeholder="Sở thích khác.." value="" name="so_thich_khac"> <button name="ten_so_thich" class="btn btn-info">Thêm</button></span> 		
						</div>
						<div class="col-md-12">
							<center>
								<button name="so_thich" type="submit" class="btn btn-info" >Thêm thông tin</button>
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
			<form action="../controller/ky_nang.php?id_tv=<?php echo $document['id_tv'];?>" method="POST">
			<div class="phan-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 tieu-de">
							<h2>KỸ NĂNG</h2>
						</div>
						<div class="col-md-12 taocv-st">
							<div class="form-group fl td ">
								<div class="icon-map"><i class="fa fa-graduation-cap"></i></div>
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
							</div>
							<span class="td stk"><input type="text" placeholder="Kỹ năng khác.." value="" name="ten_kn"> <button name="ten_ky_nang" class="btn btn-info">Thêm</button></span> 		
						</div>
						<div class="col-md-12">
							<center>
								<button name="ky_nang" type="submit" class="btn btn-info" >Thêm thông tin</button>
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
							<div class="col-md-12 tieu-de">
								<h2>KINH NGHIỆM</h2>
							</div>
							<div class="col-md-12">
								<table class="table table-bordered w-75 m-auto">
									<tbody>
										<tr>
											<th>Thời gian</th>
											<td>
												<input type="text" value="2018" name="time">
											</td>
										</p>
									</td>
								</tr> <!-- hết 1 row -->
								<tr>
									<th>Nơi làm</th>
									<td>
										<input type="text" value="Thực tập thực tế.." name="noi_lam">
									</td>
								</tr> <!-- hết 1 row -->
								<tr>
									<th>Chi tiết</th>
									<td>
										<input type="text" value="..." name="chi_tiet">
									</td>
								</tr> <!-- hết 1 row -->
							</tbody>
						</table>
					</div>

					<div class="col-md-12">
						<center>
							<button name="kinh_nghiem" type="submit" class="btn btn-info" >Thêm thông tin</button>
							<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
						</center>					
					</div>
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
					<div class="col-md-12 tieu-de">
						<h2>DỰ ÁN</h2>
					</div>
					<div class="col-md-12">
						<table class="table table-bordered w-75 m-auto">
							<tbody>
							<tr>
								<th>Tên dự án</th>
									<td><input type="text" value="Tên của dự án" name="ten_du_an"></td>		
								</tr> <!-- hết 1 row -->
							<tr>
								<th>Thời gian</th>
									<td><input type="text" value="Thời gian hoàn thành dự án" name="time"></td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Mô tả</th>
									<td>
										<textarea name="mo_ta">- Ứng dụng mobile giúp mọi người đặt vé nhanh chóng bất kì lúc nào, bất kì nơi đâu.
										</textarea>
									</p>
								</td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Số lượng thành viên</th>
								<td><input type="text" value="8" name="so_luong"></td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Vị trí trong công việc</th>
								<td><input type="text" value="- Lập trình viên" name="vi_tri_cong_viec"></td>
							</tr> <!-- hết 1 row -->
							<tr>
								<th>Vai trò trong dự án</th>
								<td>
									<textarea name="vai_tro">- Phân tích và thiết kế hệ thống, phát triển module, tối ưu code, sửa lỗi
									</textarea>
								</p>
							</td>
						</tr> <!-- hết 1 row -->
						<tr>
							<th>Công nghệ sử dụng</th>
							<td>
								<textarea name="cong_nghe">- Android Studio 1.4, Java, Android 4.0, Google Could Message.
								</textarea>
							</td>
						</tr> <!-- hết 1 row -->
					</tbody>
				</table>
			</div>

			<div class="col-md-12">
				<center>
					<button name="du_an" type="submit" class="btn btn-info" >Thêm thông tin</button>
					<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
				</center>					
			</div>
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
<?php } ?>
</body>
</html>