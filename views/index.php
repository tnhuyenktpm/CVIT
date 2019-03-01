<?php
include '../models/connect.php'; 
?>
<?php include'include/header.php'; ?>
	<main>
		<?php include'include/banner.php'; ?>
		<div class="nd-chinh">
			<div class="container">
				<div class="row">
					<div class="col-md-8 cv-moi frame-out">
						<?php include 'include/content.php'; ?>
					</div> <!-- end cv-moi -->
					<div class="col-md-4 ">
						<?php include 'include/sidebar.php'; ?>
					</div>
				</div>
			</div>

		</div>
	</main> <!-- main -->
<?php include 'include/footer.php'; ?>