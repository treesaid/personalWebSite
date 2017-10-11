/**
 * Created by Administrator on 2016/10/20.
 */
$(function () {
    $("#fullpage").fullpage({
        anchors:["page1","page2","page3","page4"],
        navigation:true,
        navigationTooltips:["登录百度舆情","领先：数据收集与处理","全面：舆情分析逻辑与架构","专业：专业数据可视化"],
        // fixedElements:'.next',
        afterLoad:function (a,index) {
            if(index==1){
                $(".skip").transition({x:30},600,"ease-out");
            }
            if(index==2){
                $(".big-img").eq(0).transition({x:-30,opacity:1},400,"ease-out");
                $(".move").eq(0).transition({x:35,opacity:1},400,"ease-out");
            }
            if(index==3){
                $(".big-img").eq(1).transition({x:-30,opacity:1},400,"ease-out");
                $(".move").eq(1).transition({x:35,opacity:1},400,"ease-out");
            }
            if(index==4){
                $(".big-img").eq(2).transition({x:-30,opacity:1},400,"ease-out");
                $(".move").eq(2).transition({x:35,opacity:1},400,"ease-out");
            }
        },
        onLeave:function (index) {
            if(index==1){
                $(".skip").delay(700).queue(function () {
                    $(this).css({x:0});
                    $(this).dequeue()
                })

            }
            if(index==2){
                $(".big-img").eq(0).delay(700).queue(function () {
                    $(this).css({x:0,opacity:0});
                    $(this).dequeue()
                })
                $(".move").eq(0).delay(700).queue(function () {
                    $(this).css({x:0,opacity:0});
                    $(this).dequeue()
                })
            }
            if(index==3){
                $(".big-img").eq(1).delay(700).queue(function () {
                    $(this).css({x:0,opacity:0});
                    $(this).dequeue()
                })
                $(".move").eq(1).delay(700).queue(function () {
                    $(this).css({x:0,opacity:0});
                    $(this).dequeue()
                })
            }
            if(index==4){
                $(".big-img").eq(2).delay(700).queue(function () {
                    $(this).css({x:0,opacity:0});
                    $(this).dequeue()
                })
                $(".move").eq(2).delay(700).queue(function () {
                    $(this).css({x:0,opacity:0});
                    $(this).dequeue()
                })
            }
        }
    });
    $(".next").click(function () {
        $.fn.fullpage.moveSectionDown();
    })
})