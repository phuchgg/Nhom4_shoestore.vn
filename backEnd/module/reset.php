<?php
//Kiem tra link
$id=intval($_GET['id']);
$code=$_GET['code'];
$hash=$_GET['hash'];
$secret='faceshop@123#com';

if(sha1($id.$code.$secret)!=$hash)
	echo 'Link không hợp lệ';
else
{
	$msg='';
	
	if(isset($_POST['pass']))
	{
		$pass=$_POST['pass'];				
		$repass=$_POST['repass'];
		if(strlen($pass)<6)
			$msg='Mật khẩu tối thiểu 6 ký tự';
		elseif($pass!=$repass)
			$msg='Mật khẩu nhập lại không đúng';
		else
		{
			$sql="update `nn_user` set `password`=sha1('$pass') where `id`=$id";
			mysqli_query($conn,$sql);
			$msg='Thay đổi mật khẩu thành công. Hệ thống sẽ chuyển đến trang đăng nhập...';
?>
			<script>
				setTimeout("window.location='?mod=login'",2000);
			</script>
<?php
		}
	}	
	?>
	<h2 class="heading colr">Đặt lại mật khẩu</h2>
	<div class="login">
		<div class="registrd">
		  <p class="error"><?php echo $msg ?></p>
			<form action="" method="post" id="login">
			  <ul class="forms">
			    <li class="txt">Nhập mật khẩu mới (*)</li>
			    <li class="inputfield">
			      <input type="password" placeholder="Tối thiểu 6 ký tự" name="pass" class="bar" required="required" id="pass" />
		        </li>
		      </ul>
			  <ul class="forms">
			    <li class="txt">Nhập lại mật khẩu (*)</li>
			    <li class="inputfield">
			      <input type="password" placeholder="Tối thiểu 6 ký tự" name="repass" class="bar" required="required" id="repass" />
		        </li>
		      </ul>
			  <ul class="forms">
			  <li class="txt">&nbsp;</li>
				<li><a href="javascript:document.getElementById('sm').click()" class="simplebtn"><span>Đặt lại</span></a> <input type="submit" style="width:0;height:0;border:none;display: none;" value="Login" id="sm"></li>
			</ul>
		  </form>
		</div>    
	</div>
	<div class="clear"></div>
<?php
}
?>