<table width="608">
	<caption>
	DANH SÁCH KHÁCH HÀNG - THÀNH VIÊN<br>
	</caption>
	<tr>
	<th width="30" scope="col">ID</th>
	<th width="150" scope="col">Tên</th>
	<th width="87" scope="col">Email</th>
	<th width="80" scope="col">Giới tính</th>
	<th width="100" scope="col">Quản lý đơn hàng</th>
	<!--<th width="136" scope="col"><a href="?mod=dep_add" class="dep_add"><img src="images/Add1.png">Thêm</a></th>-->
	</tr>
	<tbody class="list">
	  <?php
		$i=0;
		$sql="SELECT * FROM `nn_user` ORDER BY `id_user` desc ";
		$rs=mysqli_query($conn,$sql);			
		while($r=mysqli_fetch_assoc($rs))
		{
	  ?>
		  <tr>
			<td align="center"><?php echo $r['id_user'] ?></td>
			<td align="center"><?php echo $r['name_user'] ?></td>
			<td align="center"><?php echo $r['email'] ?></td>
			<td align="center"><?php if($r['gender']==1) echo "Nam"; else echo "Nữ"; ?></td>
			<td align="center"><a target="_blank" href='index.php?mod=thongtinKH&getuser=<?php echo $r['id_user'] ?>'>Xem chi tiết</a> | <a href="?mod=cus_del&id=<?php echo $r['id_user'] ?>">Xóa</a></td>
		  </tr>		  
	  <?php
		}
	  ?>
	</tbody>
</table>
