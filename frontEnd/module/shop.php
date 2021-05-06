<?php 

             
         /*Xác định đang ở trang nào*/
        if (!empty($_GET["page"])  ){
            $page=$_GET["page"]-1;            
          }else {
            $page=0;
          }
          $startp=$page*16; // sản phẩm đầu tiên của trang
          $endp=$page*16+16;// sản phẩm cuối của trang

        $result= $con->query('SELECT * FROM `nn_product`where nn_product.active=1 limit '.$startp.','.$endp);
        
    /* so sanh san pham*/
    $sl=0;
    if (!empty($_GET["mas"])  ){
      $sl=1;
      $sp1=$_GET["mas"];
    }


?>
<!DOCTYPE html>
<html lang="en">
  
  <body> 
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">   
	<?php 
  	$dem=1;
	  if ($result->num_rows>0) {
      while ($value=mysqli_fetch_assoc($result)) {
	     	if ($dem%4==1) {echo '<div class="row">';}
	?>
		<div class="col-md-3">
          <div class="single-product">
              <div class="product-f-image">
                  <img  src="public/img/<?php echo $value['img_url']; ?>" alt="">
                         <div class="product-hover">
                             <a  onclick="<?php if($sl==0) {
                                      echo 'thongBao()' ;
                                      }?>"
                             href='index.php?mod=<?php if($sl==0) {
                             	echo 'shop&mas=';
                             	echo $value['id_pro'];                            	 
                             }else{
                             	echo'sosanh&sp1=';
                             	echo $sp1;
                             	echo'&';
                             	echo 'sp2=';
                             	echo $value["id_pro"];

                             } ?>'
                                                         
                              class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> So sánh sản phẩm</a>
                              
                              <a  href='index.php?mod=chitietSP&mas=<?php echo $value['id_pro']?>&name=<?php echo remake_char($value['name_pro'])?>' class="view-details-link"><i class="fa fa-link"></i> Chi tiết</a>
                              
                         </div>
                </div>
                <h2><a href='index.php?mod=chitietSP&mas=<?php echo $value['id_pro']?>&name=<?php echo remake_char($value['name_pro'])?>'><?php echo $value['name_pro']; ?></a></h2>
                 <div class="product-carousel-price">
                 <ins><?php echo number_format($value['price']); ?></ins><INS>VND</INS><del><?php echo $value['price_old']; ?> VND</del>
                </div> 
         </div>
    </div>

		

	<?php 
		$dem=$dem+1;
		if ($dem%4==1) {
			echo "</div>" ;
			echo ' <br>';}
		if ($dem==17) {break;}
	 }
  }
  ?>


   <!-- end 1 row -->
  
   
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="index.php?mod=shop&page=1<?php if (!empty($_GET["mas"])  ){echo '&mas=';echo $_GET["mas"]; } ?>">1</a></li>
                            <li><a href="index.php?mod=shop&page=2<?php if (!empty($_GET["mas"])  ){echo '&mas=';echo $_GET["mas"]; } ?>">2</a></li>
                            <li><a href="index.php?mod=shop&page=3<?php if (!empty($_GET["mas"])  ){echo '&mas=';echo $_GET["mas"]; } ?>">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>


      
   
   
  </body>
</html>

<script>
function thongBao() {

    alert("Bạn đã chọn 1 sản phẩm vào bảng so sánh, hãy chọn sản phẩm tiếp theo để so sánh.");
}
</script>