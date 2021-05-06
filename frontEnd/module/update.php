<?php
	if(isset($_POST['update_cart']))
	{
		 # code..
		// 	unset();
		foreach ($_POST['qty'] as $key => $value) {
			# code...
			if($value<=0)
			{
				unset($_SESSION['cart'][$key]);
			}
			else
			{
				$_SESSION['cart'][$key]['soluong']=$value;
			}
		}
			header("location:index.php?mod=cart");
	}
	if(isset($_POST['tt']))
	{
			if(isset($_SESSION['user_id']))
			{
				header("location:index.php?mod=thanhtoan");
			}
			else
			{
				echo "<script>
				alert('Bạn chưa đăng nhập !!!');
				window.location='index.php?mod=login';
				</script>";
			}
	}
?>