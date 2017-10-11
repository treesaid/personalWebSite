
$(function(){

    // ******************************  导航  ************************// 

    // 鼠标移入移出事件
    
    $(".ljg-nav-link").each(function(index){
        $(".ljg-nav-hide-ul",$(this).parent()).css({marginLeft:-$(".ljg-nav-hide-ul",$(this).parent()).innerWidth()/2+"px"});
        var progress;
        $(".ljg-nav-link").eq(index).parent().hover(function(){
            function overFun(){
                $(".ljg-nav-link").eq(index).addClass('ljg-nav-link-active');
                $(".ljg-nav-hide-ul",$(".ljg-nav-link").eq(index).parent()).filter(':not(:animated)').slideDown();
            }
            progress=setTimeout(overFun,200);
        },function(){
            clearTimeout(progress);
            if($(".ljg-nav-hide-ul",$(this)).length==1){
                $(".ljg-nav-hide-ul",$(this)).slideUp(function(){
                    if($(".ljg-nav-link").eq(index).hasClass("ljg-nav-link-now")){
                        return;
                    }else{
                        $(".ljg-nav-link").eq(index).removeClass('ljg-nav-link-active');
                    }                        
                });
            }else{
                if($(".ljg-nav-link").eq(index).hasClass("ljg-nav-link-now")){
                    return;
                }else{
                    $(".ljg-nav-link").eq(index).removeClass('ljg-nav-link-active');
                }
            }
        }); 
    });

    // ******************************  内容页banner  ************************//
    function bannerFun(){
        $(".ljg-banner-lis img",".ljg-banner-container-inside").each(function(index){
            var dataImg=$(this).attr("data-src");
            $(this).parent().css({backgroundImage:'url('+dataImg+')'});
        });
    }
    bannerFun();
    


})