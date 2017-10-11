<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/header.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/footer.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/index.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/swiper.min.css" />
</head>
<body>
    <!-- ******* banner轮播图 ************* -->
    <div class="banner swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="#"><img src="<?php echo IMG_PATH;?>sxylys/img/banner1.jpg" alt=""></a></div>
            <div class="swiper-slide"><a href="#"><img src="<?php echo IMG_PATH;?>sxylys/img/banner2.jpg" alt=""></a></div>
            <div class="swiper-slide"><a href="#"><img src="<?php echo IMG_PATH;?>sxylys/img/banner3.jpg" alt=""></a></div>
            <div class="swiper-slide"><a href="#"><img src="<?php echo IMG_PATH;?>sxylys/img/banner4.jpg" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
    </div><!-- banner 结束 -->
    <!-- ************ 导航 ***************** -->
    <ul class="nav">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0fda1a17e134c8cd45a8e3f6f28ac244&action=category&catid=0&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
        <li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>