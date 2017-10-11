<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myheader"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/product.css">
	<!-- banner -->
	<div class="banner">
		<img src="<?php echo IMG_PATH;?>img/bannerpic.jpg" alt="">
	</div>
	<!-- 品牌介绍 -->
	<div class="intro">
		<div class="intro-left"> 
			<ul>
				<li>  
					<a href="#">2014春夏款
						<img src="<?php echo IMG_PATH;?>img/up.png" alt="" class="line">
					</a>
				</li>
			</ul>
		</div>
		<div class="intro-right">
			<div class="title">
				<p class="intro-p">产品展示<span>PRODUCTS</span></p>
				<div class="weizhi">
					<a href="../homepage.html">首页</a>
					<span>&gt; 产品展示</span>
				</div>
			</div>
			<div class="art">
				<ul class="pro">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6a772fdb719b2eee8f5b03e6dce6c324&action=lists&catid=%24catid&num=9&page=%24page&order=id+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id ASC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id ASC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li class="proli">
						<a href="<?php echo $r['url'];?>" class="pro-img">
							<img src="<?php echo $r['thumb'];?>" alt="">
						</a>
						<p class="xinghao">
							<a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
						</p>
					</li>
					<?php $n++;}unset($n); ?>
									
				</ul>
				<p class="page"> 
				<?php echo $pages;?>  
					<!-- <a href="#">首页</a>
					<a href="#">上一页</a>
					<a href="#">1</a>
					<a href="product2.html">2</a>
					<a href="product3.html">3</a>
					<a href="product2.html">下一页</a>
					<a href="product3.html">尾页</a>
					<a>1/3页</a> -->
				</p>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
			</div>
		</div>
	</div>
<?php include template("content","myfooter"); ?>