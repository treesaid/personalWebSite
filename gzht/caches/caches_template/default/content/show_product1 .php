<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myheader"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/product.css">
	<!-- banner -->
	<div class="banner">
		<img src="<?php echo IMG_PATH;?>img/bannerpic.jpg" alt="">
	</div>
	<!-- 品牌介绍 -->
	<div class="intro">
		<!-- <div class="intro-left">
			<ul>
				<li>
					<a href="#">2014春夏款
						<img src="<?php echo IMG_PATH;?>img/up.png" alt="" class="line">
					</a>
				</li> 
			</ul>
		</div> -->
		<?php include template("content","slide2"); ?>
		<div class="intro-right">
			<div class="title">
				<p class="intro-p">产品展示<span>PRODUCTS</span></p>
				<div class="weizhi">
					<a href="../homepage.html">首页</a>
					<span>&gt; 产品展示</span>
				</div>
			</div>
			<div class="art">
				<!-- <?php var_dump($data)?> -->
				<h3 id="title"><?php echo $title;?></h3> <img src="<?php echo $thumb;?>" alt="" id="tu"> 
			</div>
		</div>
	</div>
<?php include template("content","myfooter"); ?> 