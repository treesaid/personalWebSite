<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","uek_nav"); ?>
<?php include template("content","uek_inside_banner"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>uek/css/xjn_xwzx.css" />
<!-- <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>uek/css/xjn-index-footer.css" /> -->
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>uek/css/ld_pages.css" />

    <div class="xjn-container">
        <!-- ************* 内页公共样式左边开始 ******************** -->
        <!-- 面包屑导航开始 -->
        <div class="xjn-mbxnav">
            <a href="<?php echo siteurl($siteid);?>" class='xjn-home'>首页</a>
            <span>&gt;</span>
            <a href="<?php echo $CATEGORYS['16']['url'];?>" class='xjn-category'><?php echo $CATEGORYS['16']['catname'];?></a>
        </div><!-- 面包屑导航结束 -->

        <div class="xjn-content">
        <?php include template("content","side_yyxw_nav2"); ?>
            <!--*********  二级页面左边导航开始 *************** -->
            <!-- <div class="xjn-lside">
                <div class="xjn-title">
                    <h4 class='xjn-titeng'><span>NEWS</span> INFORMATION</h4>
                    <h3 class='xjn-titchn'><span>新闻</span>资讯</h3>
                </div>
                <div class="xjn-line"></div>
                <ul class="xjn-catlist">
                    <li class="xjn-list active">
                        <a href="javascript:;"><span>·</span>班级活动</a>
                    </li>
                    <li class="xjn-list">
                        <a href="javascript:;"><span>·</span>媒体报道</a>
                    </li>
                    <li class="xjn-list">
                        <a href="javascript:;"><span>·</span>技术交流</a>
                    </li>
                    <li class="xjn-list">
                        <a href="javascript:;"><span>·</span>学院寄语</a>
                    </li>
                </ul>
             </div> --><!--*********  二级页面左边导航结束 ***************-->
             <!-- **********  新闻资讯内容右侧开始 ************** -->
             <div class="xjn-newcon">
                <h3 class="xjn-newstitle">星起点新闻动态</h3>
                <!-- *********新闻列表开始******* -->
                <ul class="xjn-newlist">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4c851bb3ec4fe875cd5a2a54f18cdee7&action=lists&catid=%24catid&num=4&page=%24page&order=id+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 4;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id ASC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id ASC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $i=$catid?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li data-catid="<?php echo $i;?>" class='xjn-newsitem ld-usepage'>
                        <a href="<?php echo $r['url'];?>" class="xjn-itemleft">
                            <img src="<?php echo $r['thumb'];?>" alt="news" />  
                        </a>
                        <div class="xjn-itemright">
                            <div class="xjn-right-tit">
                                <a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
                                <span class="xjn-new"></span>
                                <span class="xjn-hot"></span>
                                <p class="xjn-time">
                                    <i></i>
                                    <!-- <?php var_dump($data)?> -->
                                    <span class='xjn-datatime'><?php echo date("Y-m-d",$r[updatetime]);?></span>
                                </p>
                            </div>
                            <p class="xjn-right-con">
                                <?php echo str_cut(strip_tags($r[content]),330,'&hellip;');?><a href="<?php echo $r['url'];?>" class='xjn-more'>展开></a>
                            </p>
                        </div>
                    </li>
                    <?php $n++;}unset($n); ?>
                </ul><!-- *********新闻列表开始******* -->  
              </div>
        </div>
        <!-- *****翻页器*** -->
        <div class="xjn-fanye">
                <!-- *****调用翻页器*** -->
                <?php include template("content","uek_pages"); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>      
        </div>
    </div>
<?php include template("content","uek_footer"); ?>
</body>
<script src="<?php echo JS_PATH;?>uek/js/ld_pages.js"></script>
<script src="<?php echo JS_PATH;?>uek/js/xjn_xwzx.js"></script>
</html>