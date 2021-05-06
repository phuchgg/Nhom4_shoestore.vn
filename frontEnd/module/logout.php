<?php
	//session_detroy() hàm này không nên sử dung. nó sẽ Hủy toàn bộ session ;
	unset($_SESSION['user_id']);
	unset($_SESSION['user_name']);
	//chuyển trang về trang đăng nhập
	header('location:?mod=login');
?>