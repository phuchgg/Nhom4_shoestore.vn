<?php
	if(isset($_POST['name']))
	{
		$department_id=$_POST['department_id'];
		$name=$_POST['name'];
		$order=$_POST['order'];
		$active=$_POST['active'];
		$sql="insert into `nn_category` values(NULL,'$department_id','$name','$order','$active')";
		mysqli_query($conn,$sql);
		//chuyen trang
		header('location:?mod=cat');
	}
?>

<form action="" method="post">
    <table width="300" border="1">
      <caption>
        THÊM LOẠI SẢN PHẨM
      </caption>
      <tr>
        <th scope="row">Chủng Loại</th>
        <td>
          <select name="department_id" id="departmentid">
          <?php
            $sql="SELECT `id`,`name` FROM `nn_department`";
            $rs=mysqli_query($conn,$sql);
            while($r=mysqli_fetch_assoc($rs))
			{
          ?>
            	<option value="<?php echo $r['id'] ?>"><?php echo $r['name'] ?></option>
		  <?php
			}
		  ?>
          </select>
        </td>
      </tr>
      
      <tr>
        <th scope="row">Tên</th>
        <td>
        <input type="text" name="name" id="name" required></td>
      </tr>
      <tr>
        <th scope="row">Hiện thị</th>
        <td><form name="form1" method="post" action="">
          <select name="active" id="active">
            <option value="1">Hiện</option>
            <option value="0">Ẩn</option>
          </select>
        </form></td>
      </tr>
      <tr>
        <th scope="row">Thứ tự</th>
        <td>
          <input type="number" name="order" id="order">
        </td>
      </tr>
      <tr>
		  <td colspan="2" align="center" scope="row"><button class="dep_btn" type="submit">Thêm</button></td>
      </tr>
    </table>
</form>