// 1.获取类名的兼容性函数
// classname:要获取的类名;
// obj:获取对象下的类名
	/*function getClass(classname,obj){        
			obj=obj||document;               //参数初始化
			if(obj.getElementByClassName){       //若有getElementByClassName属性,则返回true
				return obj.getElementByClassName(clas3sname);
			}
			else{
				var arr=[];                      
				var objs=obj.getElementsByTagName("*");  //把obj下的所有的标签名都取出来赋给objs
				for(var i=0;i<objs.length;i++){			 //对objs下的标签进行枚举
					if(objs[i].className==classname){    //判断这些标签的类型有没有我们需要的classname
						arr.push(objs[i]);				 //如果有的话添加进arr中
						}
				}
				return arr;								 //返回arr
			} 
		}*/

// 2.支持获取多类名的兼容性函数
	// classname:要获取的类名;
	// obj:获取对象下的类名;
	function checkClass(classname,obj){     //classname是要获取元素的类名,obj是要获取元素的类名返回的
   		var str=obj;						//字符串
   		var brr=str.split(" ");             //将str按空格分隔成一个数组
   		for(var i=0;i<brr.length;i++){		
   			if(brr[i]==classname){			//如果这个数组中有一个元素与classname相同
   				return true;				//就返回true
   			}
   		}
   		return false;						//否则返回false
	}

	function getClass(classname,obj){		// classname:要获取的类名;// obj:获取对象下的类名
		obj=obj||document;					
		if(obj.getElementsByClassName){
			return obj.getElementsByClassName(classname);
		}
		else{
			var arr=[];
			var objs=obj.getElementsByTagName("*");   //把obj下的所有的标签名都取出来赋给objs
			for(var i=0;i<objs.length;i++){           //对objs下的标签进行枚举
				var flag=checkClass(classname,objs[i].className);
				if(flag){
					arr.push(objs[i]);
				}
			}
			return arr;
		} 
	}
	



 // 3.用textContent获取标签内文本的兼容性函数
 // obj是要获取的对象  val是要设置的值
 	function text(obj,val){
 		if(val==undefined){   //如果没有写val，则为undefinded
 			if(obj.textContent){    //如果可以用textContent来获取
 				return obj.textContent;  //获取相对应的值
 			}else{                       
 				return obj.innerText; 	//否则用innerText来获取
 			}
		}
 		else{                           //有val值;
 			if(obj.textContent){    	//如果可以用textContent来获取
 				 obj.textContent=val;	//获取并设置相应的val值
 			}else{
 				 obj.innerText=val;     //否则的话用innerText来设置;
 			}
 		}
	}

	// 4.获取样式的兼容性函数
	function getStyle(obj,attr){       
		 	if(obj.currentStyle){         //如果支持currentStyle获取样式的方式  
		 		return obj.currentStyle[attr];   //则获取相对应的属性值
		 	}
		 	else{
		 		return getComputedStyle(obj,null)[attr];    //否则使用getComputedStyle方式获取样式
		 		}
		  }

  //5.获取对象的封装函数
  //selector要获取对象的类名(.box)或者Id(#one)或者标签名("p");
  //obj要获取哪个对象的下元素
  function $(selector,obj){				
  	if(typeof(selector)=="string"){		 //如果selector是一个字符串
  		obj=obj||document;				 //参数初始化，默认取document下的元素
		selector=selector.replace(/^\s*|\s*$/g,"");	//去掉空格字符串
		if(selector.charAt(0)=="."){				//如果selector的第一个字符为"."
				return getClass(selector.slice(1),obj);	//返回获取到以selector为类名的元素
			}else if(selector.charAt(0)=="#"){		//如果selector的第一个字符为"#";
				return document.getElementById(selector.slice(1));  //返回以selector为id的元素
			}else if(/^[a-z][a-z0-6]{0,10}$/.test(selector)){   //如果selector是一个标签名的元素
				return obj.getElementsByTagName(selector);		//返回以selcctor为标签名的元素
			}else if(/^<[a-z][a-z0-6]{0,10}>$/.test(selector)){    //如果selector是"<obj>"形式
				return document.createElement(selector.slice(1,-1));  //则可以创建一个obj标签
			}														//创建方法 $("<p>");
		}
		else if(typeof(selector)=="function"){   //如果selector是一个函数
		window.onload=function(){          //则在window.onload下执行selector函数
			selector();
			}
		}
	}
		
  //6.获取子节点的封装函数
	function getChild(obj,type){  //obj：获取谁的子节点 type:要获取的子节点的类型(元素节点/文本节点)
		type=type||"no";           //参数初始化，默认只取元素节点
		var childs=obj.childNodes;	//将obj下的所有子节点取出来
		var arr=[];					//定义一个空数组存放挑选出的子节点
		for(var i=0;i<childs.length;i++){		//用循环遍历每一个子节点
			if(type=="no"){						//只获取元素子节点
			   if(childs[i].nodeType==1){		//如果该节点的节点类型==1(元素节点);
					arr.push(childs[i]);		//将该节点存入arr中
				}
			}else if(type=="yes"){                  //如果要获取的节点类型有文本和元素节点
				if(childs[i].nodeType==1||childs[i].nodeType==3&&childs[i].nodeValue.replace(/^\s*|\s*$/g,"")){						
				arr.push(childs[i]);			//将该节点存入arr中
				}
			}
		}
		return arr;								//返回arr
	}

	//7.获取第一个子节点
	function getFirst(obj,type){   
		type=type||"no";
		if(type=="no"){
			return getChild(obj)[0];          //取出元素子节点的第一个
		}else if(type=="yes"){
			return getChild(obj,"yes")[0];	  //取出元素和文本子节点的第一个
		}
	}
 //8.获取最后一个子节点
 	function getLast(obj,type){
		type=type||"no";
		if(type=="no"){
			return getChild(obj)[getChild(obj).length-1];  //取出元素子节点的最后一个
		}else if(type=="yes"){
			return getChild(obj,"yes")[getChild(obj,"yes").length-1]; //取出元素子节点的第一个
		}
	}
	//9.获取下一个兄弟节点
	//obj：获取谁的下一个兄弟节点 
	//type:要获取的子节点的类型(元素节点/文本节点)
	function getNext(obj,type){
		type=type||"no"; 	//参数初始化，默认获取下一个元素兄弟节点
		var next=obj.nextSibling;   //将下一个兄弟节点赋值给next
		if(next==null){				//如果该元素没有下一个兄弟节点，则返回一个false
			return false;	
		}
		if(type=="no"){             //如果只获取下一个兄弟元素节点
			while(next.nodeType==3||next.nodeType==8){ //当下一个节点的类型为文本和注释时，
				next=next.nextSibling;	//继续获取该节点下一个兄弟节点，并重新赋赋值给next
				if(next==null){		//直到下一个兄弟节点没有时
					return false;	//返回false 退出该循环
				}
			}
			return next;	//不是上面的两种类型，则返回next，就是我们想要的下一个元素节点
		}else if(type=="yes"){    //如果想获取下一个文本或者元素节点
			while(next.nodeType==8||next.nodeType==3&&!next.nodeValue.replace(/^\s*|\s*$/g,"")){
				next=next.nextSibling;    //当下一个节点为注释或者文本而且不能为空文本时，继续获取
				if(next==null){			  //下一个兄弟节点重新赋值给next
					return false;
				}
			}
			return next;
		}
	}
 	//10.获取上一个兄弟节点
 	function getPrevious(obj,type){
		type=type||"no";
		var previous=obj.previousSibling;
		if(previous==null){
			return false;
		}
		if(type=="no"){
			while(previous.nodeType==3||previous.nodeType==8){
				previous=previous.previousSibling;
				if(previous==null){
					return false;
				}
			}
			return previous;
		}else if(type=="yes"){
			while(previous.nodeType==8||previous.nodeType==3&&!previous.nodeValue.replace(/^\s*|\s*$/g,"")){
				previous=previous.previousSibling;
				if(previous==null){
					return false;
				}
			}
			return previous;
		}
	}

