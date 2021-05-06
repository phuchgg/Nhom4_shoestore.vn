<?php
	$id=@$_GET['id'];	
	
	$sql="select `category_id`,`img_url` from `nn_product` where `id_pro`=$id ";
	$rs=mysqli_query($conn,$sql);
	$r=mysqli_fetch_assoc($rs);
	// xóa file ảnh
	if(is_file('images/sanpham/'.$r['img_url'])) unlink('public/images/sanpham/'.$r['img_url']);
	if(is_file('images/sanpham/'.$r['img_url1'])) unlink('public/images/sanpham/'.$r['img_url1']);
	if(is_file('images/sanpham/'.$r['img_url2'])) unlink('public/images/sanpham/'.$r['img_url2']);
	if(is_file('images/sanpham/'.$r['img_url3'])) unlink('public/images/sanpham/'.$r['img_url3']);
	//xóa cột trong bảng nn_department
	$sql="DELETE FROM `nn_product` Where `id_pro`=$id";	
	mysqli_query($conn,$sql);
	//Chuyen den trang chung loai
	header('location:/nhom4_shoestore.vn/staff/pro/'.$r['category_id'].'/');
?>