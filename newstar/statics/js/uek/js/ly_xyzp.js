/* 
* @Author: Marte
* @Date:   2016-11-19 09:38:32
* @Last Modified by:   Marte
* @Last Modified time: 2016-11-19 13:44:55
*/

$(document).ready(function(){
    /**
     *  IE8下阴影效果的处理
     */


    /*
     *  左侧L型导航->效果
     */
    //点击下拉效果
    $('.ly-nav-l-con-caption a').click(function(){
        $(this).parent().next().toggleClass('ly-nav-ul-active');
    });
    //点击下拉自选项，样式改变；
    //这里使用事件绑定的优化
    $('.ly-nav-l-con').on('click','.ly-nav-l-con-li a',function(){
        $('.ly-nav-l-con-li a').removeClass('ly-nav-l-li-active').prev().removeClass('ly-left-con-2');
        $(this).toggleClass('ly-nav-l-li-active').prev().toggleClass('ly-left-con-2');
    });

    /*
     *  右侧效果
     */
    //点击头部 样式变化；


    $('.ly-right-head-right-li').each(function(index,value){
        $(this).click(function(){
            $('.ly-right-head-right-li').removeClass('ly-right-head-right-li-active');
            $(this).addClass('ly-right-head-right-li-active');
            $('.ly-right-con-box').addClass('ly-right-con-box-active');
            $('.ly-right-con-box').eq(index).removeClass('ly-right-con-box-active');
        });
    });
    //鼠标移入列表样式改变
    $('.ly-right-con').hover(function(){
        $(this).addClass('ly-right-con-active');
        $('.ly-job',$(this)).addClass('ly-job-active');
    },function(){
        $(this).removeClass('ly-right-con-active');
        $('.ly-job',$(this)).removeClass('ly-job-active');
    });

});