//11.插入到某个对象之前 
 	// obj要插入的对象
 	//objbefore 插入谁之前
	function insertBefore(obj,objbefore){    
		var parent=objbefore.parentNode;		//先获取objbefore的父元素
		parent.insertBefore(obj,objbefore);  	//用内置的insertBofore方法插入obj对象
	}
//12.插入到某个对象之后
	// obj要插入的对象
 	//objbefore 插入谁之后
 function insertAfter(obj,objafter,type){
		type=type||"no";
		var parent=objafter.parentNode;	//获取objafter的父元素
		var next;						//定义next
		if(type=="no"){					//如果只插入到objafter下一个（兄弟元素）节点的前面
			next=getNext(objafter);		//获取下objafter一个兄弟节点
			if(!next){					//如果没有下一个兄弟节点
				parent.appendChild(obj);	//则插入到objafter父元素的最后
			}else{insertBefore(obj,next);	//如果有下一个兄弟节点则插入到下一个兄弟节点前面
				}
		}else if(type=="yes"){		//如果插入到objafter下一个（兄弟元素和文本）节点的前面
			next=getNext(objafter,"yes");  //获取下objafter一个兄弟节点
			if(!next){
				parent.appendChild(obj);
			}else{
				insertBefore(obj,next);
			}
		}
	}	
