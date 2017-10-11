<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <?php include template("content","myheader"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/limai.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/product_show.css" />
    <!-- ************ 主体部分 ************* -->
    <div class="list-main">
        <div class="lm-nav">
            <a href="<?php echo $CATEGORYS['9']['url'];?>" class="lm-product">关于我们</a>
            <div class="lm-line"></div>
            <div class="more">
                <!-- <div class="more-icon"></div> -->
                <a href="<?php echo siteurl($siteid);?>">返回</a>

            </div>
        </div>
        <!-- 产品图文列表 -->
        <!-- <h3 class="articel-title"><?php echo $title;?></h3>
        <div class="article-img">
            <div class="img-box">
                <img src="<?php echo $thumb;?>" alt="" />
            </div>
        </div> -->       
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1f7976f336b5fdcf9aadec6b4f424c12&action=lists&catid=%24catid&num=1&siteid=%24siteid&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'1',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
        <div class="article"><?php echo $v['content'];?></div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

    </div><!-- *************** 主体部分结束 *********-->


    <?php include template("content","myfooter"); ?>
    <!-- <script type="text/javascript" src="<?php echo JS_PATH;?>sxylys/js/limei.js"></script> -->