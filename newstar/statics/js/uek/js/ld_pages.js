$(document).ready(function(){
    // 翻页
    $(".ld-pages .a1:first").remove();
    $(".ld-pages .a1").html("");
    $(".ld-pages .a1:last-of-type").addClass("ld-next");

    // 右侧跳转go
    var ld_val=0;
    $(".ld-input").change(function(){
        ld_val=$(this).val();
    });
    var ld_max= $(".ld-pages a").length;
    var data_catid=$(".ld-usepage").attr("data-catid");
    $('.ld-gobtn').click(function(){
        if(ld_val>(ld_max-1)){
            return;
        }else{
            location.href = " http://xujianing.duapp.com/newstar/index.php?m=content&c=index&a=lists&catid="+data_catid+"&page="+ld_val;
        }
    }) 
});