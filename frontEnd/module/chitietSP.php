 <?php 
	
	
	$result1= $con->query('SELECT * FROM `nn_product`');  
	$mas=$_GET["mas"];
    $ree= $con->query("SELECT * FROM `nn_category` ,nn_product WHERE nn_product.category_id= nn_category.id_cat AND nn_product.id_pro = $mas ");
    $single=mysqli_fetch_assoc($ree);   
    $brand= $single['brand'];
    $spsell= $con->query('SELECT * FROM `nn_product` ORDER BY RAND() DESC Limit 0,4 ');
    $spsview= $con->query('SELECT * FROM `nn_product` order by id_pro DESC Limit 0,5 ');  
    $spslq= $con->query('SELECT * FROM `nn_product`  ORDER BY RAND() Limit 0,8 ');    	
 ?>
 <!DOCTYPE html>
<html lang="en">
  
  <body>
   
  
    
    
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">                                     
                 	<h2 class="sidebar-title" onclick="hideResult()">Tìm Kiếm</h2>
					<form action="index.php?mod=resultSearch" method="post">
                        <div class="dropdownSearch">
 							<input name="product_search" type="text" placeholder="Tìm kiếm..." id="myInputSearch" onkeyup="filterFunction()" onfocus="showResult()"  >                         
							<input type="submit" value="Search">
  						<div id="myDropdownSearch" class="dropdown-contentSearch" >
    					<div id="resultSearch" style="display:none">
    
    			<?php        
        			if ($result1->num_rows>0) {
         			while ($value=mysqli_fetch_assoc($result1)) {
    			?>

        			<a  href='index.php?mod=chitietSP&mas=<?php echo $value['id_pro']?>&name=<?php echo remake_char($value['name_pro'])?>'><img  hspace="10px" width="50px" height="50px" src="public/img/<?php echo $value['img_url']   ?>"><span style="margin-left: 30px"><strong><?php echo $value['name_pro']; ?></strong></span>  </a>
    			<?php }} ?>

    
    </div>
     
 			</div><br><br>
			</div>
            </form><br><br> 
                    
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Sản Phẩm</h2>
					<?php   				
						 if ($spsell->num_rows>0) {
         				while ($valsell=mysqli_fetch_assoc($spsell)) {      	    
     				?>
			 			<div class="thubmnail-recent">
                            <img src="public/img/<?php echo $valsell['img_url'] ; ?>" class="recent-thumb" alt="">
                            <h2><a href='index.php?mod=chitietSP&mas=<?php echo $valsell['id_pro']?>&name=<?php echo remake_char($valsell['name_pro'])?>'><?php echo $valsell['name_pro'] ; ?></a></h2>
                            <div class="product-sidebar-price">
                               <ins><?php echo number_format($valsell['price']) ; ?></ins><INS>VND</INS><del><?php echo $valsell['price_old'] ; ?> VND</del>
                            </div>                             
                        </div> 				
                    <?php 	}	}?>

                       
                        
                        
                        
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Bài đăng gần đây</h2>
                        <ul>
                        	<?php   				
								 if ($spsview->num_rows>0) {
         						 while ($valview=mysqli_fetch_assoc($spsview)) {      	    
     						?>
			 			 		<li><a href='index.php?mod=chitietSP&mas=<?php echo $valview['id_pro']?>&name=<?php echo remake_char($valview['name_pro'])?>'><?php echo $valview['name_pro']; ?></a></li>			
                    		<?php 	}	}?>                         
                        </ul>
                    </div>
                </div>
              
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Trang chủ</a>
                            <a href="">Danh mục</a>
                            <a href=""><?php echo $single['name_pro'] ?></a>
                            <i id="open" class="fa fa-search" style="font-size:14px;color:lightblue;"></i>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img img-zoom-container">
                                        <img  src="public/img/<?php echo $single['img_url']   ?>" class="myimage" id="myimage" onmouseover='imageZoom("myimage","myresult")'  alt="">
                                    </div>
                                        <div class="product-gallery">
                                        <img  id="hinh1" src="public/img/<?php echo $single['img_url1']   ?>" 
                                                        onclick="document.getElementById('myimage').src=document.getElementById('hinh1').src"                                                

                                                         alt="">
                                       

                                        <img id="hinh02" src="public/img/<?php echo $single['img_url2']   ?>"
                                         onclick="document.getElementById('myimage').src=document.getElementById('hinh02').src" 

                                         alt="">



                                        <img  id="hinh03" src="public/img/<?php echo $single['img_url']   ?>" onclick="document.getElementById('myimage').src=document.getElementById('hinh03').src" alt="">
                                        <img id="hinh04" src="public/img/<?php echo $single['img_url3']   ?>" onclick="document.getElementById('myimage').src=document.getElementById('hinh04').src" alt="">
                                    </div>                                
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div id="myresult" class="img-zoom-result"></div>
                                <div class="product-inner">
                                    <div id="andi" style="width: 306px;height: 360px; margin-bottom: 10px">
                                    <h2 class="product-name"><?php echo $single['name_pro'] ?></h2>
                                    <div class="product-inner-price">
                                         <ins id="price"><?php echo number_format($single['price'])?></ins><INS>VND</INS><del><?php echo $single['price_old'] ?>VND</del>
                                    </div>    
                                    <?php 
                                    	// Kiểm tra số lượng sản phẩm
                                    	$qty=$single['qty'];
                                    	if ($qty==0) {
                                    		echo '<h3 style="color: #FF0000">Sản phẩm hết hàng</h3>';
                                    	}else {
                                    	?>
                      	<form action="index.php?mod=insertcart&id=<?php echo $single['id_pro']?>" method="POST" >                                  
                                            	<div class="quantity buttons_added">
                                                    <input type="button" class="minus" value="-">
                                                    <input type="number" size="4" class="input-text qty text qtypro" title="Qty" value="1" min="0" step="1" name="soluong">
                                                    <input type="button" class="plus" value="+">
                                            	</div> 
                                        		<button class="add_to_cart_button" type="submit">Thêm vào giỏ</button>
                         </form>
                            		<?php
                                    	}
                                     ?>
                                   
                                    
                                    <div class="product-inner-category">
                                        <p>Danh mục: <a href=""><?php echo $single['name_cat'] ?></a><br>Thuộc tính: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                    </div> 
                                    </div>
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mô Tả</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Đánh giá</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                               <h2>Mô tả sản phẩm</h2>  
                                                <p><?php echo $single['desc'] ?></p>                                             
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Đánh giá</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Tên</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Đánh giá của bạn</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Bình luận</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="fb-comments" data-href="localhost/Nhom4_shoestore.vn" data-width="780" data-numposts="5"></div>

                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Sản phẩm liên quan</h2>
                            <div class="related-products-carousel">
							<?php   				
								 if ($spslq->num_rows>0) {
         						 while ($vallq=mysqli_fetch_assoc($spslq)) {      	    
     						?>
			 			 		<div class="single-product">
             						<div class="product-f-image">
                						  <img class="hinh"   src="public/img/<?php echo $vallq['img_url'] ?>" alt="">
                         					<div class="product-hover">
                            					 <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                             					 <a href='index.php?mod=chitietSP&mas=<?php echo $vallq['id_pro']?>&name=<?php echo remake_char($vallq['name_pro'])?>' class="view-details-link"><i class="fa fa-link"></i> Chi tiết</a>
                         					</div>
                					</div>
                							<h2><a href='index.php?mod=chitietSP&mas=<?php echo $vallq['id_pro']?>&name=<?php echo remake_char($vallq['name_pro'])?>'><?php echo $vallq['name_pro'] ?></a></h2>
                 					<div class="product-carousel-price">
                 							<ins><?php echo number_format($vallq['price'])?></ins><INS>VND</INS><del><?php echo $vallq['price_old'] ?> VND</del>
               						 </div> 
        						</div>
                    		<?php 	}	}?>                            
                    		</div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>


 
  
  </body>
</html>
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