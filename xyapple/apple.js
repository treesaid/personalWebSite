/**
 * Created by Administrator on 2016/10/25.
 */
$(function () {
    var cont=0;
    $(".line").click(function () {
        cont++;
        if(cont%2==0){
            $("span",$(this)).eq(0).transition({
                rotate:'0',
                y:'0',
            })
            $("span",$(this)).eq(1).transition({
                rotate:'0',
                y:'0',
            })
            $(".menu-list").each(function (index) {
                $(this).transition({x:'15px',y:'-15px',opacity:0,delay:index*40},'ease-in').queue(function () {
                    // $(".menu").css("display","none");
                    $(".menu").removeClass('active');
                    $(this).dequeue();
                });
            })
            $("body").css({width:'100%',height:'100%',overflow:'auto'});

        }else{
            $("span",$(this)).eq(1).transition({
                y:'4px',
                rotate:'135deg',
            })
            $("span",$(this)).eq(0).transition({
                y:'-4px',
                rotate:'45deg',
            })
            // $(".menu").css("display","block");
            $(".menu").addClass('active');
            $("body").css({width:'100%',height:'100%',overflow:'hidden'});
            $(".menu-list").each(function (index) {
                $(this).transition({x:'0',y:'0',opacity:1,delay:index*40 },'ease-in');
            })
        }

    })
    // 购物袋
    $(".bag").click(function (e) {
        $(".bag-inner").toggleClass("active");
        e.stopPropagation();
    })
    $("body").click(function () {
        $(".bag-inner").removeClass("active")
    })
    $(".bag-inner").click(function (e) {
        e.stopPropagation();
    })
    $(".search").click(function (e) {
        e.stopPropagation();
        $(".top-nav:not('.top-nav:first')").transition({
            scale:0.4,opacity:0
        },400);
        $(".closebtn").show();
        $(".l1",$(".closebtn")).transition({
            rotate:'45deg'
        })
        $(".l2",$(".closebtn")).transition({
            rotate:'-45deg'
        })
        setTimeout(function () {
            $(".top-nav:not('.top-nav:first')").hide();
            $(".search-box").addClass("active");
            $('.input-box').transition({x:0,opacity:1},400);
            $("p",$(".quick-search")).transition({x:0,opacity:1},400);
            $(".link").each(function (index) {
                $(this).transition({x:0,opacity:1,delay:index*40},400);
            });
        },400)
    })
    $(".closebtn").click(function () {
        $(".top-nav:not('.top-nav:first')").show();
        $(".top-nav:not('.top-nav:first')").each(function (index) {
            $(this).transition({
                scale:1,opacity:1,delay:index*40},400);
        })
        // $(".top-nav:not('.top-nav:first')").transition({
        //     scale:1,opacity:1},400);
        $(".search-box").removeClass("active");
        $('.input-box').transition({x:'40px',opacity:0},400);
        $("p",$(".quick-search")).transition({x:'60px',opacity:0},400);
        $(".link").transition({x:'50px',opacity:0});
        $(".closebtn").css("display","none");
        $(".l1",$(".closebtn")).transition({
            rotate:'-45deg'
        })
        $(".l2",$(".closebtn")).transition({
            rotate:'45deg'
        })
    })
    // $("body").click(function () {
    //     $(".search-box").removeClass("active");
    // })
    // $(".search-box").click(function (e) {
    //     e.stopPropagation();
    // })
    $(".click-open").click(function () {
        $(this).next().toggleClass('active');
        if($(this).next().hasClass("active")){
            $(".open",$(this)).transition({
                rotate:'45deg'
            })
            $(this).next().transition({
                y:0,opacity:1
            });
        }else{
            $(".open",$(this)).transition({
                rotate:'0'
            })
            $(this).next().transition({
                y:'-60px',opacity:0
            });
        }

    })

})