/**
 * Created by Administrator on 2016/10/27.
 */
$(function () {
    fontsize(750);
    //banner
    var banner = new Swiper ('.banner', {
        direction: 'horizontal',
        loop: true,
        autoplay:3000,
        autoplayDisableOnInteraction:false,
        // 如果需要分页器
        pagination:'.ban-pag',
        speed:600,
    })
    var msg = new Swiper('.msg', {
        direction: 'vertical',
        loop: true,
        autoplay:2000,
    });

    //滑动轮播
    var swiper = new Swiper('.myslide', {
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 10,
        freeMode: true
    });
    //小轮播
    var smlunbo = new Swiper ('.sm-lunbo', {
        direction: 'horizontal',
        loop: true,
        autoplay:3000,
        autoplayDisableOnInteraction:false,
        // 如果需要分页器
        pagination:'.sm-pag',
        speed:600,
    })
    var smphone = new Swiper ('.sm-phone', {
        direction: 'horizontal',
        loop: true,
        autoplay:3000,
        autoplayDisableOnInteraction:false,
        // 如果需要分页器
        pagination:'.phone-pag',
        speed:600,
    })
})
