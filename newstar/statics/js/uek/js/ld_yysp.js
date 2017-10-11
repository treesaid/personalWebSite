$(document).ready(function(){
    // 视频页面
    // 视频遮罩
    var ld_lis=$(".ld-ul li");
    var ld_imgactive=$(".ld-imgactive");
    ld_lis.each(function(i){
        ld_lis.eq(i).hover(function(){
            ld_imgactive.eq(i).animate({height: '66px'},450);
        },function(){
            ld_imgactive.eq(i).animate({height: '0'},450);
        });
    });

    /*
     *  左侧效果
     */
    //点击头部 样式变化；
    //var t1=new Tab('.tab-btn-lis',".tab-con-lis");
    //t1.tab();

   /* $('.ly-right-head-right-li').each(function(index,value){
        $(this).click(function(){
            $('.ly-right-head-right-li').removeClass('ly-right-head-right-li-active');
            $('.ld-ul').removeClass('ld-ul-show');
            $('.ld-ul').eq(index).addClass('ld-ul-show');
            $('.ld-pagebox').removeClass('ld-page-show');
            $('.ld-pagebox').eq(index).addClass('ld-page-show');
            $(this).addClass('ly-right-head-right-li-active');
            $('.ly-right-con-box').addClass('ly-right-con-box-active');
            $('.ly-right-con-box').eq(index).removeClass('ly-right-con-box-active');
        });
    });
*/

});