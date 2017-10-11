/* 
* @Author: Marte
* @Date:   2016-12-12 10:09:12
* @Last Modified by:   Marte
* @Last Modified time: 2016-12-12 10:32:30
*/

// 侧边栏的显示隐藏

    var side_back = $(".side-back");
    var side_mask = $(".side-mask");
    var side_box = $(".side-box");
    var more = $(".more");
    console.log(side_back);
    side_back.click(function(){
        side_box.addClass('side-hide');
        side_mask.addClass("mask-hide");
    });
    more.click(function(){
        side_box.removeClass('side-hide');
        side_mask.removeClass("mask-hide");
    })