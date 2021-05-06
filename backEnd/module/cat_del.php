  <?php
	$id=@$_GET['cid'];	
	//xóa tất cả các sản phẩm (nn_product) thuộc loại này
	$sql="select `img_url` from `nn_product` Where `category_id`=$id";
	$rs=mysqli_query($conn,$sql);
	while($r=mysqli_fetch_assoc($rs)){
		if(is_file('public/img/'.$r['img_url']))
		unlink('public/img/'.$r['img_url']);
		if(is_file('public/img/'.$r['img_url1']))
		unlink('public/img/'.$r['img_url1']);
		if(is_file('public/img/'.$r['img_url2']))
		unlink('public/img/'.$r['img_url2']);
		if(is_file('public/img/'.$r['img_url3']))
		unlink('public/img/'.$r['img_url3']);
	}
	
	$sql="DELETE FROM `nn_product` Where `category_id`=$id";
	mysqli_query($conn,$sql);
	
	//xóa loại này trong bảng loại sản phẩm(nn_category)
	$sql="DELETE FROM `nn_category` Where `id_cat`=$id";	
	mysqli_query($conn,$sql);
	
	//Chuyen den trang chung loai
	header('location:?mod=cat');
?>