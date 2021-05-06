<?php
session_start();
	$id=$_GET['id'];
	unset($_SESSION['cart'][$id]);
	header("location:index.php?mod=cart");
	//header("location:Nhom4_shoestore.vn/index.php?mod=sanpham");
?>