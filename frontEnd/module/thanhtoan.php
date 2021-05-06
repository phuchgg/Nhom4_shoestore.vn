<style type="text/css">	

.main_content
{
    background: #f0f0f0;
}
</style>
<?php 
require_once('connect.php');
$tongtien=0;
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null)
{
	
foreach ($_SESSION['cart'] as $value) {
	$tongtien+=$value['soluong']*$value[2];
}
	$ketqua=mysqli_query($conn,"select * from `nn_user` where id_user=".$_SESSION['user_id']."");
	$rl=mysqli_fetch_row($ketqua);
}?>
<link rel="stylesheet" type="text/css" href="public/css/thanhtoan.css">
<div class="chinh">
	<form action="index.php?mod=email" method="POST">
		<h3>Cần thanh toán : <?php echo number_format($tongtien,0,",",".")." VNĐ";?></h3>
		<h5><a href="?mod=cart">Xem lại đơn hàng</a></h5>
		<hr>
		<input type="text" placeholder="Nhập tên" class="dep ten"  name="ten" value="<?php echo $rl[3]?>" required>
		<input type="text" placeholder="Nhập số diện thoại" class="dep sdt" name="sdtt" required value="<?php echo $rl[4]?>">
		 <input type="email" placeholder="nhập gmail" class="dep gmail" name="gmailne" required value="<?php echo $rl[2]?>">
		  <input type="text" placeholder="Yêu cầu khác (Không bắt buộc)" class="dep yeucau">
		 <hr class="hix">
		 
	<label><input type="checkbox" class="ro hihi" name="nhanhang">  Địa chỉ giao hàng</label>
	<div class="test">
		<input type="text" placeholder="Thành Phố" class="dep1" name="tp" required>
		<input type="text" placeholder="Quận/Huyện" class="dep2" name="quan" required>
		<input type="text" placeholder="Số nhà,tên đường, phường / xã" class="dep3" name="sonha" required> 
		<input type="text" placeholder="Những yêu cầu khác " style="	width: 100%" class="dep3">
	</div>
	
	<br><br>
	<input type="submit" value="Thanh toán khi nhận hàng" name="guigmail" class="checkout-button button alt wc-forward" style="float:left">

	<script type="text/javascript">

	$(document).ready(function() {
		$('.test').slideUp();
		$('.hihi').click(function(event) { $('.test').slideToggle();});

	});
	
	</script>
	</div>

