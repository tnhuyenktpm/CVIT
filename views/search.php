<?php 
include '../models/connect.php';
include_once'include/header.php'; 
?>
	<main>
		<?php include'include/banner.php'; ?>
		<div class="container chuyen-nganh">
			<div class="row">
				<div class="col-md-12 tieude-cn">
					<h2>Kết quả tìm kiếm</h2>
					<span class="kengang"></span>
				</div>
				
				<div class="col-md-12 mot-tin">
					<?php 
					$query = "select * from user,tt_thanh_vien,chuyen_nganh where tt_thanh_vien.id_user=user.id_user and tt_thanh_vien.id_chuyen_nganh=chuyen_nganh.id_chuyen_nganh ";
					$result = mysqli_query($connect,$query);
					foreach ($result as  $value) {
					?>
					<div class="bg-mottin">
						<img src="<?php echo $value['hinh_anh']; ?>" alt="" >

						<div class="chitiet">
							<h4 ><?php echo $value['ho_ten'];?></h4>
							<p class="cn">
								<span>Chuyên ngành:<?php echo $value['ten_chuyen_nganh'];?></span> 
							</p>
							<p class="about"> <?php echo $value['mo_ta_ngan'];?> </p>
							<a href="trangcv.php?id_tv=<?php echo $value['id_tv']; ?>"class="button">Xem chi tiết</a>
						</div>
				</div> <!-- hết mot-tin -->
			</div>
			<?php } ?>
		</div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 m-auto">
							<?php include 'include/sidebar.php'; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main> <!-- main -->
<?php include 'include/footer.php'; ?>