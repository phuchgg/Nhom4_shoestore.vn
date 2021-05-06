<?php
	$notify='';
	//cấu hình thông tin do google cung cấp
	$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
	$site_key    = '6LeEc14UAAAAAHsEsICbaETFxEH0tTrBwkLlAqNX';
	$secret_key  = '6LeEc14UAAAAACQJJEl_zVatjmjrU2_ZRNQ2xfmy';
  
	if(isset($_POST['submit'])){
		if(isset($_POST['name']))//Nếu người dùng đã submit
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$pass=$_POST['pass'];
			$repass=$_POST['repass'];
			$mobie=$_POST['mobile'];
			//kiem tra submit form

		    //lấy dữ liệu được post lên
		    $site_key_post    = $_POST['g-recaptcha-response'];
		      
		    //lấy IP của khach
		    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		        $remoteip = $_SERVER['HTTP_CLIENT_IP'];
		    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		        $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		    } else {
		        $remoteip = $_SERVER['REMOTE_ADDR'];
		    }
		     
		    //tạo link kết nối
		    $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
		    //lấy kết quả trả về từ google
		    $response = file_get_contents($api_url);
		    //dữ liệu trả về dạng json
		    $response = json_decode($response);
			if(strlen($pass)<6){
				$notify='Mật khẩu tối thiểu 6 kí tự';
			}
			else if($pass != $repass){
				$notify='Mật khẩu nhập lại không trùng khớp';
			}
			else if(!isset($response->success)){
		    	$notify='Chưa xác nhận mã captcha!';
		    }
			else if($response->success == true){
				$sql="INSERT INTO `nn_user` (`password`, `email`, `name_user`, `mobile`) VALUES (sha1('$pass'),'$email','$name','$mobie')";
				$rs=mysqli_query($conn,$sql);
				if(!$rs){
					$notify="<script>alert('Thêm tài khoản không thành công! Email bị trùng');</script>";
				}
				else
					$notify="<script>alert('Thêm tài khoản thành công! Đang chuyển đến trang đăng nhập...'); redirect('?mod=login');</script>";
					
			}
			else{
				$notify='Chưa xác nhận mã captcha!';
			}
		}
	}
	
?>

<script>
	function redirect(url,delay=3000)
	{
		setTimeout("window.location='"+url+"'",delay);
	}
</script>

<div class="login">
    <div class="registrd">
        <h3>Tạo Tài Khoản</h3>
        <p class="error"><?php echo $notify ?></p>
        <form action="" method="post" id="register">
          <ul class="forms">
            <li class="txt">Họ Tên(*)</li>
            <li class="inputfield">
              <input type="text" name="name" class="bar" required id="name" />
            </li>
          </ul>
          <ul class="forms">
            <li class="txt">Email (*)</li>
            <li class="inputfield">
              <input type="email" onblur="callAjax()" name="email" class="bar" required id="email" />
              <div id="msg"></div>
            </li>
          </ul>
          <ul class="forms">
            <li class="txt">Mật Khẩu (*)</li>
            <li class="inputfield">
              <input type="password" placeholder="Tối thiểu 6 ký tự" name="pass" class="bar" required />
            </li>
          </ul>
          <ul class="forms">
            <li class="txt">Nhập lại mật Khẩu (*)</li>
            <li class="inputfield">
              <input type="password" placeholder="Tối thiểu 6 ký tự" name="repass" class="bar" required= id="repass" />
            </li>
          </ul>
          <ul class="forms">
            <li class="txt">Điện Thoại(*)</li>
            <li class="inputfield">
              <input type="number" name="mobile" class="bar" id="mobile" />
            </li>
          </ul>
          <ul class="forms">
            <div class="g-recaptcha" data-theme="dark" data-sitekey="<?php echo $site_key?>"></div>
          <!-- <ul class="forms" style="color: red;font-size: 15px;">
            <label>
              <input type="checkbox" id="accept" /> Chấp thuận mọi quy định của website.
            </label> -->
          </ul>
          <ul class="forms">
            <li class="txt">&nbsp;</li>
            <li><a href="javascript:document.getElementById('sm').click()" class="simplebtn"><span>Đăng Ký</span></a> <input  type="submit" name="submit" style="width:0;height:0;border:none;display: none;" value="Register" id="sm">
            </li>
        </ul>
        </form>
    </div>
    
</div>
<div class="clear"></div>
<script>
	function callAjax(){
		$.ajax({
			url: 'library/checkemail_ajax.php',
			type: 'GET',
			data: { email: $('#email').val(),
			},
			success: function(data){
				//$('#sm').alert('data')
			}
		})
		.done(function(data){
			$('#msg').html(data);
		})
	}
</script>