<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>default_blue.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
 <script type="text/javascript" src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js" ></script>

<style>
body{background:none;}
</style>
</head>
<body onload="iframe_height()">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"comment\" data=\"op=comment&tag_md5=f753c25f98ef1b8d7a9599e794471e13&action=get_comment&commentid=%24commentid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$comment_tag = pc_base::load_app_class("comment_tag", "comment");if (method_exists($comment_tag, 'get_comment')) {$data = $comment_tag->get_comment(array('commentid'=>$commentid,'limit'=>'20',));}?>
<?php $comment = $data;?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<div id="bodyheight">
<form action="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=post&commentid=<?php echo $commentid;?>" method="post" onsubmit="return on_submit()">
<input type="hidden" name="title" value="<?php echo urlencode(($comment[title] ? $comment[title] : $title));?>">
<input type="hidden" name="url" value="<?php echo urlencode(($comment[url] ? $comment[url] : $url));?>">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"comment\" data=\"op=comment&tag_md5=71fd9313c9b343e002e68467d3174568&action=lists&commentid=%24commentid&siteid=%24siteid&page=%24_GET%5Bpage%5D&hot=%24hot&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$comment_tag = pc_base::load_app_class("comment_tag", "comment");if (method_exists($comment_tag, 'lists')) {$pagesize = 20;$page = intval($_GET[page]) ? intval($_GET[page]) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$comment_total = $comment_tag->count(array('commentid'=>$commentid,'siteid'=>$siteid,'hot'=>$hot,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($comment_total, $page, $pagesize, $urlrule);$data = $comment_tag->lists(array('commentid'=>$commentid,'siteid'=>$siteid,'hot'=>$hot,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
<?php if(!empty($data)) { ?>      
<div class="comment_button" style="display:none"><a href="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=init&commentid=<?php echo $commentid;?>&title=<?php echo urlencode(($comment[title] ? $comment[title] : $title));?>&url=<?php echo urlencode(($comment[url] ? $comment[url] : $url));?>&hot=0&iframe=1"<?php if(empty($hot)) { ?> class="on"<?php } ?>>最新</a> <a href="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=init&commentid=<?php echo $commentid;?>&title=<?php echo urlencode(($comment[title] ? $comment[title] : $title));?>&url=<?php echo urlencode(($comment[url] ? $comment[url] : $url));?>&hot=1&iframe=1"<?php if($hot) { ?> class="on"<?php } ?>>最热</a></div>
    
<!-- ************ 评论内容开始 *********** -->    
<div class="comment" style="box-sizing: border-box;width: 100%;height: auto;padding: 33px 73px 0 66px">
        <div class="pl-title"> 
            <strong>最新评论<b>|</b><span>RECENT REVIEWS</span></strong>
            <a class='show-more' href="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=init&commentid=<?php echo $commentid;?>" target="_blank">查看更多&gt;&gt;</a>
            
        </div>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <!-- <h5 class="title fn"><?php echo direction($r[direction]);?>  <?php if($r[userid]) { ?><?php echo get_nickname($r[userid]);?><?php } else { ?><?php echo $r['username'];?><?php } ?> </h5> -->
    <div class="content-box" style="width:100%;height:auto;margin-top:33px;">
         <div class="touxiang">
             <img src="<?php echo IMG_PATH;?>uek/images/ljg_images/xjn-rlogo.png" alt="" />
         </div>
         <div class="content" style="box-sizing: border-box;float: right;width: 890px;height: auto;background: #FAFAFA;border-radius: 10px;padding: 23px 120px 23px 35px; position: relative;border:none;color:#8D8D8D;margin:0">
         <!-- 用户信息 -->
            <div class="ljg-comment-info">
            <script type="text/javascript" src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip="+<?php echo $r['ip'];?>></script>
                <a href="javascript:;" class="location"><?php echo $r['direction'];?></a>
                <script>
                    // var ss = remote_ip_info['country']  + remote_ip_info['province']+ remote_ip_info['city'];
                    var ss =remote_ip_info['city'];
                    $(".location").html(ss+'网友');
                    console.log(ss);
                 </script> 
                <strong class="stor_1"></strong>
                <span color="#FF0000"><?php echo format::date($r[creat_at], 1);?></span>
                <!-- <span>&nbsp;&nbsp;2016-11-19&nbsp;&nbsp;&nbsp;12:23</span> -->
            </div><!-- 用户信息结束 -->
         <?php echo $r['content'];?>
            <div id="reply_<?php echo $r['id'];?>" style="display:none"></div>
         </div>
    </div>
  <?php $n++;}unset($n); ?>
