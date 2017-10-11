/* 
* @Author: Marte
* @Date:   2016-11-19 09:50:56
* @Last Modified by:   Marte
* @Last Modified time: 2016-11-19 17:30:50
*/

$(document).ready(function(){
    var lyn_sciencelis=$(".lyn-science-lis");
    lyn_sciencelis.each(function(index){
        $(this).hover(function(){
            $(this).css("backgroundImage","url(images/lyn_images/lyn-science-bghover.png)");
            $(this).find(".lyn-science-threelists").css({borderColor:"#fff"});
            $(this).find(".lyn-science-threelists a").css({borderColor:"#fff",color:"#fff"});
        },function(){
            $(this).css("backgroundImage","url(images/lyn_images/lyn-science-bg.png)");
            $(this).find(".lyn-science-threelists a").css({borderColor:"#01B5FF",color:"#666"});
            $(this).find(".lyn-science-threelists").css({color:"#666"});
        })
    })
});