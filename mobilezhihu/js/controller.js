
var ctrl=angular.module('ctrl',["ngSanitize"]);

// 点击列表侧导航消失
ctrl.directive('none',function($timeout){
  return{
    scope:true,
    restrict:'ECMA',
    link:function(scope,element,attr){
      $(element).click(function(){
        $('.aside').hide();
        // $timeout(function(){$(".aside").addClass("name")},1000);
        $('.zhezhao').hide();
        $(".share-box").hide();
      });
    }
  }
});

// 点击首页侧导航出现
ctrl.directive('block',function(){
  return{
    scope:true,
    restrict:'ECMA',
    link:function(scope,element,attr){
      $(element).click(function(){
        $('.aside').show();
        $('.zhezhao').show();

      });
    }
  }
});
// 收藏点击
ctrl.directive('cut',function(){
  return{
    link:function(scope,element,attr){
        $(element).click(function(){
          $(this).toggleClass("active");
        });
    }
  }
});
ctrl.directive('show',function(){
  return{
    link:function(scope,element,attr){
        $(element).click(function(){
          $(".share-box").show();
          $('.zhezhao').show();
        });
    }
  }
});
ctrl.directive('cutjia',function(){
  return{
    link:function(scope,element,attr){
        $(element).click(function(){
          $(".header-jia").html(function(index,html){
              if(html=="+"){
                return "-";
              }else{
                return "+";
              }
          });
        });
    }
  }
});
// 返回上一级
// 各个页面的控制器

// 首页
ctrl.controller('home',function($scope,$http){
	$http({
    url:'php/api.php?url=https://news-at.zhihu.com/api/4/news/latest',
    method:'get',
    responseType:'json'
  }).then(function(res){
    $scope.list=res.data.stories;
    $scope.tops=res.data.top_stories;
  })
  $scope.setFlag=false;
  $scope.set=function(){
     $scope.setFlag=!$scope.setFlag;
  }
  $scope.lose=function(){
    $scope.setFlag=false;
  }
});

// 轮播图的指令
ctrl.directive('swiper',function($timeout){
  return{
    link:function(scope,element,attr){
      var sw=function(){
        var swiper = new Swiper('.swiper-container', {
          pagination: '.swiper-pagination',
          paginationClickable: true,
          centeredSlides: true,
          autoplay: 2500,
          autoplayDisableOnInteraction: true,
          loop:true
         });
       }
       $timeout(sw,3000)
     }
   }
})

// 内容页
ctrl.controller('show',function($scope,$http,$routeParams){
  $http({
    url:'php/api.php?url=http://news-at.zhihu.com/api/4/news/'+$routeParams.id,
    method:'get',
    responseType:'json'
  }).then(function(res){
    $scope.d=res.data;
  })

});

// 主题列表
ctrl.controller('theme',function($scope,$http){
  $http({
    url:'php/api.php?url=http://news-at.zhihu.com/api/4/themes',
    method:'get',
    responseType:'json'
  }).then(function(res){
    $scope.theme=res.data.others;
  })
});

// 主题列表页
ctrl.controller('themeList',function($scope,$http,$routeParams){
  $http({
    url:'php/api.php?url=http://news-at.zhihu.com/api/4/theme/'+$routeParams.id,
    method:'get',
    responseType:'json'
  }).then(function(res){
    $scope.list=res.data.stories;
    $scope.lei=res.data;
    $scope.editor=res.data.editors;
  })
});

ctrl.controller('comment',function($scope,$http,$routeParams){
  $http({
    url:'php/api.php?url=http://news-at.zhihu.com/api/4/story/'+$routeParams.id+'/long-comments',
    method:'get',
    responseType:'json'
  }).then(function(res){
    $scope.com=res.data.comments;
  })
});


