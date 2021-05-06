<?php
	//print_r($_POST);
	//print_r($_FILES);
	$cid=$_GET['cid'];
	$msg='';
	if(isset($_POST['name']))
	{
    $cid=$_POST['cid'];
    $did=$_POST['did']; 
		$name=$_POST['name'];
		$price=$_POST['price'];
		$qty=$_POST['qty'];
		$desc=$_POST['desc'];
		$detail=$_POST['detail'];
		$note=$_POST['note'];
		$active=$_POST['active'];
		
		//Xu ly file
		include('backEnd/function/imgProcess.php');
		
		
		//insert vao DB
		$sql ="insert into `nn_product` values(NULL,'$cid','$did','$name','$price','0','$desc','$detail','$img_url','$img_url1','$img_url2','$img_url3',now(),'$qty','$note','0','0','$active','0')";
    echo $sql;
		mysqli_query($conn,$sql);
		//Chuyen trang
		//header('location:?mod=pro');
?>
	<script>
   /* alert("Thêm Sản Phẩm Thành Công!")
		setTimeout("window.location='?mod=pro&cid=<?php echo $cid ?>'",500);*/
	</script>
<?php

	}
?>
<script type="text/javascript" src="public/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="public/js/ckfinder/ckfinder.js"></script>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">

  <table class="create_content" width="800" border="0">
    <caption>
       <h4>THÊM SẢN PHẨM</h4>
	  
    </caption>
    <tr border="none">
      <th scope="row">Chủng Loại</th>
     <td>
		  Hình ảnh:
      </td>
    </tr>
    <tr>
      <td>
      <select id="did" name="did">
    <?php
		//Lay cac chung loai
		$sql='select `id_der`,`name_der` from `nn_department`';
		$rs=mysqli_query($conn,$sql);
		while($r=mysqli_fetch_assoc($rs))
		{
	?>
  	   <option value="<?php echo $r['id_der']?>"><?php echo $r['name_der']?></option>
    <?php
		}
	?>
    </select>
      </td>
      <td height="200" rowspan="9" width="300">
		  <label>
			<img id="preimg"  src="public/images/add_image.png" alt="your image" height="200" /><br>
			<input  onchange="readURL(this)" type="file" name="img_url" id="img_url" style="display:none" />
     	  </label>
      </td>
    </tr>
    <tr>
      <th scope="row">Loại</th>
    </tr>
    <tr>
      <td width="407">
        <select id="cid" name="cid">
          <?php
          //Lay cac chung loai
         $sql='select `id_cat`,`name_cat` from `nn_category`';
        $rsCate=mysqli_query($conn,$sql);
        while($r=mysqli_fetch_assoc($rsCate))
        {
          ?>
             <option <?php if($r['id_cat']==$cid) echo 'selected' ?> value="<?php echo $r['id_cat']?>"><?php echo $r['name_cat']?></option>
          <?php
          }
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <th scope="row">Tên</th>
    </tr>
    <tr>
      <td width="407"><input type="text" name="name" id="name" line-w /></td>
    </tr>
    <tr>
      <th scope="row">Giá</th>
    </tr>
    <tr>
      <td><input type="text" name="price" id="price"/></td>
    </tr>
    <tr>
      <th scope="row">Số lượng</th>
    </tr>
    <tr>
      <td><input type="number" min="1" name="qty" id="qty"/></td>
    </tr>
    <tr>
      <th scope="row">Hiện Thị</th>
      <td height="80" rowspan="3" width="300" class="small_Image">
        <label>
          <img id="preimg1"  src="public/images/add_image.png" alt="your image" width="80" /><br>
          <input  onchange="readURL1(this)" type="file" name="img_url1" id="img_url1" style="display:none" />
        </label>
        <label>
          <img id="preimg2"  src="public/images/add_image.png" alt="your image" width="80" /><br>
          <input  onchange="readURL2(this)" type="file" name="img_url2" id="img_url2" style="display:none" />
        </label>
        <label>
          <img id="preimg3"  src="public/images/add_image.png" alt="your image" width="80" /><br>
          <input  onchange="readURL3(this)" type="file" name="img_url3" id="img_url3" style="display:none" />
        </label>
      </td>
    </tr>
    <tr>
      <td>
      <select name="active" id="active">
        <option value="1">Hiện</option>
        <option value="0">Ẩn</option>
      </select>
      </td>
    </tr>
    <tr>
      <th scope="row">Mô tả</th>
    </tr>
        <tr>
      <td colspan="2"><textarea name="desc" id="desc" style="width: 800px;height: 120px"></textarea></td>
      <td></td>
    </tr>
    <tr>
      <th colspan="2" scope="row">Chi tiết</th>
    </tr>
    <tr>
      <td colspan="2"><textarea name="detail" id="detail"></textarea></td>
      <td></td>
    </tr>
    <tr>
      <th colspan="2" scope="row">Ghi chú</th>
    </tr>
    <tr>
      <td colspan="2"><textarea name="note" id="note"></textarea></td>
      <td></td>
    </tr>
    <tr>
      <td colspan="2" align="center" scope="row"><button type="submit">Thêm</button></td>
    </tr>
  </table>
</form>
<p class="success" align="center"><?php echo $msg ?></p>
<!-- <script src="backEnd/function/readURL.js" type="text/javascript" charset="utf-8"></script> -->
<script>
		function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preimg')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preimg1')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader

            reader.onload = function (e) {
                $('#preimg2')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preimg3')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
	var detail=CKEDITOR.replace('detail',{
		uiColor: '#A19E9E',
		language: 'vi',
		toolbar: [
			{ name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
			{ name: 'clipboard', groups: [ 'undo','clipboard' ], items: [ 'Undo', 'Redo', '-', 'PasteText', 'PasteFromWord' ] },
			{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Scayt' ] },
			{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
			{ name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'SpecialChar' ] },
			{ name: 'tools', items: [ 'Maximize' ] },
			{ name: 'others', items: [ '-' ] },
			'/',
			{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic','Strike', '-', 'RemoveFormat' ] },
			{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
			{ name: 'styles', items: ['Format' ] },
		]
	});
	//Gan CKFinder
	CKFinder.setupCKEditor(detail,'public/js/ckfinder/');
</script>
