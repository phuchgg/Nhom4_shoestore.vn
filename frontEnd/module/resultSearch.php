<?php 
    
    $product_search=$_POST['product_search'];    
    
    

  $query="SELECT * FROM nn_product,nn_category,nn_department WHERE nn_product.name_pro like '%$product_search%' AND nn_product.category_id=nn_category.id_cat AND nn_product.department_id=nn_department.id_der";

   if (!empty($_POST["brand"])  ) {      
      $brand =$_POST["brand"] ;
      $query=$query.' AND  brand  like "'.$brand.'"';
                        
  }  
    if (!empty($_POST["depart"])  ) {      
      $depart =$_POST["depart"] ;
      $query=$query.' AND  department_id  = '.$depart;
                        
  } 
  if (!empty($_POST["category"])  ) {      
      $category =$_POST["category"] ;
      $query=$query.' AND  category_id  = '.$category;
                        
  }
  if (!empty($_POST["choice"])  ) {
      $query=$query.' ORDER BY ';
      $choice =$_POST["choice"] ;
            if ($choice=='giagiam') {
                $query=$query.' nn_product.price DESC';
            }
            if ($choice=='giatang') {
                $query=$query.' nn_product.price ASC';
            }             
  }
  
   
    $result= $con->query($query);  
     

 ?>
<!DOCTYPE html>
<html lang="en">
 
  <body>   
    <!--  Search -->
    <div class="container-fluid" style="margin: 20px">
        <h1 style="color: #1abc9c;text-align: center;">Tìm kiếm nâng cao</h1>
         <div class="row" style="font-size: 20px;  padding: 15px;  border: 2px solid #1abc9c;
    -moz-border-radius: 10px;-webkit-border-radius: 10px; -ms-border-radius: 10px;-o-border-radius: 10px;border-radius: 10px;" >
        <form action="index.php?mod=resultSearch" method="post">
        <div class="col-md-3"><input type="text" placeholder="Tên sản phẩm" name="product_search" value='<?php echo $product_search; ?>' >
        </div>
        <div class="col-md-2">
            Giá tiền
  <input type="radio" name="choice" <?php if (isset($choice) && $choice=="giatang") echo "checked";?> value="giatang">tăng
  <input type="radio" name="choice" <?php if (isset($choice) && $choice=="giagiam") echo "checked";?> value="giagiam">giảm
        </div>
        <div class="col-md-2">
           Dành cho:
        <select name="depart">
        <option value="0" >tất cả</option>
        <option value="1" <?php if (isset($depart) && $depart==1) echo "selected";?>>Nam</option>
        <option value="2" <?php if (isset($depart) && $depart==2) echo "selected";?>>Nữ</option>      
        </select>
        </div>
        <div class="col-md-2">
            Loại giày:
        <select name="category">
        <option value="0" >tất cả</option>
        <option value="1" <?php if (isset($category) && $category==1) echo "selected";?>>chạy bộ</option>
        <option value="2" <?php if (isset($category) && $category==2) echo "selected";?>>gym</option>
        <option value="3" <?php if (isset($category) && $category==3) echo "selected";?>>thể thao</option>
        <option value="4" <?php if (isset($category) && $category==4) echo "selected";?>>đi bộ</option>
        <option value="5" <?php if (isset($category) && $category==5) echo "selected";?>>leo núi</option>
        <option value="6" <?php if (isset($category) && $category==6) echo "selected";?>>bóng rổ</option>
        </select>
  
        </div>
        <div class="col-md-2">
            Hãng giày:
        <select name="brand">
        <option value="0">tất cả</option>
        <option value="Nike" <?php if (isset($brand) && $brand=="Nike") echo "selected";?>>Nike</option>
        <option value="Adidas" <?php if (isset($brand) && $brand=="Adidas") echo "selected";?>>Adidas</option>
        <option value="Puma" <?php if (isset($brand) && $brand=="Puma") echo "selected";?>>Puma</option>
        <option value="Bitis" <?php if (isset($brand) && $brand=="Bitis") echo "selected";?>>Bitis</option>
        </select>
  
        </div>
        <div class="col-md-1">
            <input type="submit" value="Search">
        </div>
        </form>
    </div>
    </div>    
    <!-- End Search -->           
    <div class="container">
   
	   <?php 
  	     $dem=1;
	       if ($result->num_rows>0) {
            echo '<h4>Có '.$result->num_rows.' sản phẩm phù hợp  </h4>';
            while ($value=mysqli_fetch_assoc($result)) {
                    if ($dem%4==1) {echo '<div class="row">' ;}
		
	   ?>

		<div class="col-md-3">
          <div class="single-product">
              <div class="product-f-image">
                  <img width="262px" height="262px" src="public/img/<?php echo $value['img_url']   ?>" alt="">
                         <div class="product-hover">
                            <a href="" class="add-to-cart-link"></i> Thêm vào giỏ</a>
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
			echo ' <br>';
		}
		
	}}
    else {
        echo '<h4>Không có sản phẩm phù hợp </h4>'; 
     } ?>
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
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
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
   <!-- end 1 row -->     
  </body>
</html>
