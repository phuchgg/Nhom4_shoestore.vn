<?php  
if(isset($_SESSION['user_id'])&&$_SESSION['user_name']!=null){
    $idKH=$_SESSION['user_id'];
}
  $result= $con->query("Select * from nn_user where id_user ={$idKH}");   
  $value=mysqli_fetch_assoc($result); 
  $maDonHang= $con->query("SELECT * FROM `nn_order`,`nn_order_detail` WHERE nn_order.id_order = nn_order_detail.order_id  AND user_id ={$idKH} group BY nn_order.id_order");   
    
if (isset($_POST['OK'])) {
  $pass=$_POST['pass'];
  $pass1=$_POST['pass1'];
  $pass2=$_POST['pass2'];
  if (strlen($pass1)<6)
  {
     
      ?><script> alert("Mật khẩu vừa nhập không đủ ký tự");</script><?php

  }
  else
  {
     if ($pass1!= $pass2)
      {     
        ?><script> alert("Mật khẩu mới không khớp");</script><?php 
      }
     else 
      {
          
          $ktpass=$con->query("Select * from nn_user where `id_user` ={$idKH} and `password`=sha1({$pass})");
          
          if ($ktpass->num_rows!=1) 
            {
              ?><script> alert("Mật khẩu cũ không đúng");</script><?php
            }
          else 
            {
              $con->query("UPDATE `nn_user` SET `password` = sha1($pass1) WHERE `nn_user`.`id_user` = {$idKH}");
              ?><script> alert("Mật khẩu cập nhật thành c");</script><?php
            }

          
      }
  }
 
}
?>

<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="public/img/<?php if($value['gender']==1) {echo 'male';}else {echo 'female';} ?>.jpg" style="width:100% ; height:300px" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $value['name_user']; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $value['address']; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $value['email']; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $value['mobile']; ?></p>
          <hr>

          <p class="w3-large" id="history"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Lịch sử mua hàng</b></p>
          <hr>

          <p class="w3-large w3-text-theme" id="change"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Đổi mật khẩu</b></p>
          <hr>
         
          
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom" id="history_buy">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-asterisk fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Lịch sử mua hàng</h2>
      <?php 
          if ($maDonHang->num_rows>0) {
           while ($DonHang=mysqli_fetch_assoc($maDonHang)) {
        ?> 
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Mã số đơn hàng: <?php echo $DonHang['order_id'] ?></b></h5>
          <h6 class="w3-text-teal"><span class="w3-tag w3-teal w3-round">Ngày đặt hàng</span><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php $date=date_create($DonHang['create_at']); echo date_format($date,"d/m/Y") ?></h6>
          <h5 class="w3-opacity"><b>Chi tiết đơn hàng: </b></h5>
          <ul>
            
              <?php 
                $chitietDonHang= $con->query("SELECT * FROM `nn_order_detail` WHERE nn_order_detail.order_id={$DonHang['id_order']}");
                  $total=0;

                if ($chitietDonHang->num_rows>0) {
                   while ($detail=mysqli_fetch_assoc($chitietDonHang)) {
                      $tengiayID= $con->query("SELECT * FROM `nn_product` WHERE nn_product.id_pro={$detail['product_id']}");
                      $tengiay=mysqli_fetch_assoc($tengiayID)
              ?>              
                  <li>Tên giày: <a href='index.php?mod=chitietSP&mas=<?php echo $detail['product_id']?>&name=<?php echo remake_char($tengiay['name_pro'])?>'><?php echo $tengiay['name_pro']; ?>.</a>
                      Số lượng:<?php echo $detail['qty']; ?>.   Thành tiền: <?php $total+=$detail['price']; echo number_format($detail['price']); ?> VND
                  </li>
                  
              <?php }} ?>
          </ul>
          <h5 style="text-align: right;">Tổng tiền hóa đơn: <?php echo number_format($total); ?> VND</h5>
          <h6 style="text-align: right;">Tình trạng đơn hàng: <?php 
                if ($DonHang['status']== 0) {  echo 'Mới đặt'; echo '<br>';echo '<a  href="index.php?mod=updateDonHang&idtt='.$DonHang["order_id"].'">Hủy đơn hàng</a>';  } 
                if ($DonHang['status']== 1) {  echo 'Đã xác nhận';   } 
                if ($DonHang['status']== 2) {  echo 'Đang giao';   } 
                if ($DonHang['status']== 3) {  echo 'Đã giao';   } 
                if ($DonHang['status']== 4) {  echo 'Hoàn tất';   } 
                if ($DonHang['status']== -1) {  echo 'Hủy';   } 


          ?> </h6>
          <hr>
        </div> 

      <?php }} ?>      
        
        
      </div>

      <div class="w3-container w3-card w3-white" id="change_pass" style="display: none;">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Đổi mật khẩu</h2>
        <div class="w3-container">
         <div>
            <form action="?mod=thongtinKH" method="post">
             <div class="form-group">
               <label>Nhập mật khẩu hiện tại:</label>
               <input type="password" class="form-control" name="pass">
             </div>
             <div class="form-group">
               <label for="pwd">Nhập mật khẩu mới:</label>
               <input type="password" class="form-control" name="pass1" placeholder="Mật khẩu tối thiểu 6 kí tự">
             </div>
              <div class="form-group">
               <label for="pwd">Xác nhận lại mật khẩu mới:</label>
               <input type="password" class="form-control" name="pass2" placeholder="Mật khẩu tối thiểu 6 kí tự">
             </div>             
             <button type="submit" class="btn" name="OK">Xác nhận</button>
           </form>
         </div>

          <hr>
        </div>       
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>



</body>
</html>
<script>
$(document).ready(function(){
    $("#history").click(function(){
        $("#history_buy").slideToggle();
    });
});
$(document).ready(function(){
    $("#change").click(function(){
        $("#change_pass").slideToggle();
    });
});
</script>
<script>
function thongBao() {

    alert("Vui lòng xem lại mật khẩu mới nhập");
}
</script>