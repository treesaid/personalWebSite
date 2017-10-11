<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <?php include template("content","myheader"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/limai.css" />
    <!-- ************ 主体部分 ************* -->
    <div class="list-main">
        <div class="lm-nav">
            <a href="#" class="lm-product">藜麦产品</a>
            <div class="lm-line"></div>
            <div class="more">
                <a href="#">查看全部</a>
                <div class="more-icon"></div>
            </div>
        </div>
        <?php include template("content","side_nav"); ?>
    </div><!-- *************** 主体部分结束 *********-->

    <!-- 右侧侧边栏 -->
    <!-- 遮罩 -->
    <div class="side-mask mask-hide"></div>
    <div class="side-box side-hide">
        <div class="side">
            <div class="side-title">藜麦产品</div>
            <ul class="side-list">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b592553ef9563a3eb358556490ca0865&action=category&catid=%24catid&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <li>
                    <a href="<?php echo $v['url'];?>">
                        <div class="side-gt"><img src="<?php echo IMG_PATH;?>sxylys/img/win2.png" alt="" /></div>
                        <div class="side-text"><?php echo $v['catname'];?></div>
                    </a>
                </li>
                <li class="side-line"></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div> <!-- 右侧侧边栏结束 -->
        <!-- 返回键 -->
        <div class="side-back"><img src="<?php echo IMG_PATH;?>sxylys/img/win2.png" alt="" /></div>
    </div>

    <?php include template("content","myfooter"); ?>
    <script type="text/javascript" src="<?php echo JS_PATH;?>sxylys/js/limei.js"></script>