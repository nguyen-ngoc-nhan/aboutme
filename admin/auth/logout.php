<?php
	session_start();
	ob_start();
	session_destroy(); //xóa tài khoản cũ
	header('location:/admin/auth/login.php');
	ob_end_flush();
?>