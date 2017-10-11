$(document).ready(function(){
    // 多位数点赞处理
    function likeNum(num) {
        if (num === 0) {
            num = '';
        }
        else if (num > 9999 && num <= 9999999) {
            num = parseInt(num / 10000);
            num = parseInt(num) + "万";
        }
        else if (num > 9999999) {
            num = parseInt(num / 10000000);
            num = parseInt(num) + "千万";
        }
        return num;
    }
    var upnum=$(".ld-dianzan .ld-up-i").html();
    var downnum=$(".ld-dianzan .ld-down-i").html();
    $(".ld-dianzan .ld-up-i").html(likeNum(upnum));
    $(".ld-dianzan .ld-down-i").html(likeNum(downnum));
});