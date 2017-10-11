/**
 * 作者：3108
 * 选项卡插件;
 * 请在Jquery环境下使用本插件
 * 本选项卡是同过操作类名来进行不同内容的切换
 * 类名使用本例子的类名
 *
 * 参数说明：
 *  btn-->按钮的类名选择器 
 *  con-->内容的类名选择器
 *  
 *  tab-btn-lis ->给按钮列表加 给第一个按钮添加 tab-btn-lis-active
 *  tab-con-lis ->给内容列表加  给第一个内容加 ->tab-con-lis-active
 */

function Tab(btn,con){
    this.btn=btn;
    this.con=con;
}
Tab.prototype={
    tab:function(){
        btn=this.btn;
        con=this.con;
        $(btn).each(function(index,value){
            $(this).hover(function(){
                $('.tab-btn-lis').removeClass('tab-btn-lis-active');
                $(this).addClass('tab-btn-lis-active');
                $(con).hide().eq(index).show();
            })
        })
    }
};
