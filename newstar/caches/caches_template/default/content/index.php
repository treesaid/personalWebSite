<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <?php include template("content","uek_nav"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>uek/css/swiper2.7.6.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>uek/css/ly_tab.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>uek/css/index.css" />
    <?php include template("content","uek_index_banner"); ?>

    <!-- ******************科学实训 ********************-->
    <div class="lyn-science">
        <h2 class="lyn-science-title">科学实训&nbsp;&nbsp;主力学员稳扎稳打&nbsp;&nbsp;夯实绘画技术</h2>
        <h6 class="lyn-science-smalltitle">专注于培育国家和社会紧缺的绘画高端人才</h6>
        <div class="lyn-science-line"></div>
        <div class="lyn-science-contain">
            <ul class="lyn-science-contains">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d19ec9ee891cf2cdcb3bed4f93ed44b2&action=position&posid=21&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','moreinfo'=>'1','limit'=>'20',));}?>
                <li class="lyn-science-lis">
                <?php $n=1;if(is_array($data)) foreach($data AS $lynkx1) { ?>
                    <a href="<?php echo $CATEGORYS['18']['url'];?>" class="lyn-science-lianjie"></a>
                    <div class="lyn-science-circle">
                        <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-play.png" alt="" />
                    </div>
                    <h6 class="lyn-science-listitle">影视表演培训</h6>
                    <h6 class="lyn-science-type">-优秀演员</h6>
                    <a href="<?php echo $CATEGORYS['18']['url'];?>" class="lyn-green-lianjie">
                        <ul class="lyn-science-threelis">
                            <li class="lyn-science-threelists">表演基础理论</li>
                            <li class="lyn-science-threelists">中外剧目排练</li>
                            <li class="lyn-science-threelists lyn-science-four">台词形体声乐</li>
                            <li class="lyn-science-threelists">节目主持</li>
                        </ul>    
                    </a>
                    <div class="lyn-science-green lyn-green" style="height:263px;">
                        <div class="lyn-science-circle">
                            <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-play.png" alt="" />
                        </div>
                        <h6 class="lyn-science-listitle">影视表演培训</h6>
                        <h6 class="lyn-science-type">-优秀演员</h6>
                        <a href="<?php echo $CATEGORYS['18']['url'];?>" class="lyn-green-lianjie">
                            <ul class="lyn-science-threelis">
                                <li class="lyn-science-threelists lyn-science-greenup">表演基础理论</li>
                                <li class="lyn-science-threelists lyn-science-greenup">中外剧目排练</li>
                                <li class="lyn-science-threelists lyn-science-four lyn-science-greenup">台词形体声乐</li>
                                <li class="lyn-science-threelists lyn-science-greenup">节目主持</li>
                            </ul>    
                        </a>        
                    </div>    
                    <div class="lyn-science-middle">
                        <h6 class="lyn-science-middle-title"><?php echo $lynkx1['title'];?></h6>
                        <div class="lyn-science-middle-contain">
                            <div class="lyn-science-per lyn-science-per1">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-science-perbg.png" alt="" class="lyn-science-perbg" />
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-science-wave.png" alt="" class="lyn-science-wave" />
                                <h1 class="lyn-science-pernum"><span></span>%</h1>
                                <h1 class="lyn-science-baoming">火热报名中</h1>
                            </div>
                            <ul class="lyn-science-contain-right">
                                <li>
                                    <div class="lyn-science-kuai"></div>
                                    <h5>赠送课程</h5>
                                    <h6><?php echo $lynkx1['kecheng'];?></h6>
                                </li>
                                <li>
                                    <div class="lyn-science-kuai"></div>
                                    <h5>开班时间</h5>
                                    <h6><?php echo $lynkx1['kbtime'];?></h6>
                                </li>
                                <li class="lyn-science-time">
                                    <div class="lyn-science-kuai"></div>
                                    <h5>开班倒计时</h5>
                                    <h6 class="lyn-djs"><span class="lyn-djss"></span>天<span class="lyn-djss"></span>时<span class="lyn-djss"></span>分<span class="lyn-djss"></span>秒</h6>
                                    <script type="text/javascript">
                                    var str1="<?php echo $lynkx1['kbtime'];?>";
                                    var str11="<?php echo $lynkx1['ksbm_time'];?>";
                                    // var arr1=str1.split("-");
                                    // var nowstr1=arr1.join("/");
                                    // var future1=new Date(nowstr1);
                                    // var science_bili1=percent(future1,str11);
                                    // function percent(future,str){
                                    //   var arr=getDay(future);
                                    //   var djs_day=arr[0];
                                    //   var begin_day=new Date(str);
                                    //   var length_time=future.getTime()-begin_day.getTime();
                                    //   var zong_day=Math.floor(length_time/(24*60*60*1000));
                                    //   var science_bili=Math.floor(djs_day/zong_day*100);
                                    //   return science_bili;
                                    // }
                                    // function getDay(future){
                                    //   var now=new Date();
                                    //   var arr=[];
                                    //   var length=future.getTime()-now.getTime();
                                    //   var day=Math.floor(length/(24*60*60*1000));
                                    //   arr.push(day);
                                    //   length%=(24*60*60*1000);
                                    //   var hour=Math.floor(length/(60*60*1000));
                                    //   arr.push(hour);
                                    //   length%=(60*60*1000);
                                    //   var minute=Math.floor(length/(60*1000));
                                    //   arr.push(minute);
                                    //   length%=(60*1000);
                                    //   var second=Math.floor(length/1000);
                                    //   arr.push(second);
                                    //   return arr;
                                    // }
                                    // $(".lyn-science-contains").find(".lyn-science-per").eq(0).find(".lyn-science-pernum").find("span").html(100-science_bili1);
                                    // $(".lyn-science-contains").find(".lyn-science-per").eq(0).find(".lyn-science-wave").css({top:-(1-science_bili1/100)*135});
                                    </script>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lyn-science-bottom">
                        <p><?php echo $lynkx1['classmsg1'];?></p>
                        <p><?php echo $lynkx1['classmsg2'];?></p>
                    </div>
                    <!-- 马上报名链接  -->
                    <a href="javascript:;" class="lyn-science-button">马上报名</a> 
                <?php $n++;}unset($n); ?>  
                </li>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5dd66b9713efa9ce42ec27ae07584f84&action=position&posid=22&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'22','moreinfo'=>'1','limit'=>'20',));}?>
                <li class="lyn-science-lis">
                <?php $n=1;if(is_array($data)) foreach($data AS $lynkx2) { ?>
                    <a href="<?php echo $CATEGORYS['19']['url'];?>" class="lyn-science-lianjie"></a>
                    <div class="lyn-science-circle">
                        <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-photo.png" alt="" />
                    </div>
                    <h6 class="lyn-science-listitle">摄影摄像培训</h6>
                    <h6 class="lyn-science-type">-摄影师</h6>
                    <a href="<?php echo $CATEGORYS['19']['url'];?>" class="lyn-green-lianjie">
                        <ul class="lyn-science-threelis">
                            <li class="lyn-science-threelists">影视摄影与制作专业</li>
                            <li class="lyn-science-threelists">摄影专业</li>
                            <li class="lyn-science-threelists lyn-science-three">数字媒体艺术专业</li>
                        </ul>    
                    </a>
                    <div class="lyn-science-green">
                        <div class="lyn-science-circle">
                            <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-photo.png" alt="" />
                        </div>
                        <h6 class="lyn-science-listitle">摄影摄像培训</h6>
                        <h6 class="lyn-science-type">-摄影师</h6>
                        <a href="<?php echo $CATEGORYS['19']['url'];?>" class="lyn-green-lianjie">
                            <ul class="lyn-science-threelis">
                                <li class="lyn-science-threelists lyn-science-greenup">影视摄影与制作专业</li>
                                <li class="lyn-science-threelists lyn-science-greenup">摄影专业</li>
                                <li class="lyn-science-threelists lyn-science-three lyn-science-greenup">数字媒体艺术专业</li>
                            </ul>    
                        </a>     
                    </div>    
                    <div class="lyn-science-middle">
                        <h6 class="lyn-science-middle-title"><?php echo $lynkx2['title'];?></h6>
                        <div class="lyn-science-middle-contain">
                            <div class="lyn-science-per">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-science-perbg.png" alt="" class="lyn-science-perbg" />
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-science-wave.png" alt="" class="lyn-science-wave" />
                                <h1 class="lyn-science-pernum"><span></span>%</h1>
                                <h1 class="lyn-science-baoming">火热报名中</h1>
                            </div>
                            <ul class="lyn-science-contain-right">
                                <li>
                                    <div class="lyn-science-kuai"></div>
                                    <h5>赠送课程</h5>
                                    <h6><?php echo $lynkx2['kecheng'];?></h6>
                                </li>
                                <li>
                                    <div class="lyn-science-kuai"></div>
                                    <h5>开班时间</h5>
                                    <h6><?php echo $lynkx2['kbtime'];?></h6>
                                </li>
                                <li class="lyn-science-time">
                                    <div class="lyn-science-kuai"></div>
                                    <h5>开班倒计时</h5>
                                    <h6 class="lyn-djs"><span class="lyn-djss"></span>天<span class="lyn-djss"></span>时<span class="lyn-djss"></span>分<span class="lyn-djss"></span>秒</h6>
                                    <script type="text/javascript">
                                    var str2="<?php echo $lynkx2['kbtime'];?>";
                                    var str22="<?php echo $lynkx2['ksbm_time'];?>";
                                    </script>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lyn-science-bottom">
                        <p><?php echo $lynkx2['classmsg1'];?></p>
                        <p><?php echo $lynkx2['classmsg2'];?></p>
                    </div>
                    <!-- 马上报名链接  -->
                    <a href="javascript:;" class="lyn-science-button">马上报名</a> 
                <?php $n++;}unset($n); ?>  
                </li>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b08e8480e4b200c9dad84bb0520b4b47&action=position&posid=23&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'23','moreinfo'=>'1','limit'=>'20',));}?>
                <li class="lyn-science-lis">
                <?php $n=1;if(is_array($data)) foreach($data AS $lynkx3) { ?>
                    <a href="<?php echo $CATEGORYS['21']['url'];?>" class="lyn-science-lianjie"></a>
                    <div class="lyn-science-circle">
                        <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-draw.png" alt="" />
                    </div>
                    <h6 class="lyn-science-listitle">美术设计培训</h6>
                    <h6 class="lyn-science-type">-设计师</h6>
                    <a href="<?php echo $CATEGORYS['21']['url'];?>" class="lyn-green-lianjie">
                        <ul class="lyn-science-threelis">
                            <li class="lyn-science-threelists">项目实战</li>
                            <li class="lyn-science-threelists">艺术思维培养</li>
                            <li class="lyn-science-threelists lyn-science-three">4+1个月扎实学习</li>
                        </ul>    
                    </a>
                    <div class="lyn-science-green">
                        <div class="lyn-science-circle">
                            <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-draw.png" alt="" />
                        </div>
                        <h6 class="lyn-science-listitle">美术设计培训</h6>
                        <h6 class="lyn-science-type">-设计师</h6>
                        <a href="<?php echo $CATEGORYS['21']['url'];?>" class="lyn-green-lianjie">
                            <ul class="lyn-science-threelis">
                                <li class="lyn-science-threelists lyn-science-greenup">项目实战</li>
                                <li class="lyn-science-threelists lyn-science-greenup">艺术思维培养</li>
                                <li class="lyn-science-threelists lyn-science-three lyn-science-greenup">4+1个月扎实学习</li>
                            </ul>    
                        </a>     
                    </div>    
                    <div class="lyn-science-middle">
                        <h6 class="lyn-science-middle-title"><?php echo $lynkx3['title'];?></h6>
                        <div class="lyn-science-middle-contain">
                            <div class="lyn-science-per">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-science-perbg.png" alt="" class="lyn-science-perbg" />
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-science-wave.png" alt="" class="lyn-science-wave" />
                                <h1 class="lyn-science-pernum"><span></span>%</h1>
                                <h1 class="lyn-science-baoming">火热报名中</h1>
                            </div>
                            <ul class="lyn-science-contain-right">
                                <li>
                                    <div class="lyn-science-kuai"></div>
                                    <h5>赠送课程</h5>
                                    <h6><?php echo $lynkx3['kecheng'];?></h6>
                                </li>
                                <li>
                                    <div class="lyn-science-kuai"></div>
                                    <h5>开班时间</h5>
                                    <h6><?php echo $lynkx3['kbtime'];?></h6>
                                </li>
                                <li class="lyn-science-time">
                                    <div class="lyn-science-kuai"></div>
                                    <h5>开班倒计时</h5>
                                    <h6 class="lyn-djs"><span class="lyn-djss"></span>天<span class="lyn-djss"></span>时<span class="lyn-djss"></span>分<span class="lyn-djss"></span>秒</h6>
                                    <script type="text/javascript">
                                    var str3="<?php echo $lynkx3['kbtime'];?>";
                                    var str33="<?php echo $lynkx3['ksbm_time'];?>";
                                    </script>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lyn-science-bottom">
                        <p><?php echo $lynkx3['classmsg1'];?></p>
                        <p><?php echo $lynkx3['classmsg2'];?></p>
                    </div>
                    <!-- 马上报名链接  -->
                    <a href="javascript:;" class="lyn-science-button">马上报名</a> 
                <?php $n++;}unset($n); ?>  
                </li>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
            </ul>
        </div>
    </div><!-- ****************科学实训结束 *****************-->

    <!--************** 师资团队***************** -->
    <div class="szh-model sztd">
        <div class="szh-top-outer">
            <div class="szh-background"></div>
            <div class="szh-top">
                <div class="szh-line"></div>
                <div class="szh-line1"></div>
                <div class="szh-left">
                    <div class="szh-title-top">师资团队</div>
                    <div class="szh-title-bottom">
                       <span class="szh-title-left">teacher</span>
                       <span class="szh-title-left szh-title-right">team</span>
                    </div>
                </div>
                <div class="szh-right">
                    <ul class="szh-right-inner">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c228b3c45c974bfe778d673c09eb3032&action=category&catid=11\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'11','limit'=>'20',));}?>
                        <?php $lyn1=0?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $lynsz) { ?>
                        <?php $lyn1++?>
                        <?php if($lyn1==1) { ?>
                        <li class="szh-title-item tab-btn-lis tab-btn-lis-active"><a href="<?php echo $lynsz['url'];?>"><?php echo $lynsz['catname'];?></a></li>
                        <?php } else { ?>
                         <span>/</span><li class="szh-title-item tab-btn-lis"><a href="<?php echo $lynsz['url'];?>"><?php echo $lynsz['catname'];?></a></li>
                        <?php } ?>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                 </div>
             </div>
        </div>
        <div class="lyn-team swiper-container1 tab-con-lis tab-con-lis-active">
            <ul class="lyn-team-inner swiper-wrapper">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3891b9e46e0479b9f52d4eacbbdbc1c0&action=position&posid=18&moreinfo=1&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','moreinfo'=>'1','order'=>'listorder ASC','limit'=>'20',));}?>
                    <?php $sztd=0?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $lynsz) { ?>
                    <?php $sztd++?>
                    <li<?php if($sztd==1) { ?> class="lyn-team-lis lyn-team-lishover swiper-slide"<?php } else { ?> class="lyn-team-lis swiper-slide"<?php } ?>>
                        <h4 class="lyn-team-name"><?php echo $lynsz['teacher_name'];?></h4>
                        <h5 class="lyn-team-zhiwei"><?php echo $lynsz['teacher_position'];?></h5>
                        <div class="lyn-team-person">
                            <img src="<?php echo $lynsz['teacher_pic'];?>" alt="" class="lyn-team-img" />
                            <div class="lyn-team-introduce">
                                <div class="lyn-team-smallman"><img src="<?php echo $lynsz['teacher_pic'];?>" alt="" /></div>
                                <h4 class="lyn-team-name2"><?php echo $lynsz['teacher_name'];?></h4>
                                <h5 class="lyn-team-zhiwei2"><?php echo $lynsz['teacher_position'];?></h5>
                                <p class="lyn-team-describe"><?php echo str_cut($lynsz[work],100,'..');?></p>
                                <a href="<?php echo $lynsz['url'];?>" class="lyn-team-link">查看老师作品</a>
                            </div>
                            <div class="lyn-team-zhezhao"></div>
                        </div>
                    </li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>    
        </div> 
        <div class="lyn-team swiper-container2 tab-con-lis">
            <ul class="lyn-team-inner swiper-wrapper">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=300681da7a39f5cbe120c5e0e2e424ea&action=position&posid=19&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','moreinfo'=>'1','limit'=>'20',));}?>
                    <?php $sztd=0?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $lynsz) { ?>
                    <?php $sztd++?>
                    <li<?php if($sztd==1) { ?> class="lyn-team-lis lyn-team-lishover swiper-slide"<?php } else { ?> class="lyn-team-lis swiper-slide"<?php } ?>>
                        <h4 class="lyn-team-name"><?php echo $lynsz['teacher_name'];?></h4>
                        <h5 class="lyn-team-zhiwei"><?php echo $lynsz['teacher_position'];?></h5>
                        <div class="lyn-team-person">
                            <img src="<?php echo $lynsz['teacher_pic'];?>" alt="" class="lyn-team-img" />
                            <div class="lyn-team-introduce">
                                <div class="lyn-team-smallman"><img src="<?php echo $lynsz['teacher_pic'];?>" alt="" /></div>
                                <h4 class="lyn-team-name2"><?php echo $lynsz['teacher_name'];?></h4>
                                <h5 class="lyn-team-zhiwei2"><?php echo $lynsz['teacher_position'];?></h5>
                                <p class="lyn-team-describe"><?php echo str_cut($lynsz[work],100,'..');?></p>
                                <a href="<?php echo $lynsz['url'];?>" class="lyn-team-link">查看老师作品</a>
                            </div>
                            <div class="lyn-team-zhezhao"></div>
                        </div>
                    </li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>    
        </div>
        <div class="lyn-team swiper-container3 tab-con-lis">
            <ul class="lyn-team-inner swiper-wrapper">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=663adcca80665a9610d7c8e98595fade&action=position&posid=20&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'20','moreinfo'=>'1','limit'=>'20',));}?>
                    <?php $sztd=0?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $lynsz) { ?>
                    <?php $sztd++?>
                    <li<?php if($sztd==1) { ?> class="lyn-team-lis lyn-team-lishover swiper-slide"<?php } else { ?> class="lyn-team-lis swiper-slide"<?php } ?>>
                        <h4 class="lyn-team-name"><?php echo $lynsz['teacher_name'];?></h4>
                        <h5 class="lyn-team-zhiwei"><?php echo $lynsz['teacher_position'];?></h5>
                        <div class="lyn-team-person">
                            <img src="<?php echo $lynsz['teacher_pic'];?>" alt="" class="lyn-team-img" />
                            <div class="lyn-team-introduce">
                                <div class="lyn-team-smallman"><img src="<?php echo $lynsz['teacher_pic'];?>" alt="" /></div>
                                <h4 class="lyn-team-name2"><?php echo $lynsz['teacher_name'];?></h4>
                                <h5 class="lyn-team-zhiwei2"><?php echo $lynsz['teacher_position'];?></h5>
                                <p class="lyn-team-describe"><?php echo str_cut($lynsz[work],100,'..');?></p>
                                <a href="<?php echo $lynsz['url'];?>" class="lyn-team-link">查看老师作品</a>
                            </div>
                            <div class="lyn-team-zhezhao"></div>
                        </div>
                    </li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>    
        </div>
    </div><!-- *************师资团队结束************** -->

    <!-- **************课程体系************* -->
    <div class="szh-top-outer">
        <div class="szh-top">
            <a name="lynclass"></a>
            <div class="szh-line"></div>
            <div class="szh-line1"></div>
            <div class="szh-left">
                <div class="szh-title-top">课程体系</div>
                <div class="szh-title-bottom">
                   <span class="szh-title-left">curriculum</span>
                   <span class="szh-title-left szh-title-right">system</span>
                </div>
            </div>
            <div class="szh-right">
                <ul class="szh-right-inner">
                    <li class="szh-title-item szh-title-itemactive"><a href="">完善课程体系，实时迭代更新</a></li>
                </ul>
             </div>
         </div>
    </div>
    <div class="lyn-kecheng"> 
        <div class="lyn-kecheng-contain">
            <div class="lyn-kecheng-right">
                <ul class="lyn-kecheng-xxka" style="display:block;">
                    <li class="lyn-kecheng-lis lyn-kecheng-lishover">
                        <a href="javacript:;">
                            <div class="lyn-kecheng-img">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-kecheng3.png" alt=""/>   
                            </div>
                            <p class="lyn-kecheng-introduce">表演基本技能<br />表演剧目<br />艺术理论<br />文学修养课程<br />声乐形体台词</p>
                            <h5 class="lyn-kecheng-smalltitle">课程介绍</h5>
                            <h6 class="lyn-kecheng-zi">COURSE&nbsp;<span>INTRODUCTION</span></h6>
                        </a>
                    </li> 
                    <li class="lyn-kecheng-lis">
                        <a href="javacript:;">
                            <div class="lyn-kecheng-img">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-kecheng1.png" alt=""/>   
                            </div>
                            <p class="lyn-kecheng-introduce">李同学：433分<br/>杨同学：394分<br/>王同学：367分<br/>师同学：402分<br/>许同学：386分</p>
                            <h5 class="lyn-kecheng-smalltitle">学员成绩</h5>
                            <h6 class="lyn-kecheng-zi">STUDENTS&nbsp;<span>GRAGES</span></h6>
                        </a>
                    </li>
                    <li class="lyn-kecheng-lis">
                        <a href="javacript:;">
                            <div class="lyn-kecheng-img">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-kecheng2.png" alt=""/>   
                            </div>
                            <p class="lyn-kecheng-introduce lyn-kecheng-in1">专业影视表演班：2017-2-20<br />非专业影视表演班：2017-1-27<br />社会影视表演班：2017-2-24</p>
                            <h5 class="lyn-kecheng-smalltitle">开班时间</h5>
                            <h6 class="lyn-kecheng-zi">OPENING&nbsp;<span>TIME</span></h6>
                        </a>
                    </li>     
                    <li class="lyn-kecheng-lis">
                        <a href="javacript:;" style="border-right:0;">
                            <div class="lyn-kecheng-img">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-kecheng3.png" alt=""/>   
                            </div>
                            <div class="lyn-kecheng-introduce">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-kecheng3.png" alt=""/>
                            </div>
                            <h5 class="lyn-kecheng-smalltitle">公开课</h5>
                            <h6 class="lyn-kecheng-zi">PUBLIC&nbsp;<span>CLASS</span></h6>
                        </a>
                    </li>
                </ul>
                <ul class="lyn-kecheng-xxka">
                    <li class="lyn-kecheng-lis lyn-kecheng-lishover">
                        <a href="javacript:;">
                            <div class="lyn-kecheng-img">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-kecheng3.png" alt=""/>   
                            </div>
                            <p class="lyn-kecheng-introduce">美术造型基础<br />数字摄影<br />摄影工艺光影设计<br />摄影设备于器材<br />广告摄影</p>
                            <h5 class="lyn-kecheng-smalltitle">课程介绍</h5>
                            <h6 class="lyn-kecheng-zi">COURSE&nbsp;<span>INTRODUCTION</span></h6>
                        </a>
                    </li>
                    <li class="lyn-kecheng-lis">
                        <a href="<?php echo $CATEGORYS['120']['url'];?>">
                            <div class="lyn-kecheng-img">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-kecheng1.png" alt=""/>   
                            </div>
                            <p class="lyn-kecheng-introduce">郭同学：356分<br />刘同学：420分<br />李同学：326分<br />兰同学：380分<br />王同学：329分</p>
                            <h5 class="lyn-kecheng-smalltitle">学员成绩</h5>
                            <h6 class="lyn-kecheng-zi">STUDENTS&nbsp;<span>GRAGES</span></h6>
                        </a>
                    </li>
                    <li class="lyn-kecheng-lis">
                        <a href="<?php echo $CATEGORYS['116']['url'];?>">
                            <div class="lyn-kecheng-img">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-kecheng2.png" alt=""/>   
                            </div>
                            <p class="lyn-kecheng-introduce lyn-kecheng-in1">专业摄影班：2017-2-27<br />非专业摄影班：2017-2-23</p>
                            <h5 class="lyn-kecheng-smalltitle">开班时间</h5>
                            <h6 class="lyn-kecheng-zi">OPENING&nbsp;<span>TIME</span></h6>
                        </a>
                    </li>     
                    <li class="lyn-kecheng-lis">
                        <a href="<?php echo $CATEGORYS['121']['url'];?>" style="border-right:0;">
                            <div class="lyn-kecheng-img">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-kecheng3.png" alt=""/>   
                            </div>
                            <div class="lyn-kecheng-introduce">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-kecheng3.png" alt=""/>
                            </div>
                            <h5 class="lyn-kecheng-smalltitle">公开课</h5>
                            <h6 class="lyn-kecheng-zi">PUBLIC&nbsp;<span>CLASS</span></h6>
                        </a>
                    </li>
                </ul>
                <ul class="lyn-kecheng-xxka">
                    <li class="lyn-kecheng-lis lyn-kecheng-lishover">
                        <a href="<?php echo $CATEGORYS['119']['url'];?>">
                            <div class="lyn-kecheng-img">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-kecheng3.png" alt=""/>   
                            </div>
                            <p class="lyn-kecheng-introduce">美术和平面设计阶段<br />素描绘画阶段<br />速写设计阶段<br />油画设计及制作<br />陶艺设计与就业服务</p>
                            <h5 class="lyn-kecheng-smalltitle">课程介绍</h5>
                            <h6 class="lyn-kecheng-zi">COURSE&nbsp;<span>INTRODUCTION</span></h6>
                        </a>
                    </li>
                    <li class="lyn-kecheng-lis">
                        <a href="<?php echo $CATEGORYS['120']['url'];?>">
                            <div class="lyn-kecheng-img">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-kecheng1.png" alt=""/>   
                            </div>
                            <p class="lyn-kecheng-introduce">徐同学：356分<br />刘同学：320分<br />李同学：326分<br />兰同学：380分<br />王同学：329分</p>
                            <h5 class="lyn-kecheng-smalltitle">学员成绩</h5>
                            <h6 class="lyn-kecheng-zi">STUDENTS&nbsp;<span>GRAGES</span></h6>
                        </a>
                    </li>
                    <li class="lyn-kecheng-lis">
                        <a href="<?php echo $CATEGORYS['116']['url'];?>">
                            <div class="lyn-kecheng-img">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-kecheng2.png" alt=""/>   
                            </div>
                            <p class="lyn-kecheng-introduce lyn-kecheng-in1">专业美术设计：2017-3-12<br/>非专业美术设计：2017-2-21</p>
                            <h5 class="lyn-kecheng-smalltitle">开班时间</h5>
                            <h6 class="lyn-kecheng-zi">OPENING&nbsp;<span>TIME</span></h6>
                        </a>
                    </li>     
                    <li class="lyn-kecheng-lis">
                        <a href="<?php echo $CATEGORYS['121']['url'];?>" style="border-right:0;">
                            <div class="lyn-kecheng-img">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-kecheng3.png" alt=""/>   
                            </div>
                            <div class="lyn-kecheng-introduce">
                                <img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-kecheng3.png" alt=""/>
                            </div>
                            <h5 class="lyn-kecheng-smalltitle">公开课</h5>
                            <h6 class="lyn-kecheng-zi">PUBLIC&nbsp;<span>CLASS</span></h6>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="lyn-kecheng-chance lyn-kecheng-chance1 lyn-kecheng-chancehover">
                <div class="lyn-kecheng-smallimg lyn-kecheng-smallimg1"><img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-play.png" alt="" /></div>
                <p class="lyn-kecheng-label">影视表演</p>
            </div>
            <div class="lyn-kecheng-chance lyn-kecheng-chance2">
                <div class="lyn-kecheng-smallimg"><img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-photo.png" alt="" /></div>
                <p class="lyn-kecheng-label">摄影摄像</p>
            </div>
            <div class="lyn-kecheng-chance lyn-kecheng-chance3">
                <div class="lyn-kecheng-smallimg"><img src="<?php echo IMG_PATH;?>uek/images/lyn_images/lyn-draw.png" alt="" /></div>
                <p class="lyn-kecheng-label">美术设计</p>
            </div>
        </div>
    </div> <!-- *************课程体系结束************ -->

    <!--*****************就业展示*******************-->
    <div class="szh-model jyzs">
        <div class="szh-top-outer">
            <div class="szh-top">
                <div class="szh-line"></div>
                <div class="szh-line1"></div>
                <div class="szh-left">
                    <div class="szh-title-top">就业展示</div>
                    <div class="szh-title-bottom">
                        <span class="szh-title-left">employment</span>
                        <span class="szh-title-left szh-title-right">display</span>
                    </div>
                </div>
                <div class="szh-right">
                    <ul class="szh-right-inner">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3fea2c389453aa428a8a48dc3e04685a&action=category&catid=9\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','limit'=>'20',));}?>
                        <?php $lyn2=0?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $lynjyy) { ?>
                        <?php $lyn2++?>
                        <?php if($lyn2==1) { ?>
                        <li class="szh-title-item tab-btn-lis tab-btn-lis-active"><a href="<?php echo $lynjyy['url'];?>"><?php echo $lynjyy['catname'];?></a></li>
                        <?php } else { ?>
                         <span>/</span><li class="szh-title-item tab-btn-lis"><a href="<?php echo $lynjyy['url'];?>"><?php echo $lynjyy['catname'];?></a></li>
                        <?php } ?>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ld-jyzs-box">
            <ul class="ld-jyzs-con tab-con-lis tab-con-lis-active">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=011a4d7600145372236ba13a09d870d9&action=position&posid=24&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'24','moreinfo'=>'1','limit'=>'20',));}?>
                <?php $jyzs=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $lynjy) { ?>
                <?php $jyzs++?>
                <li class="ld-border<?php if($jyzs==1) { ?> ld-bd-active<?php } ?>">
                    <a href="<?php echo $lynjy['url'];?>" class="ld-jyzs-lianjie">
                        <div></div>
                        <span class="ld-bd-imgbox"><img src="<?php echo $lynjy['thumb'];?>" alt=""></span>
                        <h2><?php echo $lynjy['name'];?></h2><h3>艺考成绩：<?php echo $lynjy['grade'];?></h3><h4>录取院校</h4>
                        <h6><?php echo $lynjy['school'];?></h6>
                        <h5>录取专业：<?php echo $lynjy['major'];?></h5>    
                    </a>
                </li>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <ul class="ld-jyzs-con tab-con-lis">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8d99e5677c17c7a82d145c1f4936bb7f&action=position&posid=25&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'25','moreinfo'=>'1','limit'=>'20',));}?>
                <?php $jyzs=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $lynjy) { ?>
                <?php $jyzs++?>
                <li class="ld-border<?php if($jyzs==1) { ?> ld-bd-active<?php } ?>">
                    <a href="<?php echo $lynjy['url'];?>" class="ld-jyzs-lianjie">
                        <div></div>
                        <span class="ld-bd-imgbox"><img src="<?php echo $lynjy['thumb'];?>" alt=""></span>
                        <h2><?php echo $lynjy['name'];?></h2><h3>艺考成绩：<?php echo $lynjy['grade'];?></h3><h4>录取院校</h4>
                        <h6><?php echo $lynjy['school'];?></h6>
                        <h5>录取专业：<?php echo $lynjy['major'];?></h5>    
                    </a>
                </li>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <ul class="ld-jyzs-con tab-con-lis">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=31b5eba21c82857aeab407789f11f94d&action=position&posid=26&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'26','moreinfo'=>'1','limit'=>'20',));}?>
                <?php $jyzs=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $lynjy) { ?>
                <?php $jyzs++?>
                <li class="ld-border<?php if($jyzs==1) { ?> ld-bd-active<?php } ?>">
                    <a href="<?php echo $lynjy['url'];?>" class="ld-jyzs-lianjie">
                        <div></div>
                        <span class="ld-bd-imgbox"><img src="<?php echo $lynjy['thumb'];?>" alt=""></span>
                        <h2><?php echo $lynjy['name'];?></h2><h3>艺考成绩：<?php echo $lynjy['grade'];?></h3><h4>录取院校</h4>
                        <h6><?php echo $lynjy['school'];?></h6>
                        <h5>录取专业：<?php echo $lynjy['major'];?></h5>    
                    </a>
                </li>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <ul class="ld-jyzs-con tab-con-lis">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a1a7bef0d821bc708e65d4b76f9ff732&action=position&posid=54&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'54','moreinfo'=>'1','limit'=>'20',));}?>
                <?php $jyzs=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $lynjy) { ?>
                <?php $jyzs++?>
                <li class="ld-border<?php if($jyzs==1) { ?> ld-bd-active<?php } ?>">
                    <a href="<?php echo $lynjy['url'];?>" class="ld-jyzs-lianjie">
                        <div></div>
                        <span class="ld-bd-imgbox"><img src="<?php echo $lynjy['thumb'];?>" alt=""></span>
                        <h2><?php echo $lynjy['name'];?></h2><h3><?php echo $lynjy['position_en'];?></h3><h4>月薪</h4>
                        <h6><?php echo $lynjy['salary'];?> <span class="ld-yuexin">+<?php echo $lynjy['welfare_1'];?>+<?php echo $lynjy['welfare_3'];?></span></h6>
                        <h5><?php echo $lynjy['company'];?></h5>    
                    </a>
                </li>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
    <!-- ****************就业展示结束***************** -->

    <!--***********360度全方位实训制度保障************-->
    <div class="szh-top-outer">
        <div class="szh-top">
            <div class="szh-line"></div>
            <div class="szh-line1"></div>
            <div class="szh-left">
                <div class="szh-title-top lyn-title-top">360度全方位实训制度保障</div>
                <div class="szh-title-bottom">
                   <span class="szh-title-left">training</span>
                   <span class="szh-title-left szh-title-right">guarantee</span>
                </div>
            </div>
            <div class="szh-right">
                <ul class="szh-right-inner">
                    <li class="szh-title-item"><a href="javascript:;">百分百高薪就业无压力</a></li>
                </ul>
             </div>
         </div>
    </div> 
    <div class="ld-qfw-box">
       <ul class="ld-qfw-dian">
           <li class="ld-qfw-dlis1"></li>
           <li class="ld-qfw-dlis2"></li>
           <li class="ld-qfw-dlis3"></li>
           <li class="ld-qfw-dlis4"></li>
           <li class="ld-qfw-dlis5"></li>
           <li class="ld-qfw-dlis6"></li>
       </ul>
        <ul class="ld-qfw-con">
            <li class="ld-qfw-active"><span><div class="ld-qfw-border"><i></i></div><div class="ld-qfw-img ld-qfw-img1"></div></span><b>实训模式多元化</b></li>
            <li><span><div class="ld-qfw-border"><i></i></div><div class="ld-qfw-img ld-qfw-img2"></div></span><b>管理模式制度化</b></li>
            <li><span><div class="ld-qfw-border"><i></i></div><div class="ld-qfw-img ld-qfw-img3"></div></span><b>课程迭代速度快</b></li>
            <li><span><div class="ld-qfw-border"><i></i></div><div class="ld-qfw-img ld-qfw-img4"></div></span><b>实训教材标准化</b></li>
            <li><span><div class="ld-qfw-border"><i></i></div><div class="ld-qfw-img ld-qfw-img5"></div></span><b>付款模式人性化</b></li>
        </ul>
    </div>
    <!--************ 360度全方位实训制度保障结束************ -->


	<!--************* 优秀学员作品start ******************-->
    <div class="szh-model xyzp">
        <div class="szh-top-outer">
            <div class="szh-top">
                <div class="szh-line"></div>
                <div class="szh-line1"></div>
                <div class="szh-left">
                    <div class="szh-title-top">学员作品</div>
                    <div class="szh-title-bottom">
                        <span class="szh-title-left">student</span>
                        <span class="szh-title-left szh-title-right">works</span>
                    </div>
                </div>
                <div class="szh-right">
                    <ul class="szh-right-inner">
                        <li class="szh-title-item tab-btn-lis tab-btn-lis-active"><a href="<?php echo $CATEGORYS['12']['url'];?>">电影作品</a></li><span>/</span>
                        <li class="szh-title-item tab-btn-lis"><a href="<?php echo $CATEGORYS['12']['url'];?>">电视作品</a></li><span>/</span>
                        <li class="szh-title-item tab-btn-lis"><a href="<?php echo $CATEGORYS['12']['url'];?>">摄影作品</a></li><span>/</span>
                        <li class="szh-title-item tab-btn-lis"><a href="<?php echo $CATEGORYS['12']['url'];?>">美术作品</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="szh-xyzp">
            <div class="szh-xyzp-inner">
                <div class="szh-xyzp-bottom">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=60ca2553091c882087723f103f21c287&action=lists&catid=60&moreinfo=1&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'60','moreinfo'=>'1','limit'=>'1',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $tdzp) { ?>
                    <div class="szh-xyzp-mobile">
                        <img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-border.png" height="660" width="331" alt="" />
                        <div class="szh-zpimg"><img src="<?php echo $tdzp['thumb'];?>" alt=""></div>
                        <div class="szh-linghtimg"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-light.png" alt=""></div>
                    </div>
                    <div class="szh-xyzp-middle">
                        <div class="szh-xyzp-title">
                            <h1 class="szh-xyzp-titleh1"><?php echo $tdzp['title'];?></h1>
                            <h2>班级 / <span><?php echo $tdzp['class'];?></span></h2>
                            <h2>专业 / <span><?php echo $tdzp['team'];?></span></h2>
                        </div>
                        <div class="szh-xyzp-mess">
                            <b class="szh-mess1" ><?php echo $tdzp['tab1'];?></b>
                            <b class="szh-mess2"><?php echo $tdzp['tab2'];?></b>
                            <b class="szh-mess2"><?php echo $tdzp['tab3'];?></b>
                        </div>
                        <div class="szh-xyzp-duan">
                            <p><?php echo $tdzp['content'];?></p>
                        </div>
                        <div class="szh-xyzp-view"><a href="<?php echo $CATEGORYS['34']['url'];?>">查看话剧作品详情</a></div>
                    </div>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <div class="szh-xyzp-right szh-xyzp-right1 tab-con-lis tab-con-lis-active">
                        <div class="szh-zp-top">
                            <div class="szh-zps">
                                <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ys1.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ys2.jpg" alt="" /></a></li>
                                 </ul>
                                  <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ys3.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ys4.jpg" alt="" /></a></li>
                                 </ul>
                                  <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ys5.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ys6.jpg" alt="" /></a></li>
                                 </ul>
                                  <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ys7.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ys8.jpg" alt="" /></a></li>
                                 </ul>
                            </div>
                        </div>
                        <div class="szh-zp-bottom">
                            <div class="szh-zp-line">
                                <div class="szh-zp-radius"></div>
                            </div>
                        </div>
                    </div>
                    <div class="szh-xyzp-right  szh-xyzp-right2 tab-con-lis">
                        <div class="szh-zp-top">
                            <div class="szh-zps">
                                <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ds1.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ds2.jpg" alt="" /></a></li>
                                 </ul>
                                  <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ds3.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ds4.jpg" alt="" /></a></li>
                                 </ul>
                                  <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ds5.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ds6.jpg" alt="" /></a></li>
                                 </ul>
                                  <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ds7.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ds8.jpg" alt="" /></a></li>
                                 </ul>
                            </div>
                        </div>
                        <div class="szh-zp-bottom">
                            <div class="szh-zp-line">
                                <div class="szh-zp-radius"></div>
                            </div>
                        </div>
                    </div>
                    <div class="szh-xyzp-right szh-xyzp-right3  tab-con-lis">
                        <div class="szh-zp-top">
                            <div class="szh-zps">
                                <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-sy1.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-sy2.jpg" alt="" /></a></li>
                                 </ul>
                                  <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-sy3.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-sy4.jpg" alt="" /></a></li>
                                 </ul>
                                  <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-sy5.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-sy6.jpg" alt="" /></a></li>
                                 </ul>
                                  <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-sy7.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-sy8.jpg" alt="" /></a></li>
                                 </ul>
                            </div>
                        </div>
                        <div class="szh-zp-bottom">
                            <div class="szh-zp-line">
                                <div class="szh-zp-radius"></div>
                            </div>
                        </div>
                    </div>
                    <div class="szh-xyzp-right szh-xyzp-right4  tab-con-lis">
                        <div class="szh-zp-top">
                            <div class="szh-zps">
                                <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ms1.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ms2.jpg" alt="" /></a></li>
                                 </ul>
                                  <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ms3.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ms4.jpg" alt="" /></a></li>
                                 </ul>
                                  <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ms5.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ms6.jpg" alt="" /></a></li>
                                 </ul>
                                  <ul class="szh-zps-inner">
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ms7.jpg" alt="" /></a></li>
                                    <li class="szh-zp-item"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-ms8.jpg" alt="" /></a></li>
                                 </ul>
                            </div>
                        </div>
                        <div class="szh-zp-bottom">
                            <div class="szh-zp-line">
                                <div class="szh-zp-radius"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--************* 优秀学员作品end ******************-->


	<!--************* 优逸视频 start******************-->
    <div class="szh-model yysp">
        <div class="szh-top-outer">
            <div class="szh-top">
                <div class="szh-line"></div>
                <div class="szh-line1"></div>
                <div class="szh-left">
                    <div class="szh-title-top">起点视频</div>
                    <div class="szh-title-bottom">
                        <span class="szh-title-left">video</span>
                        <span class="szh-title-left szh-title-right">appreciation</span>
                    </div>
                </div>
                <div class="szh-right">
                    <ul class="szh-right-inner">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8eb0da7923b33517bbd4f8c5d8e8e12a&action=category&catid=55\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'55','limit'=>'20',));}?>
                        <?php $sp=0?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $szhsp) { ?>
                        <?php $sp++?>
                        <?php if($sp==1) { ?>
                        <li class="szh-title-item tab-btn-lis tab-btn-lis-active"><a href="<?php echo $szhsp['url'];?>"><?php echo $szhsp['catname'];?></a></li>
                        <?php } else { ?>
                         <span>/</span><li class="szh-title-item tab-btn-lis"><a href="<?php echo $szhsp['url'];?>"><?php echo $szhsp['catname'];?></a></li>
                        <?php } ?>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="szh-sp tab-con-lis tab-con-lis-active">
            <div class="szh-sp-inner">
                <div class="szh-sp-bottom">
                    <div class="szh-sp-content" >
                        <div class="szh-sp-img szh-sp-img1">
                            <div class="szh-sp-shadow"></div>
                            <div class="szh-sp-imgs szh-sp-img2">
                                <a href="<?php echo $CATEGORYS['67']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img2.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                            </div>
                            <div class=" szh-sp-imgs szh-active">
                                <a href="<?php echo $CATEGORYS['67']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img2.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                                <div class="szh-sp-block">
                                    <div class="szh-play-zhe">
                                        <div class="szh-sp-time">2016-5-26</div>
                                        <div class="szh-play-mess">学生话剧表演舞蹈排练场景</div>
                                    </div>
                                    <div class="szh-sp-play"><a href="<?php echo $CATEGORYS['67']['url'];?>"></a></div>
                                </div>
                            </div>
                            <div class="szh-sp-imgs szh-sp-img3">
                                <a href="<?php echo $CATEGORYS['67']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img3.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                            </div>
                        </div>
                        <div class="szh-sp-mess">
                            <div class="szh-sp-title-contain">
                                <div class="szh-sp-title">
                                    <h1>课程视频</h1>
                                    <h2>course<span>video</span></h2>
                                </div>
                                <div class="szh-sp-more"><a href="<?php echo $CATEGORYS['67']['url'];?>">更多视频</a></div>
                            </div>
                            <div class="szh-sp-info">
                                <ul class="szh-sp-infos">
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=761795bd5e0cc286305108fc0f80fc50&action=position&posid=31&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'31','moreinfo'=>'1','limit'=>'20',));}?>
                                    <?php $n=1;if(is_array($data)) foreach($data AS $cosp) { ?>
                                    <li class="szh-sp-info"><a href="<?php echo $CATEGORYS['67']['url'];?>"><?php echo $cosp['title'];?></a></li>
                                    <?php $n++;}unset($n); ?>
                                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="szh-sp-content" >
                        <div class="szh-sp-img ">
                            <div class="szh-sp-shadow"></div>
                            <div class="szh-sp-imgs szh-sp-img2">
                                <a href="<?php echo $CATEGORYS['67']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img2.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                            </div>
                            <div class=" szh-sp-imgs szh-active">
                                <a href="<?php echo $CATEGORYS['67']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img3.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                                <div class="szh-sp-block">
                                    <div class="szh-play-zhe">
                                        <div class="szh-sp-time">2016-5-26</div>
                                        <div class="szh-play-mess">学生话剧表演舞蹈排练场景</div>
                                    </div>
                                    <div class="szh-sp-play"><a href="<?php echo $CATEGORYS['67']['url'];?>"></a></div>
                                </div>
                            </div>
                            <div class="szh-sp-imgs szh-sp-img3">
                                <a href="<?php echo $CATEGORYS['67']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img3.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                            </div>
                        </div>
                        <div class="szh-sp-mess">
                            <div class="szh-sp-title-contain">
                                <div class="szh-sp-title">
                                    <h1>活动视频</h1>
                                    <h2>active<span>video</span></h2>
                                </div>
                                <div class="szh-sp-more"><a href="<?php echo $CATEGORYS['67']['url'];?>">更多视频</a></div>
                            </div>
                            <div class="szh-sp-info">
                                <ul class="szh-sp-infos">
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=972798f58cb573063b4b139e1d1c37e6&action=position&posid=32\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'32','limit'=>'20',));}?>
                                    <?php $n=1;if(is_array($data)) foreach($data AS $cosp) { ?>
                                    <li class="szh-sp-info"><a href="<?php echo $CATEGORYS['67']['url'];?>"><?php echo $cosp['title'];?></a></li>
                                    <?php $n++;}unset($n); ?>
                                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="szh-sp tab-con-lis">
            <div class="szh-sp-inner">
                <div class="szh-sp-bottom">
                    <div class="szh-sp-content" >
                        <div class="szh-sp-img szh-sp-img1">
                            <div class="szh-sp-shadow"></div>
                            <div class="szh-sp-imgs szh-sp-img2">
                                <a href="<?php echo $CATEGORYS['68']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img2.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                            </div>
                            <div class=" szh-sp-imgs szh-active">
                                <a href="<?php echo $CATEGORYS['68']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img1.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                                <div class="szh-sp-block">
                                    <div class="szh-play-zhe">
                                        <div class="szh-sp-time">2016-5-26</div>
                                        <div class="szh-play-mess">学生话剧表演舞蹈排练场景</div>
                                    </div>
                                    <div class="szh-sp-play"><a href="<?php echo $CATEGORYS['68']['url'];?>"></a></div>
                                </div>
                            </div>
                            <div class="szh-sp-imgs szh-sp-img3">
                                <a href="<?php echo $CATEGORYS['68']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img3.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                            </div>
                        </div>
                        <div class="szh-sp-mess">
                            <div class="szh-sp-title-contain">
                                <div class="szh-sp-title">
                                    <h1>课程视频</h1>
                                    <h2>course<span>video</span></h2>
                                </div>
                                <div class="szh-sp-more"><a href="<?php echo $CATEGORYS['68']['url'];?>">更多视频</a></div>
                            </div>
                            <div class="szh-sp-info">
                                <ul class="szh-sp-infos">
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=481d4e37572361cd0bc5510e59e9d26a&action=position&posid=33&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'33','moreinfo'=>'1','limit'=>'20',));}?>
                                    <?php $n=1;if(is_array($data)) foreach($data AS $cosp) { ?>
                                    <li class="szh-sp-info"><a href="<?php echo $CATEGORYS['68']['url'];?>"><?php echo $cosp['title'];?></a></li>
                                    <?php $n++;}unset($n); ?>
                                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="szh-sp-content" >
                        <div class="szh-sp-img ">
                            <div class="szh-sp-shadow"></div>
                            <div class="szh-sp-imgs szh-sp-img2">
                                <a href="<?php echo $CATEGORYS['68']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img2.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                                <div class="szh-sp-block">
                                    <div class="szh-play-zhe">
                                        <div class="szh-sp-time">2016-5-26</div>
                                        <div class="szh-play-mess">学生话剧表演舞蹈排练场景</div>
                                    </div>
                                    <div class="szh-sp-play"><a href="<?php echo $CATEGORYS['68']['url'];?>"></a></div>
                                </div>
                            </div>
                            <div class=" szh-sp-imgs szh-active">
                                <a href="<?php echo $CATEGORYS['68']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img2.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                                <div class="szh-sp-block">
                                    <div class="szh-play-zhe">
                                        <div class="szh-sp-time">2016-5-26</div>
                                        <div class="szh-play-mess">学生话剧表演舞蹈排练场景</div>
                                    </div>
                                    <div class="szh-sp-play"><a href="<?php echo $CATEGORYS['68']['url'];?>"></a></div>
                                </div>
                            </div>
                            <div class="szh-sp-imgs szh-sp-img3">
                                <a href="<?php echo $CATEGORYS['68']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img3.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                            </div>
                        </div>
                        <div class="szh-sp-mess">
                            <div class="szh-sp-title-contain">
                                <div class="szh-sp-title">
                                    <h1>活动视频</h1>
                                    <h2>active<span>video</span></h2>
                                </div>
                                <div class="szh-sp-more"><a href="<?php echo $CATEGORYS['68']['url'];?>">更多视频</a></div>
                            </div>
                            <div class="szh-sp-info">
                                <ul class="szh-sp-infos">
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7695ff103ccf1a955cb9e2d7ffaa860c&action=position&posid=34\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'34','limit'=>'20',));}?>
                                    <?php $n=1;if(is_array($data)) foreach($data AS $cosp) { ?>
                                    <li class="szh-sp-info"><a href="<?php echo $CATEGORYS['68']['url'];?>"><?php echo $cosp['title'];?></a></li>
                                    <?php $n++;}unset($n); ?>
                                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="szh-sp tab-con-lis">
            <div class="szh-sp-inner">
                <div class="szh-sp-bottom">
                    <div class="szh-sp-content" >
                        <div class="szh-sp-img szh-sp-img1">
                            <div class="szh-sp-shadow"></div>
                            <div class="szh-sp-imgs szh-sp-img2">
                                <a href="<?php echo $CATEGORYS['69']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img2.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                            </div>
                            <div class=" szh-sp-imgs szh-active">
                                <a href="<?php echo $CATEGORYS['69']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img3.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                                <div class="szh-sp-block">
                                    <div class="szh-play-zhe">
                                        <div class="szh-sp-time">2016-5-26</div>
                                        <div class="szh-play-mess">学生话剧表演舞蹈排练场景</div>
                                    </div>
                                    <div class="szh-sp-play"><a href="<?php echo $CATEGORYS['69']['url'];?>"></a></div>
                                </div>
                            </div>
                            <div class="szh-sp-imgs szh-sp-img3">
                                <a href="<?php echo $CATEGORYS['69']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img3.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                            </div>
                        </div>
                        <div class="szh-sp-mess">
                            <div class="szh-sp-title-contain">
                                <div class="szh-sp-title">
                                    <h1>课程视频</h1>
                                    <h2>course<span>video</span></h2>
                                </div>
                                <div class="szh-sp-more"><a href="<?php echo $CATEGORYS['69']['url'];?>">更多视频</a></div>
                            </div>
                            <div class="szh-sp-info">
                                <ul class="szh-sp-infos">
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6d9e8ffe59cd2f9a023066f2164d8027&action=position&posid=35&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'35','moreinfo'=>'1','limit'=>'20',));}?>
                                    <?php $n=1;if(is_array($data)) foreach($data AS $cosp) { ?>
                                    <li class="szh-sp-info"><a href="<?php echo $CATEGORYS['69']['url'];?>"><?php echo $cosp['title'];?></a></li>
                                    <?php $n++;}unset($n); ?>
                                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="szh-sp-content" >
                        <div class="szh-sp-img ">
                            <div class="szh-sp-shadow"></div>
                            <div class="szh-sp-imgs szh-sp-img2">
                                <a href="<?php echo $CATEGORYS['69']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img2.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                            </div>
                            <div class=" szh-sp-imgs szh-active">
                                <a href="<?php echo $CATEGORYS['69']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img1.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                                <div class="szh-sp-block">
                                    <div class="szh-play-zhe">
                                        <div class="szh-sp-time">2016-5-26</div>
                                        <div class="szh-play-mess">学生话剧表演舞蹈排练场景</div>
                                    </div>
                                    <div class="szh-sp-play"><a href="<?php echo $CATEGORYS['69']['url'];?>"></a></div>
                                </div>
                            </div>
                            <div class="szh-sp-imgs szh-sp-img3">
                                <a href="<?php echo $CATEGORYS['69']['url'];?>"><img src="<?php echo IMG_PATH;?>uek/images/szh_images/szh-img3.png" alt="" /></a>
                                <div class="szh-sp-none">
                                    <div class="szh-sp-fullzhe"></div>
                                </div>
                            </div>
                        </div>
                        <div class="szh-sp-mess">
                            <div class="szh-sp-title-contain">
                                <div class="szh-sp-title">
                                    <h1>活动视频</h1>
                                    <h2>active<span>video</span></h2>
                                </div>
                                <div class="szh-sp-more"><a href="<?php echo $CATEGORYS['69']['url'];?>">更多视频</a></div>
                            </div>
                            <div class="szh-sp-info">
                                <ul class="szh-sp-infos">
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a945adec01d3adf53139d0d9bbe2e9d8&action=position&posid=36\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'36','limit'=>'20',));}?>
                                    <?php $n=1;if(is_array($data)) foreach($data AS $cosp) { ?>
                                    <li class="szh-sp-info"><a href="<?php echo $CATEGORYS['69']['url'];?>"><?php echo $cosp['title'];?></a></li>
                                    <?php $n++;}unset($n); ?>
                                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--************* 优逸视频 end******************-->


     <!-- ******************* 优逸新闻strat **************** -->
    <div class="szh-model yyxw">
        <div class="szh-top-outer">
            <div class="szh-top">
                <div class="szh-line"></div>
                <div class="szh-line1"></div>
                <div class="szh-left">
                    <div class="szh-title-top">起点动态</div>
                    <div class="szh-title-bottom">
                        <span class="szh-title-left">Star</span>
                        <span class="szh-title-left szh-title-right">dynamic</span>
                    </div>
                </div>
                <div class="szh-right">
                    <ul class="szh-right-inner">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c61751fe4fffc033daaaa6a0cdbb215f&action=category&catid=16\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'16','limit'=>'20',));}?>
                        <?php $xw=0?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $szhxw) { ?>
                        <?php $xw++?>
                        <?php if($xw==1) { ?>
                        <li class="szh-title-item tab-btn-lis tab-btn-lis-active"><a href="<?php echo $szhxw['url'];?>"><?php echo $szhxw['catname'];?></a></li>
                        <?php } else { ?>
                         <span>/</span><li class="szh-title-item tab-btn-lis"><a href="<?php echo $szhxw['url'];?>"><?php echo $szhxw['catname'];?></a></li>
                        <?php } ?>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="xyz-yyxw">
            <!-- ****** 校内高薪就业班 ****** -->
            <div class="xyz-salary">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f52d6069dd008a0788c52dc635626da6&action=position&posid=37&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'37','limit'=>'1',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $sxw) { ?>
                <h1 class="xyz-obtain"><a href="<?php echo $sxw['url'];?>"><?php echo $sxw['title'];?></a></h1>
                <div class="xyz-announce">
                    <h3 class="xyz-writer"><?php echo $sxw['author'];?></h3>
                    <span class="xyz-line"></span>
                    <h3 class="xyz-time">于<span><?php echo date("Y-m-d",$sxw[inputtime]);?></span>发布</h3>

                </div>
                <!-- ********* 分界线 ****** -->
                <div class="xyz-shore">
                    <div class="xyz-transverse-line"></div>
                    <div class="xyz-pointer pie"></div>
                    <div class="xyz-transverse-line"></div>
                    <div class="xyz-pointer pie"></div>
                    <div class="xyz-transverse-line"></div>
                </div>
                <p class="xyz-information">
                    为了提高应届毕业生的竞争力，增强在校大学生的职业技能 <br />
                    <span class="xyz-informatin-two">
                    <?php echo str_cut(strip_tags($sxw[description]),150,'&hellip;');?>
                </span>

                </p>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div class="xyz-read-more pie">
                    <a href="<?php echo $sxw['url'];?>">阅读全文 >></a>
                </div>
            </div><!-- ** 校内高薪就业班结束 **-->
            <!-- ****** 优逸新闻选项卡 ****** -->
            <div class="xyz-lunbo">
                <ul class="xyz-lunbo-imgs">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9dab1157b780039564e6d841fa120b0b&action=position&posid=37\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'37','limit'=>'20',));}?>
                    <?php $xwtu=0?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $xwth) { ?>
                    <?php $xwtu++ ?>
                    <li class="<?php if($xwtu==1) { ?>xyz-img1<?php } elseif ($xwtu==2) { ?>xyz-img2<?php } else { ?> <?php } ?>"><a href="<?php echo $xwth['url'];?>"><img src="<?php echo thumb($xwth[thumb],412,312);?>" alt="" /></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <ul class="xyz-number">
                    <li class="xyz-number1 xyz-active"></li>
                    <li class="xyz-number2"></li>
                    <li class="xyz-number3 xyz-nomarign"></li>
                </ul>
            </div><!-- ** 优逸新闻选项卡结束 **-->
            <!-- ****** 新闻列表 ************ -->
            
            <div class="xyz-news tab-con-lis tab-con-lis-active">
                <!-- ***** 新闻详情 **** -->
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6ddb6b722db1c905564f9f80b88a85f1&action=position&posid=37&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'37','limit'=>'3',));}?>
                <?php $xww=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $xwin) { ?>
                <?php $xww++?>
                <div <?php if($xww==3) { ?>class="xyz-news-list xyz-news-datail-noborder"<?php } else { ?>class="xyz-news-list"<?php } ?>>
                    <div class="xyz-news-ridge">
                        <span class="xyz-news-title"><a href="<?php echo $xwin['url'];?>"><?php echo $xwin['title'];?></a></span>
                        <span class="xyz-news-time"><?php echo date("Y-m-d",$xwin[inputtime]);?></span>
                    </div>
                    <p class="xyz-news-detail">
                        <?php echo str_cut(strip_tags($xwin[description]),150,'&hellip;');?>
                    </p>
                </div><!--******* 新闻详情结束 ****-->
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="xyz-news tab-con-lis">
                <!-- ***** 新闻详情 **** -->
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ef02950ff462f67622c77ceb55f2d823&action=position&posid=38&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'38','limit'=>'3',));}?>
                <?php $xwww=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $xwin) { ?>
                <?php $xwww++?>
                <div <?php if($xwww==3) { ?>class="xyz-news-list xyz-news-datail-noborder"<?php } else { ?>class="xyz-news-list"<?php } ?>>
                    <div class="xyz-news-ridge">
                        <span class="xyz-news-title"><a href="<?php echo $xwin['url'];?>"><?php echo $xwin['title'];?></a></span>
                        <span class="xyz-news-time"><?php echo date("Y-m-d",$xwin[inputtime]);?></span>
                    </div>
                    <p class="xyz-news-detail">
                        <?php echo str_cut(strip_tags($xwin[description]),150,'&hellip;');?>
                    </p>
                </div><!--******* 新闻详情结束 ****-->
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="xyz-news tab-con-lis">
                <!-- ***** 新闻详情 **** -->
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=506fc5ca43988d2784afe1330c33984d&action=position&posid=39&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'39','limit'=>'3',));}?>
                <?php $xwwww=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $xwin) { ?>
                <?php $xwwww++?>
                <div <?php if($xwwww==3) { ?>class="xyz-news-list xyz-news-datail-noborder"<?php } else { ?>class="xyz-news-list"<?php } ?>>
                    <div class="xyz-news-ridge">
                        <span class="xyz-news-title"><a href="<?php echo $xwin['url'];?>"><?php echo $xwin['title'];?></a></span>
                        <span class="xyz-news-time"><?php echo date("Y-m-d",$xwin[inputtime]);?></span>
                    </div>
                    <p class="xyz-news-detail">
                        <?php echo str_cut(strip_tags($xwin[description]),150,'&hellip;');?>
                    </p>
                </div><!--******* 新闻详情结束 ****-->
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="xyz-news tab-con-lis">
                <!-- ***** 新闻详情 **** -->
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0d5e6b9b650036afb6d1314c15a60ac1&action=position&posid=40&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'40','limit'=>'3',));}?>
                <?php $xwwwww=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $xwin) { ?>
                <?php $xwwwww++?>
                <div <?php if($xwwwww==3) { ?>class="xyz-news-list xyz-news-datail-noborder"<?php } else { ?>class="xyz-news-list"<?php } ?>>
                    <div class="xyz-news-ridge">
                        <span class="xyz-news-title"><a href="<?php echo $xwin['url'];?>"><?php echo $xwin['title'];?></a></span>
                        <span class="xyz-news-time"><?php echo date("Y-m-d",$xwin[inputtime]);?></span>
                    </div>
                    <p class="xyz-news-detail">
                        <?php echo str_cut(strip_tags($xwin[description]),150,'&hellip;');?>
                    </p>
                </div><!--******* 新闻详情结束 ****-->
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <!-- ***** 新闻列表结束 ****-->
        </div>
    </div>
     <!-- ******************* 优逸新闻end **************** -->


	<!--*****************热门问题start****************-->
    <div class="szh-model rmwt">
        <div class="szh-top-outer">
            <div class="szh-top">
                <div class="szh-line"></div>
                <div class="szh-line1"></div>
                <div class="szh-left">
                    <div class="szh-title-top">艺考资讯</div>
                    <div class="szh-title-bottom">
                        <span class="szh-title-left">Family</span>
                        <span class="szh-title-left szh-title-right">information</span>
                    </div>
                </div>
                <div class="szh-right">
                    <ul class="szh-right-inner">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=60e383f0193442439b02cb8907995f69&action=category&catid=26\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'26','limit'=>'20',));}?>
                        <?php $wt=0?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $szhwt) { ?>
                        <?php $wt++?>
                        <?php if($wt==1) { ?>
                        <li class="szh-title-item tab-btn-lis tab-btn-lis-active"><a href="<?php echo $szhwt['url'];?>"><?php echo $szhwt['catname'];?></a></li>
                        <?php } else { ?>
                         <span>/</span><li class="szh-title-item tab-btn-lis"><a href="<?php echo $szhwt['url'];?>"><?php echo $szhwt['catname'];?></a></li>
                        <?php } ?>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ly-problem-sz ly-problem-sz1  tab-con-lis tab-con-lis-active">
        <div class="ly-problem-outer">
            <ul class="ly-problem-box">
                <!--单个热门问题模版 -->
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=74746480b5ea5ac307e5d31492629c95&action=position&posid=41\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'41','limit'=>'20',));}?>
                <?php $rnum=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $rmwt) { ?>
                <?php $rnum++?>
                <li class="ly-problem<?php if($rnum==1) { ?> ly-problem-active<?php } ?>">
                    <!--顶部2px的渐变 -->
                    <div class="ly-problem-top<?php if($rnum==1) { ?> ly-problem-top-active<?php } ?>"></div>
                    <!-- 头部-->
                    <div class="ly-problem-head">
                        <h1 class="ly-problem-head-h1<?php if($rnum==1) { ?> ly-problem-head-h1-active<?php } ?>"><a href="javascript:;"><?php if($rnum<=9) { ?>0<?php echo $rnum;?><?php } else { ?><?php echo $rnum;?><?php } ?></a></h1>
                        <div class="ly-problem-head-r">
                            <h2 class="ly-problem-head-r-h2<?php if($rnum==1) { ?> ly-problem-head-r-active<?php } ?>"><a href="javascript:;"><?php echo $rmwt['title'];?></a></h2>
                            <p><?php echo $rmwt['author'];?><span>|</span> 于<?php echo date("Y-m-d",$rmwt[inputtime]);?>发布</p>
                        </div>
                    </div>
                    <!-- 内容部分-->
                    <div class="ly-problem-con">
                        <p><?php echo str_cut(strip_tags($rmwt[description]),100,'&hellip;');?></p>
                        <p><?php echo str_cut(strip_tags($rmwt[description]),200,'&hellip;');?></p>
                    </div>
                    <!-- 按钮-->
                    <div class="ly-problem-btn "><a href="<?php echo $rmwt['url'];?>">阅读全文>></a></div>
                </li> 
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div class="szh-zp-bottompro">
                    <div class="szh-zp-linepro">
                        <div class="szh-zp-radiuspro"></div>
                    </div>
                </div>
            </ul>
        </div>
        </div>
        <div class="ly-problem-sz ly-problem-sz2 tab-con-lis">
        <div class="ly-problem-outer">
            <ul class="ly-problem-box">
                <!--单个热门问题模版 -->
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=61c752f56313d48b22f584b6c7083bed&action=position&posid=42\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'42','limit'=>'20',));}?>
                <?php $rnum2=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $rmwt2) { ?>
                <?php $rnum2++?>
                <li class="ly-problem<?php if($rnum2==1) { ?> ly-problem-active<?php } ?>">
                    <!--顶部2px的渐变 -->
                    <div class="ly-problem-top<?php if($rnum2==1) { ?> ly-problem-top-active<?php } ?>"></div>
                    <!-- 头部-->
                    <div class="ly-problem-head">
                        <h1 class="ly-problem-head-h1<?php if($rnum2==1) { ?> ly-problem-head-h1-active<?php } ?>"><a href="javascript:;"><?php if($rnum2<=9) { ?>0<?php echo $rnum2;?><?php } else { ?><?php echo $rnum2;?><?php } ?></a></h1>
                        <div class="ly-problem-head-r">
                            <h2 class="ly-problem-head-r-h2<?php if($rnum2==1) { ?> ly-problem-head-r-active<?php } ?>"><a href="javascript:;"><?php echo $rmwt2['title'];?></a></h2>
                            <p><?php echo $rmwt2['author'];?><span>|</span> 于<?php echo date("Y-m-d",$rmwt2[inputtime]);?>发布</p>
                        </div>
                    </div>
                    <!-- 内容部分-->
                    <div class="ly-problem-con">
                        <p><?php echo str_cut(strip_tags($rmwt2[description]),100,'&hellip;');?></p>
                        <p><?php echo str_cut(strip_tags($rmwt2[description]),200,'&hellip;');?></p>
                    </div>
                    <!-- 按钮-->
                    <div class="ly-problem-btn "><a href="<?php echo $rmwt2['url'];?>">阅读全文>></a></div>
                </li> 
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div class="szh-zp-bottompro">
                    <div class="szh-zp-linepro">
                        <div class="szh-zp-radiuspro"></div>
                    </div>
                </div>
            </ul>
        </div>
        </div>
        <div class="ly-problem-sz ly-problem-sz3 tab-con-lis">
        <div class="ly-problem-outer">
            <ul class="ly-problem-box">
                <!--单个热门问题模版 -->
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c8ff03187b389b06614a44164c9947e4&action=position&posid=43\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'43','limit'=>'20',));}?>
                <?php $rnum1=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $rmwt1) { ?>
                <?php $rnum1++?>
                <li class="ly-problem<?php if($rnum1==1) { ?> ly-problem-active<?php } ?>">
                    <!--顶部2px的渐变 -->
                    <div class="ly-problem-top<?php if($rnum1==1) { ?> ly-problem-top-active<?php } ?>"></div>
                    <!-- 头部-->
                    <div class="ly-problem-head">
                        <h1 class="ly-problem-head-h1<?php if($rnum1==1) { ?> ly-problem-head-h1-active<?php } ?>"><a href="javascript:;"><?php if($rnum1<=9) { ?>0<?php echo $rnum1;?><?php } else { ?><?php echo $rnum1;?><?php } ?></a></h1>
                        <div class="ly-problem-head-r">
                            <h2 class="ly-problem-head-r-h2<?php if($rnum1==1) { ?> ly-problem-head-r-active<?php } ?>"><a href="javascript:;"><?php echo $rmwt1['title'];?></a></h2>
                            <p><?php echo $rmwt1['author'];?><span>|</span> 于<?php echo date("Y-m-d",$rmwt1[inputtime]);?>发布</p>
                        </div>
                    </div>
                    <!-- 内容部分-->
                    <div class="ly-problem-con">
                        <p><?php echo str_cut(strip_tags($rmwt1[description]),100,'&hellip;');?></p>
                        <p><?php echo str_cut(strip_tags($rmwt1[description]),200,'&hellip;');?></p>
                    </div>
                    <!-- 按钮-->
                    <div class="ly-problem-btn "><a href="<?php echo $rmwt1['url'];?>">阅读全文>></a></div>
                </li> 
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div class="szh-zp-bottompro">
                    <div class="szh-zp-linepro">
                        <div class="szh-zp-radiuspro"></div>
                    </div>
                </div>
            </ul>
        </div> 
        </div>   
        
    </div>
	<!--*****************热门问题end****************-->
    

	<!-- ****** 培训环境 start ***** -->
    <div class="szh-model ryzs">
        <div class="szh-top-outer">
            <div class="szh-top">
                <div class="szh-line"></div>
                <div class="szh-line1"></div>
                <div class="szh-left">
                    <div class="szh-title-top">培训环境</div>
                    <div class="szh-title-bottom">
                        <span class="szh-title-left">training</span>
                        <span class="szh-title-left szh-title-right">environment</span>
                    </div>
                </div>
                <div class="szh-right">
                    <ul class="szh-right-inner">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8a43729dc95e9a7a1053e4f3968019ce&action=category&catid=36&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'36','order'=>'id DESC','limit'=>'20',));}?>
                        <?php $kk=0?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $c) { ?>
                        <?php $kk++?>
                        <?php if($kk==1) { ?>
                        <li class="szh-title-item tab-btn-lis tab-btn-lis-active"><a href="javascript:;"><?php echo $c['catname'];?></a></li>
                        <?php } else { ?>
                         <span>/</span><li class="szh-title-item tab-btn-lis"><a href="javascript:;"><?php echo $c['catname'];?></a></li>
                        <?php } ?>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
            </div>
        </div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8a43729dc95e9a7a1053e4f3968019ce&action=category&catid=36&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'36','order'=>'id DESC','limit'=>'20',));}?>
        <?php $zs=0?>
        <?php $n=1;if(is_array($data)) foreach($data AS $ry) { ?>
        <?php $zs++?>
        <div<?php if($zs==1) { ?> class="xjn-honor hor-swiper tab-con-lis tab-con-lis-active"<?php } else { ?> class="xjn-honor hor-swiper1 tab-con-lis"<?php } ?>>
             <ul class="xjn-inner swiper-wrapper" >
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c24537b75423a39b2b6bc8e8b5626c00&action=lists&catid=%24ry%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$ry[catid],'limit'=>'20',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $ryzs) { ?>  
                <li class="xjn-rylist  swiper-slide">
                    <div class="out_box">
                        <div class="front_box">
                            <img src="<?php echo $ryzs['thumb'];?>" alt="" />
                        </div>
                        <div class="back_box">
                             <img src="<?php echo $ryzs['thumb'];?>" alt="" />
                        </div>
                    </div>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        
    </div>
	<!-- ****** 培训环境 end ***** -->

    <!-- ****** 友情链接 start ***** -->
    <div class="szh-model hzqy">
        <div class="szh-top-outer">
            <div class="szh-top">
                <div class="szh-line"></div>
                <div class="szh-line1"></div>
                <div class="szh-left">
                    <div class="szh-title-top">友情链接</div>
                    <div class="szh-title-bottom">
                        <span class="szh-title-left">friendly</span>
                        <span class="szh-title-left szh-title-right">link</span>
                    </div>
                </div>
                <div class="szh-right">
                    <ul class="szh-right-inner">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b10480bd1989e2b57f0710a0d352421d&action=category&catid=51&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'51','order'=>'id DESC','limit'=>'20',));}?>
                        <?php $k=0?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $b) { ?>
                        <?php $k++?>
                        <?php if($k==1) { ?>
                        <li class="szh-title-item tab-btn-lis tab-btn-lis-active"><a href="javascript:;"><?php echo $b['catname'];?></a></li>
                        <?php } else { ?>
                         <span>/</span><li class="szh-title-item tab-btn-lis"><a href="javascript:;"><?php echo $b['catname'];?></a></li>
                        <?php } ?>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="xjn-cooper">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b10480bd1989e2b57f0710a0d352421d&action=category&catid=51&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'51','order'=>'id DESC','limit'=>'20',));}?>
            <?php $i=0?>
            <?php $n=1;if(is_array($data)) foreach($data AS $a) { ?>
            <?php $i++?>
            <ul <?php if($i==1) { ?> class="xjn-hzqy tab-con-lis tab-con-lis-active" <?php } else { ?>class="xjn-hzqy tab-con-lis" <?php } ?>>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f89d5d5e9d8821a4352b6cb0b8f7f85c&action=lists&catid=%24a%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$a[catid],'limit'=>'20',));}?>
                <?php $j=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $s) { ?>
                <?php $j++?>
                <li <?php if($j%5==0) { ?>class="xjn-hzqy-list xjn-list-right"<?php } else { ?> class="xjn-hzqy-list"<?php } ?>>
                    <a href="javascript:;">
                        <img src="<?php echo $s['thumb'];?>" alt="" />
                    </a>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <!-- 友情链接调用 -->
                      
        </div>
    </div>
    <!-- ****** 友情链接 end ***** -->

    <!--*** 回到顶部 ***-->
    <div class="szh-gotop"></div>
<?php include template("content","uek_footer"); ?>
<script src="<?php echo JS_PATH;?>uek/js/ljg_banner.js"></script>
<script src="<?php echo JS_PATH;?>uek/js/ly_tab.js"></script>
<script src="<?php echo JS_PATH;?>uek/js/index.js"></script>
</body>
</html>