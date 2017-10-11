
$(function(){
    // ******************************  banner  ************************//

        /**
        * ------------------------------------------------------------------
        * 透明度变化轮播
        * ------------------------------------------------------------------
        */

    function opacityCarousel(banner,pic,slide,clickBtns,time){
        // 获取元素
        /*
            imgs:图片
            btns:滑动按钮
            imgsIndex:当前图片
            btnsIndex:当前滑动按钮
            banner:框架
            time:切换时间
            clickBtns:左右切换按钮
            flag:开关控制点击过快bug
            num:下标
            zIndex:层级
        */
       
        var imgs=$("li",pic);
        var btns=$("li",slide);
        var imgsIndex=imgs.first();
        var btnsIndex=btns.first();
        var banner=banner;
        var time=time||3000;
        var num=0;
        var flag=true;
        var zIndex=1;

        // 动画
        var t=setInterval(bannerFun,time);
        function bannerFun(preNext){
            if(!flag){
                return;
            }
            flag=false;
            var preNext=preNext||"next";
            if(preNext=="next"){
                num++;
                if(num>imgs.length-1){
                    num=0;
                }
            }else if(preNext=="pre"){
                num--;
                if(num<0){
                    num=imgs.length-1;
                }       
            }
            imgsIndex.fadeOut(800).parent().children().eq(num).css({zIndex:zIndex++}).fadeIn(800,function(){
                flag=true;
            });
            setTimeout(function(){
                btns.filter(btnsIndex).removeClass("active").end().eq(num).addClass("active");
                imgsIndex=imgs.eq(num);
                btnsIndex=btns.eq(num);
            },100);        
        }

        // 鼠标移入移出
        banner.hover(function(){
            clearInterval(t);
            if(clickBtns){
                clickBtns.fadeIn();
            }
            
        },function(){
            t=setInterval(bannerFun,2000);
            if(clickBtns){
                clickBtns.fadeOut();
            }
        });


        if(clickBtns){
            // 阻止鼠标默认事件
            clickBtns.mousedown(function(e){
                e.preventDefault();
                e.returnValue=false;
            });

            // 点击左右切换
            clickBtns.first().click(function(){
                bannerFun("pre");
            });
            clickBtns.last().click(function(){
                bannerFun("next");
            });
        }
        

        //滑动选择
        btns.mouseover(function(){
            if(!flag){
                return;
            }
            flag=false;
            var index=$(this).index();
            if(index==num){
                flag=true;
                return;
            }else{
                imgsIndex.fadeOut(300).parent().children().eq(index).css({zIndex:zIndex++}).fadeIn(300,function(){
                    flag=true;
                });
                btns.filter(btnsIndex).removeClass("active").end().eq(index).addClass("active");
                imgsIndex=imgs.eq(index);
                btnsIndex=btns.eq(index);
                num=index;
            }
        });
    }


    // 调用
    function bannerFun(){
        var banner=$(".ljg-banner-container");
        var pic=$(".ljg-banner-ul");
        // $("li",pic).each(function(index){
        //     var bannerWidth=$(this).innerWidth();
        //     $(this).css({marginLeft:-bannerWidth/2+"px"});
        //     $(".ljg-banner-lis-active",".ljg-banner-container").css({display:'block'});
        // });
        $(".ljg-banner-lis img",".ljg-banner-container").each(function(index){
            var dataImg=$(this).attr("data-src");
            $(this).parent().css({backgroundImage:'url('+dataImg+')'});
        });
        var slide=$(".ljg-banner-slide");
        var time=3000;
        opacityCarousel(banner,pic,slide,undefined,time);
    }
    bannerFun();


});