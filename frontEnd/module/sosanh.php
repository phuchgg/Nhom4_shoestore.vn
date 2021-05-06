<?php 
 $Idsp1=$_GET["sp1"];
 $Idsp2=$_GET["sp2"];


    $ree1= $con->query("SELECT * FROM `nn_category` ,nn_product,nn_department WHERE nn_product.department_id= nn_department.id_der AND nn_product.category_id= nn_category.id_cat AND nn_product.id_pro = $Idsp1 ");
    $single1=mysqli_fetch_assoc($ree1);    
    $ree2= $con->query("SELECT * FROM `nn_category` ,nn_product,nn_department WHERE nn_product.department_id= nn_department.id_der AND nn_product.category_id= nn_category.id_cat AND nn_product.id_pro = $Idsp2 ");
    $single2=mysqli_fetch_assoc($ree2);  
 /* so sanh san pham*/
        
   

?>
<!DOCTYPE html>
<html lang="en"> 
<style >
    th{
        width: 200px;
    }
    td{
        width: 469px;
    }
</style>
  <body>    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
   <h1 class="text-center"> So sánh sản phẩm</h1>
     <table class="table table-bordered table-hover" style="text-align: center;font-size: 20px">
    <thead>
      <tr>
       <td></td>
       <td><img height="262px" width="262px" src="public/img/<?php echo $single1['img_url']   ?>"></td>
       <td><img height="262px" width="262px" src="public/img/<?php echo $single2['img_url']   ?>"></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Tên sản phẩm </th>
        <td><a href='index.php?mod=chitietSP&mas=<?php echo $single1['id_pro'];?>'><?php echo $single1['name_pro']; ?></a></td>
        <td><a href='index.php?mod=chitietSP&mas=<?php echo $single2['id_pro'];?>'><?php echo $single2['name_pro']; ?></a></td>
      </tr>
      <tr>
        <th>Thương hiệu </th>
        <td><?php echo $single1['brand']; ?></td>
        <td><?php echo $single2['brand']; ?></td>
      </tr>
      <tr>
        <th>Giá tiền sản phẩm </th>
        <td><?php echo number_format($single1['price']); ?>VND</td>
        <td><?php echo number_format($single2['price']); ?>VND</td>
      </tr>
      <tr>
        <th>Loại sản phẩm</th>
        <td><?php echo $single1['name_cat']; ?></td>
        <td><?php echo $single2['name_cat']; ?></td>
      </tr>
      <tr>
        <th>Dành cho</th>
        <td><?php echo $single1['name_der']; ?></td>
        <td><?php echo $single2['name_der']; ?></td>
      </tr>
     <!--  <tr>
       <th>Mô tả</th>
       <td><?php echo $single1['desc']; ?></td>
       <td><?php echo $single2['desc']; ?></td>
     </tr> -->
      <tr>
        <th>Xem chi tiết</th>
        <td><a style="background-color: #1abc9c;color: white" class="btn  btn-lg" href='index.php?mod=chitietSP&mas=<?php echo $single1['id_pro']?>&name=<?php echo remake_char($single1['name_pro'])?>'>Xem chi tiết</a></td>
        <td><a style="background-color: #1abc9c;color: white" class="btn  btn-lg" href='index.php?mod=chitietSP&mas=<?php echo $single2['id_pro']?>&name=<?php echo remake_char($single2['name_pro'])?>'>Xem chi tiết</a></td>
      </tr>
    </tbody>
  </table>
        </div>
    </div>      
  </body>
</html>