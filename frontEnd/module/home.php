 <?php 

	$sphot= $con->query('SELECT * FROM `nn_product` where active=1 order by id_pro DESC Limit 0,6 ');        
    $spsell= $con->query('SELECT * FROM `nn_product` where active=1 order by sold DESC Limit 0,3 ');  
 	$spsview= $con->query('SELECT * FROM `nn_product`where active=1 order by view DESC Limit 0,3 ');
 	$spskm= $con->query('SELECT * FROM `nn_product` where active=1 order by qty DESC Limit 0,3 ');

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="slider-area">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">
            
            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg slide-one"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>NIKE</h2>
                                                <p>Bắt nguồn từ đam mê chạy bộ của những người sáng lập là cựu HLV điền kinh Bill Bowerman và học trò Phil Knight , nên không hề khó hiểu khi thương hiệu Nike được biết đến nhiều nhờ những ưu điểm kĩ thuật để hỗ trợ cho việc vận động. Có thể thấy niềm đam mê của Nike đối với thể thao qua phong cách đặc trưng mà hãng hướng đến đó là sự táo bạo, ham muốn chinh phục và quyết tâm trong thi đấu. Đến nay, Nike không chỉ được biết đến như là một thương hiệu giày thành công, mà còn được ví như một đại diện của văn hóa và phong cách Mỹ. NIKE với câu slogan kinh điển “Just do it” hiện đang là một trong những nhà cung cấp quần áo, giày dép và dụng cụ thể thao lớn nhất thế giới.</p>
                                                <a href="" class="readmore">Xem thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-two"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>ADIDAS</h2>
                                                <p>Adidas sản xuất các mặt hàng đồ dùng, dụng cụ và thiết bị thể thao với công nghệ tiên tiến, kỹ thuật số hiện đại, an toàn vì môi trường và chất lượng sống bền vững cho tương lai. Được xem là thương hiệu quyền năng, Adidas không chỉ là niềm tự hào lớn nhất của nước Đức mà còn là sự kiêu hãnh và khát vọng của tất cả những ai sử dụng sản phẩm mang biểu tượng “ba sọc”.</p>
                                                <a href="" class="readmore">Xem thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-three"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>PUMA</h2>
                                                <p>Công nghệ nổi tiếng nhất trong giày chạy bộ của PUMA theo mình được biết PUMA Mobium. Châm ngôn thiết kế của công nghệ Mobium là tạo ra một đôi giày có thể chuyển động nhịp nhàng theo những biến đổi của bàn chân khi chạy, theo tất cả mọi hướng. Tất cả sẽ tạo nên một cảm giác chạy tự nhiên và liền mạch, tương tự như chuyển động của bàn chân mèo.</p>
                                                <a href="" class="readmore">Xem thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>        
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-refresh"></i>
                        <p>30 Ngày đổi trả</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-truck"></i>
                        <p>Giao hàng miễn phí</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-lock"></i>
                        <p>Thanh toán tiện lợi</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-gift"></i>
                        <p> Sản phẩm mới </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                    <h2 class="section-title">Sản phẩm mới nhất</h2> 
                        <div class="product-carousel">
                            
			<?php 
  				
				 if ($sphot->num_rows>0) {
         			while ($value=mysqli_fetch_assoc($sphot)) {
         	    
         	
         	
       
	 		?>
			

		    				<div class="single-product">
                                <div class="product-f-image">
                                    <img class="hinh" src="public/img/<?php echo $value['img_url']; ?>" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                        <a href="index.php?mod=chitietSP&mas=<?php echo $value['id_pro'];?>" class="view-details-link"><i class="fa fa-link"></i> Chi tiết</a>
                                    </div>
                                </div>
                                
                                <h2><a href="index.php?mod=chitietSP&mas=<?php echo $value['id_pro'];?>"><?php echo $value['name_pro']; ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  number_format($value['price']);?></ins><INS>VND</INS><del><?php echo number_format($value['price_old']); ?>VND</del>
                                </div> 
                            </div>

		
	
		<?php 	}	}?>

                        
                            
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <h2 class="section-title">THƯƠNG HIỆU</h2>
                        <div class="brand-list">
                            <img src="public/img/NikeLogo.jpg" alt="">
                            <img src="public/img/AdidasLogo.jpg" alt="">
                            <img src="public/img/PumaLogo.jpg" alt="">
                            <img src="public/img/BitisLogo.jpg" alt="">
                            <img src="public/img/NikeLogo.jpg" alt="">
                            <img src="public/img/AdidasLogo.jpg" alt="">
                            <img src="public/img/PumaLogo.jpg" alt="">
                            <img src="public/img/BitisLogo.jpg" alt="">
                                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Bán chạy nhất</h2>
                        <a href="index.php?mod=shop" class="wid-view-more">Xem tất cả</a>

			<?php 
  				
				 if ($spsell->num_rows>0) {
         			while ($value=mysqli_fetch_assoc($spsell)) {    	    
         	       	       
	 		?>

						<div class="single-wid-product">
                            <a href="index.php?mod=chitietSP&mas=<?php echo $value['id_pro'];?>"><img src="public/img/<?php echo $value['img_url']; ?>" alt="" class="product-thumb"></a>
                            <h2><strong><a href="index.php?mod=chitietSP&mas=<?php echo $value['id_pro'];?>"><?php echo $value['name_pro']; ?></a></strong></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo number_format($value['price']) ; ?></ins><INS>VND</INS><del><?php echo $value['price_old']; ?>VND</del>
                            </div>                            
                        </div>  				

		
	
			<?php 	}	}?>



                        
                        
                     
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Xem nhiều nhất</h2>
                        <a href="index.php?mod=shop" class="wid-view-more">Xem tất cả</a>
                        
			<?php 
  				
				 if ($spsview->num_rows>0) {
         			while ($value=mysqli_fetch_assoc($spsview)) {    	    
         	       	       
	 		?>
						<div class="single-wid-product">
                            <a href="index.php?mod=chitietSP&mas=<?php echo $value['id_pro'];?>"><img src="public/img/<?php echo $value['img_url']; ?> " alt="" class="product-thumb"></a>
                            <h2><strong><a href="index.php?mod=chitietSP&mas=<?php echo $value['id_pro'];?>"><?php echo $value['name_pro']; ?></a></strong></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo number_format($value['price'])  ; ?>VND</ins><INS>VND</INS><del><?php echo $value['price_old']; ?> VND</del>
                            </div>                            
                        </div>
									

		
	
			<?php 	}	}?>






                        
                        
                      
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Sản phẩm giá sốc</h2>
                        <a href="index.php?mod=shop" class="wid-view-more">Xem tất cả</a>
				<?php 
  				
				 if ($spskm->num_rows>0) {
         			while ($value=mysqli_fetch_assoc($spskm)) {    	    
         	       	       
	 			?>

						<div class="single-wid-product">
                            <a href="index.php?mod=chitietSP&mas=<?php echo $value['id_pro'];?>"><img src="public/img/<?php echo $value['img_url']; ?>" alt="" class="product-thumb"></a>
                            <h2><strong><a href="index.php?mod=chitietSP&mas=<?php echo $value['id_pro'];?>"><?php echo $value['name_pro']; ?></a></strong></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo number_format($value['price']) ; ?></ins><INS>VND</INS><del><?php echo $value['price_old']; ?>VND</del>
                            </div>                            
                        </div>  				

		
	
			<?php 	}	}?>



                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>