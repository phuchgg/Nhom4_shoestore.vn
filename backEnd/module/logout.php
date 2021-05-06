<?php
	//session_detroy() hàm này không nên sử dung. nó sẽ Hủy toàn bộ session ;
	unset($_SESSION['admin_id']);
	unset($_SESSION['admin_name']);
	//chuyển trang về trang đăng nhập
	header('location:staff/login/');
?>