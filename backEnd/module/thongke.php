<?php 
include('library/connect_db.php');
 $query='SELECT * FROM `nn_product`';
 $query_brand='SELECT *, sum(qty) as tong,sum(sold) as tongsold FROM `nn_product` Group by brand';
	if (!empty($_POST["choice"] )) {
	$choice =$_POST["choice"] ;	

	}
	if (!empty($_POST["brand"])  ) {      
      $brand =$_POST["brand"] ;
      if ($brand =='All') {
      	$name='brand';
        
      	$query=$query_brand;
      }else
      {
      	
      	
      	$query=$query."Where  `name_pro`  like '%$brand%'";      	
		$name='name_pro';
        
      }
      
                        
  	} 
  	if (!empty($_POST["type"])) {
  		$type=$_POST["type"];
  	 	if ($type==1) {
  	 		if ($brand =='All') {
				$slsp='tongsold';
  	 		}else {
  	 			$slsp='sold';
  	 		}
  	 	}
  	 	if ($type==2) {
  	 		if ($brand =='All') {
				$slsp='tong';
  	 		}else {
  	 			$slsp='qty';
  	 		}
  	 	}
  	 } 
  	
  	 
  	
	$result= $con->query($query); 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>

	 <div class="container-fluid" style="margin: 20px">
        <h1 style="color: #1abc9c;text-align: center;">Thống kê sản phẩm</h1>
         <div class="row" style="font-size: 20px;  padding: 15px;  border: 2px solid #1abc9c;
    -moz-border-radius: 10px;-webkit-border-radius: 10px; -ms-border-radius: 10px;-o-border-radius: 10px;border-radius: 10px; " >
        <form action="" method="post">        
        <div class="col-md-3">
            Loại biểu đồ
 	 <input type="radio" name="choice" <?php if (isset($choice) && $choice=="Ngang") echo "checked";?> value="Ngang">Ngang
  	 <input type="radio" name="choice" <?php if (isset($choice) && $choice=="Doc") echo "checked";?> value="Doc">Dọc
        </div>
        <div class="col-md-3">
           Thống kê theo số giày:
        <select name="type">
        <option value="0" >tất cả</option>
        <option value="1" <?php if (isset($type) && $type==1) echo "selected";?>>Đã bán</option>
        <option value="2" <?php if (isset($type) && $type==2) echo "selected";?>>Còn lại</option>      
        </select>
        </div>
        
         <div class="col-md-3">
            Hãng giày:
        <select name="brand">
	        <option value="All">Tất cả</option>
	        <option value="Nike" <?php if (isset($brand) && $brand=="Nike") echo "selected";?>>Nike</option>
	        <option value="Adidas" <?php if (isset($brand) && $brand=="Adidas") echo "selected";?>>Adidas</option>
	        <option value="Puma" <?php if (isset($brand) && $brand=="Puma") echo "selected";?>>Puma</option>
	        <option value="Bitis" <?php if (isset($brand) && $brand=="Bitis") echo "selected";?>>Bitis</option>
	   
	    
        </select>
  
        </div>
        <div class="col-md-3">
            <input type="submit" value="Xác nhận">
        </div>
        </form>
    </div>
    </div>    
	<div class="container">
		<div id="chart_div"></div>
	</div>
    	



</body>
</html>
<script type="text/javascript">
	google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
         ['Tên giày', 'Số lượng đôi giày'],
        <?php 
			if ($result->num_rows>0) {
     			 while ($value=mysqli_fetch_assoc($result)) {
		    ?> 

			['<?php echo $value["{$name}"]?>', <?php echo $value["{$slsp}"]; ?>],
				

		<?php 
			}}
 		 ?>
      ]);
   

      var options = {
       
        opacity:1.5,
        width: 1200,
        height: 1000,

        hAxis: {
          title: 'Số lượng',
          minValue: 0
        },
        vAxis: {
          title: 'Tên giày'
        }
      };
		<?php 
		if (isset($choice)) {
      	if ($choice=='Ngang') {
      		echo "var chart = new google.visualization.BarChart(document.getElementById('chart_div'));";	
      	}else{
      		echo "var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));";
      	}
        } 
        ?>
      
     
      chart.draw(data, options);
    }
</script>