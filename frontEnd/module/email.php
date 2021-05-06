<?php
if(isset($_POST['guigmail']))
{
    $gmaill=$_POST['gmailne'];
    $tenn=$_POST['ten'];
    $sdtt=$_POST['sdtt'];
    $tp=$_POST['tp'];
    $quan=$_POST['quan'];
    $sonha=$_POST['sonha'];
    $diachi=$sonha.", ".$quan." ,".$tp;
    //cap nhat thong tin ca nhan khach hang
    mysqli_query($conn,"insert nn_order value(null,".$_SESSION['user_id'].",now(),'{$tenn}','{$diachi}','now()+84600','{$gmaill}',{$sdtt},'',0)");
    //
    $sql=mysqli_query($conn,"select id_order from nn_order order by id_order DESC Limit 0,1");
    $e=mysqli_fetch_row($sql);//
    foreach ($_SESSION['cart'] as $value) {

        mysqli_query($conn,"insert nn_order_detail value($e[0],$value[0],".$value['soluong'].",".$value['tongtien'].")");
         $ql=mysqli_query($conn,"SELECT qty,sold FROM nn_product where nn_product.id_pro=$value[0]");
              $tmp=mysqli_fetch_row($ql);
        mysqli_query($conn,"update nn_product set nn_product.qty=".(int)($tmp[0]-$value['soluong']).",nn_product.sold=".(int)($tmp[1]+$value['soluong'])." where nn_product.id_pro=$value[0]");
        
        
        $tmp=null;
       }
    //goi thu vien
    include('codergmail/class.smtp.php');
    include "codergmail/class.phpmailer.php"; 
    $nFrom = "ShoeStore.vn";    //mail duoc gui tu dau, thuong de ten cong ty ban
    $mFrom = 'hoanggiaphuc.engonow@gmail.com';  //dia chi email cua ban 
    $mPass = 'Sdt38751204';       //mat khau email cua ban

    $nTo = $tenn; //Ten nguoi nhan
    $mTo = $gmaill;   //dia chi nhan mail
    $mail = new PHPMailer();
    $body = "Chào bạn , bạn đã mua sản phẩm tử ShoeStore.vn bạn click vào link sau để xác nhận mua hàng <a href='http://localhost/Nhom4_shoestore.vn/frontEnd/module/clickme.php?id=$e[0]'>Click me</a>";   // Noi dung email
    $title = 'ShoeStore.vn Chào bạn';   //Tieu de gui mail

    $mail->IsSMTP();             
    $mail->CharSet  = "utf-8";
    $mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;    // enable SMTP authentication
    $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";    // sever gui mail.
    $mail->Port       = 465;         // cong gui mail de nguyen


    // bat dau phan gui mail
    $mail->Username   = $mFrom;  // khai bao dia chi email
    $mail->Password   = $mPass;              // khai bao mat khau
    $mail->SetFrom($mFrom, $nFrom);
    $mail->AddReplyTo('hoanggiaphuc.engonow@gmail.com', 'ShoeStore.vn'); //khi nguoi dung phan hoi se duoc gui den email nay
    $mail->Subject    = $title;// tieu de email 
    $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
    $mail->AddAddress($mTo, $nTo);
    $mail->SMTPDebug=0;
    // thuc thi lenh gui mail 
    foreach ($_SESSION['cart'] as $value) {
        unset($_SESSION['cart'][$value[0]]);
    }
    if(!$mail->Send()) {
        echo "<script type='text/javascript'>alert('Gửi gmail thất bại!!!')</script>"; 
    } else {
                echo "<script type='text/javascript'>alert('Đặt hàng thành công. Vui lòng xác nhận qua Email ')</script>"; 
              
    }

}
?>
<script type="text/javascript"></script>