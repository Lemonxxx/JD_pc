<?php
	header('ContentpType:text/html;charset=utf-8');
	$conn=mysqli_connect('localhost','root','','web1') or die('数据库连接错误');
	//发送指令
	mysqli_query($conn,'set names utf8');
	function alert($str,$url){
		echo '<script>window.alert("'.$str.'");location.href="'.$url.'";</script>';
	}

?>