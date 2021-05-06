<?php
if (isset($_POST['pass']))
{
	$user=$_POST['user'];
	$pass=sha1($_POST['pass']);
	$sql="SELECT * FROM `nn_user` WHERE `email`='{$user}' and `password`='{$pass}'";
	$rs=mysqli_query($conn,$sql);
	$r=mysqli_fetch_assoc($rs);
	if($r['email'] != '' and $r['password'] != '' )// Đúng. ghi nhận người đã đăng nhập vào SESSION
	{ 
		$_SESSION['user_id']=$r['id_user'];
		$_SESSION['user_name']=$r['name_user'];
	?>
		<script>
			alert('Đăng nhập thành công.Chào mừng <?php echo $r['name_user'] ?> đã quay trở lại');
			window.location='?mod=home';
        </script>
<?php
	//header('location:....') chuyển trang bằng php
	}
	else //Sai. trả về trang đăng nhập
		echo "<script>
					alert('Sai tên đăng nhập hoặc mật khẩu. Vui lòng thử lại! ');
					history.go(-1);
			 </script>";
}
?>
	<style type="text/css">
		ul , li
		{
			list-style:none;
		}
	</style>
<div class="login"><center>
    <div class="registrd">
        <h3>Đăng Nhập</h3>
        <form action="" method="post">
        <ul class="forms">
            <li class="txt">Tên người dùng (*)</li>
            <li class="inputfield"><input type="text" name="user" class="bar" required ></li>
        </ul>
        <ul class="forms">
            <li class="txt">Mật khẩu (*)</li>
            <li class="inputfield"><input type="password" name="pass" class="bar" required ></li>
        </ul>
        <ul class="forms">
            <li class="txt">&nbsp;</li>
             <li><a href="javascript:document.getElementById('sm').click()" class="simplebtn btn-lg" style="background-color: #1abc9c; color: white; text-decoration: none;"><span>Đăng Nhập</span></a><input type="submit" style="width:0;height:0;border:none;display: none" value="Login" id="sm"><a href="index.php?mod=forgot_pass" class="forgot">Quên mật khẩu?</a></li>
            <!--<li></a> <button class="login-button" type="submit">Login</button> <a href="#" class="forgot">Forgot Your Password?</a></li>-->
        </ul>
        </form>
    </div></center>
</div>
<div class="clear"></div>