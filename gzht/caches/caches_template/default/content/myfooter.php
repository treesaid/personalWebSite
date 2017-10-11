<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>	<!-- footer -->
	<div class="footer">
		<div class="foot">
			<img src="<?php echo IMG_PATH;?>img/20131224033743_76840.jpg" alt="" class="erweima">
			<img src="<?php echo IMG_PATH;?>img/20131224033546_71751.jpg" alt="" class="erweima">
			<div class="footcon">
				<p class="pp1">
					<a href="#">首页</a><span>|</span>
					<a href="inpage/about.html">品牌介绍</a><span>|</span>
					<a href="inpage/news.html">新闻动态</a><span>|</span>
					<a href="inpage/product.html">产品展示</a><span>|</span>
					<a href="inpage/service.html">服务专区</a><span>|</span>
					<a href="inpage/message.html">在线留言</a><span>|</span>
					<a href="inpage/contact.html">联系方式</a>
				</p>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ab345a25bd6c0b1fac5ac1570acb5686&action=lists&catid=19&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'19','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $i) { ?>
				<p class="pp2">版权所有：<?php echo $i['copyright'];?> 备案号：晋ICP备*****号 手机：<?php echo $i['telephone'];?>  固话：<?php echo $i['phone'];?></p>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
			<img src="<?php echo IMG_PATH;?>img/20131224055204_55041.png" alt="" id="foot-logo">
		</div>
	</div>
</body>
</html>