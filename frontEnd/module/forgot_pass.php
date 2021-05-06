<?php
    //goi thu vien
    include('library/SMTP/codergmail/class.smtp.php');
    include "library/SMTP/codergmail/class.phpmailer.php"; 
    function genCode($n=6)
    {
        $code='';
        $str='qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789';
        $len=strlen($str);
        for($i=0;$i<$n;$i++)
        {
            $pos=mt_rand(0,$len-1);//sinh số ngẫu nhiên từ 0 đến $len-1
            $code.=$str[$pos];
        }
        return $code;
    }

$msg='Nhập email để nhận link reset mật khẩu.';
if(isset($_POST['email']))
{
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	
	//Kiểm tra email có trong hệ thống hay không 
	$sql="select `id_user`,`name_user` from `nn_user` where `email`='$email'";
	$rs=mysqli_query($conn,$sql);
	if(mysqli_num_rows($rs)==0)
		$msg='Email không tồn tại trong hệ thống';
	else
	{
		//Lấy thông tin user
		$r=mysqli_fetch_assoc($rs);
		$id=$r['id_user'];
		$name=$r['name_user'];
		//Tạo link reset
		
		//Tạo code ngẫu nhiên
		$code=genCode(16);
				
		//echo $code;
		//Cập nhật code cho user
		//$sql="update `nn_user` set `code`='$code' where `id`=$id";
		//mysqli_query($conn,$sql);
		
		//Tạo chữ ký cho link (tránh giả mạo)
		$secret='faceshop@123#com';
		$hash=sha1($id.$code.$secret);
		
		$conn="http://localhost/nhom4_shoestore.vn/admin.php?mod=reset&id={$id}&code={$code}&hash={$hash}";
		
		
    $nFrom = "ShoeStore.vn";    //mail duoc gui tu dau, thuong de ten cong ty ban
    $mFrom = 'vnshoestore@gmail.com';  //dia chi email cua ban 
    $mPass = '*123abc#';       //mat khau email cua ban
    $nTo = 'caocanhlinh'; //Ten nguoi nhan
    $mTo = $email;   //dia chi nhan mail
    $mail = new PHPMailer();
    $body = "Xin chào <b>{$name}</b><br>
        Bạn nhấn vào <a target='_blank' href='{$conn}'>link sau</a> để reset lại mật khẩu<br>
        Good luck !";   // Noi dung email
    $title = 'ShoeStore.vn - Link reset mật khẩu';   //Tieu de gui mail
    $mail->IsSMTP();             
    $mail->CharSet  = "utf-8";
    $mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;    // enable SMTP authentication
    $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";    // sever gui mail.
    $mail->Port       = 465;         // cong gui mail de nguyen
    // xong phan cau hinh bat dau phan gui mail
    $mail->Username   = $mFrom;  // khai bao dia chi email
    $mail->Password   = $mPass;              // khai bao mat khau
    $mail->SetFrom($mFrom, $nFrom);
    $mail->AddReplyTo('vnshoestore@gmail.com', 'ShoeStore.vn'); //khi nguoi dung phan hoi se duoc gui den email nay
    $mail->Subject    = $title;// tieu de email 
    $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
    $mail->AddAddress($mTo, $nTo);
    $mail->SMTPDebug=0;
    // thuc thi lenh gui mail 
    if(!$mail->Send())
        echo 'Quá trình gửi xảy ra lỗi!';       
    else
        echo 'Mail của bạn đã được gửi đi hãy kiểm tra hộp thư đến để xem kết quả. ';
	}
}
?>
<h2 class="heading colr">Quên mật khẩu</h2>
<div class="login">
    <div class="registrd">
      <p class="error"><?php echo $msg ?></p>
        <form action="" method="post" id="login">
        <ul class="forms">
            <li class="txt">Email Address (*)</li>
            <li class="inputfield"><input type="email" name="email" class="bar" required ></li>
        </ul>
        <ul class="forms">
          <li class="txt">&nbsp;</li>
            <li><a href="javascript:document.getElementById('sm').click()" class="simplebtn"><span>Gửi</span></a> <input type="submit" style="width:0;height:0;border:none;display: none;" value="Login" id="sm"></li>
        </ul>
        </form>
    </div>    
</div>
