<?php 
include '../models/connect.php';
include_once'include/header-canhan.php'; 
$id_chuyen_nganh=$_GET['id_chuyen_nganh'];
?>
	<main>
		<div class="container chuyen-nganh">
			<div class="row">
				<div class="col-md-12 tieude-cn">
					<?php 
				
					$query = "select * from chuyen_nganh where id_chuyen_nganh='$id_chuyen_nganh' ";
					$result = mysqli_query($connect,$query);
					foreach ($result as  $value) {
					?>
					<h2><?php echo $value['ten_chuyen_nganh'];?></h2>
				<?php } ?>
					<span class="kengang"></span>
				</div>
				<?php 
					$query = "select * from user,tt_thanh_vien,chuyen_nganh where tt_thanh_vien.id_user=user.id_user and tt_thanh_vien.id_chuyen_nganh=chuyen_nganh.id_chuyen_nganh and chuyen_nganh.id_chuyen_nganh='$id_chuyen_nganh' order by id_tv DESC limit 10 ";
					$result = mysqli_query($connect,$query);
					foreach ($result as  $value) {
					?>
				<div class="col-md-12 mot-tin">
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
							<?php include 'include/sidebar-canhan.php'; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main> <!-- main -->
<?php include 'include/footer.php'; ?>