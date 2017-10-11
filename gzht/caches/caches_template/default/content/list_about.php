<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myheader"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/about.css">
	<!-- banner -->
	<div class="banner">
		<img src="<?php echo IMG_PATH;?>img/bannerpic.jpg" alt="">
	</div>
	<!-- 品牌介绍 -->
	<div class="intro"> 
		<div class="intro-left">
			<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6145715b4c485ac201955b0f1570db21&action=lists&catid=%24catid&num=2&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id ASC','limit'=>'2',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<li>
					<a href="<?php echo $v['url'];?>"><?php echo $v['title'];?>
						<img src="<?php echo IMG_PATH;?>img/up.png" alt="" class="line">
					</a>
				</li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<!-- <li>
					<a href="<?php echo $CATEGORYS['15']['url'];?>"><?php echo $CATEGORYS['15']['catname'];?>
						<img src="<?php echo IMG_PATH;?>img/up.png" alt="" class="line">
					</a>
				</li> -->
			</ul>
		</div>
		<div class="intro-right">
			<div class="title">
				<p class="intro-p">品牌介绍<span>ABOUT</span></p>
				<div class="weizhi">
					<a href="<?php echo siteurl($siteid);?>">首页</a>
					<span>&gt; <?php echo catpos($catid);?><?php echo $title;?></span>
				</div>
			</div>
			<div class="art">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6c402ffe4f4f8b7cdf9182f81bfcdd9a&action=lists&num=1&catid=%24catid&moreinfo=1&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','order'=>'id ASC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<!-- <p class="biaoti">品牌<span>故事</span></p>
				<p>OMAONT0是一个能缔造奇迹的女鞋品牌，由广州市欢腾鞋业有限公司聘请著名设计师设计。OMAONT0崇尚简约而不失简单的设计，以新鲜多变、端庄典雅的格式，紧跟时尚的设计理念，融入当季顶尖的流行元素，辅以潮流、别致的颜色和面料，让您在任何场所，衣着品味的韵味都能于不经意间自然流露!OMAONT0以精选的皮料、时尚的款式、优质的服务、精湛的工艺、合理的售价、自然洒脱的元素、内敛含蓄的设计，不断为中国20—45岁时尚魅力的都市女性推出时尚、舒适、优雅的鞋品。</p>
				<p class="another-p">OMAONTO愿与您共同见证品牌成长，一同分享财富模式，共创品牌美好未来! </p>
				<p class="sbiaoti">品味另一种高度</p>
				<img src="<?php echo IMG_PATH;?>img/20131224014526_57471 (1).jpg" alt="" class="art-pic"> -->
				<p><?php echo $r['content'];?></p>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
	</div>
	<?php include template("content","myfooter"); ?>