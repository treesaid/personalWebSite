<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><link rel="stylesheet" href="<?php echo CSS_PATH;?>uek/css/ld_pages.css">
        <!--***************翻页开始****************-->
        <div class="ld-pagebox<?php if($i==1) { ?> ld-page-show<?php } ?>">
            <!-- 后台引用方式 -->
            <div id="pages" class="text-c ld-pages"><?php echo $pages;?></div>

           <!-- 右边跳转到go -->
            <?php if($pages) { ?>
            <div class="ld-tiaozhuan">
                <form action="">
                    <div class="ld-goleft">
                        <span class="">跳转到</span>
                        <input type="text" name="pages" id="pages" class="ld-input"/>
                        <span>页</span>
                    </div>
                    <!-- <input type="button" name="跳转" class="ld-gobtn" value="Go"/> -->
                    <div class="ld-gobtn">Go</div>
                </form>
            </div>
            <?php } ?>
        </div><!--***************翻页结束****************-->
