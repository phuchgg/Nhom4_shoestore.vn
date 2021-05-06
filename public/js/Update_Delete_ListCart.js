///CẬP NHẬT SẢN PHẨM
$("input.button").click(function(){
	if(localStorage.getItem('tennike1') != null){
		var soluongnike1=$("input.nike1").val();
		localStorage.setItem('slnike1',soluongnike1);
	}
	if(localStorage.getItem('tennike2') != null){
		var soluongnike2=$("input.nike2").val();
		localStorage.setItem('slnike2',soluongnike2);
	}
	if(localStorage.getItem('tenbitits1') != null){
		var soluongbitits1=$("input.bitits1").val();
		localStorage.setItem('slbitits1',soluongbitits1);
	}
	if(localStorage.getItem('tenbitits2') != null){
		var soluongbitits2=$("input.bitits2").val();
		localStorage.setItem('slbitits2',soluongbitits2);
	}
	if(localStorage.getItem('tenbitits3') != null){
		var soluongbitits3=$("input.bitits3").val();
		localStorage.setItem('slbitits3',soluongbitits3);
	}
	if(localStorage.getItem('tenadidas1') != null){
		var soluongadidas1=$("input.adidas1").val();
		localStorage.setItem('sladidas1',soluongadidas1);
	}
	if(localStorage.getItem('tenadidas2') != null){
		var soluongadidas2=$("input.adidas2").val();
		localStorage.setItem('sladidas2',soluongadidas2);
	}
	if(localStorage.getItem('tenadidas3') != null){
		var soluongadidas3=$("input.adidas3").val();
		localStorage.setItem('sladidas3',soluongadidas3);
	}
	if(localStorage.getItem('tenadidas4') != null){
		var soluongadidas4=$("input.adidas4").val();
		localStorage.setItem('sladidas4',soluongadidas4);
	}
	if(localStorage.getItem('tenpuma1') != null){
		var soluongpuma1=$("input.puma1").val();
		localStorage.setItem('slpuma1',soluongpuma1);
	}
	if(localStorage.getItem('tenpuma2') != null){
		var soluongpuma2=$("input.puma2").val();
		localStorage.setItem('slpuma2',soluongpuma2);
	}
	if(localStorage.getItem('tenpuma3') != null){
		var soluongpuma3=$("input.puma3").val();
		localStorage.setItem('slpuma3',soluongpuma3);
	}
});
///------------------------------------------------------------

/// XÓA SẢN PHẨM

$(".remove_nike1").click(function(){
	var deleters1=confirm('Bạn có chắc muốn xóa sản phẩm này không?');
	if(deleters1==true)
		if(typeof(Storage) !== "undefined")
			localStorage.removeItem('tennike1');
});
$(".remove_nike2").click(function(){
	var deleters2=confirm('Bạn có chắc muốn xóa sản phẩm này không?');
	if(deleters2==true)
		if(typeof(Storage) !== "undefined")
			localStorage.removeItem('tennike2');
});
$(".remove_bitits1").click(function(){
	var deleters3=confirm('Bạn có chắc muốn xóa sản phẩm này không?');
	if(deleters3==true)
		if(typeof(Storage) !== "undefined")
			localStorage.removeItem('tenbitits1');
});
$(".remove_bitits2").click(function(){
	var deleters4=confirm('Bạn có chắc muốn xóa sản phẩm này không?');
	if(deleters4==true)
		if(typeof(Storage) !== "undefined")
			localStorage.removeItem('tenbitits2');
});
$(".remove_bitits3").click(function(){
	var deleters5=confirm('Bạn có chắc muốn xóa sản phẩm này không?');
	if(deleters5==true)
		if(typeof(Storage) !== "undefined")
			localStorage.removeItem('tenbitits3');
});
$(".remove_adidas1").click(function(){
	var deleters6=confirm('Bạn có chắc muốn xóa sản phẩm này không?');
	if(deleters6==true)
		if(typeof(Storage) !== "undefined")
			localStorage.removeItem('tenadidas1');
});
$(".remove_adidas2").click(function(){
	var deleters7=confirm('Bạn có chắc muốn xóa sản phẩm này không?');
	if(deleters7==true)
		if(typeof(Storage) !== "undefined")
			localStorage.removeItem('tenadidas2');
});
$(".remove_adidas3").click(function(){
	var deleters8=confirm('Bạn có chắc muốn xóa sản phẩm này không?');
	if(deleters8==true)
		if(typeof(Storage) !== "undefined")
			localStorage.removeItem('tenadidas3');
});
$(".remove_adidas4").click(function(){
	var deleters9=confirm('Bạn có chắc muốn xóa sản phẩm này không?');
	if(deleters9==true)
		if(typeof(Storage) !== "undefined")
			localStorage.removeItem('tenadidas4');
});
$(".remove_puma1").click(function(){
	var deleters10=confirm('Bạn có chắc muốn xóa sản phẩm này không?');
	if(deleters10==true)
		if(typeof(Storage) !== "undefined")
			localStorage.removeItem('tenpuma1');
});
$(".remove_puma2").click(function(){
	var deleters11=confirm('Bạn có chắc muốn xóa sản phẩm này không?');
	if(deleters11==true)
		if(typeof(Storage) !== "undefined")
			localStorage.removeItem('tenpuma2');
});
$(".remove_puma3").click(function(){
	var deleters12=confirm('Bạn có chắc muốn xóa sản phẩm này không?');
	if(deleters12==true)
		if(typeof(Storage) !== "undefined")
			localStorage.removeItem('tenpuma3');
});
