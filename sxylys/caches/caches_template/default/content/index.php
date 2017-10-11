<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <?php include template("content","myheader"); ?>
    <!-- ************ 主体部分 ************* -->
    <div class="main">
        <!-- ********* 我们的产品 ***** -->
        <div class="main-box">
            <h2>我们的<span>产品</span>是什么</h2>
            <span class="main-en">What  is  our  product ?</span>
            <div class="main-show product">
                <a href="<?php echo $CATEGORYS['12']['url'];?>" class="p-lm">藜麦</a>
                <a href="<?php echo $CATEGORYS['13']['url'];?>" class="p-lmf">藜麦粉</a>
                <a href="<?php echo $CATEGORYS['14']['url'];?>" class="p-lmc">藜麦茶</a>
                <a href="<?php echo $CATEGORYS['17']['url'];?>" class="p-hxm">黄小米</a>
                <a href="<?php echo $CATEGORYS['16']['url'];?>" class="p-wcdm">五常大米</a>
                <span class='product-middle'>产品</span>
            </div>
            <!-- ********** 分界线 ********** -->
            <div class="divide">
                <img src="<?php echo IMG_PATH;?>sxylys/img/xian_03.jpg" alt="" />
            </div>
        </div> <!--我们的产品结束 -->
        
        <!-- ********* 我们能为你解决什么问题 ***** -->
        <div class="main-box">
            <h2>我们能为你<span>解决什么问题</span></h2>
            <span class="main-en">What  can  I  do  for  you ?</span>
            <div class="main-show resolve">
                <a href="<?php echo $CATEGORYS['18']['url'];?>" class="r-zz">资质有问题</a>
                <a href="<?php echo $CATEGORYS['18']['url'];?>" class="r-fw">服务不满意</a>
                <a href="<?php echo $CATEGORYS['18']['url'];?>" class="r-pz">品质不理想</a>
                <a href="<?php echo $CATEGORYS['18']['url'];?>" class="r-jg">价格不合理</a>
                <span class='resolve-middle'>解决问题</span>
            </div>
            <!-- ********** 分界线 ********** -->
            <div class="divide">
                <img src="<?php echo IMG_PATH;?>sxylys/img/xian_03.jpg" alt="" />
            </div>
        </div><!-- 我们能为你解决什么问题 结束 -->

        <!-- ********* 为什么选择我 ***** -->
        <div class="main-box">
            <h2>为何<span>选择我</span></h2>
            <span class="main-en">Why  choose  me ?</span>
            <div class="main-show choice">
                <a href="<?php echo $CATEGORYS['26']['url'];?>" class="c-ls">量身定做</a>
                <a href="<?php echo $CATEGORYS['26']['url'];?>" class="c-zx">咨询增值</a>
                <a href="<?php echo $CATEGORYS['26']['url'];?>" class="c-zz">种植加工销售一体化</a>
                <a href="<?php echo $CATEGORYS['26']['url'];?>" class="c-zf">政府扶持</a>
            </div>
            <!-- ********** 分界线 ********** -->
            <div class="divide">
                <img src="<?php echo IMG_PATH;?>sxylys/img/xian_03.jpg" alt="" />
            </div>
        </div><!-- 为什么选择我 结束 -->

        <!-- ********* 为什么信任我 ***** -->
        <div class="main-box">
            <h2>为何<span>信任我</span></h2>
            <span class="main-en">Why  do  you  trust  me ?</span>
            <div class="main-show trust">
                <a href="<?php echo $CATEGORYS['19']['url'];?>" class="t-hy">行业资讯</a>
                <a href="<?php echo $CATEGORYS['25']['url'];?>" class="t-xs">销售区域</a>
                <a href="<?php echo $CATEGORYS['11']['url'];?>" class="t-kh">客户案例</a>
                <a href="<?php echo $CATEGORYS['24']['url'];?>" class="t-gy">关于我们</a>
                <span class='product-middle'>信任</span>
            </div>
            <!-- ********** 分界线 ********** -->
            <div class="divide">
                <img src="<?php echo IMG_PATH;?>sxylys/img/xian_03.jpg" alt="" />
            </div>
        </div><!-- 为什么信任我 结束 -->

        <!-- ********* 为何要立即选择我 ***** -->
        <div class="main-box">
            <h2>为何要<span>立即选择我</span></h2>
            <span class="main-en">Why  did  you  choose  me  immediately ?</span>
            <div class="main-show immediately">
                <a href="#" class="i-xz">现在优惠政策</a>
                <a href="#" class="i-lj">立即加入</a>
            </div>
            <!-- ********** 分界线 ********** -->
            <div class="divide">
                <img src="<?php echo IMG_PATH;?>sxylys/img/xian_03.jpg" alt="" />
            </div>
        </div><!-- 为何要立即选择我 结束 -->

        <!-- *************** 底部链接 ************* -->
        <ul class="chaining">
            <li><a href="<?php echo $CATEGORYS['26']['url'];?>">关于藜麦</a></li>
            <li><a href="<?php echo $CATEGORYS['9']['url'];?>">藜麦产品</a></li>
            <li><a href="<?php echo $CATEGORYS['18']['url'];?>">招商加盟</a></li>
            <li><a href="<?php echo $CATEGORYS['10']['url'];?>">高端定制</a></li>
            <li><a href="<?php echo $CATEGORYS['25']['url'];?>">销售区域</a></li>
            <li><a href="<?php echo $CATEGORYS['24']['url'];?>">关于我们</a></li>
            <li><a href="<?php echo $CATEGORYS['27']['url'];?>">联系我们</a></li>
            <li><a href="<?php echo $CATEGORYS['19']['url'];?>">新闻动态</a></li>
            <li><a href="<?php echo $CATEGORYS['11']['url'];?>">成功案例</a></li>
        </ul><!-- 底部链接 结束 -->
    </div><!-- *************** 主体部分结束 *********-->
    <?php include template("content","myfooter"); ?>    