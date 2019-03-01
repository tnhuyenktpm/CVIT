<div class="sidebar">
	<div class="frame-out">
		<div class="col-md-12 tieude">
			<h2>Thông tin tuyển dụng</h2>
			<span class="kengang"></span>
		</div>
		<div class="col-md-12">
			<ul class="content">
				<?php
					$query = "select * from dang_tt order by id_tt DESC limit 10 ";
					$result = mysqli_query($connect,$query);
					$i=1;
					foreach ($result as $value) {
				?>
				<li>
					<i class="fa fa-angle-double-right"></i>
					<a href="../views/tintuyendung_ntd.php?id_tt=<?php echo $value['id_tt']; ?>"><?php echo $value['tieu_de']; ?></a>
					<?php
            if ($i == 10) {
                     break;
                     }
                    $i++;
                    ?>
				</li> <!-- end mottin tuyen dung -->
				<?php 
					}
				?>
			</ul>
		</div>
	</div>
</div> <!-- end sidebar -->