<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <?php include template("content","myheader"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/limai.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/product_show.css" />
    <!-- ************ 主体部分 ************* -->
    <div class="list-main">
        <div class="lm-nav">
            <a href="<?php echo $CATEGORYS['9']['url'];?>" class="lm-product">藜麦产品</a>
            <div class="lm-line"></div>
            <div class="lm-last">藜麦</div>
            <div class="more">
                <div class="more-icon"></div>
                <a href="#">查看全部</a>
            </div>
        </div>

        <!-- 产品图文列表 -->
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cc9ed253a36a9ad1b29d753b61c348ef&action=lists&catid=%24catid&num=3&moreinfo=1&order=listorder+ASC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 3;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'moreinfo'=>'1','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
        <!-- <?php var_dump($data)?> -->
        <div class="product-show">
            <div class="pro-left"><a href="#"><img src="<?php echo $v['thumb'];?>" alt="" /></a></div>
            <div class="pro-right">
                <h2 class="pro-title"><?php echo str_cut(strip_tags($v[title]),39,'&hellip;');?> </h2>
                <a href="<?php echo $v['url'];?>">查看</a>
                <a href="<?php echo $CATEGORYS['15']['url'];?>">咨询</a>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        
    </div><!-- *************** 主体部分结束 *********-->

    <!-- 右侧侧边栏 -->
    <!-- 遮罩 -->
    <div class="side-mask mask-hide"></div>
    <div class="side-box side-hide">
        <div class="side">
            <div class="side-title">藜麦产品</div>
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