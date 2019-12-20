<?php

	//include('js/login.js');
	//连接数据库
	include('./conn.php');
	//1.接收
	$username = $_POST['username'];
	$password = $_POST['password'];
	//2.验证数据有效性
	if (strlen($username)< 1) {

		alert('用户名不能为空','login.php') ;
		exit;

	}
	if (strlen($password)< 6) {
		alert('密码不能小于6位数','login.php') ;

		exit;

	}
	//3.构造sql语句，查询数据库，返回查到的数据，验证用户名和密码
	$sql="select * from admin where username='$username' and password = '$password'";
	//var_dump($sql);
	$rs = mysqli_query($conn,$sql);//将sql语句发到服务器执行，返回值到rs中
	//mysqli_num_rows
	//对结果集提取数据
	//从结果集中读取数据，返回关联数组，以数据库的字段名作为数组的键名
	if($row = mysqli_fetch_assoc($rs)){
		//提取的到 则成功
			//开启session机制
			session_start();
		$_SESSION['username'] = $row['username'];
		$_SESSION['userid'] = $row['id'];
		$_SESSION['flag'] = $row['flag']=='vip' ? 'vip':'normal';
		//跳转
		header('Location:index.php');




	}else{
		//失败
		alert('登录失败,用户名或密码错误，请重试！','login.php') ;
		exit;
	}

?>