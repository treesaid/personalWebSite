<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <?php include template("content","myheader"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/limai.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/product_show.css" />
    <!-- ************ 主体部分 ************* -->
    <div class="list-main">
    
        <!-- 产品图文列表 -->
        <h3 class="articel-title"><?php echo $title;?></h3>
        <div class="article-img">
            <div class="img-box">
                <img src="<?php echo $thumb;?>" alt="" />
            </div>
        </div>       
        <div class="article"><?php echo $content;?></div>
        
    </div><!-- *************** 主体部分结束 *********-->


    <?php include template("content","myfooter"); ?>
    <!-- <script type="text/javascript" src="<?php echo JS_PATH;?>sxylys/js/limei.js"></script> -->