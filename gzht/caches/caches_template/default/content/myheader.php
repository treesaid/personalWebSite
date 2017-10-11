<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en"> 
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>广州欢腾</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/reset.css">
	<!-- <link rel="stylesheet" href="homepage.css"> -->
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/homepage.css">
	<script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
	<script src="<?php echo JS_PATH;?>myjs/index.js"></script>
</head>
<body>
	<!-- 头部 -->
	<div class="header">
		<div class="head">
			<p class="welcome"><span>·</span>欢迎进入本网站！</p>
			<ul class="head-ul">
				<li class="headli"><b class="icon">&#xe601;</b><a href="">设为首页</a></li>
				<li class="headli"><b class="icon">&#xe602;</b><a href="">加入收藏</a></li>
				<li class="headli"><b class="icon">&#xe600;</b><a href="inpage/contact.html">联系我们</a></li>
			</ul>
		</div>
	</div>
	<!-- 导航 -->
	<div class="nav">
		<div class="nav-in">
			<img src="<?php echo IMG_PATH;?>img/logo.png" alt="" class="logo">
			<div class="navul">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=172d3e742399e5ace943301e16f256b0&action=category&catid=0&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
				<!-- <?php var_dump($data)?> -->
						<a href="<?php echo siteurl($siteid);?>" class="nav-a">
							<img src="<?php echo IMG_PATH;?>img/nav1.png" alt="" class="nav-pic" >
							<img src="<?php echo IMG_PATH;?>img/hnav1.jpg" alt="" class="hnav-pic">
						</a>
					<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
						<a href="<?php echo $v['url'];?>" class="nav-a">
							<img src="<?php echo $v['image'];?>" alt="" class="nav-pic">
							<img src="<?php echo $v['description'];?>" alt="" class="hnav-pic">
						</a>
					<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<!-- <a href="inpage/about.html" class="nav-a">
					<img src="<?php echo IMG_PATH;?>img/nav2.png" alt="" class="nav-pic">
					<img src="<?php echo IMG_PATH;?>img/hnav2.jpg" alt="" class="hnav-pic">
				</a> -->
				
			</div>
		</div>
	</div>
	