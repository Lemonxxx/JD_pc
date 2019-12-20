<?php
	include('./conn.php');
	session_start();
	if(!isset($_SESSION['userid'])){
		alert('请登录后再操作','./login.php');
		exit;
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<!-- 网站优化三大标签 -->
		<!-- title -->
	<title>京东(JD.COM)-综合网购首选-正品低价、品质保障、配送及时、轻松购物！</title>
		<!-- description -->
	<meta name="description" content="京东JD.COM-专业的综合网上购物商城,销售家电、数码通讯、电脑、家居百货、服装服饰、母婴、图书、食品等数万个品牌优质商品.便捷、诚信的服务，为您提供愉悦的网上购物体验!" />
		<!-- keywords -->
	<meta name="Keywords" content="网上购物,网上商城,手机,笔记本,电脑,MP3,CD,VCD,DV,相机,数码,配件,手表,存储卡,京东" />
	
	<!-- link -->

		<!-- 引入ico文件 -->
	 <link rel="shortcut icon" href="favicon.ico"  type="image/x-icon"/> 
		<!-- css初始化文件 -->
	<link rel="stylesheet" href="css/normalize.cs                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，                                             ，，                                                             ，，，，，，，，，，，，，，，，     s"/>
		<!-- 基本公共样式 头部 底部-->
	<link rel="stylesheet" href="css/base.css" />
		<!-- 专属的首页样式 -->
	<link rel="stylesheet" href="css/index.css" />
	 
</head>
<body>
	<!-- 头部 start -->
	<header>
	<div class="w">
		<a href="#">
			<img src="images/header.jpg">
		</a> 
	</div>
	</header>
	<!-- 头部 end -->
	<!-- 导航栏 start -->
	<div class="shortcut">
		<div class="w">
			<ul class="fl city">
				<li><i class="f10"></i><a href="#">北京</a></li>			
			</ul>
			<ul class="fr">	
				<li>
					<a href="#" class=""><?php  echo $_SESSION['username'] ?></a>
					<a href="#" class="f10"><?php  echo $_SESSION['flag'] ?></a>

					<!-- <strong><?php echo $_SESSION[userid] ?></strong> -->
					<a href="logout.php" class="f10">退出</a>
				</li>
				<li class="space"></li>
				<li>
					<a href="#">我的订单</a>
				</li>
				<li class="space"></li>
				<li>
					<a href="#">我的京东</a>
					<i></i>
				</li>
				<li class="space"></li>
				<li>
					<a href="#">京东会员</a>
				</li>

				<li class="space"></li>
				<li>
					<a href="#">企业采购</a>
				</li>
				<li class="space"></li>
				<li>
					<a href="#">客户服务</a>
					<i></i>
				</li>
				<li class="space"></li>
				<li>
					<a href="#">网站导航</a>
					<i></i>
				</li>
				<li class="space"></li>
				<li>
					<a href="#" class="mobile">手机京东
					 <img src="images/mobile.png" height="60" width="60" alt="">
					</a>
				</li>
			</ul>

		</div>

	</div>
	<!-- 导航栏 end -->
	<!-- 中间头部分 start -->
	<div class="w middle">
		<!-- logo -->
		<div class="logo"><!-- logo标准格式 要套h1-->
			<h1>  <!-- 提高权重便于搜索引擎优化 -->
				<a href="#"></a><!-- 可点击 -->
					<!-- logo用背景图片形式插入 -->
			</h1>
		</div>
		<!-- 搜索框 -->
		<div class="form"><!-- 表单 -->
			<input type="text" placeholder="扫描仪"> 
			<button><i></i></button><!-- 按钮  等价于<input type="button" > -->
		</div>
		<!-- 购物车 -->
		<div class="shopcar">
			<i></i><a href="#" class="f10">我的购物车</a><span>0</span>

		</div>
		<!-- 关键词 -->
		<div class="hotwords">
			<a href="#" class="f10">199减100</a>
			<a href="#">鼠标试用</a>
			<a href="#">农资7折</a>
			<a href="#">低至29元</a>
			<a href="#">抽奖赢空调</a>
			<a href="#">记忆棉</a>
			<a href="#">坐垫</a>
			<a href="#">1分钱买油</a>
			<a href="#">智能手表</a>
		</div>
		<!-- 小导航部分 -->
		<div class="navitems">
			<ul >
				
				<li><a href="#">秒杀</a></li>
				<li><a href="#">优惠券</a></li>
				<li><a href="#">闪购</a></li>
				<li><a href="#">拍卖</a></li>
				<li class="space"></li>
				<li><a href="#">服装城</a></li>
				<li><a href="#">京东超市</a></li>
				<li><a href="#">生鲜</a></li>
				<li><a href="#">全球购</a></li>	
				<li class="space"></li>
				<li><a href="#">京东金融</a></li>
			</ul>

		</div>

	</div>
	<!-- 中间头部分 end -->

	<!-- 中间分类区域 start-->
	<div class="w grid">
			<!-- 左 -->
		<div class="grid-col1 fl">
			<div class="ad">
				<img src="images/ad-l.png">
			
				<div class="ad-r"></div><!-- 图片做背景可以一点点拉出来 -->
				<!-- 直接用图片的话是压缩拉出 -->
			</div>


			<ul>
				<li><a href="#">家用电器</a></li>
				<li><a href="#">手机</a>/<a href="#">运用商</a>/<a href="#">数码</a></li>
				<li><a href="#">手机</a>/<a href="#">运用商</a>/<a href="#">数码</a></li>
				<li><a href="#">手机</a>/<a href="#">运用商</a>/<a href="#">数码</a></li>
				<li><a href="#">手机</a>/<a href="#">运用商</a>/<a href="#">数码</a></li>
				<li><a href="#">手机</a>/<a href="#">运用商</a>/<a href="#">数码</a></li>
				<li><a href="#">手机</a>/<a href="#">运用商</a>/<a href="#">数码</a></li>
				<li><a href="#">手机</a>/<a href="#">运用商</a>/<a href="#">数码</a></li>
				<li><a href="#">手机</a>/<a href="#">运用商</a>/<a href="#">数码</a></li>
				<li><a href="#">手机</a>/<a href="#">运用商</a>/<a href="#">数码</a></li>
				<li><a href="#">手机</a>/<a href="#">运用商</a>/<a href="#">数码</a></li>
				<li><a href="#">手机</a>/<a href="#">运用商</a>/<a href="#">数码</a></li>
				<li><a href="#">手机</a>/<a href="#">运用商</a>/<a href="#">数码</a></li>
				<li><a href="#">图像</a>/<a href="#">音响</a>/<a href="#">电子书</a></li>
				<li><a href="#">手机</a>/<a href="#">运用商</a>/<a href="#">数码</a></li>
				<li><a href="#">理财</a>/<a href="#">众筹</a>/<a href="#">白条</a>/<a href="#">保险</a></li>
			</ul>


		</div>
			<!-- 中 -->
		<div class="grid-col2 fl">
				<!-- 品上 -->
			<div class="grid-col2-t">
				<a href="#"><img src="images/banner.jpg"></a>
				<a href="#" class="arrow-l"><</a>
				<a href="#" class="arrow-r">></a>
				<ul class="circle">
					<li></li>
					<li></li>
					<li></li>
					<li class="current"></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>

				</ul>

			</div>
				
				<!-- 品下 -->
			<div class="grid-col2-b">
				<div>
					<img src="images/l.jpg" >
				</div>
				<div>
					<img src="images/r.jpg" >
				</div>

			</div>


		</div>
			<!-- 右 -->
		<div class="grid-col3 fr">
			<!-- 登录模块 -->
			<div class="login">
				<!-- 上 -->
				<div class="login-t">
					Hi,欢迎来到京东！<br/>
					<a href="#"><?php echo $_SESSION['username']?></a>
					<a href="#" class="f10"><?php echo $_SESSION['flag']?></a>

					<a href="#" class="user-info"> 
						<img src="images/no_login.jpg" >

					</a>

				</div>
				<!-- 下 -->
				<div class="login-b">
					<a href="#">新人福利</a>
					<a href="#">plus会员</a>
				</div>
				

			</div>
			<!-- 促销模块 -->
			<div class="news">
				<!-- 上 -->
				<div class="news-t" id="newsT">
					<a href="#" class="cuxiao">促销</a>
					<a href="#" class="gonggao">公告</a>
					<a href="#" class="more">更多</a>
					<div id="flag"></div>

				</div>
				<!-- 详细内容 -->
				<div id="newsContainer">
					<div class="news-b">
						<ul>
							<li><a href="#">挑战三天不洗头</a></li>
							<li><a href="#">挑战三天不洗头</a></li>
							<li><a href="#">挑战三天不洗头13王企鹅</a></li>
							<li><a href="#">挑战三天不洗头秦文清</a></li>
							
						</ul>

					</div>

					<div class="news-b hide">
						<ul>
							<li><a href="#">今天放假了</a></li>
						
							<li><a href="#">全程五折</a></li>
							<li><a href="#">快来抢购</a></li>
							
						</ul>

					</div>
				</div>
		


			</div>
			<!-- 扩展模块 -->
			<div class="expend">
				<ul>
					<li>
						<a href="#"><i></i><span>话费</span></a>

					</li>
					<li>
						<a href="#"><i></i><span>话费</span></a>

					</li>
					<li>
						<a href="#"><i></i><span>话费</span></a>

					</li>
					<li>
						<a href="#"><i></i><span>话费</span></a>

					</li>
					<li>
						<a href="#"><i></i><span>话费</span></a>

					</li>
					<li>
						<a href="#"><i></i><span>话费</span></a>

					</li>
					<li>
						<a href="#"><i></i><span>话费</span></a>

					</li>
					<li>
						<a href="#"><i></i><span>话费</span></a>

					</li>
					<li>
						<a href="#"><i></i><span>话费</span></a>

					</li>
					<li>
						<a href="#"><i></i><span>话费</span></a>

					</li>
					<li>
						<a href="#"><i></i><span>话费</span></a>

					</li>
					<li>
						<a href="#"><i></i><span>话费</span></a>

					</li>

				</ul>
	
			</div>
			




		</div>



	</div>

	<!-- 中间分类区域 end-->



	<!-- 页面底部分 start -->
	<footer>
		<!-- 服务模块 -->
		<div class="service">
			<div class="w">
				<ul>
					<li>
						<h5></h5>
						<p>品类齐全，轻松购物</p>
					</li>
					<li>
						<h5></h5>
						<p>多仓直发，极速配送</p>
					</li>
					<li>
						<h5></h5>
						<p>正品行货，精致服务</p>
					</li>
					<li>
						<h5></h5>
						<p>天天低价，畅选无忧</p>
					</li>
				</ul>

			</div>
		</div>
		<!-- 帮助模块 -->
	 	<div class="w help">
			<!-- 左 -->
			<div class="fl">
				<dl>
					<dt>购物指南</dt>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>

				</dl>
				<dl>
					<dt>购物指南</dt>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>

				</dl>
				<dl>
					<dt>购物指南</dt>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>

				</dl>
				<dl>
					<dt>购物指南</dt>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>

				</dl>
				<dl>
					<dt>购物指南</dt>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>
					<dd><a href="#">购物流程</a></dd>

				</dl>

			</div>
			<!-- 右 -->
			<div class="fr coverage">
				<h5>京东自营覆盖区县</h5>
				<p>京东已向全国2661个区县提供自营配送服务，支持货到付款、POS机刷卡和售后上门服务。</p>
				<a href="#">查看详情 > </a>

			</div>

		</div>
		<!-- 版权模块 -->
		<div class="w copyright">
			<!-- 文字 -->
			<p>
				<a href="#">关于我们</a>
				<span>|</span> 
				<a href="#">联系我们</a>
				<span>|</span> 
				<a href="#">关于我们</a>
				<span>|</span> 
				<a href="#">关于我们</a>
				<span>|</span> 
				<a href="#">关于我们</a>
				<span>|</span> 
				<a href="#">关于我们</a>
				<span>|</span> 
				<a href="#">关于我们</a>
				<span>|</span> 
				<a href="#">关于我们</a>
				<span>|</span> 
				<a href="#">关于我们</a>
				<span>|</span> 
				<a href="#">关于我们</a>
				<span>|</span> 
				<a href="#">关于我们</a>
				<span>|</span> 
				<a href="#">京东公益</a>
				<span>|</span> 
				<a href="#">English Site</a>
				<span>|</span> 
				<a href="#">Media & IR</a>
				<span>|</span> 

			</p>
			<!-- 备案 -->
			<div>
				<p>京公网安备 11000002000088号<span>|</span>京ICP证070359号<span>|</span>互联网药品信息服务资格证编号(京)-经营性-2014-0008<span>|</span>新出发京零 字第大120007号</p>

				<p>互联网出版许可证编号新出网证(京)字150号<span>|</span>出版物经营许可证<span>|</span>网络文化经营许可证京网文[2014]2148-348号<span>|</span>违法和不良信息举报电话：4006561155</p>
				
				<p>Copyright © 2004 - 2017  京东JD.com 版权所有|消费者维权热线：4006067733经营证照京东旗下网站：京东支付|京东云</p>



			</div>
			<!-- 图标 -->
			<p class="foot-icon">

				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>


			</p>



		</div>
		
		
	
	</footer>
		<!-- 页面底部分 end -->
	<script src="js/animate.js"></script>
	<script src="js/index.js"></script>

</body>
</html>