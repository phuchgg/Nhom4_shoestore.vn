<?php
	$id=@$_GET['id'];	
	$sql="DELETE FROM `nn_user` Where `id_user`=$id";	
	mysqli_query($conn,$sql);
	//Chuyen den trang chung loai
	header('location:?mod=cus');
?>