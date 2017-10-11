<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myheader"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/news.css">
	<!-- banner -->
	<div class="banner">
		<img src="<?php echo IMG_PATH;?>img/bannerpic.jpg" alt="">
	</div>
	<!-- 品牌介绍 -->
	<div class="intro">
		<?php include template("content","slide"); ?>
		<div class="intro-right">
			<div class="title">
				<p class="intro-p">新闻动态<span>NEWS</span></p>
				<div class="weizhi">
					<a href="">首页</a>
					<span>&gt; 品牌介绍</span>
				</div>
			</div>
			<div class="art">
				<h3 id="tit"><?php echo $title;?></h3> 
				<p id="con"><?php echo $content;?></p>
				<div class="xian"></div>
			</div>
		</div>
	</div>
	<?php include template("content","myfooter"); ?>