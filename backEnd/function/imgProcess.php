<?php 
	$file=$_FILES['img_url'];
	$file1=$_FILES['img_url1'];
	$file2=$_FILES['img_url2'];
	$file3=$_FILES['img_url3'];
	if($file['name']!='')//Neu co submit file
	{
		//Kiem tra co phai la file anh khong
		if(strpos($file['type'],'image/')===false)
			$msg='File không phải là ảnh, Hãy cập nhật lại file ảnh';
		else//File là ảnh
		{
			$img_url=rand().$file['name'];//Lay ten file
			//Copy file tu thu muc temp -> thu muc chua anh sp
			copy($file['tmp_name'],'public/images/sanpham/'.$img_url);
		}
	}
	if($file1['name']!='')//Neu co submit file
	{
		//Kiem tra co phai la file anh khong
		if(strpos($file1['type'],'image/')===false)
			$msg='File không phải là ảnh, Hãy cập nhật lại file ảnh';
		else//File là ảnh
		{
			$img_url1=rand().$file1['name'];//Lay ten file
			//Copy file tu thu muc temp -> thu muc chua anh sp
			copy($file1['tmp_name'],'public/images/sanpham/'.$img_url1);
		}
	}
	if($file2['name']!='')//Neu co submit file
	{
		//Kiem tra co phai la file anh khong
		if(strpos($file2['type'],'image/')===false)
			$msg='File không phải là ảnh, Hãy cập nhật lại file ảnh';
		else//File là ảnh
		{
			$img_url2=rand().$file2['name'];//Lay ten file
			//Copy file tu thu muc temp -> thu muc chua anh sp
			copy($file2['tmp_name'],'public/images/sanpham/'.$img_url2);
		}
	}
	if($file3['name']!='')//Neu co submit file
	{
		//Kiem tra co phai la file anh khong
		if(strpos($file3['type'],'image/')===false)
			$msg='File không phải là ảnh, Hãy cập nhật lại file ảnh';
		else//File là ảnh
		{
			$img_url3=rand().$file3['name'];//Lay ten file
			//Copy file tu thu muc temp -> thu muc chua anh sp
			copy($file3['tmp_name'],'public/images/sanpham/'.$img_url3);
		}
	}
 ?>