
$(function(){
    // ***********************  留言板  ****************************//
    
    /**
     * ------------------------------------------------------------------
     * 新闻详情页评论输入限制
     * ------------------------------------------------------------------
     */

    function inputFun(){
        // 字数提示，总字数
        var prompt=$(".ljg-prompt-text");
        var wordNum=prompt.html();
        // 已经输入的字数
        var inputNum=0;
        // 剩余的字数
        var surplusNum=wordNum;

        // 输入
        $("#input").keyup(function(e){
            inputNum=$(this).val().length;
            if(inputNum>wordNum){
                var value=$(this).val().substr(0,wordNum);
                $(this).val(value);
                return;
            }else if(inputNum<0){
                return;
            }
            surplusNum=wordNum-inputNum;
            prompt.html(surplusNum);
        }); 
    }
    inputFun();



    // ***********************  placeholder  ****************************//
    $('input, textarea').placeholder();

})

    