/**
 * Created by Administrator on 2016/11/8.
 */
function Draw(cobj,setting) {
    this.cobj=cobj;
    this.type=setting.type||"stroke";
    this.color=setting.color||"#000";
    this.width=setting.width||"1";
}
 Draw.prototype={
     init:function () {
         this.cobj.strokeStyle=this.color;
         this.cobj.fillStyle=this.color;
         this.cobj.lineWidth=this.width;
     },
     rect: function(x,y,x1,y1){
         this.init();
         this.cobj.beginPath();
         this.cobj.rect(x+8,y+8,x1-x+8,y1-y+8);
         if(this.type=="stroke"){
             this.cobj.stroke();
         }else{
             this.cobj.fill();
         }
     },
     line: function(x,y,x1,y1){
         this.init();
         this.cobj.beginPath();
         this.cobj.moveTo(x+16,y+16);
         this.cobj.lineTo(x1+16,y1+16);
         if(this.type=="stroke"){
             // this.cobj.lineCap="round";
             this.cobj.stroke();
         }else{
             this.cobj.fill();
         }
     },
     circle: function(x,y,x1,y1){
         var r=Math.sqrt((x1-x)*(x1-x)+(y1-y)*(y1-y));
         this.init();
         this.cobj.beginPath();
         this.cobj.arc(x+15,y+15,r,0,Math.PI*2);
         if(this.type=="stroke"){
             this.cobj.stroke();
         }else{
             this.cobj.fill();
         }
     },
     eraser: function(x,y,x1,y1,r){
         this.init();
         this.cobj.beginPath();
         this.cobj.clearRect(x1-5,y1+15,r,r);
         // this.cobj.fillStyle="#eee";
         // this.cobj.arc(x,y,r,0,Math.PI*2);
         // this.cobj.fill();
     },
     pencial: function(x,y,x1,y1){
         this.init();
         this.cobj.lineTo(x1+5,y1+25);
         this.cobj.lineCap="round";
         this.cobj.stroke();
     },//绘制多边形
     poly:function (x,y,x1,y1,n) {
         this.init();
         var cobj=this.cobj;
         cobj.beginPath();
         var r=Math.sqrt((x1-x)*(x1-x)+(y1-y)*(y1-y));
         var px=r*Math.sin(Math.PI/n);
         var py=r*Math.cos(Math.PI/n);
         cobj.save();
         cobj.translate(x,y);
         cobj.moveTo(px,py);
         for(var i=0;i<n;i++){
             cobj.save();
             cobj.rotate(i*2*Math.PI/n);
             cobj.lineTo(-px,py);
             cobj.lineJoin="round";
             cobj.restore();
         }
         cobj.restore();
         if(this.type=="stroke"){
             cobj.lineCap="round";
            cobj.stroke();
         }else{
            cobj.fill();
         }
     },
     //剪切
     cut:function (x,y,x1,y1) {
         // this.init();
         var cobj=this.cobj;
         cobj.save();
         cobj.strokeStyle="#999";
         cobj.setLineDash([6,2]);
         cobj.lineWidth=1;
         cobj.beginPath();
         cobj.strokeRect(x,y,x1-x,y1-y);
         cobj.stroke();
         cobj.restore();

     }





     //取消选中效果  cancelChecked
    //  cancelChecked();
    // this.checked=true;
     //改鼠标样式
     //
 }