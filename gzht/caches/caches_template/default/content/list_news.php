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
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6b54202180d6fea207123a652bc2d8f1&action=lists&catid=%24catid&num=10&page=%24page&order=id+ASC&morrinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id ASC','morrinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id ASC','morrinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<!-- <?php var_dump($data)?> -->
				<p><a href="<?php echo $r['url'];?>"><!-- 雪地靴保养说明 --><?php echo $r['title'];?></a><span><?php echo $r['description'];?></span></p>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<div class="xian"></div>
			</div>
		</div>
	</div>
	<?php include template("content","myfooter"); ?>