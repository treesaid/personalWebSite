/**
 * Created by Administrator on 2016/10/20.
 */
$(function () {
    $("#fullpage").fullpage({
        anchors:["page1","page2","page3","page4","page5","page6","page7","page8","page9","page10"],
        navigation:true,
        keyboardScrolling:true,
        css3:false,
        easing:'easeInQuart',
        navigationTooltips:["首页","视觉","交互","皮肤","功能","待办邮件","联系人邮件","科技","连接易信","马上体验"],
        // fixedElements:'.next',
        afterLoad:function (a,index) {
            
        },
        onLeave:function (index) {

        }
    });
    $(".next").click(function () {
        $.fn.fullpage.moveSectionDown();
    })
})