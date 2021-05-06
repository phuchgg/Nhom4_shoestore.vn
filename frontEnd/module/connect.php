<?php
	$conn=mysqli_connect('localhost','root','','shop1') or die('Lỗi :'. mysqli_connect_error());
	mysqli_query($conn,"names set 'utf8'");

?>