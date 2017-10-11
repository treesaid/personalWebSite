var designwidth=750;
var font=50;
function fontsize(){
    var relwidth=document.documentElement.clientWidth;
    relfontsize=font*relwidth/designwidth;
    document.getElementsByTagName("html")[0].style.fontSize=relfontsize+"px";
}
fontsize();
window.onresize=fontsize;