$(function(){
    if($("body")[0].attachEvent){
        $('.pie').each(function() {  
            PIE.attach(this);  
        });
    } 
})