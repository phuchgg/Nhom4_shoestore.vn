<?php
	require('db.php');
	$email=$_GET['email'];
	$sql="select `email` from `nn_user` where `email`='$email'";
	$rs=mysqli_query($conn,$sql);
	if(mysqli_num_rows($rs)==0)
		echo '<img src="public/img/all/accept18.png" alt="accept"/>Bạn có thể đăng ký bằng email này!';
	else
		echo '<img src="public/img/all/deny.png" alt="deny"/>Email này đã được đăng ký!';
?>
