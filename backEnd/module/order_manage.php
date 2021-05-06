<?php
	//Neu chua dang nhap --> trang dang nhap
	if(!isset($_SESSION['admin_id']))header('location:?mod=login');
	
	//Neu da dang nhap
	$idUser=$_SESSION['admin_id'];
	
	//id don hang can xem
	$id=$_GET['id'];

	//Kiem tra don hang muon xem co thuoc nguoi dung hay khong
	$sql="select 1 from `nn_order` where `id`=$id";
	$rs=mysqli_query($conn,$sql);
	if(mysqli_num_rows($rs)==0)
		echo 'Access denied !';
	else
	{	
?>
<center>
   <table width="90%">
    <caption>Quản Lý Đơn Hàng</caption>
      <tr>
        <td><h2 class="heading colr">Thông tin đơn hàng</h2>
            <div class="shoppingcart">
            <ul class="tablehead">
                <li class="remove colr">STT</li>
                <li class="thumb colr">&nbsp;</li>
                <li class="title colr">Tên sản phẩm</li>
                <li class="price colr">Đơn giá</li>
                <li class="qty colr">Số lượng</li>
                <li class="total colr">Thành tiền</li>
            </ul>
           
            <?php
                
        //Lay thong tin chi tiet cua don hang 
        $sql='SELECT a . * , `name` , `img_url`
            FROM `nn_order_detail` a, `nn_product` b
            WHERE a.`product_id` = b.`id`
            AND `order_id` ='.$id;
        $rs=mysqli_query($conn,$sql);
        
                $s=0;
                $i=1;
                while($r=mysqli_fetch_assoc($rs))
                {
                    $s=$s+$r['price']*$r['qty'];
            ?>
                <ul class="cartlist <?php if($i%2==1) echo 'gray' ?>">
                    <li class="remove txt"><?php echo $i++; ?></li>
                    <li class="thumb"><a href="?mod=detail&id=<?php echo $r['product_id'] ?>"><img src="images/sanpham/<?php echo $r['img_url']?>" alt="" ></a></li>
                    <li class="title txt"><a href="detail.html"><?php echo $r['name']?></a></li>
                    <li class="price txt"><?php echo number_format($r['price'])?>₫</li>
                  <li class="qty txt"><?php echo $r['qty']?></li>
                    <li class="total txt"><?php echo number_format($r['price']*$r['qty'])?>₫</li>
                </ul>
            <?php
                }
            ?>
            <div class="clear"></div>
            <div class="subtotal">           
                <h3 class="colr">Tổng Tiền: <?php echo number_format($s)?>₫</h3>
            </div>
            <div class="clear"></div></td>
        <td><h2 class="heading colr">Thông tin Khách hàng</h2>
       <?php
            //Lay thong tin don hang
            $sql='select * from `nn_order` where `id`='.$id;    
            $rs=mysqli_query($conn,$sql);
            $r=mysqli_fetch_assoc($rs);
       ?>
            <form action="" method="post" id="checkout">
      <ul class="forms">
        <li class="txt">Name<span class="req">*</span></li>
        <li class="inputfield">
          <input name="name" type="text" disabled="disabled" required="required" class="bar" id="name" value="<?php echo $r['name']?>">
        </li>
      </ul>
      <ul class="forms">
        <li class="txt">Email<span class="req">*</span></li>
        <li class="inputfield">
          <input name="email" type="text" disabled="disabled" required="required" class="bar" id="email"  value="<?php echo $r['email']?>" />
        </li>
      </ul>
      <ul class="forms">
        <li class="txt">Mobile <span class="req">*</span></li>
        <li class="inputfield">
          <input name="mobile" type="text" disabled="disabled" required="required" class="bar" id="mobile"  value="<?php echo $r['mobile']?>" />
        </li>
      </ul>
      <ul class="forms">
        <li class="txt">Shipping date<span class="req">*</span></li>
        <li class="inputfield">
          <input name="dos" type="text" disabled="disabled" required="required" class="bar" id="dos" value="<?php echo date('d-m-Y',strtotime($r['create_at']));?>" readonly>
        </li>
      </ul>
      <ul class="forms">
        <li class="txt">Address <span class="req">*</span></li>
        <li class="textfield">
          <textarea name="address" disabled="disabled" required class="bar" id="address"><?php echo $r['address'] ?></textarea>
        </li>
      </ul>
      <ul class="forms">
        <li class="txt">Note <span class="req">*</span></li>
        <li class="textfield">
          <textarea name="note" disabled="disabled" required class="bar" id="note"><?php echo $r['remark'] ?></textarea>
        </li>
      </ul>
            </form>
        </div>
        <div class="clear"></div></td>
      </tr>
    </table> 
  </center>
   
            
            
       
    <?php
		}
	?>
  