<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!--*********  二级页面左边导航开始 *************** -->
            <div class="xjn-lside">
                <div class="xjn-title">
                    <h4 class='xjn-titeng'><span>NEWS</span> INFORMATION</h4>
                    <h3 class='xjn-titchn'><span>新闻</span>资讯</h3>
                </div>
                <div class="xjn-line"></div>
                <ul class="xjn-catlist">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=205de25821f0817ebaf0252612769705&action=category&catid=%24top_parentid&num=5&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'5',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li <?php if($v[catid]==$catid) { ?>class="xjn-list active"<?php } else { ?>class="xjn-list"<?php } ?>>
                        <a href="<?php echo $v['url'];?>"><span>·</span><?php echo $v['catname'];?></a>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
             </div><!--*********  二级页面左边导航结束 ***************-->