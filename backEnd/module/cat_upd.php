<?php
	//print_r($_POST);
	$id=@$_GET['id'];
	
	if(isset($_POST['name']))
	{
		$department_id=$_POST['department_id'];
		$name=$_POST['name'];
		$order=$_POST['order'];
		$active=$_POST['active'];
		
		//update vao DB
		$sql="update `nn_category` set 
			`name_cat`='$name',
			`order`='$order',
			`active`='$active'
			Where `id_cat`=$id";
			
		mysqli_query($conn,$sql);
		
		//Chuyen den trang chung loai
		header('location:staff/cat/');
	}

	//Lay thong tin hien tai	
	$sql="SELECT *FROM `nn_category` WHERE `id_cat`=$id";
	$rs=mysqli_query($conn,$sql);
	$r=mysqli_fetch_assoc($rs);
?>
<form id="form1" name="form1" method="post" action="">
  <table width="300">
    <caption>
     CẬP NHẬT CHỦNG LOẠI
    </caption>
    <tr>
      <th width="177" scope="row">Tên</th>
      <td width="407"><input type="text" name="name" id="name" value="<?php echo $r['name_cat'] ?>" required /></td>
    </tr>
    <tr>
      <th scope="row">Thứ tự</th>
      <td><input type="number" name="order" id="order" value="<?php echo $r['order']?>" /></td>
    </tr>
    <tr>
      <th scope="row">Hiển thị</th>
      <td>
      <select name="active" id="active">
        <option <?php if($r['active']==1) echo 'selected' ?> value="1">Hiện</option>
        <option <?php if($r['active']==0) echo 'selected' ?> value="0">Ẩn</option>
      </select>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" scope="row"><button class="dep_btn" type="submit"><span>Cập nhật</span></button></td>
    </tr>
  </table>
</form>
