var app=angular.module('app',['ngRoute','ctrl','filter','directive','filter','service']);
	app.config(['$routeProvider',function($r){
	   $r.when('/',{
	   	templateUrl:'tpls/list.html',
	   	controller:'home'
	   }).when("/show/:id",{
	      templateUrl:'tpls/show.html',
	      controller:'show'
	   }).when("/theme/:id",{
	      templateUrl:'tpls/aside.html',
	      controller:'themeList'
	   }).when('/new',{
	   	   templateUrl:'tpls/new.html'
	   }).when('/cang',{
	   	   templateUrl:'tpls/cang.html'
	   }).when('/comment/:id',{
	   	   templateUrl:'tpls/comment.html',
	   	   controller:"comment"
	   });
	}])
	
$(function(){
	


	
})