<?php 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){   
    $tongtien=0;

?>
            <script type="text/javascript">
              function xoa(e)
              {
                if(confirm('bạn chắc muốn xóa sản phẩm'))
                {
     window.location="index.php?mod=delete&id="+e;
                }
        }
       </script>  
                <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="POST" action="index.php?mod=update">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">Xóa</th>
                                            <th class="product-thumbnail">Hình ảnh</th>
                                            <th class="product-name">Sản Phẩm</th>
                                            <th class="product-price">Đơn Giá</th>
                                            <th class="product-quantity">Số Lượng</th>
                                            <th class="product-subtotal">Thành Tiền</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    foreach ($_SESSION['cart'] as $value) {
                                      # code...
                                       $_SESSION['cart'][$value[0]]['tongtien']=$value['soluong']*$value[2];
                                        $tongtien+=$value['soluong']*$value[2];
                                    ?>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                          <?php echo" <a  title='Remove this item' class='remove' onclick='xoa($value[0])'>×</a>";?>
                                            </td>

                                            <td class="product-thumbnail">
                                              <?php echo" <a href='index.php?mod=chitietSP&mas=<?php echo $value[0]?>&name=<?php echo remake_char($value[1])?>'><img width='145' height='145' alt='poster_1_up' class='shop_thumbnail' src='public/img/".$value[3]."'></a> "?>
                                            </td>

                                            <td class="product-name">
                                                <a href="index.php?mod=chitietSP&mas=<?php echo $value[0]?>&name=<?php echo remake_char($value[1])?>"><?php echo $value[1]?></a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount"><?php echo number_format($value[2]).' VNĐ'  ?></span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                     <input type="button" class="minus" value="-">
                                               <?php   echo "
                                                <input type='number' size='4' class='qtypro input-text qty text' title='Qty' value='".$value['soluong']."' min='0' step='1' name='qty[".$value[0]."]'> "?>
                                                <input type="button" class="plus" value="+">
                                                </div>
                                                 
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount"><?php echo number_format( $_SESSION['cart'][$value[0]]['tongtien'],0,",",".").' VNĐ'?></span> 
                                            </td>
                                        </tr>
                                        <tr>
                                          <?php } ?>
                                            <td class="actions" colspan="3">
                                                <div class="coupon">
                                                    <label for="coupon_code">Phiếu mua hàng:</label>
                                                    <input type="text" placeholder="Nhập mã" value="" id="coupon_code" class="input-text" name="coupon_code">
                                                    <input type="submit" value=" áp dụng " name="apply_coupon" class="button">
                                                </div>    
                                            </td>
                                            <td colspan="2">
                                                  <input type="submit" value="Cập nhật " name="update_cart" class="button">
                                                <input type="submit" value=" Thanh toán" name="tt" class="checkout-button button alt wc-forward">
                                            </td>
                                            <td>
                                                <label style="margin-left:" name='<?php echo "qwe" ;?>'>Tổng tiền :<?php echo number_format($tongtien,0,",",".")." VNĐ";?> </label>
                                                        
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                                <?php
        }
        else
        {
        echo "<p align='center'>Chưa có sản phẩm nào trong giỏ !!!<a href='?mod=sanpham'>Tiếp tục mua sắm. </a></p>";
        }
?>

<script type="text/javascript">
    $(function() {
        // Nút cộng trừ số lượng
        $(".minus").click(function(){
            if($(".qtypro").val()>1)
                $(".qtypro").val(parseInt($(".qtypro").val())-1);
        });
        $(".plus").click(function(){
            $(".qtypro").val(parseInt($(".qtypro").val())+1);
        });
    });
</script>