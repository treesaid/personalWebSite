<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>	<?php include template("content","myheader"); ?>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/message.css">
	<!-- banner -->
	<div class="banner">
		<img src="<?php echo IMG_PATH;?>img/bannerpic.jpg" alt="">
	</div>
	<!-- 品牌介绍 -->
	<div class="intro">
		<div class="intro-left">
			<ul>
				<li>
					<a href="#">在线留言
						<img src="<?php echo IMG_PATH;?>img/up.png" alt="" class="line">
					</a>
				</li>
			</ul>
		</div>
		<div class="intro-right">
			<div class="title">
				<p class="intro-p">在线留言<span>MESSAGE</span></p>
				<div class="weizhi">
					<a href="../homepage.html">首页</a>
					<span>&gt; 在线留言</span>
				</div>
			</div>
			<div class="art">
				<form action="" class="form">
					<table cellspacing="0" cellpadding="0">
						<tr>
							<td class="tishi">留言标题</td>
							<td class="shuru">
								<input type="text">
							</td>
						</tr>
						<tr>
							<td class="tishi">您的姓名</td>
							<td class="shuru">
								<input type="text">
							</td>
						</tr>
						<tr>
							<td class="tishi">电子邮件</td>
							<td class="shuru">
								<input type="text">
							</td>
						</tr>
						<tr>
							<td class="tishi">联系方式</td>
							<td class="shuru">
								<input type="text">
							</td>
						</tr>
						<tr>
							<td class="tishi">留言内容</td>
							<td class="shuru online">
								<textarea name="" id="" cols="30" rows="10"></textarea>
							</td>
						</tr>
						<tr>
							<td class="tishi"></td>
							<td class="shuru tijiao">
								<input type="submit" value="">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<?php include template("content","myfooter"); ?>