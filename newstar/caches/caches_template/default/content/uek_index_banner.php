<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!-- **************************  banner ***************************  -->
        <div class="ljg-banner-container">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1d367f640982063b4f1c25dd6c525fd6&action=lists&catid=76&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'76','moreinfo'=>'1','limit'=>'20',));}?>
            <div class="ljg-banner-inner">
                <!-- 图片 -->
                <ul class="ljg-banner-ul">
                    <?php $i=0?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <li class="ljg-banner-lis<?php if($i==0) { ?> ljg-banner-lis-active<?php } ?>">
                            <a href="javascript:;"><img data-src="<?php echo $v['carousel'];?>"/></a>
                        </li>
                    <?php $i++?>
                    <?php $n++;}unset($n); ?>
                </ul>
            
                <!-- 滑动切换 -->
                <div class="ljg-banner-slide">
                    <ul>
                        <?php $i=0?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                            <li class="ljg-slide-lis<?php if($i==0) { ?> active<?php } ?>"></li>
                        <?php $i++?>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
            </div><!-- inner结束 -->
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div><!-- banner结束 -->