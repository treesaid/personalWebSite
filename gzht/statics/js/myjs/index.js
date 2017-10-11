$(function(){
         /**********导航************/ 
$(".nav-a").hover(function(){
	$(".hnav-pic",$(this)).css("display","block");
},function(){
	$(".hnav-pic",$(this)).css("display","none");
})

		/***********品牌展示************/
$(".showa").hover(function(){
	$(".hshow-pic",$(this)).css("display","block");
},function(){
	$(".hshow-pic",$(this)).css("display","none");
})
		/***********banner轮播**************/
var t=setInterval(lunbo,2500);
var nowbtn=$(".cir:first");
var nowimg=$(".imglis:first");
var num=0;
function lunbo(){
	num++;
 	if(num==$(".cir").length){
 		num=0;
 	}
 	nowbtn.removeClass("first-cir").parent().children().eq(num).addClass("first-cir");
 	nowbtn=$(".cir").eq(num);
 	nowimg.fadeOut(800).parent().children().eq(num).fadeIn(800);
 	nowimg=$(".imglis").eq(num);
}
$(".screen").hover(function(){
	clearInterval(t);
},function(){
	t=setInterval(lunbo,2500);
})

$(".cir").mouseover(function(){
	var now=nowbtn.index();
	var next=$(this).index();
	nowbtn.removeClass("first-cir");
	nowbtn=$(".cir").eq(next);
	$(this).addClass("first-cir");
	if(nowimg.index()==next){
		return;
	}
	nowimg.fadeOut(800).parent().children().eq(next).fadeIn(800);
	nowimg=$(".imglis").eq(next);
	num=next;

})





})