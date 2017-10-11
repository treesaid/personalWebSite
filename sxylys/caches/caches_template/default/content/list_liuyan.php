<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <?php include template("content","myheader"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/limai.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/product_show.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sxylys/css/liuyan.css" />
    <!-- ************ 留言区 ************* -->
    <div class="ly-box">
        <form action="">
            <div class="name">
                <input type="text" placeholder="您的尊称" />
            </div>
            <div class="name">
                <input type="text" placeholder="联系方式" />
            </div>    
            <div class="ly">
                <textarea name="" placeholder="请填写您的留言内容"></textarea> 
            </div>
            <button>提交</button>
        </form>
    </div> 
    <?php include template("content","myfooter"); ?>
    <script type="text/javascript" src="<?php echo JS_PATH;?>sxylys/js/limei.js"></script>