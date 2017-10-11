<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myheader"); ?>
<!-- banner -->
	<div class="banner">
		<div class="screen">
			<ul class="ulimg">
				
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=54ac6a6185e5e6c900bfef789b523bdf&action=lists&num=3&catid=20&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'20','order'=>'listorder ASC','limit'=>'3',));}?>
				<?php $i=0?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<?php if($i==0) { ?>
				<img src="<?php echo $r['banner'];?>" alt="" class="imglis first-img">
				<?php $i++?>
				<?php } else { ?><img src="<?php echo $r['banner'];?>" alt="" class="imglis">
				<?php } ?>
				<!-- <img src="<?php echo IMG_PATH;?>img/20131224113522.jpg" alt="" class="imglis"> -->
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
			<div class="cir-box">
				<ul class="ulcir">
					<li class="cir first-cir"></li>
					<li class="cir"></li>
					<li class="cir"></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 品牌展示 -->
	<div class="show">
		<div class="intro">
			<div class="show-box">
				<a href="<?php echo $CATEGORYS['9']['url'];?>" class="showa">
					<img src="<?php echo IMG_PATH;?>img/inpic1.jpg" alt="" class="show-pic">
					<img src="<?php echo IMG_PATH;?>img/show1.jpg" alt="" class="hshow-pic">
				</a>
				<a href="<?php echo $CATEGORYS['11']['url'];?>" class="showa">
					<img src="<?php echo IMG_PATH;?>img/9k=.jpg" alt="" class="show-pic">
					<img src="<?php echo IMG_PATH;?>img/show2.jpg" alt="" class="hshow-pic">
				</a>
				<a href="<?php echo $CATEGORYS['14']['url'];?>" class="showa">
					<img src="<?php echo IMG_PATH;?>img/inpic3.png" alt="" class="show-pic">
					<img src="<?php echo IMG_PATH;?>img/show3.png" alt="" class="hshow-pic">
				</a>
			</div>
		</div>
	</div>
	<style>
		.box{
			width: 100%;
			height: 200px;
			background: #1A1A1A;
		}
		.news-dt{
			width:520px;height:200px;background:#202020;
			margin-left: 166px;
		}
		.news-dt p{
			width:480px;height:30px;background:#F3640E;
			font-size: 16px;
			line-height: 30px;
			padding-left: 20px;
			color: #666;
			font-family: "微软雅黑";
		}
		.news-dt ul{
			width: 100%;
			height: 170px;
		}
		.news-dt ul li{
			width:500px;
			padding-left: 20px;
			height: 30px;
			border-bottom: 1px solid #999999;
			list-style-type:disc;
			list-style-position: inside;
			color: #fff;
			font-size: 16px;
		}
		.news-dt ul li a{
			font-size: 12px;
			color: #B2B1B1;
			line-height: 30px;
			font-weight: bold;
		}
		.news-dt ul li a:hover{
			color: red;
		}
	</style>
	<!-- 推荐位 -->
	<div class="box">
		<div class="news-dt">
		<p style="width:500px;height:30px;background:lightblue;font-size">~首页新闻动态</p>
		<ul>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=faf438d3fc719a15e195e6e93afaa903&action=position&posid=18&num=5&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder ASC','limit'=>'5',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $c) { ?>
			<li><a href="<?php echo $c['url'];?>"><?php echo $c['title'];?></a></li>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
		</ul>
	</div>
	</div>
<?php include template("content","myfooter"); ?>