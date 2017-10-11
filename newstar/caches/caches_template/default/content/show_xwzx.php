<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","uek_nav"); ?>
<?php include template("content","uek_inside_banner"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>uek/css/ld_pages.css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>uek/css/ly_tab.css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>uek/css/ljg_xwzx.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>uek/css/previous_next.css" />
<!-- ********************  详情内容  ***********************  -->
        <div class="ljg-details-container">
            <!-- **************  面包屑 *****************  -->
            <div class="ljg-crumbs">
                 <a href="<?php echo siteurl($siteid);?>">首页</a>
                <em>&gt;</em>
                <a href="<?php echo $CATEGORYS['18']['url'];?>"><?php echo $CATEGORYS['18']['catname'];?></a>
                <em>&gt;</em>
                <a href="javascript:;" class="ljg-index">新闻详情</a>
            </div><!-- 面包屑结束 -->

            <!-- **************  文章  *****************  -->
            <div class="ljg-content-container ljg-article-container">
                <!-- ********  文章标题 ******** -->
                <div class="ljg-article-title">
                    <h1><?php echo $title;?></h1>
                    <h2><?php echo $stitle;?></h2>
                </div><!-- 文章标题结束 -->

                <!-- ********  文章信息 ******** -->
                <div class="ljg-article-info">
                    <!-- 左边线 -->
                    <div class="ljg-line ljg-line-left"></div>
                    <!-- 浏览量 -->
                    <script src="<?php echo JS_PATH;?>uek/js/jquery.min.js"></script>
                    <span class="ljg-info-text ljg-info-browse">
                        <span id="hits"><script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script> </span>人浏览
                    </span>
                    <!-- 日期 -->
                    <span class="ljg-info-text ljg-info-date">
                        <?php echo $inputtime;?>
                    </span>
                    <!-- 右边线 -->
                    <div class="ljg-line ljg-line-right"></div>
                </div><!-- 文章信息结束 -->

                <!-- ********  文章内容 ******** -->
                <div class="ljg-article-content">
                    <?php echo $content;?>
                </div><!-- 文章内容结束 -->
                 <!-- **********  分享 *********** -->
                    <?php include template('content','uek_share'); ?>
                   <!-- 分享结束 -->
                <!-- 上一篇和下一篇 -->
                <div class="ly-post-box">
                    <div class="ly-post"><span>上一篇 : </span><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></div>
                    <div class="ly-post"><span>下一篇 : </span><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></div>
                </div><!-- 上一篇和下一篇结束-->
                <!-- 你可能感兴趣的问题 -->
                <div class="xjn-interest">
                    <div class="xjn-inter-title"> 
                        <strong>你可能感兴趣的内容<b>|</b><span>INTERESTING NEWS</span></strong>
                    </div>
                     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d86d78e1b3bb78ca101326f1a87b4744&action=relation&catid=%24catid&num=5&keywords=%24rs%5Bkeywords%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'relation')) {$data = $content_tag->relation(array('catid'=>$catid,'keywords'=>$rs[keywords],'limit'=>'5',));}?>
<!--content指调用内容模块下数据，action指执行获取相关信息方法，catid设置所属栏目，num设置调用数量，keywords设置相关关键词-->
                          <?php if($data) { ?>
                          <div class="xjn-artlist">
                               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <p class="xjn-art"><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></p>
                               <?php $n++;}unset($n); ?>
                          </div>
                          <?php } ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div><!-- 文章结束 -->
            
        
            <!-- ***************** 评论详情 ****************-->
            <?php if($allow_comment && module_exists('comment')) { ?>
                <iframe src="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=init&commentid=<?php echo id_encode("content_$catid",$id,$siteid);?>&iframe=1" width="100%" height="100%" id="comment_iframe" frameborder="0" scrolling="no"></iframe>
          <?php } ?>
        </div><!-- 详情内容结束 -->

<?php include template("content","uek_footer"); ?>
</body>
<script src="<?php echo JS_PATH;?>uek/js/ld_pages.js"></script>
<script src="<?php echo JS_PATH;?>uek/js/ld_zxdk.js"></script>
<script src="<?php echo JS_PATH;?>uek/js/ly_tab.js"></script>
<script src="<?php echo JS_PATH;?>uek/js/ljg_xwzx.js"></script>
<script src="<?php echo JS_PATH;?>uek/js/jquery.placeholder.min.js"></script>
</html>
    