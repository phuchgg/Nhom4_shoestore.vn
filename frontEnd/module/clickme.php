<?php
require_once("connect.php");
$id=$_GET['id'];
	mysqli_query($conn,"update nn_order set nn_order.status='1' where nn_order.id_order={$id}");
	header("location:http://localhost/Nhom4_shoestore.vn/index.php");

?>