</div>

 <!-- <div id="pages" class="text-r"><?php echo $pages;?></div> -->
 <?php } ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<div class="bk10"></div>


<!-- ************ 留言板开始 *********** -->
      <div class="comment-form">
        <h5>
            <strong>留言板<b>|</b><span>MESSAGE BOARD</span></strong>
            
        </h5>
        <!-- **********  内容 *********** -->
                <div class="ljg-message-content clearfix">
                    <!-- ******  添加 ******* -->
                    <div class="ljg-message-add">
                        <a href="javascript:;"></a>
                    </div>
                    <!-- ******  输入 ******* -->
                    <div class="ljg-message-input-container">
                        <input type="text" placeholder="请批阅......" id="input" name='content'/>
                    </div>
                </div><!-- 内容结束 --><br>
                <div class="ljg-message-prompt">
                    还可输入 <span class="ljg-prompt-text">300</span> 字
                </div>
        <?php if($setting[code]) { ?>
        
          <label>验证码：<input type="text" name="code"  class="input-text" id="yzmText" onfocus="var offset = $(this).offset();$('#yzm').css({'left': +offset.left-8, 'top': +offset.top-$('#yzm').height()});$('#yzm').show();$('#yzmText').data('hide', 1)" onblur='$("#yzmText").data("hide", 0);setTimeout("hide_code()", 3000)' /></label>
          <div id="yzm" class="yzm"><?php echo form::checkcode();?><br />点击图片更换</a></div>
        <div class="bk10"></div>
        <?php } ?>
        <input type="submit" value="评论" class="xjn-submit" />&nbsp;&nbsp;&nbsp;&nbsp;<?php if($userid) { ?><?php echo get_nickname();?> <a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=logout&forward=<?php echo urlencode(($comment[url] ? $comment[url] : $url));?>"  target="_top">退出</a><?php } else { ?><a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login&forward=<?php echo urlencode(($comment[url] ? $comment[url] : $url));?>" target="_top" class="blue" style="display:none">登录</a><a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=register" class="blue" style="display:none" target="_top">注册</a> <?php if(!$setting[guest]) { ?><span style="color:red">需要登陆才可发布评论</span><?php } ?><?php } ?>
      </div>  
</form>   

<script type="text/javascript">
var loc=document.querySelector('.content-box #location');
var sub=document.querySelector('.xjn-submit');

$('.xjn-submit').click(function(){
  console.log(this)
})




// $('.xjn-submit').delegate('.content-box #location', 'click', function() {
//     var ss = remote_ip_info['country']  + remote_ip_info['province']+ remote_ip_info['city'];
//         // document.getElementByIdx_x_x("<%=HiddenField1.ClientID %>").value = ss;
//         // console.log(ss.slice(2,4));
//         // loc.innerHTML=ss.slice(2,4);
//         loc.innerHTML=ss.slice(2,4);
//         alert(1);
// });
// sub.onclick=function(){
//    var ss = remote_ip_info['country']  + remote_ip_info['province']+ remote_ip_info['city'];
//         // document.getElementByIdx_x_x("<%=HiddenField1.ClientID %>").value = ss;
//         // console.log(ss.slice(2,4));
//         // loc.innerHTML=ss.slice(2,4);
//         loc.innerHTML=ss.slice(2,4);
//         console.log(ss.slice(2,4));
//         // alert(1);
// }
// function ipmsg() {
//         var ss = remote_ip_info['country']  + remote_ip_info['province']+ remote_ip_info['city'];
//         // document.getElementByIdx_x_x("<%=HiddenField1.ClientID %>").value = ss;
//         console.log(ss.slice(2,4));
//     }
function support(id, commentid) {
    $.getJSON('<?php echo APP_PATH;?>index.php?m=comment&c=index&a=support&format=jsonp&commentid='+commentid+'&id='+id+'&callback=?', function(data){
        if(data.status == 1) {
            $('#support_'+id).html(parseInt($('#support_'+id).html())+1);
        } else {
            alert(data.msg);
        }
    });
}

function reply(id,commentid) {
    var str = '<form action="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=post&commentid='+commentid+'&id='+id+'" method="post" onsubmit="return on_submit()"><textarea rows="10" style="width:100%" name="content"></textarea><?php if($setting[code]) { ?><label>验证码：<input type="text" name="code" id="yzmreplay" class="input-text" onfocus="var offset = $(this).offset();$(\'#yzm\').css({\'left\': +offset.left-8, \'top\': +offset.top-$(\'#yzm\').height()});$(\'#yzm\').show();$(\'#yzmText\').data(\'hide\', 1)" onblur=\'$("#yzmText").data("hide", 0);setTimeout("hide_code()", 3000)\' /></label><?php } ?>  <div class="btn"><input type="submit" value="发表评论" /></div>&nbsp;&nbsp;&nbsp;&nbsp;<?php if($userid) { ?><?php echo get_nickname();?> <a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=logout&forward=<?php echo urlencode(($comment[url] ? $comment[url] : $url));?>" target="_top">退出</a><?php } else { ?><a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login&forward=<?php echo urlencode(($comment[url] ? $comment[url] : $url));?>" class="blue" target="_top">登录</a> | <a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=register" class="blue" target="_top">注册</a>  <?php if(!$setting[guest]) { ?><span style="color:red">需要登陆才可发布评论</span><?php } ?><?php } ?></form>';

    $('#reply_'+id).html(str).toggle();
    iframe_height();
}

function hide_code() {
    if ($('#yzmText').data('hide')==0) {
        $('#yzm').hide();
    }
}
function on_submit() {
    <?php if($setting[code]) { ?>
        var checkcode = $("#yzmText").val() == '' ? $("#yzmreplay").val() : $("#yzmText").val();
        var res = $.ajax({
            url: "<?php echo APP_PATH;?>index.php?m=pay&c=deposit&a=public_checkcode&code="+checkcode,
            async: false
        }).responseText;
    <?php } else { ?>
        var res = 1;
    <?php } ?>
    if(res != 1) {
        alert('验证码错误');
        return false;
    } else {
        iframe_height(200);
        $('#bodyheight').hide();
        $('#loading').show();
        return true;
    }
}
function iframe_height(height) {
    if (!height) {
        var height = document.getElementById('bodyheight').scrollHeight;
    } 
    $('#top_src').attr('src', "<?php echo $domain;?>js.html?"+height+'|'+<?php if($comment['total']) { ?><?php echo $comment['total'];?><?php } else { ?>0<?php } ?>);
}



</script>
</div>
<iframe width='0' id='top_src' height='0' src=''></iframe>
<div class="hidden text-c" id="loading">
<img src="<?php echo IMG_PATH;?>msg_img/loading.gif" /> 正在提交中...
</div>
</body>
<script src="<?php echo JS_PATH;?>uek/js/jquery.min.js"></script>
<script src="<?php echo JS_PATH;?>uek/js/ljg_xwzx.js"></script>
<script src="<?php echo JS_PATH;?>uek/js/ld_pages.js"></script>
<script src="<?php echo JS_PATH;?>uek/js/jquery.placeholder.min.js"></script>
</html>