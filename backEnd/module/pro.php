<table class="tblData" width="1000">
  <caption>
    <h3>DANH SÁCH SẢN PHẨM</h3>
    	<select onchange="window.location='?mod=pro&cid='+this.value">
		<?php
			if(isset($_GET['cid'])) $cid=@$_GET['cid'];
			else $cid=1;
			$sql1="select `id_cat`,`name_cat` from `nn_category`";
			$rs1=mysqli_query($conn,$sql1);
			while($r1=mysqli_fetch_assoc($rs1))
			{
		?>
				<option <?php if($r1['id_cat']==$cid) echo 'selected'?> value="<?php echo $r1['id_cat']?>"><?php echo $r1['name_cat']?></option>
		<?php
			}
		?>
		</select>
  </caption>
  <tr>
    <th width="30" scope="col">STT</th>
    <th width="200" scope="col">TÊN</th>
    <th width="160" scope="col">HÌNH</th>
    <th width="100" scope="col">GIÁ</th>
    <th width="70" scope="col">SỐ LƯỢNG</th>
    <th width="70" scope="col">HIỆN THỊ</th>
    <th width="160" scope="col"><a href="?mod=pro_add&cid=<?php echo $cid?>" class="dep_add"><img src="public/images/Add1.png">Thêm</a></th>
  </tr>
  <?php
	if($cid=='') $cid=1;
		$i=0;
		$sql="SELECT a.*, b.`id_cat`,b.`name_cat`
	FROM `nn_product` a,`nn_category` b  WHERE a.`category_id`=$cid AND  a.`category_id`=b.`id_cat` ORDER BY a.`id_pro` desc LIMIT 0,20";
		$rs=mysqli_query($conn,$sql);
		$r1=mysqli_num_rows($rs);
		while($r=mysqli_fetch_assoc($rs))
		{
  ?>
		  <tr>
			<td align="center"><?php echo ++$i ?></td>
			<td align="left"><?php echo $r['name_pro'] ?></td>
			<td align="center"><img src="public/img/<?php echo $r['img_url'] ?>" width="60"></td>
			<td align="center"><?php echo number_format($r['price'])?>₫</td>
			<td align="center"><?php echo $r['qty'] ?></td>
			<td align="center"><?php echo $r['active'] ?></td>
			<td align="center"><a href='detail/<?php echo $r['pro_id']?>/<?php echo remake_char($r['name'])?>.html' target="_blank">Chi tiết</a> | <a href='staff/pro_upd/<?php echo $r['id_pro']?>/'>Sửa</a> | <a onclick="return confirm('Bạn có chắc muốn xóa không ?')"  href='staff/pro_del/<?php echo $r['id_pro']?>/'>Xóa</a> </td>
		  </tr>
  <?php
		}
  ?>
</table>