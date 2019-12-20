<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>京东-欢迎登录</title>


	<!-- 引入ico文件 -->
	 <link rel="shortcut icon" href="favicon.ico"  type="image/x-icon"/> 
	 <!-- 初始化文件 -->
	 <link rel="stylesheet" href="css/normalize.css"/>
		<!-- 基本公共样式 头部 底部-->
	<link rel="stylesheet" href="css/base.css" />
	<!-- 本页css -->
	<link rel="stylesheet"  href="css/login.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/login.js"></script>
</head>
<body>
	<!-- 头部 start-->
	<div class="lghead">
		<div class="lglogo">
			<img src="images/login_logo.png" class="lg"">	
			<b>欢迎登录</b>
		</div>
		<div class="lgr">
				<i></i><a href="#" > 登录页面，调查问卷</a>
		</div>
		
	</div>
	<div class="tip">
			<p><i></i> 依据《网络安全法》，为保障您的账户安全和正常使用，请尽快完成手机号验证！ 新版<a href = "#">《京东隐私政策》</a>已上线，将更有利于保护您的个人隐私。
						</p>
		</div>	
	<!-- 头部 end -->
	<!-- 中间 start -->
		<div class="m">
			<div class="bg">
				<div class="login">
					<div class = "tip">
							<p><i></i> 京东不会以任何理由要求您转账汇款，谨防诈骗。</p>
					</div>

					<div class="middle">
						<div class="top">
							
								<a href="#" class="saoma" id="t1"> 扫码登录</a>
								<span>|</span>
								<a href="#" class="zhanghao cl" id="t2"> 账户登录</a>
								<div id="flag"></div>
								
								
							</div>	

						<div class="zhong">
							<div class="tip2"> 11111</div>
							<div class="zl">
								<img src="images/denglu.png">
								
							</div>
							<div class="zr">
							<!-- 后台数据提交 -->
								<form action="checklogin.php" method="post">
									<div class="l1">
										<img src="images/l1.png">
										 <input type="text" name="username" class="input1" placeholder="请输入用户名">
																	
									</div>
									<div class="l2">
										<img src="images/l2.png">
										<input type="password" name="password" class="input2" placeholder="请输入密码">
									</div>

									<a href="#">忘记密码</a>
									<input type="submit" value="登录" class="submit">
								</form>


							</div>


						</div>
						
					</div>
					<div class="foot">

						<img src="images/foot.png">
					</div>
					
				</div>

			</div>
			
		</div>


	<!-- 中间 end -->



<?php 

		include('./fooder.php');
?>


