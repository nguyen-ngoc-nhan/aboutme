<?php
	
	$mysqli = new mysqli('localhost','root','','aboutme');//tao dt de connect
	$mysqli->set_charset('utf8');//set utf8-> dung tieng viet
	
	//Kiểm tra và in ra thông tin lỗi nếu có
	/*
	$mysqli = new mysqli('sql113.byethost9.com','b9_24953216','25121999','b18_24952617_story');//tao dt de connect
	$mysqli->set_charset('utf8');
	*/
	if(mysqli_connect_error()){
		echo 'Có lỗi khi kết nối database :'.mysqli_connect_errno();
	}
?>