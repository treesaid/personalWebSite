/**
 * Created by Administrator on 2016/11/10.
 */
//构造函数
function Game(canvas) {
    this.canvas=canvas;
    this.cobj=canvas.getContext("2d");
    //记录帧数
    this.frame=0;
    this.obstacles=[];
    this.value=62;
    this.person=new Person(canvas);
    //判断碰撞
    this.state=true;
}
Game.prototype={
    play:function () {
        this.update();
    },
    update:function () {
        this.frame++;
        this.cobj.clearRect(0,0,this.canvas.width,this.canvas.height);
        this.updateScene();
        this.updateobstacle();
        this.updateperson();
        //判断碰撞
        if(this.state){
            requestAnimationFrame(this.update.bind(this));
        }else{
            alert("游戏结束!");
        }
    },
    updateScene:function () {
        this.canvas.style.backgroundPosition=-this.frame*4+"px 0";
    },
    //更新障碍物
    updateobstacle:function () {
        if(this.frame%this.value==0){
            this.value+=62+Math.floor(Math.random()*120);
            var num=Math.ceil(Math.random()*3);
            this.obstacles.push(new Obstacle(this.canvas,num));
        }
        if(this.obstacles.length>4){
            var obj=this.obstacles.shift();
            obj=null;
        }
        this.obstacles.forEach((function (value) {
            if(hitPix(this.canvas,value,this.person)){
                this.state=false;
            }
            value.update();
        }).bind(this));
    },
    //更新人物
    updateperson:function () {
        this.person.update(this.frame);
    }

}

//障碍物
function Obstacle(canvas,num) {
    this.cobj=canvas.getContext("2d");
    this.x=canvas.width;
    this.y=265;
    this.width=60;
    this.height=72;
    this.img=document.querySelectorAll('.obstacle');
    this.type=num;
}
Obstacle.prototype={
    draw:function () {
        if(this.type==1){
            this.cobj.drawImage(this.img[0],0,0,166,199,this.x,this.y,this.width,this.height);
        }else if(this.type==2){
            this.cobj.drawImage(this.img[1],0,0,235,167,this.x,this.y-120,85,54);
        }else if(this.type==3){
            this.cobj.drawImage(this.img[1],0,0,235,167,this.x,this.y,85,54);
        }
    },
    update:function () {
        this.x-=4;
        this.draw();
    }
}
//人物
function Person(canvas) {
    this.cobj=canvas.getContext("2d");
    this.x=120;
    this.y=240;
    this.width=144;
    this.height=89;
    //获取人物图片
    this.img=document.querySelectorAll('.people');
    //当前人物状态图片
    this.pos=0;
    //跳
    this.jump=false;
    this.click();
    //跳起的高度
    this.jumpheight=0;
    //控制起跳
    this.heightcontrol=27;

}
Person.prototype={
    draw:function () {
        this.cobj.drawImage(this.img[this.pos],0,0,144,89,this.x,(this.y-this.jumpheight),this.width,this.height)
    },
    update:function (frame) {
        if(this.jump){
            this.pos=3;
            if(frame%2==0){
                this.heightcontrol-=2;
                this.jumpheight+=this.heightcontrol;
                if(this.jumpheight<=0){
                    this.jumpheight=0;
                    this.jump=false;
                    this.heightcontrol=27;
                }
            }
            this.draw();
        }else{
            this.pos=Math.floor((frame/4)%this.img.length);
            this.draw();
        }
    },
    click:function () {
        document.onclick=(function () {
            this.jump=true;
        }).bind(this);
    }
}