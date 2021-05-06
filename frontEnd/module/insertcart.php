 <?php
 	include"connect.php";
 /*if(isset($_GET['btn-them']))*/
	$id=$_GET['id'];
	$soluong=$_POST['soluong'];

	$sql=mysqli_query($conn," select id_pro,name_pro,price,img_url from nn_product where nn_product.id_pro={$id}");
	$ketqua=mysqli_fetch_row($sql);
	if($_SESSION['cart']==null || !isset($_SESSION['cart']))
	{
		$ketqua['soluong']=$soluong;
		$_SESSION['cart'][$id]=$ketqua;
	}
	else
	{
		if(array_key_exists($id, $_SESSION['cart']))
		{
			$_SESSION['cart'][$id]['soluong']+=$soluong;
		}
		else
		{
		$ketqua['soluong']=$soluong;
		$_SESSION['cart'][$id]=$ketqua;
		}
	}
	header("location:?mod=cart");

 ?>