<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!-- ***************************  banner ****************************  -->
        <div class="ljg-banner-container ljg-banner-container-inside">
            <div class="ljg-banner-inner">
                <!-- 图片 -->
                <ul class="ljg-banner-ul">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=91586df85e122fc2db7382b35507ec71&action=lists&catid=77&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'77','moreinfo'=>'1','limit'=>'20',));}?>
                        <?php $i=0?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                            <li class="ljg-banner-lis<?php if($i==0) { ?> ljg-banner-lis-active<?php } ?>">
                                <a href="javascript:;"><img data-src="<?php echo $v['carousel'];?>"/></a>
                            </li>
                        <?php $i++?>
                        <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div><!-- inner结束 -->
        </div><!-- banner结束 -->