//13.同一事件绑定多个事件处理程序(添加)
	//obj要追加事件的对象
	//type 要追加的事件类型(click/mouseover)
	//fun要追加的处理程序
	//调用方式：addEvent(box,"click",fun1);
	function addEvent(obj,type,fun){  
			if(obj.attachEvent){
				obj.attachEvent("on"+type,fun);
			}else{
				obj.addEventListener(type,fun,false);
			}
		}
//14.同一事件绑定多个事件处理程序(删除)
//调用方式：removeEvent(box,"click",fun1);
function removeEvent(obj,type,fun){
			if(obj.attachEvent){
				obj.detachEvent("on"+type,fun);
			}else{
				obj.removeEventListener(type,fun,false);
			}
		}

//15.给对象添加鼠标滚轮事件的兼容性函数
function mousewheel(obj,downfun,upfun){
		if(obj.attachEvent){
			obj.attachEvent("onmousewheel",fun);   //如果IE支持,绑定事件
		}else if(obj.addEventListener){
		obj.addEventListener("mousewheel",fun,false);  //火狐支持
		obj.addEventListener("DOMMouseScroll",fun,false);  //谷歌支持
		}
		function fun(e){ 
			var ev=e||window.event;				//获取事件对象
			if(ev.preventDefault){
				ev.preventDefault();			//阻止浏览器默认事件发生
			}else{
				ev.returnValue=false;
			}								
			var nub=ev.detail||ev.wheelDelta; //将不同浏览器向上和向下滚动时返回的数值赋给nub
			if(nub==-120||nub==3){			  //如果是-120 或者3 ；则表示想滚轮向下滚动
				downfun.call(obj);            //改变this指针 默认是this指的是document
			}
			if(nub==120||nub==-3){			  //如果是120 或者-3 ；则表示想滚轮向下滚动
				upfun.call(obj);
			}
		}
	}

//16.hover
//判断某个元素是否包含有另外一个元素
 function contains (parent,child) {
  if(parent.contains){
     return parent.contains(child) && parent!=child;
  }else{
    return (parent.compareDocumentPosition(child)===20);
  }
 }

//判断鼠标是否真正的从外部移入，或者是真正的移出到外部；
  function checkHover (e,target) {
   if(getEvent(e).type=="mouseover"){
      return !contains(target,getEvent(e).relatedTarget || getEvent(e).fromElement)&&
    !((getEvent(e).relatedTarget || getEvent(e).fromElement)===target)
   }else{
    return !contains(target,getEvent(e).relatedTarget || getEvent(e).toElement)&&
    !((getEvent(e).relatedTarget || getEvent(e).toElement)===target)
    }
  }
//鼠标移入移出事件
/*
  obj   要操作的对象
  overfun   鼠标移入需要处理的函数
  outfun     鼠标移除需要处理的函数
*/
function hover (obj,overfun,outfun) {
    if(overfun){
      obj.onmouseover=function  (e) {
        if(checkHover(e,obj)){
           overfun.call(obj,[e]);
        }
      }
    }
    if(outfun){
      obj.onmouseout=function  (e) {
        if(checkHover(e,obj)){
           outfun.call(obj,[e]);
        }
      }
    }
}
 function getEvent (e) {
      return e||window.event;
 }
 //17. 设置cookie  获取cookie的值   删除cookie 
function setCookie(jian,val,time){
            if(time==undefined){
                document.cookie=jian+"="+val;
            }else{
                var now=new Date();
                now.setTime(now.getTime()+time*1000);
                document.cookie=jian+"="+val+";expires="+now.toGMTString();
            }
        }
 function getCookie(val){
            var cookies=document.cookie;
            var str=cookies.split("; ");
            for(var i=0;i<str.length;i++){
                if(str[i].split("=")[0]==val){
                    return str[i].split("=")[1];
                }
            }
            return false;
        }
 function delCookie(val){
            var now=new Date();
            now.setTime(now.getTime()-1);
            document.cookie=val+"=aa;expires="+now.toGMTString();
        }
 //18.去掉空格字符串
 function qukong(str,type){
		var reg;
		var type=type||"b";
		if(type=="l"){
			reg=/^\s*/g;
			str=str.replace(reg,"");
		} 
		if(type=="r"){
			reg=/\s*$/g;
			str=str.replace(reg,"");
		}
		if(type=="b"){
			reg=/^\s*|\s*$/g;
			str=str.replace(reg,"");
		}
		if(type=="all"){
			reg=/\s*/g;
			str=str.replace(reg,"");
		}
		return str;
	}