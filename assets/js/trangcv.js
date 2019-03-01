$(document).ready(function () {
	$(document).on('click','.add', function(){
		$(this).parents('.item-hoc-van').append(`
			<div class="mot-field border-edit">
			<div class="edit-sothich">
			<a class="btn btn-outline-secondary">
			<i class="fa fa-caret-down"></i>
			</a>
			<a class="btn btn-outline-secondary">
			<i class="fa fa-caret-up"></i>
			</a>
			<a class="btn btn-success text-white add">+ Thêm</a> 
			<a class="btn btn-danger text-white remove">- Xoá</a>
			</div> <!-- end edit-sothich -->
			<div class="nam"><input type="text" value="2015 - 2019"></div>
			<div class="noidung">
			<p><h6 class="td">
			<input type="text" value="Đại học KT-CN Cần Thơ">
			</h6>
			</p>
			<p>
			<textarea name="">Tốt nghiệp loại Xuất sắc, điểm trung bình 9.0</textarea>
			</p>
			</div>
			</div> <!-- end 1 field -->
			`);
		$(this).parents('.item-chung-chi').append(`
			<div class="mot-field border-edit">
			<div class="edit-sothich">
			<a class="btn btn-outline-secondary">
			<i class="fa fa-caret-down"></i>
			</a>
			<a class="btn btn-outline-secondary">
			<i class="fa fa-caret-up"></i>
			</a>
			<a class="btn btn-success text-white add">+ Thêm</a> 
			<a class="btn btn-danger text-white remove">- Xoá</a>
			</div> <!-- end edit-sothich -->
			<div class="nam"><input type="text" value="2015"></div>
			<div class="noidung">
			<p>
			<textarea name="">Chứng chỉ Tin học căn bản</textarea>
			</p>
			</div>
			</div> <!-- end 1 field -->
			`);
		$(this).parents('.item-giai-thuong').append(`
			<div class="mot-field border-edit">
			<div class="edit-sothich">
			<a class="btn btn-outline-secondary">
			<i class="fa fa-caret-down"></i>
			</a>
			<a class="btn btn-outline-secondary">
			<i class="fa fa-caret-up"></i>
			</a>
			<a class="btn btn-success text-white add">+ Thêm</a> 
			<a class="btn btn-danger text-white remove">- Xoá</a>
			</div> <!-- end edit-sothich -->
			<div class="nam"><input type="text" value="2017"></div>
			<div class="noidung">
			<p>
			<textarea name="">Học bổng học tập (Loại giỏi)</textarea>	
			</p>
			</div>
			</div> <!-- end 1 field -->
			`);
		$(this).parents('.item-hoat-dong').append(`
			<div class="mot-field border-edit">
			<div class="edit-sothich">
			<a class="btn btn-outline-secondary">
			<i class="fa fa-caret-down"></i>
			</a>
			<a class="btn btn-outline-secondary">
			<i class="fa fa-caret-up"></i>
			</a>
			<a class="btn btn-success text-white add">+ Thêm</a> 
			<a class="btn btn-danger text-white remove">- Xoá</a>
			</div> <!-- end edit-sothich -->
			<div class="nam"><input type="text" value="Hè 2015"></div>
			<div class="noidung">
			<p>
			<h6 class="td"><input type="text" value="Nhóm tình nguyện hè"></h6>
			</p>
			<p>
			<textarea name="">Tham gia chiến dịch tình nguyện Mùa Hè Xanh</textarea>
			</p>
			</div>
			</div> <!-- end 1 field -->
			`);
		$(this).parents('.item-so-thich').append(`
			<div class="mot-tin border-edit">
			<div class="edit-sothich">
			<a class="btn btn-outline-secondary">
			<i class="fa fa-caret-down"></i>
			</a>
			<a class="btn btn-outline-secondary">
			<i class="fa fa-caret-up"></i>
			</a>
			<a class="btn btn-success text-white add">+ Thêm</a> 
			<a class="btn btn-danger text-white remove">- Xoá</a>
			</div> <!-- end edit-sothich -->
			<i class="fa fa-check-circle"></i>
			<div class="form-group fl td">
			<div class="icon-map"><i class="fa fa-heart"></i></div>
			<select id="inputState" class="form-control">
			<option selected>Chọn sở thích</option>
			<option>Đọc sách</option>
			<option>Nghe nhạc</option>
			<option>Xem phim</option>
			</select>
			</div>
			<span class="td stk"><input type="text" placeholder="Sở thích khác.." value=""></span> 
			</div> <!-- hết mot-tin -->
			`);
		$(this).parents('.item-ky-nang').append(`
			<div class="mot-tin border-edit">
			<div class="edit-sothich">
			<a class="btn btn-outline-secondary">
			<i class="fa fa-caret-down"></i>
			</a>
			<a class="btn btn-outline-secondary">
			<i class="fa fa-caret-up"></i>
			</a>
			<a class="btn btn-success text-white add">+ Thêm</a> 
			<a class="btn btn-danger text-white remove">- Xoá</a>
			</div> <!-- end edit-sothich -->
			<i class="fa fa-check-circle"></i>
			<div class="form-group fl td">
			<div class="icon-map"><i class="fa fa-graduation-cap"></i></div>
			<select id="inputState" class="form-control">
			<option selected>Chọn kỹ năng</option>
			<option>Thuyết trình</option>
			<option>Giao tiếp</option>
			<option>Tiếng Anh</option>
			<option>HTML</option>
			<option>CSS</option>
			<option>Javascript</option>
			<option>PHP</option>
			<option>MYSQL</option>
			<option>JAVA</option>
			<option>C#</option>
			<option>C++</option>
			<option>Wordpress</option>		
			</select>
			</div>
			<span class="td stk"><input type="text" placeholder="Kỹ năng khác.." value=""></span> 
			</div> <!-- hết mot-tin -->
			`);
		$(this).parents('.item-kinh-nghiem').append(`
			<div class="mot-tin border-edit">
			<div class="edit-sothich">
			<a class="btn btn-outline-secondary">
			<i class="fa fa-caret-down"></i>
			</a>
			<a class="btn btn-outline-secondary">
			<i class="fa fa-caret-up"></i>
			</a>
			<a class="btn btn-success text-white add">+ Thêm</a> 
			<a class="btn btn-danger text-white remove">- Xoá</a>
			</div> <!-- end edit-sothich -->
			<span class="nam"><input type="text" value="2017"></span>
			<span class="td">
			<input type="text" value="Đồ án Kỹ thuật  phần mềm 2">
			</span>
			<span class="chitiet">
			<textarea name="">Tìm hiểu công nghệ Ajax, MongoBD, xây dựng hệ thống website Quản lý CV.</textarea>
			</span>
			</div> <!-- hết mot-tin -->
			`);
	})

$(document).on('click','.remove', function(){
	$(this).parents('.border-edit').remove();
})
$(document).on('click','.color-blue', function(){
	$(this).parents('.edit-cn').addClass('text-blue').removeClass("text-red").removeClass("text-green").removeClass("text-violet");
	$('.item-edit-cn').addClass('text-blue').removeClass("text-red").removeClass("text-green").removeClass("text-violet");
})
$(document).on('click','.color-red', function(){
	$(this).parents('.edit-cn').addClass('text-red').removeClass("text-blue").removeClass("text-green").removeClass("text-violet");
	$('.item-edit-cn').addClass('text-red').removeClass("text-blue").removeClass("text-green").removeClass("text-violet");
})
$(document).on('click','.color-green', function(){
	$(this).parents('.edit-cn').addClass('text-green').removeClass("text-blue").removeClass("text-red").removeClass("text-violet");
	$('.item-edit-cn').addClass('text-green').removeClass("text-blue").removeClass("text-red").removeClass("text-violet");
})
$(document).on('click','.color-violet', function(){
	$(this).parents('.edit-cn').addClass('text-violet').removeClass("text-blue").removeClass("text-red").removeClass("text-green");
	$('.item-edit-cn').addClass('text-violet').removeClass("text-blue").removeClass("text-red").removeClass("text-green");
})
})