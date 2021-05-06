<table width="608">
  <caption>
    DANH SÁCH ĐƠN HÀNG
  </caption>
  <tr>
    <th width="47" scope="col">Thứ Tự</th>
    <th width="120" scope="col">Ngày Tạo</th>
    <th width="120" scope="col">Người Mua</th>
    <th width="120" scope="col">Điện Thoại</th>
    <th width="80" scope="col">Total</th>
    <th width="80" scope="col">Trạng Thái</th>
    <th width="80" scope="col">Action</th>
    <!--<th width="136" scope="col"><a href="?mod=dep_add" class="dep_add"><img src="images/Add1.png">Thêm</a></th>-->
  </tr>
  <?php
	$i=0;
	$sql="SELECT a.`id_order` as orderid,a.`mobile` as ordermobile,a.`create_at` as ordercreat,a.`name` as ordername,a.`status` as orderstatus,SUM(b.`qty`*b.`price`) as total FROM `nn_order` a,`nn_order_detail` b, `nn_user`c WHERE a.`id_order` = b.`order_id` AND a.`user_id`= c.`id_user` GROUP BY a.`id_order` ORDER BY a.`id_order` DESC";
	$rs=mysqli_query($conn,$sql);
	$status=array(-1=>'Hủy','Mới đặt','Đã xác nhận','Đang giao','Đã giao','Hoàn Tất');
	while($r=mysqli_fetch_assoc($rs))
	{
  ?>
      <tr>
        <td align="center"><?php echo $r['orderid'] ?></td>
        <td align="center"><?php echo date('d/m/Y H:i',strtotime($r['ordercreat'])) ?></td>
        <td align="center"><?php echo $r['ordername'] ?></td>
        <td align="center"><?php echo $r['ordermobile'] ?></td>
        <td align="center"><?php echo number_format($r['total']) ?></td>
        <td align="center"><?php echo $status[$r['orderstatus']] ?></td>
        <td align="center"><a href="?mod=order_manage&id=<?php echo $r['orderid']?>" target="_blank" class="first">View</a></td>
        
      </tr>
  <?php
	}
  ?>
</table>
