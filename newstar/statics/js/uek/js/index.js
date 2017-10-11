/* 
* @Author: Marte
* @Date:   2016-11-19 23:12:17
* @Last Modified by:   Marte
* @Last Modified time: 2016-12-18 00:45:48
*/

$(document).ready(function(){
    // tabs 选项卡
    /*tab-btn-lis 选项卡切换选项
     *tab-con-lis 选项卡切换内容
     *
     *
    */
   function xxk(model){
    var tablis=model.find(".tab-btn-lis");
    var conlis=model.find(".tab-con-lis");
    tablis.each(function(index){
      $(this).hover(function(){
        if($(this).hasClass("tab-btn-lis-active")){
          return;
        }else{
          tablis.removeClass("tab-btn-lis-active");
          $(this).addClass("tab-btn-lis-active");
          conlis.removeClass("tab-con-lis-active");
          conlis.eq(($(this).index())/2).addClass("tab-con-lis-active");
          var szhindex=($(this).index())/2+1;
          tuozhuai(".szh-xyzp-right"+szhindex);
          szhtuo(".ly-problem-sz"+szhindex);

        }
      })
    })
  }
  xxk($(".jyzs"));
  xxk($(".sztd"));
  xxk($(".xyzp"));
  xxk($(".yysp"));
  xxk($(".yyxw"));
  xxk($(".rmwt"));
  xxk($(".ryzs"));
  xxk($(".hzqy"));


   $(".szh-model").each(function(index,value){
    // 模块选型卡
      $(".szh-model").eq(index).find('.tab-btn-lis').mouseover(function(){
          
          // 学员作品 拖拽复位
          $(".szh-model").eq(index).find(".szh-zp-radius").css("left","0");
          $(".szh-model").eq(index).find(".szh-zps").css("left","0");

          // 热门问题 拖拽复位
          $(".szh-model").eq(index).find(".szh-zp-radiuspro").css("left","0");
          $(".szh-model").eq(index).find(".ly-problem-box").css("marginLeft","0");

          // 热门问题 默认选项
          // $(".szh-model").eq(index).find(".ly-problem").removeClass('ly-problem-active').first().addClass('ly-problem-active');
          // $(".szh-model").eq(index).find(".ly-problem-top").removeClass('ly-problem-top-active').first().addClass('ly-problem-top-active');
          // $(".szh-model").eq(index).find(".ly-problem-head-h1").removeClass('ly-problem-head-h1-active').first().addClass('ly-problem-head-h1-active');
          // $(".szh-model").eq(index).find(".ly-problem-head-r-h2").removeClass('ly-problem-head-r-active').first().addClass('ly-problem-head-r-active');
      });
   });
    // 科学实训
    var lyn_sciencelis=$(".lyn-science-lis");
    lyn_sciencelis.each(function(index){
        $(this).hover(function(){
            if($(this).find(".lyn-science-green").hasClass("lyn-green")){
              return;
            }else if(!$(this).find(".lyn-science-green").hasClass("lyn-green")){
              lyn_sciencelis.find(".lyn-green").animate({height:5},600).removeClass("lyn-green");
              $(this).find(".lyn-science-green").animate({height:263},600).addClass("lyn-green");
            }
        })
    })
    $(".lyn-science-button").hover(function(){
        $(this).addClass("lyn-science-buttonhover");
    },function(){
        $(this).removeClass("lyn-science-buttonhover");
    })

    //科学实训第一块倒计时转化
    var arr1=str1.split("-");
    var nowstr1=arr1.join("/");
    var future1=new Date(nowstr1);
    //百分比变化第一块变化
    var science_bili1=percent(future1,str11);
    $(".lyn-science-contains").find(".lyn-science-per").eq(0).find(".lyn-science-pernum").find("span").html(100-science_bili1);
    $(".lyn-science-contains").find(".lyn-science-per").eq(0).find(".lyn-science-wave").css({top:-(1-science_bili1/100)*135});
    
    //科学实训第二块倒计时转化
    var arr2=str2.split("-");
    var nowstr2=arr2.join("/");
    var future2=new Date(nowstr2);
    //百分比变化第二块变化
    var science_bili2=percent(future2,str22);
    $(".lyn-science-contains").find(".lyn-science-per").eq(1).find(".lyn-science-pernum").find("span").html(100-science_bili2);
    $(".lyn-science-contains").find(".lyn-science-per").eq(1).find(".lyn-science-wave").css({top:-(1-science_bili2/100)*135});

    //百分比公用函数
    function percent(future,str){
      var arr=getDay(future);
      var djs_day=arr[0];
      var begin_day=new Date(str);
      var length_time=future.getTime()-begin_day.getTime();
      var zong_day=Math.floor(length_time/(24*60*60*1000));
      var science_bili=Math.floor(djs_day/zong_day*100);
      return science_bili;
    }

    //科学实训第三块倒计时转化
    var arr3=str3.split("-");
    var nowstr3=arr3.join("/");
    var future3=new Date(nowstr3);
    //百分比变化第三块变化
    var science_bili3=percent(future3,str33);
    $(".lyn-science-contains").find(".lyn-science-per").eq(2).find(".lyn-science-pernum").find("span").html(100-science_bili3);
    $(".lyn-science-contains").find(".lyn-science-per").eq(2).find(".lyn-science-wave").css({top:-(1-science_bili3/100)*135});

    //共用的函数
    function getDay(future){
      var now=new Date();
      var arr=[];
      var length=future.getTime()-now.getTime();
      var day=Math.floor(length/(24*60*60*1000));
      arr.push(day);
      length%=(24*60*60*1000);
      var hour=Math.floor(length/(60*60*1000));
      arr.push(hour);
      length%=(60*60*1000);
      var minute=Math.floor(length/(60*1000));
      arr.push(minute);
      length%=(60*1000);
      var second=Math.floor(length/1000);
      arr.push(second);
      return arr;
    }
    //科学实训第一块倒计时显示
    var lyn_time1=$(".lyn-science-contains").find(".lyn-science-time").eq(0);
    var span1=lyn_time1.find(".lyn-djss");
    var t1=setInterval(show1,1000);
    function show1(){
      var arr=getDay(future1);
      for(var i=0;i<span1.length;i++){
        span1[i].innerHTML=arr[i];
      }
    }
    //科学实训第二块倒计时显示
    var lyn_time2=$(".lyn-science-contains").find(".lyn-science-time").eq(1);
    var span2=lyn_time2.find(".lyn-djss");
    var t2=setInterval(show2,1000);
    function show2(){
      var arr=getDay(future2);
      for(var i=0;i<span2.length;i++){
        span2[i].innerHTML=arr[i];
      }
    }
    //科学实训第三块倒计时显示
    var lyn_time3=$(".lyn-science-contains").find(".lyn-science-time").eq(2);
    var span3=lyn_time3.find(".lyn-djss");
    var t3=setInterval(show3,1000);
    function show3(){
      var arr=getDay(future3);
      for(var i=0;i<span3.length;i++){
        span3[i].innerHTML=arr[i];
      }
    }
    
    
    // 师资团队
    // swiper.js
    var mySwiper = new Swiper('.swiper-container1',{
      slidesPerView : 4,
      slidesPerGroup : 4,
      spaceBetween:40
    })
    var mySwiper = new Swiper('.swiper-container2',{
      slidesPerView : 4,
      slidesPerGroup : 4,
      spaceBetween:40
    })
    var mySwiper = new Swiper('.swiper-container3',{
      slidesPerView : 4,
      slidesPerGroup : 4,
      spaceBetween:40
    })
    var lyn_team=$(".lyn-team");
    lyn_team.each(function(index){
      $(this).find(".lyn-team-lis").hover(function(e){
        var ev=e||window.event;
        if(ev.preventDefault){
            ev.preventDefault();
        }else{
            ev.returnValue=false;
        }
        $(this).parent().find(".lyn-team-lis").removeClass("lyn-team-lishover");
        $(this).addClass("lyn-team-lishover"); 
      })
    })

    // 课程体系    
    $(".lyn-kecheng-xxka").each(function(index){
        var lyn_kecheng_lis=$(this).find(".lyn-kecheng-lis");
        lyn_kecheng_lis.each(function(index){
            $(this).hover(function(){
                lyn_kecheng_lis.removeClass("lyn-kecheng-lishover");
                $(this).addClass("lyn-kecheng-lishover");
            })
        })    
    })  
    var lyn_kecheng_chance=$(".lyn-kecheng-chance");
    lyn_kecheng_chance.each(function(index){
        $(this).click(function(){
            if($(this).hasClass("lyn-kecheng-chancehover")){
                return;
            }
            lyn_kecheng_chance.css({left:58}).removeClass("lyn-kecheng-chancehover");
            $(".lyn-kecheng-chance1").css({background:"#2691FD"});
            $(".lyn-kecheng-chance2").css({background:"#94D43B"});
            $(".lyn-kecheng-chance3").css({background:"#2691FD"});
            lyn_kecheng_chance.find(".lyn-kecheng-smallimg").hide();
            $(this).find(".lyn-kecheng-smallimg").show(300);
            $(this).animate({left:8},300).css({background:"#fff"});
            $(this).addClass("lyn-kecheng-chancehover");
            $(this).siblings(".lyn-kecheng-right").find(".lyn-kecheng-xxka").hide().find(".lyn-kecheng-lis").removeClass("lyn-kecheng-lishover");
            $(this).siblings(".lyn-kecheng-right").find(".lyn-kecheng-xxka").eq(index).show().find(".lyn-kecheng-lis").first().addClass("lyn-kecheng-lishover");
        })
    })
     // 就业展示
    var ld_jyzs=$(".ld-jyzs-con");
    ld_jyzs.each(function(){
      $(this).find(".ld-border").hover(function(){
        $(this).parent().find(".ld-border").removeClass("ld-bd-active");
        $(this).addClass("ld-bd-active");
      })
    })

    // 360度全方位
    $(".ld-qfw-con li").mouseover(function(){
        $(".ld-qfw-con li").removeClass("ld-qfw-active");
        $(this).addClass("ld-qfw-active");
        // $(".ld-qfw-active").find("div").css("transform","rotate(-100deg)");
    });
    $(".ld-qfw-con i").each(function(i){
        $(this).addClass("ld-qfw-dot"+(i+1));
    });

    
    // 学员作品部分start 
    function tuozhuai(str){
     var scrollBar=$(str+" .szh-zp-radius")[0];
     var scrollLine=$(str+" .szh-zp-line")[0];
     var inner=$(str+" .szh-zps")[0];
     var content=$(str+" .szh-zp-top")[0];
     var count=$(str+" .szh-zps-inner");
     var ow;
     var linewidth=parseInt(scrollLine.offsetWidth);
     var contentwidth=parseInt(content.offsetWidth);
     var innerwidth=count.length*275;
     inner.style.width=innerwidth+"px";
     var bili=innerwidth/contentwidth;
     
     var barwidth=linewidth/bili;
     scrollBar.style.width=barwidth+'px';
     scrollBar.onmousedown=function(e){
       var ev=e||window.event;
        if(ev.preventDefault){
          ev.preventDefault();
       }else{
          ev.returnValue=false;
       }
       var ol=scrollBar.offsetLeft;
       var ocx=ev.clientX;
       document.onmousemove=function(e){
          var ev=e||window.event;
          var cx=ev.clientX;
          ow=cx-ocx+ol;
          var movewi=ow*bili;
          if(ow<0){
            ow=0;
            movewi=0;
          }
          if(ow>linewidth-barwidth){
            ow=linewidth-barwidth
            movewi=innerwidth-contentwidth;
          }
          scrollBar.style.left=ow+"px";
          inner.style.left=-movewi+"px";
       }
       document.onmouseup=function(){
        document.onmousemove=null;
        document.onmouseup=null;
       }
    }
    }
     // 学员作品部分end
     $(".ly-problem-sz").each(function(index,value){
        $(".ly-problem-sz").eq(index).find('.ly-problem').hover(function(){
        //背景样式
        $(".ly-problem-sz").eq(index).find('.ly-problem').removeClass('ly-problem-active');
        $(this).addClass('ly-problem-active');
       // 顶部的渐变条
       $(".ly-problem-sz").eq(index).find('.ly-problem-top').removeClass('ly-problem-top-active');
       $('.ly-problem-top',$(this)).addClass('ly-problem-top-active');
       //文字的渐变：
       $(".ly-problem-sz").eq(index).find('.ly-problem-head-h1').removeClass('ly-problem-head-h1-active');
       $('.ly-problem-head-h1',$(this)).addClass('ly-problem-head-h1-active');

        $(".ly-problem-sz").eq(index).find('.ly-problem-head-r-h2').removeClass('ly-problem-head-r-active');
        $('.ly-problem-head-r-h2',$(this)).addClass('ly-problem-head-r-active');
   },function(){
   });
    });
    //热门问题鼠标移入效果start
  

   //热门问题鼠标移入效果end
    // 热门新闻拖拽
    function szhtuo(str){
       var scrollBarpro=$(str+" .szh-zp-radiuspro")[0];
       var scrollLinepro=$(str+" .szh-zp-linepro")[0];
       var innerpro=$(str+" .ly-problem-box")[0];
       var contentpro=$(str+" .ly-problem-outer")[0];
       var countpro=$(str+" .ly-problem");
       var owpro;
       var lineprowidth=parseInt(scrollLinepro.offsetWidth);
       var contentprowidth=parseInt(contentpro.offsetWidth);
       var innerprowidth=countpro.length*300;
       innerpro.style.width=innerprowidth+"px";
       var bilipro=innerprowidth/contentprowidth;
       var barprowidth=lineprowidth/bilipro;
       scrollBarpro.style.width=barprowidth+'px';
       
      scrollBarpro.onmousedown=function(e){
         var ev=e||window.event;
          if(ev.preventDefault){
            ev.preventDefault();
         }else{
            ev.returnValue=false;
         }
         var ol=scrollBarpro.offsetLeft;
         var ocx=ev.clientX;
         document.onmousemove=function(e){
            var ev=e||window.event;
             if(ev.preventDefault){
              ev.preventDefault();
           }else{
              ev.returnValue=false;
           }
            var cx=ev.clientX;
            owpro=cx-ocx+ol;
            var movewi=bilipro*(owpro);
            if(owpro<0){
              owpro=0;
              movewi=0;
            }
            if(owpro>lineprowidth-barprowidth){
              owpro=lineprowidth-barprowidth;
              movewi=innerprowidth-contentprowidth;
            }
            scrollBarpro.style.left=owpro+"px";
            innerpro.style.marginLeft=-movewi+"px";
         }
         document.onmouseup=function(){
          document.onmousemove=null;
          document.onmouseup=null;
         }
      }
    }
    tuozhuai(".szh-xyzp-right1");
    szhtuo(".ly-problem-sz1");
    /*
     * 校内高薪就业班选项卡
    */
    var xyz_lunbo = $(".xyz-lunbo");
    // 获取所有图片
    var xyz_lunbo_imgs = $(".xyz-lunbo-imgs li");
    // 获取所有数字索引
    var xyz_numbers = $(".xyz-number li");

    var xyz_t = setInterval(xyz_move,2000);
    var xyz_num = 0;
    var xyz_index;
    
    // 函数
    function xyz_move(){
      xyz_num++;
      if(xyz_num==xyz_numbers.length){
        xyz_num=0;
      }
      xyz_numbers.removeClass('xyz-active').eq(xyz_num).addClass('xyz-active')
      xyz_lunbo_imgs.css("display","none").eq(xyz_num).css("display","block");
    }
    // 鼠标移入停止轮播
    xyz_lunbo.hover(function(){
      clearInterval(xyz_t);
    },function(){
      xyz_t = setInterval(xyz_move,2000);
    })

    // hover事件
    xyz_numbers.hover(function(){
      xyz_numbers.removeClass('xyz-active');
      $(this).addClass('xyz-active')

      xyz_index=$(this).index();
      xyz_lunbo_imgs.css("display","none").eq(xyz_index).css("display","block");
    })
    /*
     * 选项卡结束
    */
    // 荣誉证书拖拽
    var horSwiper = new Swiper ('.hor-swiper', {
        slidesPerView : 4,
        slidesPerGroup : 4,
        spaceBetween:5
      });
     var horSwiper1 = new Swiper ('.hor-swiper1', {
        slidesPerView : 4,
        slidesPerGroup : 4,
        spaceBetween:5
      });

     // 回到顶部
     $(".szh-gotop").hover(function(){
      $(this).show();
     });
     $(".szh-gotop").click(function(){
      console.log(1)
      $("html,body").animate({scrollTop:0},1000);
    })
});