<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <?php include template("content","myheader"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/limai.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/product_show.css" />
    <!-- ************ 主体部分 ************* -->
    <div class="list-main">
        <div class="lm-nav">
            <a href="<?php echo $CATEGORYS['9']['url'];?>" class="lm-product">成功案例</a>
            <div class="lm-line"></div>
            <!-- <div class="lm-last">藜麦</div> -->
            <div class="more">
                <div class="more-icon"></div>
                <a href="#">查看全部</a>
            </div>
        </div>
        <!-- 产品图文列表 -->

        <ul class="cgal">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=53c97fe9bd862358b50d56a8d2bccc12&action=lists&catid=%24catid&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
            <?php $i=0?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <?php $i++?>
            <li<?php if($i%2==0) { ?> class="border-right"<?php } ?>>
                <a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" alt="" /></a>
            </li>
            <!-- <li><img src="" alt="" /></li> -->
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        
    </div><!-- *************** 主体部分结束 *********-->

    <!-- 右侧侧边栏 -->
    <!-- 遮罩 -->
    <div class="side-mask mask-hide"></div>
    <div class="side-box side-hide">
        <div class="side">
            <div class="side-title">成功案例</div>
            <ul class="side-list">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c115bdb98ffa11f2eb2a7a7d98e743e1&action=category&catid=%24top_parentid&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
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