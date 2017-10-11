$(document).ready(function(){
    // 视频页面
    // 视频遮罩
    $(".ld-left-tit").eq(1).addClass('ld-left-tit2');
    $(".ld-left-tit").eq(2).addClass('ld-left-tit3');

    //百分比函数
    function percent(future,str){
      var arr=getDay(future);
      var djs_day=arr[0];
      var begin_day=new Date(str);
      var length_time=future.getTime()-begin_day.getTime();
      var zong_day=Math.floor(length_time/(24*60*60*1000));
      var science_bili=Math.floor(djs_day/zong_day*100);
      return science_bili;
    }
    // 第一块蓝球倒计时转化
    var arr1=str1.split("-");
    var nowstr1=arr1.join("/");
    var future1=new Date(nowstr1);
    //百分比变化第一块变化
    var science_bili1=percent(future1,str11);
    $(".ld-bm-top").find(".ld-blueball").eq(0).find(".ld-blue-num").find("span").html(100-science_bili1);
    $(".ld-bm-top").find(".ld-blueball").eq(0).find(".ld-wave").css({top:-(1-science_bili1/100)*200});

    // 第一块蓝球倒计时转化
    var arr2=str2.split("-");
    var nowstr2=arr2.join("/");
    var future2=new Date(nowstr2);
    //百分比变化第一块变化
    var science_bili2=percent(future2,str22);
    $(".ld-bm-top").find(".ld-blueball").eq(1).find(".ld-blue-num").find("span").html(100-science_bili2);
    $(".ld-bm-top").find(".ld-blueball").eq(1).find(".ld-wave").css({top:-(1-science_bili2/100)*200});
    //倒计时函数
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
    //篮球第一块倒计时显示
    var lyn_time1=$(".ld-baoming-con").find(".ld-daojishi").eq(0);
    var span1=lyn_time1.find(".lyn-djss");
    var t1=setInterval(show1,1000);
    function show1(){
      var arr=getDay(future1);
      for(var i=0;i<span1.length;i++){
        span1[i].innerHTML=arr[i];
      }
    }
    //篮球第二块倒计时显示
    var lyn_time2=$(".ld-baoming-con").find(".ld-daojishi").eq(1);
    var span2=lyn_time2.find(".lyn-djss");
    var t2=setInterval(show2,1000);
    function show2(){
      var arr=getDay(future2);
      for(var i=0;i<span2.length;i++){
        span2[i].innerHTML=arr[i];
      }
    }
});