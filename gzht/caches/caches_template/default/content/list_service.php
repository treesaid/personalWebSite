<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>	<?php include template("content","myheader"); ?>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/service.css">
	<!-- banner -->
	<div class="banner">
		<img src="<?php echo IMG_PATH;?>img/bannerpic.jpg" alt="">
	</div>
	<!-- 品牌介绍 -->
	<div class="intro">
		<div class="intro-left">
			<ul>
				<li>
					<a href="#">服务专区
						<img src="<?php echo IMG_PATH;?>img/up.png" alt="" class="line">
					</a>
				</li>
			</ul>
		</div>
		<div class="intro-right">
			<div class="title">
				<p class="intro-p">服务专区<span>SERVICE</span></p>
				<div class="weizhi">
					<a href="../homepage.html">首页</a>
					<span>&gt; 服务专区</span>
				</div>
			</div>
			<div class="art">
				<p>资料更新中...</p>
			</div>
		</div>
	</div>
	<?php include template("content","myfooter"); ?>