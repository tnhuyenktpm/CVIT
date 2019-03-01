$('a.clickout').click(function(){
	$('div.clickform').removeClass('clickhien');
	$('div.clickform').addClass('clickan');
})
	//xu ly dang ky
	$('a#dangky').click(function(){
		$('div.clickdk').removeClass('clickan');
		$('div.clickdk').addClass('clickhien');
	})
	$('a#dangkytv').click(function(){
		$('div.clickdktv').removeClass('clickan');
		$('div.clickdktv').addClass('clickhien');
	})
	$('a#dangkytd').click(function(){
		$('div.clickdktd').removeClass('clickan');
		$('div.clickdktd').addClass('clickhien');
	})

	//xu ly dangnhap
	$('a#dangnhap').click(function(){
		$('div.clickdn').removeClass('clickan');
		$('div.clickdn').addClass('clickhien');
	})
	$('a#dangnhaptv').click(function(){
		$('div.clickdntv').removeClass('clickan');
		$('div.clickdntv').addClass('clickhien');
	})

	$('a#dangnhaptd').click(function(){
		$('div.clickdntd').removeClass('clickan');
		$('div.clickdntd').addClass('clickhien');
	})

	// nut dang bi hu, chua xua ly duoc
	$('a.linkdangnhaptv').click(function(){

		$('div.clickdntv').removeClass('clickan');
		$('div.clickdntv').addClass('clickhien');

		$('div.clickdk').removeClass('clickhien').addClass('clickan');
		$('div.clickdktd').removeClass('clickhien').addClass('clickan');
		$('div.clickdktv').removeClass('clickhien').addClass('clickan');
		$('div.clickdn').removeClass('clickhien').addClass('clickan');
		$('div.clickdntd').removeClass('clickhien').addClass('clickan');

	})
	$('.linkdangnhaptd').click(function(){

		$('div.clickdntd').removeClass('clickan');
		$('div.clickdntd').addClass('clickhien');

		$('div.clickdk').removeClass('clickhien').addClass('clickan');
		$('div.clickdktd').removeClass('clickhien').addClass('clickan');
		$('div.clickdktv').removeClass('clickhien').addClass('clickan');
		$('div.clickdn').removeClass('clickhien').addClass('clickan');
		$('div.clickdntv').removeClass('clickhien').addClass('clickan');
	})

	$('a.linkdangkytv').click(function(){

		$('div.clickdktv').removeClass('clickan');
		$('div.clickdktv').addClass('clickhien');

		$('div.clickdk').removeClass('clickhien').addClass('clickan');
		$('div.clickdktd').removeClass('clickhien').addClass('clickan');
		$('div.clickdn').removeClass('clickhien').addClass('clickan');
		$('div.clickdntv').removeClass('clickhien').addClass('clickan');
		$('div.clickdntd').removeClass('clickhien').addClass('clickan');

	})
	
	$('a.linkdangkytd').click(function(){

		$('div.clickdktd').removeClass('clickan');
		$('div.clickdktd').addClass('clickhien');

		$('div.clickdk').removeClass('clickhien').addClass('clickan');
		$('div.clickdktv').removeClass('clickhien').addClass('clickan');
		$('div.clickdn').removeClass('clickhien').addClass('clickan');
		$('div.clickdntv').removeClass('clickhien').addClass('clickan');
		$('div.clickdntd').removeClass('clickhien').addClass('clickan');

	})