<div class="col-md-12 tieude">
	<h2>CV MỚI CẬP NHẬT</h2>
	<span class="kengang"></span>
</div>
<?php
	$query = "select * from user,tt_thanh_vien,chuyen_nganh where tt_thanh_vien.id_user=user.id_user and tt_thanh_vien.id_chuyen_nganh=chuyen_nganh.id_chuyen_nganh order by id_tv DESC limit 6";
	$result = mysqli_query($connect,$query);
	foreach ($result as  $value) {
?>
<div class="col-md-4 col-6 mot-tin">
	
	<a href="#">
		<img src="<?php echo $value['hinh_anh']; ?>">
		<h4><?php echo $value['ho_ten'];?></h4>
		<span><?php echo $value['ten_chuyen_nganh'];?></span>
	</a>
</div> <!-- hết mot-tin -->
<?php 

}
?>