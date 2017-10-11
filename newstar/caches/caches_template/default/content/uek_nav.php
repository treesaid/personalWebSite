<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>山西星起点艺术培训</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>uek/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>uek/css/public.css" />

    <!-- 站长统计 -->
  <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?f698dbd13d228d7d9e49c7e2d90aee33";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
    <!-- 站长统计结束 -->

</head>
<body>
	<!-- ***************************  页头 ****************************  -->
        <div class="ljg-header-container">
            <div class="ljg-header-inner clearfix">
                <!-- ************  logo ************  -->
                <div class="ljg-logo-container">
                    <a href="<?php echo siteurl($siteid);?>"><span>山西星起点艺术培训中心</span><br/><span class="english" style="padding-top:0;font-family:苹方">star dream</span></a>
                </div><!-- logo结束 -->

                <!-- ************  商标 ************  -->
                <div class="ljg-brand-container">
                    <ul class="ljg-brand-ul clearfix">
                        <li class="ljg-brand-lis">
                            <a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/ljg-brand-2.png"/></a>
                        </li>
                        <li class="ljg-brand-lis">
                            <a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/ljg-brand-3.png"/></a>
                        </li>
                        <li class="ljg-brand-lis">
                            <a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/ljg-brand-4.png"/></a>
                        </li>
                    </ul>
                </div><!-- 商标结束 -->
            </div><!-- inner结束 -->
        </div><!-- 页头结束 -->


        <!-- ***************************  导航 ****************************  -->
        <div class="ljg-nav-container">
            <div class="ljg-nav-inner">
                <ul class="ljg-nav-ul clearfix">
                    <!-- 首页 -->
                    <li class="ljg-nav-lis">
                        <a href="<?php echo siteurl($siteid);?>" class="ljg-nav-link<?php if(!$catid) { ?> ljg-nav-link-active ljg-nav-link-now<?php } ?>">首页</a>         
                    </li>

                    <!-- 其他栏目 -->
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2ae3a2d409e2c502d8086f35238744c4&action=category&catid=0&siteid=%24siteid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'limit'=>'20',));}?>
                        <?php $i=0?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                            <li class="ljg-nav-lis">
                                <a href="<?php if($i==0) { ?>javascript:;<?php } else { ?><?php echo $v['url'];?><?php } ?>" class="ljg-nav-link<?php if($v[catid]==$catid || $top_parentid==$v[catid]) { ?> ljg-nav-link-active ljg-nav-link-now<?php } ?>"><?php echo $v['catname'];?></a>
                                <ul class="ljg-nav-hide-ul <?php if($i==5) { ?>ljg-nav-hide-ul-last<?php } ?>">
                                    <span class="ljg-nav-hide-line ljg-nav-hide-line-left"></span>
                                    <span class="ljg-nav-hide-line ljg-nav-hide-line-right"></span>
                                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a3b70d2918c34586c1cbd0f892db1bd9&action=category&catid=%24v%5Bcatid%5D&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$v[catid],'order'=>'listorder DESC','limit'=>'20',));}?>
                                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                            <li class="ljg-nav-hide-lis">
                                                <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                                            </li>
                                        <?php $n++;}unset($n); ?>
                                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </li>
                        <?php $i++?>
                        <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <!-- 其他栏目结束 -->

                </ul>
            </div><!-- inner结束 -->
        </div><!-- 导航结束 -->
