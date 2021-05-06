<table width="700">
  <caption>
    <h3>DANH SÁCH LOẠI SẢN PHẨM</h3>
  </caption>
  <tr>
    <th align="center" width="47" scope="col">STT</th>
    <th align="center" width="250" scope="col">TÊN</th>
    <th align="center" width="87" scope="col">THỨ TỰ</th>
    <th align="center" width="80" scope="col">Hiện Thị</th>
    <th align="center" width="136" scope="col"><a href="?mod=cat_add" class="dep_add"><img src="public/images/Add1.png">Thêm</a></th>
  </tr>
  <?php
	$i=0;
  	$sql="SELECT * FROM `nn_category`";
	$rs=mysqli_query($conn,$sql);
	while($r=mysqli_fetch_assoc($rs))
	{
  ?>
      <tr>
        <td align="center"><?php echo ++$i ?></td>
        <td><?php echo $r['name_cat'] ?></td>
        <td align="center"><?php echo $r['order'] ?></td>
        <td align="center"><?php echo $r['active'] ?></td>
        <td align="center"><a href='?mod=cat_upd&id=<?php echo $r['id_cat']?>'>Sửa</a> | <a onclick="return confirm('&#09;Bạn có chắc muốn xóa không ?\n (Tất cả các sản phẩm thuộc loại này cũng sẽ bị xóa)')"  href='?mod=cat_del&cid=<?php echo $r['id_cat']?>'>Xóa</a> </td>
      </tr>
  <?php
	}
  ?>
</table>
