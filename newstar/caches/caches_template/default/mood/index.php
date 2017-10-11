<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><style type="text/css"> 
	#mood{text-align: center;}
	#mood ul li,#mood ul li div.pillar{display:inline-block;display:-moz-inline-stack;zoom:1;*display:inline;}
	#mood ul li{vertical-align: bottom}
	#mood ul li{width:40px; padding-bottom:10px}
	#mood ul li span{ font-size:12px}
	#mood ul li label{ display:block;}
	#mood ul li div.pillar{ height:20px; width:80px; background:url(<?php echo IMG_PATH;?>mood/mood.gif) repeat-y 28px center; margin-bottom:5px;}
	#mood ul li div.pass{background-position: -83px center;}
</style>
<div id="mood">
<!-- 之前样式 -->
<!-- <ul>
<?php $n=1; if(is_array($setting)) foreach($setting AS $k => $v) { ?>
<li><span><?php echo $data[$v['fields']];?></span><div class="pillar<?php if(isset($key) && $key==$k) { ?> pass<?php } ?>" style="height:<?php echo $v['per'];?>px;"></div><?php if($v[pic]) { ?><img src="<?php echo IMG_PATH;?><?php echo $v['pic'];?>"><?php } ?><br /><label for="n<?php echo $k;?>"><?php echo $v['name'];?><br /><input type="radio" id="n<?php echo $k;?>" name="n" onclick="vote(<?php echo $k;?>)" <?php if(isset($key) && $key==$k) { ?> checked<?php } ?>></label></li><?php $n++;}unset($n); ?>
</ul> -->
<!-- 更改点赞 -->
<ul class="ld-dianzan">
<?php $i=0?>
<?php $n=1; if(is_array($setting)) foreach($setting AS $k => $v) { ?>
<?php $i++; ?>
<li class="<?php if($i==1) { ?>ld-li ld-up<?php } elseif ($i==2) { ?>ld-li ld-down<?php } ?>">
	<label for="n<?php echo $k;?>">
		<input type="button" id="n<?php echo $k;?>" name="n" onclick="vote(<?php echo $k;?>)" <?php if(isset($key) && $key==$k) { ?> checked class="ld-dianzan-active"<?php } ?>/>
	</label>
	<i class="<?php if($i==1) { ?>ld-up-i<?php } elseif ($i==2) { ?>ld-down-i<?php } ?>"><?php echo $data[$v['fields']];?></i>
</li>
<?php $n++;}unset($n); ?>
</ul>
</div>
<script type="text/javascript">
function vote(id) {
	$.getJSON('<?php echo APP_PATH;?>index.php?m=mood&c=index&a=post&id=<?php echo $mood_id;?>&k='+id+'&'+Math.random()+'&callback=?', function(data){
		if(data.status==1)	{
			$('#mood').html(data.data);
		}else {
			alert("您已赞过");
		}
	})
}

</script>                                                           