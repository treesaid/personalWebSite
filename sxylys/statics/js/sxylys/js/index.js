$(function(){
    // 设置rem的初始值
    fontsize(375);
    /*
    *  banner 轮播图
    */
   
    // var mySwiper = new Swiper('.banner.swiper-container', {
    //     autoplay: 4000,//可选选项，自动滑动
    //     pagination: '.swiper-pagination'
    // });
    var mySwiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        loop: true,
        grabCursor: true,
        autoplay: 4000,
        paginationClickable: true,
        onTouchEnd: function () {
            mySwiper.startAutoplay();
        }
    })
    $(".swiper-slide").show();
    $('.arrow-left').on('click', function (e) {
        e.preventDefault()
        mySwiper.swipePrev()
    })
    $('.arrow-right').on('click', function (e) {
        e.preventDefault()
        mySwiper.swipeNext()
    })
    
    mySwiper.startAutoplay();     
    /*
     * 轮播图结束    
    */ 
   
})