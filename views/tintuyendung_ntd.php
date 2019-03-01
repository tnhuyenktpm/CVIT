<?php
include '../models/connect.php'; 
include'include/header-ntd.php';
$id_tt=$_GET['id_tt'];
?>

	<main>
		<div class="nd-chinh">
			<div class="container">
				<div class="row">
					<div class="col-md-8 cv-moi frame-out">
						<div class="col-md-12 tieude">
							<h2>TIN TUYỂN DỤNG</h2>
							<span class="kengang"></span>
						</div>
						<?php
							$query = "select * from dang_tt where id_tt='$id_tt'";
							$result = mysqli_query($connect,$query);
							foreach ($result as $value) {
						?>
						<div class="col-md-12 dttd">
							<h2 class="td"><?php echo $value['tieu_de']; ?></h2>
							<p class="nd">
							<?php echo $value['noi_dung']; ?>
							</p>
						</div>
						<?php } ?>
					</div> <!-- end dttd -->
					<div class="col-md-4 ">
						<?php include 'include/sidebar-ntd.php'; ?>
					</div>
				</div>
			</div>

		</div>
	</main> <!-- main -->
<?php include 'include/footer.php'; ?>