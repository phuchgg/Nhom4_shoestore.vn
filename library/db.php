<?php
	//Ket noi MySQL va chọn DB
	$host='localhost';
	$user='root';
	$pass='';
	$db='shop1';
	//error_reporting(0);//Chan thong bao loi => production
	
	$conn=mysqli_connect($host,$user,$pass,$db) or die('Lỗi kết nối');	
	//Dong bo charset (collation)
	mysqli_query($conn,'set names utf8');
?>