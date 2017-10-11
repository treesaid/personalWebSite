<?php
	//api.php?url=http://news-at.zhihu.com/api/4/news/latest
	$url = $_GET['url'];
	echo json_encode(file_get_contents($url));