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

	<link rel="stylesheet" href="../assets/css/style.css">
</head> <!-- end head -->
<body>




<div class="row">
<form action="xu_ly.php" method="POST">
<div class="col-md-12 tieu-de">
	<h2>Cập Nhật Tên</h2>
</div>
<div class="col-md-7">
	<?php 
include '../models/connect.php';
$query = "select * from user where id_user=6";
	$result = mysqli_query($connect,$query);
	foreach ($result as  $document) {

?>
			<p><span>Họ và tên:</span><small class="ho-ten">
				<input type="text" value="<?php echo $document['ho_ten']; ?>" name="ho_ten"></small></p>
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
		<?php }?>
		</div>

<div class="col-md-12">
	<center>
		<button name="submit" type="submit" class="btn btn-info" >Cập nhật</button>
		<a href="trangcv_canhan.php?id_tv=<?php echo $document['id_tv']; ?>" class="btn btn-info" >Trang CV</a>
	</center>					
</div>
</form>
</div>
</body>