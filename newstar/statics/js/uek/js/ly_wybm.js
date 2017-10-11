$(function(){
    $('#ly-sigin-btn').click(function(){
        var name = $('#ly-name').val();
        var num = $('#ly-num').val();
        var qq = $('#ly-qq').val();
        var email = $('#ly-email').val();
        var lyForm = $('.ly-sigin-info-form');

        //验证手机号码
        var regNum=/^\d{11}$/;
        //验证QQ
        var regQQ=/^\d{6,}$/;
        //验证邮箱
        var regEmail=/^[a-zA-Z0-9]\w+@[a-zA-Z]+\.(com|cc|org|net|cn|com.cn)$/;

        //不能为空
        if(!name){
            alert('姓名不能为空');
            return ;
        }
        if(!num){
            alert('号码不能为空');
            return ;
        }else if(!regNum.test(num)){
            alert('请填写正确的号码');
            return;
        }
        if(!qq){
            alert('qq不能为空');
            return ;
        }else if(!regQQ.test(qq)){
            alert('请填写正确的QQ');
            return;
        }
        if(email){
            if(!regEmail.test(email)){
                alert('请输入正确邮箱');
                return;
            }
        }
        lyForm.submit();
    });
});