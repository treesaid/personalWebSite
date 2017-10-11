<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    
    <!-- 产品列表 -->
    <ul class="product-list">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b592553ef9563a3eb358556490ca0865&action=category&catid=%24catid&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
        <!-- <?php var_dump($data)?> -->
        <li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <!-- <li><a href="#">藜麦</a></li>
        <li><a href="#">藜麦粉</a></li>
        <li><a href="#">藜麦茶</a></li> -->
    </ul>