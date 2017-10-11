<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!-- 分享 -->
<link rel="stylesheet" href="<?php echo CSS_PATH;?>uek/css/ld_share.css">
        <div class="ld-fxdi clearfix">
        
            <!-- 左侧社会化分享 -->
            <div class="bdsharebuttonbox ld-fenxiang">
                <span class="ld-firfx">可分享到：</span>
                <a href="javascript:;" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                <a href="javascript:;" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                <a href="javascript:;" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                <a href="javascript:;" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                <a href="javascript:;" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
            </div>
            <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

            <!-- 右侧点赞 -->
            <?php if(module_exists('mood')) { ?><script type="text/javascript" src="<?php echo APP_PATH;?>index.php?m=mood&c=index&a=init&id=<?php echo id_encode($catid,$id,$siteid);?>"></script><?php } ?>
        </div>