<?php 
	include('./conn.php');
	session_start();
	$_SESSION = array();//将session定义为空数组，清楚所有数据
	session_destroy();//清除session缓存文件
	alert('退出成功，欢迎下次再来','./login.php');






?>